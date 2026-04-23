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


resource "aws_vpc_security_group_ingress_rule" "allow-455-everyone" {
  security_group_id = aws_security_group.front-group.id
  ip_protocol       = "tcp"
  cidr_ipv4         = "0.0.0.0/0"
  from_port         = 455
  to_port           = 455
  description       = "Allow port 455 for everyone"

}

resource "aws_vpc_security_group_ingress_rule" "ssh" {
  security_group_id            = aws_security_group.front-group.id
  referenced_security_group_id = aws_security_group.bastion-group.id
  ip_protocol                  = "tcp"
  from_port                    = 22
  to_port                      = 22
  description                  = "Allow port 22"
}


/************** INSTANCE + ELASTIC IP *************************/

resource "aws_instance" "Front" {
  ami                    = data.aws_ami.ubuntu.id
  instance_type          = "t2.small"
  vpc_security_group_ids = [aws_security_group.front-group.id, aws_security_group.common-group.id]
  key_name               = "vockey"
  tags = {
    Name = "Front"
  }

}

resource "aws_eip" "front-elastic-ip" {
  domain   = "vpc"
  instance = aws_instance.Front.id

}

/******************* ROUTE 53 ***************************************/


resource "aws_route53_record" "front-record" {
  type    = "A"
  name    = "frontend.${var.domain_name}"
  records = [aws_instance.Front.private_ip]
  zone_id = aws_route53_zone.zone.id
  ttl     = 300

}


/****************** Code deploy **********************************/

/******************* Load Balancer **********************************/

resource "aws_lb" "front_lb" {
  name               = "frontend-lb"
  internal           = false
  load_balancer_type = "application"
  security_groups    = [aws_security_group.front-group.id]
  // add subnets

  tags = {
    Name = "frontend-lb"
  }

}

# Target groups
resource "aws_lb_target_group" "front-http" {
  name        = "front-http-tg"
  port        = 80
  protocol    = "HTTP"
  vpc_id      = data.aws_vpc.vpc.id
  target_type = "instance"


  health_check {
    enabled             = true
    healthy_threshold   = 2
    interval            = 30
    matcher             = "200"
    path                = "/"
    port                = "80"
    protocol            = "HTTP"
    timeout             = 5
    unhealthy_threshold = 2
  }

  tags = {
    Name = "front-http-tg"
  }
}

resource "aws_lb_target_group" "front-https" {
  name        = "front-455-tg"
  port        = 455
  protocol    = "TCP"
  vpc_id      = data.aws_vpc.vpc.id
  target_type = "instance"

  health_check {
    enabled             = true
    healthy_threshold   = 2
    interval            = 30
    port                = "455"
    protocol            = "TCP"
    timeout             = 5
    unhealthy_threshold = 2
  }

  tags = {
    Name = "front-455-tg"
  }
}

# Listener HTTP 80
resource "aws_lb_listener" "http" {
  load_balancer_arn = aws_lb.front_lb.arn
  port              = "80"
  protocol          = "HTTP"

  default_action {
    type             = "forward"
    target_group_arn = aws_lb_target_group.front-http.arn
  }
}

# Listener HTTPS 455

resource "aws_lb_listener" "https" {
  load_balancer_arn = aws_lb.front_lb.arn
  port              = "455"
  protocol          = "HTTPS"

  default_action {
    type             = "forward"
    target_group_arn = aws_lb_target_group.front-https.arn
  }
}


# Registrar front (httpp https)

resource "aws_lb_target_group_attachment" "front-http-group" {
  target_group_arn = aws_lb_target_group.front-http.arn
  target_id        = aws_instance.Front.id
  port             = 80
}


resource "aws_lb_target_group_attachment" "front-https-group" {
  target_group_arn = aws_lb_target_group.front-https.arn
  target_id        = aws_instance.Front.id
  port             = 455
}

resource "aws_codedeploy_app" "frontend" {
  name = "frontend-app"
}

resource "aws_codedeploy_deployment_group" "frontend" {
  app_name              = aws_codedeploy_app.frontend.name
  deployment_group_name = "frontend-group"
  service_role_arn      = var.arn

  ec2_tag_filter {
    type  = "KEY_AND_VALUE"
    value = "Deploy"
    key   = "web"
  }

}

