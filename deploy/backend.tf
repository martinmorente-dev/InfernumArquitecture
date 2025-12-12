resource "aws_instance" "backend" {
  instance_type = var.instance_type
  ami = data.aws_ami.ubuntu.id
  key_name = "vockey"
  vpc_security_group_ids = [ aws_security_group.backend_sg.id ]
  user_data = file("./scripts/backend.sh")

  tags = {
    Name = "Servidor Backend"
  }
}

resource "aws_security_group" "backend_sg" {
  name = "backend-sg"
  description = "Grupo de seguridad para el servidor Backend"

  tags = {
    Name = "Grupo de Seguridad Backend"
  }
}

resource "aws_vpc_security_group_ingress_rule" "backend_ssh" {
  security_group_id = aws_security_group.backend_sg.id
  referenced_security_group_id = aws_security_group.backend_sg.id
  from_port = 22
  to_port = 22
  ip_protocol = "tcp"
}

resource "aws_vpc_security_group_ingress_rule" "backend_http" {
  security_group_id = aws_security_group.backend_sg.id
  referenced_security_group_id = aws_security_group.front-group.id
  from_port = 80
  to_port = 80
  ip_protocol = "tcp"
}

resource "aws_vpc_security_group_egress_rule" "backend_egress" {
  security_group_id = aws_security_group.backend_sg.id
  cidr_ipv4 = "0.0.0.0/0"
  ip_protocol = "-1"
}

resource "aws_route53_record" "backend" {
  zone_id = aws_route53_zone.zone.id
  name = "backend.${var.domain_name}"
  type = "A"
  ttl = 300
  records = [aws_instance.backend.private_ip]
}