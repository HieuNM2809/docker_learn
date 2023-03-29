ENV http_proxy http://proxy.hcm.fpt.vn:80
ENV https_proxy http://proxy.hcm.fpt.vn:80

FROM phpdockerio/php:8.0-fpm
WORKDIR "/application"

RUN apt-get update; \
    apt-get -y --no-install-recommends install \
        git \
        php8.0-http \
        php8.0-memcached \
        php8.0-mongodb \
        php8.0-mysql \
        php8.0-oauth \
        php8.0-redis \
        php8.0-ssh2; \
    apt-get clean; \
    rm -rf /var/lib/apt/lists/* /tmp/* /var/tmp/* /usr/share/doc/*
