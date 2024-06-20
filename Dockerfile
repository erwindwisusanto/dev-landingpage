FROM php:7.3.33-fpm

RUN apt-get update && apt-get install -y \
    git \
    curl \
    libpng-dev \
    libjpeg62-turbo-dev \
    libfreetype6-dev \
    libonig-dev \
    libxml2-dev \
    zip \
    unzip \
    pkg-config

RUN apt clean && rm -rf /var/lib/apt/lists/*

RUN docker-php-ext-configure gd --with-jpeg=/usr/include/ --with-freetype=/usr/include/ \
    && docker-php-ext-install gd

RUN docker-php-ext-install pdo_mysql mbstring exif pcntl bcmath

COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

WORKDIR /var/www

COPY . .

RUN composer install --no-dev --optimize-autoloader

RUN chown -R www-data:www-data /var/www \
    && chmod -R 755 /var/www \
    && chown -R www-data:www-data /var/www/storage \
    && chmod -R 755 /var/www/storage \
    && chown -R www-data:www-data /var/www/vendor \
    && chmod -R 755 /var/www/vendor

RUN php artisan key:generate

EXPOSE 8000

CMD ["php-fpm"]
