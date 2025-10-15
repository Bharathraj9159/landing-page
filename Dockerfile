# Use official PHP Apache image
FROM php:8.2-apache

# Copy project files into Apache root directory
COPY . /var/www/html/

# Expose port 80
EXPOSE 80

# Start Apache
CMD ["apache2-foreground"]
