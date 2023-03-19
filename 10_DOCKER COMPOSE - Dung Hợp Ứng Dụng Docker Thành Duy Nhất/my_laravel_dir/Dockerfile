# Base image
FROM php:8.0.11-apache

# Copy Apache configuration file
COPY apache2.conf /etc/apache2/apache2.conf

# Copy .htaccess file
COPY .htaccess /var/www/html/

# Set working directory
WORKDIR /var/www/html

# Set environment variables
ENV APACHE_DOCUMENT_ROOT /var/www/html

# Enable Apache modules
RUN a2enmod rewrite

# Set DirectoryIndex
RUN sed -i "s/DirectoryIndex /DirectoryIndex index.php index.html /g" /etc/apache2/apache2.conf

# Start Apache
CMD ["apache2-foreground"]
