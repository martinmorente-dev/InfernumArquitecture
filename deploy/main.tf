terraform {
  required_providers {
    aws = {
      source  = "hashicorp/aws"
      version = "~> 6.0"
    }
  }
    backend "s3" {
        bucket = "infernum-bucket"
        key = "vockey"
        region = var.region
        encrypt = true
    }


  required_version = ">= 1.2"
}


provider "aws" {
    region = var.region
}
