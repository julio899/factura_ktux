# factura_ktux

creacion del pdf del talonario de facturas de ktux

depende de la libreria fpdf "setasign/fpdf": "1.7"
-instalar composer
-correr composer install

# version php

PHP 7.2.34-43+ubuntu22.04.1+deb.sury.org+1

## correr server local

> php -S localhost:8080 FACTURA.php


# levantar docker-compose.yml
> docker-compose up -d

-------- [nuevo formato de imagen con .yml] ----------




docker run -d --name nginx -p 8080:80 nginx:latest

docker pull webimp/php-72-apache:latest

docker build \
 -f php-7-4-apache.Dockerfile \
 --target php-7-4-build \
 --build-arg APP_ENV=local \
 --build-arg NPM_VERSION=7.24.2 \
 --no-cache \
 -t php-7-4-web-server:latest \
 .

docker build --no-cache -t webimp/php-72-apache:latest .

    --network bridge \


# rebuild

sudo docker-compose up --build -d

# conect to container

sudo docker exec -it php-7-4-web-server /bin/bash

# composer dump-autoload

# pase de archivos
    > docker cp FACTURA.php factura_ktux-webserver-1:/var/www/html/index.php



# RUN TEST
// -- docker run -d -p 8000:80 --name test php:7-apache -v "$PWD":/var/www/html
// -- docker run -d --name factura -p 7070:80 factura:latest
// -- docker run factura:latest

# RUNING OK
docker-compose up -d
http://localhost:7070

# docker container
image: php:7.2.3-apache
container: factura_ktux-webserver-1

---

# AJUSTE A PUERTO 8080 con Dokerfile

   > docker build -t factura .
   > docker run -d -p 8080:8080 -v ./FACTURA.php:/var/www/html/FACTURA.php --net app --name facturaTest factura:latest