FROM php:7.2.3-fpm
WORKDIR /var/www/html
# FROM php:7.2.3-cli
# Usa una imagen base de PHP 7.2.3 con Apache
# FROM php:7.2.3-apache
COPY . /var/www/html/

# Instalar extensiones necesarias para PHP
# RUN docker-php-ext-install pdo pdo_mysql

# Install Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Instalar dependencias de Composer
RUN composer install
RUN composer dump-autoload

# USER www-data
# EXPOSE 80
# EXPOSE 7070
EXPOSE 8080
# CMD ["php", "-v"]
# CMD ["composer", "-v"]
# CMD ["php", "FACTURA.php"]
CMD ["php","-S","0.0.0.0:8080","FACTURA.php"]
# CMD ["php", "index.php"]

# CMD ["php-fpm", "/var/www/html/FACTURA.php"]
# CMD ["php","-S","localhost:8080", "FACTURA.php"]
# CMD ["composer", "dump-autoload"]

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