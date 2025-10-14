# Use PHP + Apache image
FROM php:8.0-apache

# Copy project files to container
COPY . /var/www/html/

# Expose port 80
EXPOSE 80
