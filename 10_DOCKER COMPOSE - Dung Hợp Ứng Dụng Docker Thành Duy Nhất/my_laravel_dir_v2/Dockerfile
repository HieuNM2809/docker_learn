# Thêm thư viên
FROM php:8.0-apache

ENV http_proxy http://proxy.hcm.fpt.vn:80
ENV https_proxy http://proxy.hcm.fpt.vn:80

# Thêm các package
RUN apt-get update && \
    apt-get install -y git unzip libzip-dev && \
    docker-php-ext-install pdo_mysql zip && \
    pecl install xdebug && \
    docker-php-ext-enable xdebug

# Copy all file vào thư mục html
COPY . /var/www/html

RUN chown -R www-data:www-data /var/www/html && \
    a2enmod rewrite && \

    # Config đọc trong file public
    sed -i 's!/var/www/html!/var/www/html/public!g' /etc/apache2/sites-available/000-default.conf && \
    sed -i 's!/var/www/html!/var/www/html/public!g' /etc/apache2/sites-available/default-ssl.conf && \
    service apache2 restart


ENV http_proxy ""
ENV https_proxy ""


#  Chú ý: nếu lỗi thì full từng image về 
