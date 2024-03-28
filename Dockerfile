###FROM ubuntu:latest
###LABEL authors="ritvikkhurana"
##
### Use an official PHP runtime as a parent image with Apache
### Use an official PHP runtime as a parent image with Apache
##FROM php:8.0-apache
##
### Set the working directory to /var/www and copy the project files to this location
##WORKDIR /var/www
##COPY . /var/www/
##
### Use /var/www/public_html as the root directory for the Apache server
##RUN sed -i 's|/var/www/html|/var/www/public_html|g' /etc/apache2/sites-available/000-default.conf
##
### Expose port 80
##EXPOSE 80
##
### Install mysqli and other extensions you might need
##RUN docker-php-ext-install mysqli pdo pdo_mysql
##
### Grant permissions for the Apache user
##RUN chown -R www-data:www-data /var/www
#
#
## Use an official PHP runtime as a parent image with Apache
#FROM php:8.0-apache
#
## Set the working directory to /var/www/html
#WORKDIR /var/www/html
#
## Copy the website's files into the container
#COPY . /var/www/html/
#
## Change the Apache server's default start page to xxxyyy.php
#RUN echo 'DirectoryIndex home.php' > /etc/apache2/conf-available/docker-php.conf
#
## Expose port 80 to the outside world
#EXPOSE 80
#
## Install mysqli extension for PHP, if needed
#RUN docker-php-ext-install mysqli pdo pdo_mysql


# Use an official PHP runtime as a parent image with Apache
#FROM php:8.0-apache

## Set the working directory to /var/www and copy the project files to this location
#WORKDIR /var/www
#COPY . /var/www/
#
## Configure Apache to serve the public_html directory
#RUN sed -i 's|/var/www/html|/var/www/html_redacted|g' /etc/apache2/sites-available/000-default.conf
#
## Set home.html as the priority index file
#RUN echo "DirectoryIndex home.html" > /etc/apache2/conf-available/directory-index.conf
#RUN a2enconf directory-index
#
## Expose port 80
#EXPOSE 80
#
## Install mysqli and other extensions you might need
#RUN docker-php-ext-install mysqli pdo pdo_mysql
#
## Grant permissions for the Apache user
#RUN chown -R www-data:www-data /var/www



# Use the official PHP image with Apache
FROM php:8.0-apache

# Copy the contents of the html_redacted directory to /var/www/html in the container
# This sets it as the root directory for the Apache web server
COPY html_redacted/ /var/www/html/

# Additionally, copy other necessary directories and files into the container
COPY css/ /var/www/html/css/
COPY images/ /var/www/html/images/
COPY javaScript/ /var/www/html/javaScript/
#COPY Project Documents/ /var/www/html/Project Documents/
COPY scripts/ /var/www/html/scripts/
COPY *.php /var/www/html/

# Install any needed PHP extensions (e.g., mysqli if you're using MySQL)
RUN docker-php-ext-install mysqli pdo pdo_mysql

# Set the permissions so that the web server can read and write to these files
RUN chown -R www-data:www-data /var/www/html

# Although it's not typically required to explicitly set the DirectoryIndex to home.html
# if the server configuration isn't picking it up automatically, you can specify it
RUN sed -i 's|DirectoryIndex index.php index.html|DirectoryIndex home.html index.php index.html|g' /etc/apache2/mods-enabled/dir.conf

# Expose port 80 to access the server
EXPOSE 80
