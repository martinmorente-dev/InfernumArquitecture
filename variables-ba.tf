variable "instance_type" {
   description = "Tipo de instacia EC2"
   type = string
   default = "t2.large"
}

variable "region" {
  description = "Region de AWS esta en N. Virginia"
  type = string
  default = "us-east-1"
}

variable "domain_name" {
  description = "Nombre del dominio"
  type = string
  default = "infernum-original.duckdns.org"
}

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

data "aws_vpc" "default" {
  default = true
}