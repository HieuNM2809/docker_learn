FROM php:8.0-apache

RUN apt-get update && \
    apt-get install -y git unzip libzip-dev && \
    docker-php-ext-install pdo_mysql zip && \
    pecl install xdebug && \
    docker-php-ext-enable xdebug

COPY . /var/www/html

RUN chown -R www-data:www-data /var/www/html && \
    a2enmod rewrite
