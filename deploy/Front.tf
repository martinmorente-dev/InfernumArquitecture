resource "aws_security_group" "front-group" {
  name        = "front-group"
  description = "Security group for the front"

  tags = {
    Name = "front-group"
  }
}

/**************** RULES ***********************/

resource "aws_vpc_security_group_ingress_rule" "allow-80-everyone" {
  security_group_id = aws_security_group.front-group.id
  ip_protocol       = "tcp"
  cidr_ipv4         = "0.0.0.0/0"
  from_port         = 80
  to_port           = 80
  description       = "Allow port 80 for everyone"

}

resource "aws_vpc_security_group_ingress_rule" "allow-443-everyone" {
  security_group_id = aws_security_group.front-group.id
  ip_protocol       = "tcp"
  cidr_ipv4         = "0.0.0.0/0"
  from_port         = 443
  to_port           = 443
  description       = "Allow port 443 for everyone"

}

resource "aws_vpc_security_group_ingress_rule" "ssh" {
  security_group_id            = aws_security_group.front-group.id
  referenced_security_group_id = aws_security_group.bastion-group.id
  ip_protocol                  = "tcp"
  from_port                    = 22
  to_port                      = 22
  description                  = "Allow port 22"
}

resource "aws_vpc_security_group_egress_rule" "allow_all_front" {
  security_group_id = aws_security_group.front-group.id
  cidr_ipv4         = "0.0.0.0/0"
  ip_protocol       = "-1"
}

/************** INSTANCE + ELASTIC IP *************************/

resource "aws_instance" "Front" {
  ami                    = data.aws_ami.ubuntu.id
  instance_type          = "t2.small"
  vpc_security_group_ids = [aws_security_group.front-group.id]
  key_name               = "vockey"
  user_data = templatefile("./scripts/front.sh.tftpl", {
    region = var.region
  })
  tags = {
    Name = "Front"
    web  = "Deploy"
  }
  iam_instance_profile = aws_iam_instance_profile.lab_profile_front.name
}

resource "aws_instance" "Front2" {
  ami                    = data.aws_ami.ubuntu.id
  instance_type          = "t2.small"
  vpc_security_group_ids = [aws_security_group.front-group.id]
  key_name               = "vockey"
  user_data = templatefile("./scripts/front.sh.tftpl", {
    region = var.region
  })
  iam_instance_profile = aws_iam_instance_profile.lab_profile_front.name
  tags = {
    Name = "Front2"
    web  = "Deploy"
  }

}

resource "aws_eip" "front-elastic-ip" {
  domain   = "vpc"
  instance = aws_instance.Front.id

}

resource "aws_eip" "front2-elastic-ip" {
  domain   = "vpc"
  instance = aws_instance.Front2.id

}

/******************* ROUTE 53 ***************************************/


resource "aws_route53_record" "front-record" {
  type    = "A"
  name    = "frontend.${var.domain_name}"
  zone_id = aws_route53_zone.zone.id

  alias {
    name                   = aws_lb.front_lb.dns_name
    zone_id                = aws_lb.front_lb.zone_id
    evaluate_target_health = true
  }

}

/******************* Load Balancer **********************************/

resource "aws_lb" "front_lb" {
  name               = "frontend-lb"
  internal           = false
  load_balancer_type = "network"
  subnets            = data.aws_subnets.public.ids
  tags = {
    Name = "frontend-lb"
  }
}

# Target group HTTP 80
resource "aws_lb_target_group" "front-http" {
  name        = "front-http-tg"
  port        = 80
  protocol    = "TCP"
  vpc_id      = data.aws_vpc.vpc.id
  target_type = "instance"

  health_check {
    enabled             = true
    healthy_threshold   = 2
    interval            = 30
    port                = "80"
    protocol            = "TCP"
    timeout             = 5
    unhealthy_threshold = 2
  }

  tags = {
    Name = "front-http-tg"
  }
}

# Target group HTTPS 443
resource "aws_lb_target_group" "front-https" {
  name        = "front-443-tg"
  port        = 443
  protocol    = "TCP"
  vpc_id      = data.aws_vpc.vpc.id
  target_type = "instance"

  health_check {
    enabled             = true
    healthy_threshold   = 2
    interval            = 30
    port                = "443"
    protocol            = "TCP"
    timeout             = 5
    unhealthy_threshold = 2
  }

  tags = {
    Name = "front-443-tg"
  }
}

# Listener HTTP 80
resource "aws_lb_listener" "http" {
  load_balancer_arn = aws_lb.front_lb.arn
  port              = "80"
  protocol          = "TCP"

  default_action {
    type             = "forward"
    target_group_arn = aws_lb_target_group.front-http.arn
  }
}

# Listener HTTPS 443
resource "aws_lb_listener" "https" {
  load_balancer_arn = aws_lb.front_lb.arn
  port              = "443"
  protocol          = "TCP"

  default_action {
    type             = "forward"
    target_group_arn = aws_lb_target_group.front-https.arn
  }
}

# Instancia Front → ambos target groups
resource "aws_lb_target_group_attachment" "front-http-group" {
  target_group_arn = aws_lb_target_group.front-http.arn
  target_id        = aws_instance.Front.id
  port             = 80
}

resource "aws_lb_target_group_attachment" "front-https-group" {
  target_group_arn = aws_lb_target_group.front-https.arn
  target_id        = aws_instance.Front.id
  port             = 443
}

# Instancia Front2 → ambos target groups
resource "aws_lb_target_group_attachment" "front2-http-group" {
  target_group_arn = aws_lb_target_group.front-http.arn
  target_id        = aws_instance.Front2.id
  port             = 80
}

resource "aws_lb_target_group_attachment" "front2-https-group" {
  target_group_arn = aws_lb_target_group.front-https.arn
  target_id        = aws_instance.Front2.id
  port             = 443
}
/****************** Code deploy **********************************/

# profile definition
resource "aws_iam_instance_profile" "lab_profile_front" {
  name = "FrontendProfile"
  role = data.aws_iam_role.lab_role.name // ponerlo siempre con el data
}


resource "aws_codedeploy_app" "frontend" {
  name = "frontend-app"
}

resource "aws_codedeploy_deployment_group" "frontend" {
  app_name              = aws_codedeploy_app.frontend.name
  deployment_group_name = "frontend-group"
  service_role_arn      = data.aws_iam_role.lab_role.arn

  ec2_tag_filter {
    type  = "KEY_AND_VALUE"
    value = "Deploy"
    key   = "web"
  }

}
