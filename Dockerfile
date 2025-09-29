# Use an official PHP runtime with Apache as the base image
FROM php:8.3-apache-bookworm

# Enable the Apache rewrite module (necessary for .htaccess files to work)
RUN a2enmod rewrite

# Copy our custom Apache virtual host configuration
COPY 000-default.conf /etc/apache2/sites-available/000-default.conf

# Set the working directory inside the container
WORKDIR /var/www/html

# Copy our application files
COPY index.php .
COPY .htaccess .

# Inform Docker that the container listens on port 80
EXPOSE 80