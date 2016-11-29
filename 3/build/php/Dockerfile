FROM php:5-fpm-alpine

RUN apk --no-cache add \
        postgresql-dev

RUN docker-php-ext-install \
    pdo \
    pgsql \
    pdo_pgsql \
