resource "aws_security_group" "bastion-group" {
  name = "bastion-group"
  description = "Security group for the bastion"

  tags = {
    Name = "bastion-group"
  }
}

/************* RULES *******************/

resource "aws_vpc_security_group_ingress_rule" "allow-22-all" {
  security_group_id = aws_security_group.bastion-group.id
  cidr_ipv4 = "0.0.0.0/0"
  ip_protocol = "tcp"
  from_port = 80
  to_port = 80
  description = "Allow port 22 to everyone"

}


/*************** INSTANCE + ELASTIC IP********************/

resource "aws_instance" "Bastion" {
  ami = data.aws_ami.ubuntu.id
  instance_type = "t2.small"
  vpc_security_group_ids = [ aws_security_group.bastion-group.id, aws_security_group.common-group.id ]
  key_name = "vockey"
  tags = {
    Name = "Bastion"
  }

}

resource "aws_eip" "bastion-elastic-ip" {
    domain = "vpc"
    instance = aws_instance.Bastion.id

}

/********************** ROUTE 53 *********************************/

resource "aws_route53_zone" "bastion-zone" {
  name = "bastion.${var.dns}"

  vpc {
    vpc_id = data.aws_vpc.vpc
    vpc_region = var.region
  }
}


resource "aws_route53_record" "bastion-record" {
  type = "A"
  name = "bastion.${var.dns}"
  records = [ aws_instance.Bastion.private_ip ]
  zone_id = aws_route53_zone.bastion-zone.id
  ttl = 300

}