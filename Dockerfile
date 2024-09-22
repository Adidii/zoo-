# Base image for PHP with Apache
FROM php:8.2-apache

# Set environment variables
ENV APACHE_DOCUMENT_ROOT=/var/www/html/public

# Enable Apache mod_rewrite (needed for Symfony routing)
RUN a2enmod rewrite

# Install required packages and PHP extensions
RUN apt-get update && apt-get install -y \
    git \
    unzip \
    libpq-dev \
    libzip-dev \
    && docker-php-ext-install pdo_pgsql pgsql zip

# Install Composer globally
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Set the working directory inside the container
WORKDIR /var/www/html

# Copy project files to the working directory in the container
COPY . .

# Install Symfony dependencies using Composer
RUN composer install

# Ensure permissions
RUN chown -R www-data:www-data /var/www/html

# Expose the Apache port
EXPOSE 80

# Start Apache server
CMD ["apache2-foreground"]
