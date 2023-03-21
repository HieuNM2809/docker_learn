# sử dụng một image đã có PHP và Apache trên nền tảng Linux
FROM php:8.0-apache

RUN apk update && apk add oniguruma-dev
RUN docker-php-ext-install -j$(nproc) mbstring
# RUN apt-get update -y && apt-get install -y libmcrypt-dev

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer
RUN docker-php-ext-install pdo mbstring

WORKDIR /app
COPY . /app

RUN composer install

EXPOSE 8000
CMD php artisan serve --host=0.0.0.0 --port=8000
