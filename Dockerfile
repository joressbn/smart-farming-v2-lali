FROM php:8.2-apache

RUN apt-get update \
    && apt-get install -y zip unzip \
    && apt-get install -y git

RUN docker-php-ext-install pdo pdo_mysql sockets
RUN curl -sS https://getcomposer.org/installer | php -- \
     --install-dir=/usr/local/bin --filename=composer

COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

WORKDIR /app
COPY . .
ENV COMPOSER_ALLOW_SUPERUSER=1
RUN composer install --no-plugins --no-scripts
