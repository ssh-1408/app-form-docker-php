FROM php:8.1-apache

# Install PHP extensions
RUN docker-php-ext-install mysqli && docker-php-ext-enable mysqli

# Copy PHP and HTML files into the image
COPY php/ /var/www/html/
COPY html/ /var/www/html/html/