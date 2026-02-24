terraform {
  required_providers {
    aws = {
      source  = "hashicorp/aws"
      version = "~> 6.0"
    }
  }
    backend "s3" {
        bucket = "infernum-bucket2"
        key = "vockey"
        region = "us-east-1"
        encrypt = true
    }


  required_version = ">= 1.2"
}


provider "aws" {
    region = "us-east-1"
}
