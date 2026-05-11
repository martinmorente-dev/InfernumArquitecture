#!/bin/bash
# Script de inicialización para el Servidor Frontend
echo "Iniciando provisión del Frontend..."

exec > >(tee -a /var/log/frontend-provision.log) 2>&1

# Actualizar e instalar dependencias básicas
apt-get update
apt-get install -y ca-certificates curl gnupg lsb-release

# Instalar Docker
mkdir -p /etc/apt/keyrings
curl -fsSL https://download.docker.com/linux/ubuntu/gpg | gpg --dearmor -o /etc/apt/keyrings/docker.gpg
echo "deb [arch=$(dpkg --print-architecture) signed-by=/etc/apt/keyrings/docker.gpg] https://download.docker.com/linux/ubuntu $(lsb_release -cs) stable" | tee /etc/apt/sources.list.d/docker.list > /dev/null
apt-get update
apt-get install -y docker-ce docker-ce-cli containerd.io docker-buildx-plugin docker-compose-plugin

# Configurar permisos
usermod -aG docker ubuntu

# Preparar directorios de la aplicación
mkdir -p /home/ubuntu/frontend-code
chown -R ubuntu:ubuntu /home/ubuntu/frontend-code

# Poner Apache

sudo apt install -y apache2

sudo systemctl enable apache2

# Agregar https

sudo snap install --classic certbot

sudo ln -s /snap/bin/certbot /usr/local/bin/certbot

echo "Provisión del Frontend completada."
