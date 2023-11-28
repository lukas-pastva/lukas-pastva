# Use an official PHP image with Apache
FROM php:8.0-apache

# Install YAML extension
RUN pecl install yaml-2.2.1 && docker-php-ext-enable yaml

# Copy your PHP script into the container
COPY cv.php /var/www/html/

# Expose port 80
EXPOSE 80
