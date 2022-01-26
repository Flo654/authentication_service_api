FROM php:8.1.1-fpm-buster

RUN apt-get update && apt-get install -y zlib1g-dev libicu-dev g++ libxml2-dev libpq-dev libzip-dev procps git keychain rsync libnss3-tools

RUN docker-php-ext-install zip intl pdo pdo_mysql

# Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer


RUN apt-get clean; rm -rf /var/lib/apt/lists/* /tmp/* /var/tmp/* /usr/share/doc/*
WORKDIR "/app"
