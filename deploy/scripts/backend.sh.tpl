#!/bin/bash
# Script de inicialización para el Servidor Backend
echo "Iniciando provisión del Backend..."

exec > >(tee -a /var/log/backend-provision.log) 2>&1

# Actualizar e instalar dependencias básicas
apt-get update
apt-get install -y ca-certificates curl gnupg lsb-release

# AWS CLI
apt install -y awscli

# Code deploy agent
apt install -y ruby-full
apt install -y wget
 
cd /home/ubuntu
wget https://aws-codedeploy-${region}.s3.${region}.amazonaws.com/latest/install
chmod +x ./install
./install auto

systemctl enable codedeploy-agent

# Instalar Docker
mkdir -p /etc/apt/keyrings
curl -fsSL https://download.docker.com/linux/ubuntu/gpg | gpg --dearmor -o /etc/apt/keyrings/docker.gpg
echo "deb [arch=$(dpkg --print-architecture) signed-by=/etc/apt/keyrings/docker.gpg] https://download.docker.com/linux/ubuntu $(lsb_release -cs) stable" | tee /etc/apt/sources.list.d/docker.list > /dev/null
apt-get update
apt-get install -y docker-ce docker-ce-cli containerd.io docker-buildx-plugin docker-compose-plugin

# Configurar permisos
usermod -aG docker ubuntu

# Preparar directorios de la aplicación
mkdir -p /home/ubuntu/Infernum-API
chown -R ubuntu:ubuntu /home/ubuntu/Infernum-API

echo "Provisión del Backend completada."
