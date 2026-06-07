# Infernum Architecture

Infrastructure-as-Code repository for the Infernum project. This repository contains all Terraform configuration files required to provision and manage the AWS cloud infrastructure that hosts the Infernum web application (DAW project).

---

## Table of Contents

- [Overview](#overview)
- [Architecture](#architecture)
- [Prerequisites](#prerequisites)
- [Project Structure](#project-structure)
- [Infrastructure Components](#infrastructure-components)
  - [Terraform Backend](#terraform-backend)
  - [Variables and Data Sources](#variables-and-data-sources)
  - [Bastion Host](#bastion-host)
  - [Frontend Servers](#frontend-servers)
  - [Backend Server](#backend-server)
  - [Load Balancer](#load-balancer)
  - [DNS (Route 53)](#dns-route-53)
  - [CI/CD with AWS CodeDeploy](#cicd-with-aws-codedeploy)
- [Provisioning Scripts](#provisioning-scripts)
  - [Frontend Bootstrap](#frontend-bootstrap)
  - [Backend Bootstrap](#backend-bootstrap)
- [Deployment](#deployment)
- [Security Considerations](#security-considerations)

---

## Overview

Infernum Architecture automates the creation of a multi-tier AWS environment using Terraform. The infrastructure is designed around a classic three-layer pattern:

- A **Bastion Host** for secure administrative access via SSH.
- Two **Frontend EC2 instances** behind a Network Load Balancer, serving the web application over HTTP and HTTPS.
- A single **Backend EC2 instance** exposing a private REST API.
- **AWS CodeDeploy** integration for automated, zero-downtime deployments of both the frontend and backend applications.

All instances run Ubuntu 22.04 LTS (Jammy) and use Docker for application containerization.

---

## Architecture

```
Internet
   |
   | (port 80 / 443)
   v
[Network Load Balancer]  (frontend-lb)
   |           |
   v           v
[Front]     [Front2]      <-- EC2 t2.small, Ubuntu 22.04, Docker
   |           |
   | (port 80, internal only, via security group reference)
   v
[Backend]                 <-- EC2 t2.small, Ubuntu 22.04, Docker
   ^
   |  (port 22, internal only)
[Bastion]                 <-- EC2 t2.small, Ubuntu 22.04, Elastic IP
   ^
   | (port 22)
 Admin
```

DNS names are managed via AWS Route 53:

| Resource          | DNS Name                                     |
|-------------------|----------------------------------------------|
| Frontend          | `frontend.infernum-original.duckdns.org`     |
| Backend (private) | `backend-infernum-original.duckdns.org`      |
| Bastion (private) | `bastion.infernum-original.duckdns.org`      |

---

## Prerequisites

Before deploying this infrastructure, ensure the following are available:

- **Terraform** >= 1.2
- **AWS CLI** configured with credentials for the target account
- An AWS **key pair** named `vockey` already created in `us-east-1`
- An S3 bucket named `infernum-bucket-4` in `us-east-1` (used as the Terraform remote state backend)
- An IAM role named `LabRole` with permissions for EC2, CodeDeploy, Route 53, and S3
- DuckDNS domain `infernum-original.duckdns.org` pointing to the load balancer's public IP (updated externally)

---

## Project Structure

```
InfernumArquitecture/
├── .gitignore              # Excludes .terraform/, lock files, and *.pem keys
├── README.md               # This document
└── deploy/
    ├── main.tf             # Terraform provider and backend configuration
    ├── variables.tf        # Input variables and shared data sources
    ├── Bastion.tf          # Bastion host, its security group, EIP, and DNS record
    ├── Front.tf            # Frontend instances, load balancer, security group, CodeDeploy
    ├── backend.tf          # Backend instance, security group, Route 53, CodeDeploy
    └── scripts/
        ├── front.sh.tftpl  # User-data bootstrap script for frontend instances
        └── backend.sh.tftpl# User-data bootstrap script for the backend instance
```

---

## Infrastructure Components

### Terraform Backend

**File:** [`deploy/main.tf`](deploy/main.tf)

The Terraform state is stored remotely in an S3 bucket to allow team collaboration and prevent state conflicts.

| Parameter    | Value                  |
|--------------|------------------------|
| Bucket       | `infernum-bucket-4`    |
| Key          | `vockey`               |
| Region       | `us-east-1`            |
| Encryption   | Enabled (server-side)  |
| AWS Provider | `~> 6.0`               |

---

### Variables and Data Sources

**File:** [`deploy/variables.tf`](deploy/variables.tf)

#### Input Variables

| Variable        | Default                                    | Description                          |
|-----------------|--------------------------------------------|--------------------------------------|
| `domain_name`   | `infernum-original.duckdns.org`            | Primary domain for the application   |
| `backend_name`  | `backend-infernum-original.duckdns.org`    | Hostname for the backend API         |
| `region`        | `us-east-1`                                | AWS region for all resources         |
| `instance_type` | `t2.small`                                 | EC2 instance type for all servers    |

#### Data Sources

- **`aws_ami.ubuntu`** - Fetches the most recent Ubuntu 22.04 LTS (Jammy) HVM/SSD AMI from Canonical (owner `099720109477`).
- **`aws_vpc.vpc`** - Retrieves the default VPC in the configured region.
- **`aws_subnets.public`** - Lists all subnets belonging to the default VPC (used by the load balancer).
- **`aws_iam_role.lab_role`** - References the pre-existing `LabRole` IAM role used by EC2 instance profiles and CodeDeploy.

---

### Bastion Host

**File:** [`deploy/Bastion.tf`](deploy/Bastion.tf)

A hardened jump server used for administrative SSH access to the private frontend and backend instances.

**EC2 Instance**
- AMI: Latest Ubuntu 22.04 LTS
- Type: `t2.small`
- Key pair: `vockey`
- Elastic IP: assigned (static public IP)

**Security Group: `bastion-group`**

| Direction | Protocol | Port | Source        | Description                  |
|-----------|----------|------|---------------|------------------------------|
| Inbound   | TCP      | 22   | `0.0.0.0/0`  | SSH access from any IP       |
| Outbound  | All      | All  | `0.0.0.0/0`  | Full outbound access         |

**DNS Record**
- Zone: `infernum-original.duckdns.org` (private, VPC-scoped)
- Record: `bastion.infernum-original.duckdns.org` → private IP of the Bastion instance

> Note: The Route 53 zone for the primary domain is a **private hosted zone** associated with the default VPC. DNS resolution works only from within the VPC.

---

### Frontend Servers

**File:** [`deploy/Front.tf`](deploy/Front.tf)

Two identical frontend EC2 instances run the web application inside Docker containers. They are registered in the load balancer's target groups for high availability.

**EC2 Instances: `Front` and `Front2`**
- AMI: Latest Ubuntu 22.04 LTS
- Type: `t2.small`
- Key pair: `vockey`
- IAM Instance Profile: `FrontendProfile` (references `LabRole`)
- User data: `scripts/front.sh.tftpl`
- Tags: `web = "Deploy"` (used by CodeDeploy to target these instances)
- Each instance has its own Elastic IP assigned.

**Security Group: `front-group`**

| Direction | Protocol | Port | Source                  | Description                        |
|-----------|----------|------|-------------------------|------------------------------------|
| Inbound   | TCP      | 80   | `0.0.0.0/0`            | HTTP from the internet             |
| Inbound   | TCP      | 443  | `0.0.0.0/0`            | HTTPS from the internet            |
| Inbound   | TCP      | 22   | `bastion-group` (ref)  | SSH only from the Bastion host     |
| Outbound  | All      | All  | `0.0.0.0/0`            | Full outbound access               |

---

### Backend Server

**File:** [`deploy/backend.tf`](deploy/backend.tf)

A single EC2 instance hosts the backend API. It is not publicly accessible; it communicates only with the frontend instances and accepts administrative SSH connections exclusively through the Bastion.

**EC2 Instance: `backend`**
- AMI: Latest Ubuntu 22.04 LTS
- Type: `t2.small`
- Key pair: `vockey`
- IAM Instance Profile: `BackendInstanceProfile` (references `LabRole`)
- User data: `scripts/backend.sh.tftpl`
- Tags: `api = "Deploy"` (used by CodeDeploy to target this instance)

**Security Group: `backend-sg`**

| Direction | Protocol | Port | Source                  | Description                          |
|-----------|----------|------|-------------------------|--------------------------------------|
| Inbound   | TCP      | 22   | `bastion-group` (ref)  | SSH only from the Bastion host       |
| Inbound   | TCP      | 80   | `front-group` (ref)    | HTTP only from the Frontend servers  |
| Outbound  | All      | All  | `0.0.0.0/0`            | Full outbound access                 |

**DNS Record**
- Zone: `backend-infernum-original.duckdns.org` (public hosted zone)
- Record: `backend-infernum-original.duckdns.org` → private IP of the backend instance (A record, TTL 300)

---

### Load Balancer

**File:** [`deploy/Front.tf`](deploy/Front.tf)

An AWS **Network Load Balancer** (NLB) distributes traffic between the two frontend instances.

| Property   | Value                          |
|------------|--------------------------------|
| Name       | `frontend-lb`                  |
| Type       | Network (Layer 4)              |
| Scheme     | Internet-facing                |
| Subnets    | All subnets of the default VPC |

**Target Groups**

| Name           | Port | Protocol | Health Check Interval | Thresholds (healthy/unhealthy) |
|----------------|------|----------|-----------------------|-------------------------------|
| `front-http-tg`  | 80   | TCP      | 30 seconds            | 2 / 2                        |
| `front-443-tg`   | 443  | TCP      | 30 seconds            | 2 / 2                        |

Both `Front` and `Front2` instances are registered in each target group on the corresponding ports.

**Listeners**

| Port | Protocol | Action              |
|------|----------|---------------------|
| 80   | TCP      | Forward to `front-http-tg` |
| 443  | TCP      | Forward to `front-443-tg`  |

**DNS Record**
- Record: `frontend.infernum-original.duckdns.org` → alias to the NLB DNS name (A record, with target health evaluation enabled)

---

### DNS (Route 53)

Two Route 53 hosted zones are managed by this infrastructure:

| Zone Name                                  | Type    | Used For                                 |
|--------------------------------------------|---------|------------------------------------------|
| `infernum-original.duckdns.org`            | Private | Internal VPC resolution (Bastion, Front) |
| `backend-infernum-original.duckdns.org`    | Public  | Backend API hostname                     |

> The private zone is scoped to the default VPC. Records in this zone are only resolvable from within the VPC.

---

### CI/CD with AWS CodeDeploy

Both the frontend and backend use **AWS CodeDeploy** for automated deployments. EC2 instances are tagged so CodeDeploy deployment groups can target them dynamically.

**Frontend CodeDeploy**

| Resource               | Name               |
|------------------------|--------------------|
| CodeDeploy Application | `frontend-app`     |
| Deployment Group       | `frontend-group`   |
| EC2 Tag Filter         | `web = "Deploy"`   |
| IAM Role               | `LabRole`          |

**Backend CodeDeploy**

| Resource               | Name               |
|------------------------|--------------------|
| CodeDeploy Application | `backend-app`      |
| Deployment Group       | `backend-group`    |
| EC2 Tag Filter         | `api = "Deploy"`   |
| IAM Role               | `LabRole`          |

---

## Provisioning Scripts

Bootstrap scripts are written as Terraform template files (`.tftpl`). They are injected as EC2 `user_data` at instance launch time. The `${region}` variable is interpolated by Terraform before the script is passed to AWS.

### Frontend Bootstrap

**File:** [`deploy/scripts/front.sh.tftpl`](deploy/scripts/front.sh.tftpl)

Executed once on instance first boot. Performs the following steps in order:

1. Updates the APT package index and installs base dependencies (`ca-certificates`, `curl`, `gnupg`, `lsb-release`).
2. Adds the official Docker APT repository and installs Docker Engine, the CLI, containerd, Buildx, and the Compose plugin.
3. Adds the `ubuntu` user to the `docker` group to allow running Docker commands without `sudo`.
4. Creates the working directory `/home/ubuntu/frontend-code` with correct ownership.
5. Installs **Certbot** via Snap and links its binary to `/usr/local/bin/certbot` for TLS certificate management.
6. Downloads and installs the **AWS CodeDeploy agent** from the region-specific S3 bucket.
7. Enables the `codedeploy-agent` service to start automatically on reboot.

Provisioning output is logged to `/var/log/frontend-provision.log`.

---

### Backend Bootstrap

**File:** [`deploy/scripts/backend.sh.tftpl`](deploy/scripts/backend.sh.tftpl)

Executed once on instance first boot. Performs the following steps in order:

1. Updates the APT package index and installs base dependencies (`ca-certificates`, `curl`, `gnupg`, `lsb-release`).
2. Installs the **AWS CLI** via APT.
3. Downloads and installs the **AWS CodeDeploy agent** from the region-specific S3 bucket.
4. Enables the `codedeploy-agent` service to start automatically on reboot.
5. Adds the official Docker APT repository and installs Docker Engine, the CLI, containerd, Buildx, and the Compose plugin.
6. Adds the `ubuntu` user to the `docker` group.
7. Creates the application directory `/var/www/html/public/Infernum-API` and sets ownership.

Provisioning output is logged to `/var/log/backend-provision.log`.

---

## Deployment

### Initial Provisioning

```bash
cd deploy/

# Initialize Terraform and download providers
terraform init

# Preview the planned changes
terraform plan

# Apply the infrastructure
terraform apply
```

Terraform will prompt for confirmation before creating any resources. Type `yes` to proceed.

### Destroying the Infrastructure

```bash
cd deploy/
terraform destroy
```

> Destroying the infrastructure will permanently delete all EC2 instances, security groups, Route 53 zones, CodeDeploy applications, and IAM instance profiles created by this configuration.

### Application Deployments (via CodeDeploy)

After the infrastructure is provisioned, application code is deployed through AWS CodeDeploy. Deployments can be triggered from the AWS Console, the AWS CLI, or a CI/CD pipeline (e.g., GitHub Actions):

```bash
aws deploy create-deployment \
  --application-name frontend-app \
  --deployment-group-name frontend-group \
  --region us-east-1 \
  ...
```

Refer to the application repositories for their respective `appspec.yml` files and deployment lifecycle hooks.

---

## Security Considerations

- **No direct public SSH access to application servers**: The frontend and backend instances only accept SSH connections from the Bastion host's security group. They are never exposed directly to the internet on port 22.
- **Backend is not publicly accessible on HTTP**: Port 80 on the backend is restricted to traffic originating from the `front-group` security group. No direct internet access is possible.
- **State encryption**: The Terraform remote state stored in S3 has server-side encryption enabled.
- **Key pair management**: The `vockey` key pair and any `.pem` files are excluded from version control via `.gitignore`.
- **IAM least privilege**: All EC2 instances use instance profiles referencing the `LabRole` IAM role. This role is managed externally (e.g., by the AWS Academy lab environment) and should be reviewed to ensure it grants only the minimum required permissions.
- **TLS**: The frontend servers have Certbot installed for obtaining and renewing Let's Encrypt certificates. Certificate issuance is handled post-provisioning.
