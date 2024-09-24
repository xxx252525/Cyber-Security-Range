#!/bin/bash

# 函数用于执行命令，并在失败时退出
execute_command() {
  echo "Executing: $*"
  eval $*
  if [ $? -ne 0 ]; then
    echo "Command failed: $*"
    exit 1
  fi
}

# 安装基础软件包
execute_command sudo apt install -y vim curl git wget

# 安装和配置SSH服务
execute_command sudo apt install -y openssh-server
execute_command sudo systemctl start ssh.service
execute_command sudo systemctl enable ssh.service
execute_command sudo cp /etc/ssh/sshd_config /etc/ssh/ssh_config.back

# 安装和配置HTTP服务
execute_command sudo apt install -y apache2
execute_command sudo systemctl start apache2.service
execute_command sudo systemctl enable apache2.service

# 安装和配置MariaDB服务
execute_command sudo apt install -y mariadb-server
execute_command sudo systemctl start mariadb
execute_command sudo mysqladmin -uroot password '123456'
execute_command sudo systemctl enable mariadb.service

# 安装PHP和相关模块
execute_command sudo apt install -y php php-json php-fpm php-gd php-xml php-pear php-dev php-mysqlnd
php --version

# 安装Java OpenJDK
execute_command sudo apt-get install -y openjdk-11-*
java --version

# 停用防火墙和SELinux
sudo systemctl stop ufw || echo "no find ufw"
sudo setenforce 0 
sudo systemctl disable ufw || echo "no find ufw"


# 安装和配置Docker服务
execute_command sudo apt install -y apt-transport-https ca-certificates curl software-properties-common
sudo apt install -y docker.io
sudo apt install -y docker
execute_command sudo systemctl start docker
execute_command sudo systemctl enable docker

echo "All commands executed successfully."
