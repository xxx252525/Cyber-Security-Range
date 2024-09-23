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
execute_command sudo dnf install -y vim curl git wget

# 安装和配置SSH服务
execute_command sudo dnf install -y openssh-server
execute_command sudo systemctl start sshd.service
execute_command sudo systemctl enable sshd.service
execute_command sudo cp /etc/ssh/sshd_config /etc/ssh/ssh_config.back

# 安装和配置HTTP服务
execute_command sudo dnf install -y httpd
execute_command sudo systemctl start httpd.service
execute_command sudo systemctl enable httpd.service

# 安装和配置MariaDB服务
execute_command sudo dnf install -y mariadb-server
execute_command sudo systemctl start mariadb
execute_command sudo mysqladmin -uroot password '123456'
execute_command sudo systemctl enable mariadb.service

# 安装PHP和相关模块
execute_command sudo dnf install -y php php-json php-fpm php-gd php-xml
php --version

# 安装Java OpenJDK
execute_command sudo dnf install -y java-21-openjdk
java --version

# 停用防火墙和SELinux
execute_command sudo systemctl stop firewalld
execute_command sudo setenforce 0
execute_command sudo systemctl disable firewalld.service

# 安装和配置Docker服务
execute_command sudo dnf install -y docker
execute_command sudo systemctl start docker
execute_command sudo systemctl enable docker

echo "All commands executed successfully."
