variable "domain_name" {
  type    = string
  default = "infernum-original.duckdns.org"
}

variable "region" {
  type    = string
  default = "us-east-1"

}

variable "instance_type" {
  description = "Tipo de instacia EC2"
  type        = string
  default     = "t2.small"
}

/************* DATA SOURCES *******************/

data "aws_ami" "ubuntu" {
  most_recent = true

  filter {
    name   = "name"
    values = ["ubuntu/images/hvm-ssd/ubuntu-jammy-22.04-amd64-server-*"]
  }

  filter {
    name   = "virtualization-type"
    values = ["hvm"]
  }

  owners = ["099720109477"]
}

data "aws_vpc" "vpc" {
  region  = var.region
  default = true
}

data "aws_subnets" "public" {
  filter {
    name   = "vpc-id"
    values = [data.aws_vpc.vpc.id]
  }
}

data "aws_iam_role" "lab_role" {
  name = "LabRole"
}

