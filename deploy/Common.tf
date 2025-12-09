resource "aws_security_group" "common-group" {
  name = "common-group"
  description = "Security group for common rules"

  tags = {
    Name = "common-group"
  }
}

/***************** RULES *********************/

resource "aws_vpc_security_group_egress_rule" "allow-all-exit" {
  security_group_id = aws_security_group.common-group.id
  ip_protocol = "-1"
  cidr_ipv4 = "0.0.0.0/0"
  description = "Allow all for the exit connections"

}

