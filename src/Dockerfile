# Use an official PHP image with Apache
FROM php:8.0-apache

# Install libyaml
RUN apt-get update && \
    apt-get install -y libyaml-dev

# Install YAML extension
RUN pecl install yaml-2.2.1 && \
    docker-php-ext-enable yaml

# Copy your PHP script into the container
COPY src/cv.php /var/www/html/
COPY cv.yaml /var/www/html/

EXPOSE 80