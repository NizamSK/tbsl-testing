FROM composer:latest AS composer
WORKDIR /app
COPY composer.json composer.lock ./
RUN composer install --prefer-dist
FROM php:8.1-apache
WORKDIR /var/www/html
COPY --from=composer /app/vendor ./vendor
COPY . /var/www/html
EXPOSE 80

# ENV APP_ENV production  # Set environment variables

COPY .env.example .env  # Copy .env file for environment variables
RUN composer update
RUN chown -R www-data:www-data /var/www/html/storage




