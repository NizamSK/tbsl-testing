#
# Build the app
#
FROM php:8.1.0-apache

#RUN apt-get update && apt-get install -yqq unzip libzip-dev \
   # && docker-php-ext-install pdo_mysql opcache zip && sudo apt-get install apache2 -y

RUN apt-get update \
    && apt-get install -y --no-install-recommends \
        libfreetype6-dev \
        libjpeg62-turbo-dev \
        libpng-dev \
        libonig-dev \
        libzip-dev \
        libxml2-dev \
        libicu-dev \
        libcurl4-openssl-dev \
        libssl-dev \
        libmcrypt-dev \
        zip \
        unzip \
    && rm -rf /var/lib/apt/lists/* \
    && pecl install mcrypt-1.0.4 \
    && docker-php-ext-enable mcrypt \
    && docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install -j$(nproc) gd pdo pdo_mysql opcache mbstring zip xml intl curl \
    && a2enmod rewrite

# Set recommended PHP.ini settings
RUN { \
        echo 'upload_max_filesize = 100M'; \
        echo 'post_max_size = 100M'; \
        echo 'max_execution_time = 600'; \
        echo 'max_input_time = 600'; \
        echo 'memory_limit = 512M'; \
        echo 'date.timezone = "UTC"'; \
    } > /usr/local/etc/php/conf.d/recommended.ini

# Enable AutoProfile for PHP which is currently opt-in beta
#RUN echo "instana.enable_auto_profile=1" > "/usr/local/etc/php/conf.d/zzz-instana-extras.ini"

# relax permissions on status
#COPY status.conf /etc/apache2/mods-available/status.conf
# Enable Apache mod_rewrite and status
#RUN a2enmod rewrite && a2enmod status

WORKDIR /var/www/html

COPY COPY . /var/www/html


COPY --from=composer /usr/bin/composer /usr/bin/composer
RUN composer install

# This is important. Symfony needs write permissions and we
# dont know the context in which the container will run, i.e.
# which user will be forced from the outside so better play
# safe for this simple demo.
RUN rm -Rf /var/www/var/*
RUN chown -R www-data /var/www
RUN chmod -R 777 /var/www
CMD ["apache2-foreground"]
EXPOSE 80

