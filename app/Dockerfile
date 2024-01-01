FROM php:8.2-fpm

RUN apt update
RUN apt install -y \
    libzip-dev
RUN docker-php-ext-install \
    zip \
    pdo_mysql
COPY --from=composer /usr/bin/composer /usr/bin/composer

ENV COMPOSER_ALLOW_SUPERUSER 1

WORKDIR /var/www/app

COPY ./src .
RUN composer install
RUN chown www-data:www-data -R ./storage
