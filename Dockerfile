FROM php:7.2.3-fpm
# FROM php:7.2.3-cli
# Usa una imagen base de PHP 7.2.3 con Apache
# FROM php:7.2.3-apache
COPY . /var/www/html/

WORKDIR /var/www/html

# Install Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer


CMD php FACTURA.php
USER www-data


# EXPOSE 80

# 1 - docker build -t factura .
# 2 - docker run -d --name factura -p 7070:80 factura:latest
# docker run -dp 127.0.0.1:7070:7070 factura:latest -v $(pwd):/var/www/html
# docker run -it --rm --name facturaTest factura:latest
# --host=0.0.0.0
# php -S localhost:80 FACTURA.php

# enter to container - docker exec -ti 81a /bin/bash

# /usr/local/bin/php
# stop and Remove - docker stop factura_ktux-webserver-1 && docker rm factura_ktux-webserver-1

# Limpiar todos los contenedores
# docker rm -v $(docker ps --filter status=exited -q)
# limpiar volumenes
# docker rm -v -f $(docker ps -qa)