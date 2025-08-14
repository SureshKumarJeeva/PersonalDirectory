#DockerFile
FROM composer:latest AS builder
WORKDIR /app
COPY . .
RUN composer install --no-dev --optimize-autoloader

FROM php:fpm-alpine
WORKDIR /var/www/html
COPY --from=builder /app/vedor ./vendor
COPY . .

CMD [ "php-fpm" ]