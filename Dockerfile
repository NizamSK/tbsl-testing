FROM php:8.1-apache
RUN docker-php-ext-install pdo pdo_mysql mysqli gd mbstring opcache
RUN apt-get update \
    && apt-get install -y --no-install-recommends \
        zip \
        libzip-dev \
        libxml2-dev \
        libcurl4-openssl-dev \
        libssl-dev \
        libonig-dev \
        libfreetype6-dev \
        libjpeg62-turbo-dev \
        libpng-dev \
        libicu-dev \
    && docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install -j$(nproc) zip xml intl curl json bcmath \
    && apt-get clean \
    && rm -rf /var/lib/apt/lists/*
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer
COPY . /var/www/html
WORKDIR /var/www/html
CMD ["apache2-foreground"]
RUN chown -R www-data:www-data /var/www
EXPOSE 80

