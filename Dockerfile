# Use the official PHP 8.1 Apache base image
FROM php:8.1-apache

# Install PHP extensions using apt-get
RUN apt-get update && apt-get install -y --no-install-recommends \
        libfreetype6-dev \
        libjpeg62-turbo-dev \
        libpng-dev \
        libonig-dev \
        libzip-dev \
        libxml2-dev \
        libicu-dev \
        libcurl4-openssl-dev \
        libssl-dev \
        zip \
        unzip \
    && docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install -j$(nproc) gd pdo pdo_mysql mysqli mbstring opcache zip xml intl curl \
    && apt-get clean \
    && rm -rf /var/lib/apt/lists/*

# Install Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer
RUN echo "ServerName localhost" >> /etc/apache2/apache2.conf

# Copy your PHP application files into the container
COPY . /var/www/html

# Set the working directory
WORKDIR /var/www/html

# Expose port 80 to allow external connections to this container
EXPOSE 8080

# Define the command to run the Apache server
CMD ["apache2-foreground"]
RUN chown -R www-data:www-data /var/www


