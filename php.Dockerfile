FROM php:7.4-cli

# INSTALL ZIP TO USE COMPOSER
RUN apt-get update && apt-get install -y \
    zlib1g-dev \
    libzip-dev \
    unzip

RUN docker-php-ext-install zip

# INSTALL AND UPDATE COMPOSER
COPY --from=composer /usr/bin/composer /usr/bin/composer
RUN composer self-update

# WORKDIR /usr/src/myapp

# INSTALL YOUR DEPENDENCIES
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

RUN composer install
CMD ["composer", "dump-autoload"]

COPY . .
COPY . /var/www/html/

# docker-compose up -d