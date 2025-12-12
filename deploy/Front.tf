resource "aws_security_group" "front-group" {
  name = "front-group"
  description = "Security group for the front"

  tags = {
    Name = "front-group"
  }
}

/**************** RULES ***********************/

resource "aws_vpc_security_group_ingress_rule" "allow-80-everyone" {
  security_group_id = aws_security_group.front-group.id
  ip_protocol = "tcp"
  cidr_ipv4 = "0.0.0.0/0"
  from_port = 80
  to_port = 80
  description = "Allow port 80 for everyone"

}


resource "aws_vpc_security_group_ingress_rule" "ssh" {
  security_group_id = aws_security_group.front-group.id
  referenced_security_group_id = aws_security_group.bastion-group.id
  ip_protocol = "tcp"
  from_port = 22
  to_port = 22
  description = "Allow port 22"
}


/************** INSTANCE + ELASTIC IP *************************/

resource "aws_instance" "Front" {
  ami = data.aws_ami.ubuntu.id
  instance_type = "t2.small"
  vpc_security_group_ids = [ aws_security_group.front-group.id, aws_security_group.common-group.id ]
  key_name = "vockey"
  tags = {
    Name = "Front"
  }

}

resource "aws_eip" "front-elastic-ip" {
  domain = "vpc"
  instance = aws_instance.Front.id

}

/******************* ROUTE 53 ***************************************/


resource "aws_route53_record" "front-record" {
  type = "A"
  name = "frontend.${var.domain_name}"
  records = [ aws_instance.Front.private_ip ]
  zone_id = aws_route53_zone.zone.id
  ttl = 300

}

