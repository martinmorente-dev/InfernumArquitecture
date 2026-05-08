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
  default     = "t2.medium"
}

variable "bucket_name" {
  description = "Nombre del bucket"
  type = string
  default = "infernum-bucket-3"
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

<<<<<<< HEAD
data "aws_iam_role" "codedeploy" {
=======
data "aws_subnets" "public" {
  filter {
    name = "vpc-id"
    values = [ data.aws_vpc.vpc.id ]
  }
}

data "aws_iam_role" "lab_role" {
>>>>>>> develop
  name = "LabRole"
}