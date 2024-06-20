# Use the official PHP 7.3.33 image
FROM php:7.3.33-fpm

# Set the working directory in the container
WORKDIR /var/www/html

# Install dependencies
RUN apt-get update && \
    apt-get install -y \
        libzip-dev \
        unzip \
        libpng-dev \
        libjpeg-dev \
        libfreetype6-dev \
        libpq-dev \
        libonig-dev \
        curl \
        git \
        supervisor \
        nano \
        && rm -rf /var/lib/apt/lists/* \
        && docker-php-ext-install pdo pdo_mysql zip gd mbstring exif pcntl

# Enable Apache modules
RUN a2enmod rewrite headers

# Copy existing application directory permissions
RUN usermod -u 1000 www-data

# Install Composer globally
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Copy application files
COPY . .

# Install Laravel dependencies
RUN composer install --no-interaction

# Set permissions for Laravel
RUN chown -R www-data:www-data \
    /var/www/html/storage \
    /var/www/html/bootstrap/cache

# Expose port 80 and start Apache
EXPOSE 80

CMD ["apache2-foreground"]
