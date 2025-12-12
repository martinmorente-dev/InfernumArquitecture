variable "dns" {
  type = string
  default = "infernum-original.duckdns.org"
}

variable "region" {
  type = string
  default = "us-east-1"
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
  region = var.region
  default = true
}