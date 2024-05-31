# syntax=docker/dockerfile:1

FROM composer:lts as deps
WORKDIR /app
RUN --mount=type=bind,source=composer.json,target=composer.json \
    --mount=type=bind,source=composer.lock,target=composer.lock \
    --mount=type=cache,target=/tmp/cache \
    composer install --no-dev --no-interaction

# FROM php:8.2-apache as final
# docker pull php:7.2.32-fpm-alpine3.11
# docker pull webimp/php-72-apache:latest
FROM php:7.2.32-fpm-alpine3.11 as final
# RUN docker-php-ext-install pdo pdo_mysql
# RUN mv "$PHP_INI_DIR/php.ini-production" "$PHP_INI_DIR/php.ini"
# COPY --from=deps app/vendor/ /var/www/html/vendor
COPY . /var/www/html
USER www-data