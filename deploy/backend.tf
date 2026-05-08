resource "aws_instance" "backend" {
  instance_type          = var.instance_type
  ami                    = data.aws_ami.ubuntu.id
  key_name               = "vockey"
  vpc_security_group_ids = [aws_security_group.backend_sg.id]
  iam_instance_profile   =  aws_iam_instance_profile.lab_profile.name
  user_data              = templatefile("./scripts/backend.sh.tpl", {
    region = var.region
  })

  tags  = {
    Name = "Servidor Backend"
    api = "Deploy"
  }
}

resource "aws_security_group" "backend_sg" {
  name        = "backend-sg"
  description = "Grupo de seguridad para el servidor Backend"

  tags = {
    Name      = "Grupo de Seguridad Backend"
  }
}

resource "aws_vpc_security_group_ingress_rule" "backend_ssh" {
  security_group_id            = aws_security_group.backend_sg.id
  //referenced_security_group_id = aws_security_group.bastion-group.id
  cidr_ipv4                    = "0.0.0.0/0"
  from_port                    = 22
  to_port                      = 22
  ip_protocol                  = "tcp"
}

resource "aws_vpc_security_group_ingress_rule" "backend_http" {
  security_group_id            = aws_security_group.backend_sg.id
  referenced_security_group_id = aws_security_group.front-group.id
  from_port                    = 80
  to_port                      = 80
  ip_protocol                  = "tcp"
}

resource "aws_vpc_security_group_egress_rule" "backend_egress" {
  security_group_id = aws_security_group.backend_sg.id
  cidr_ipv4         = "0.0.0.0/0"
  ip_protocol       = "-1"
}

resource "aws_route53_record" "backend" {
  zone_id = aws_route53_zone.zone.id
  name    = "backend.${var.domain_name}"
  type    = "A"
  ttl     = 300
  records = [aws_instance.backend.private_ip]
}

/************** Code deploy ****************************/

# profile definition
resource "aws_iam_instance_profile" "lab_profile" {
  name = "BackendInstanceProfile"
  role = data.aws_iam_role.lab_role.name // ponerlo siempre con el data
}

resource "aws_codedeploy_app" "backend" {
  name = "backend-app"
}

resource "aws_codedeploy_deployment_group" "backend" {
  app_name              = aws_codedeploy_app.backend.name
  deployment_group_name = "backend-group"
<<<<<<< HEAD
  service_role_arn = data.aws_iam_role.codedeploy.arn

  ec2_tag_filter {
    type = "KEY_AND_VALUE"
=======
  service_role_arn      = data.aws_iam_role.lab_role.arn

  ec2_tag_filter {
    type  = "KEY_AND_VALUE"
>>>>>>> develop
    value = "Deploy"
    key   = "api"
  }
}