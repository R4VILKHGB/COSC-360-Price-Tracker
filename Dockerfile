FROM php:8.0-apache


COPY html_redacted/ /var/www/html/

COPY css/ /var/www/html/css/
COPY images/ /var/www/html/images/
COPY javaScript/ /var/www/html/javaScript/
#COPY Project Documents/ /var/www/html/Project Documents/
COPY scripts/ /var/www/html/scripts/
COPY *.php /var/www/html/

RUN docker-php-ext-install mysqli pdo pdo_mysql

RUN chown -R www-data:www-data /var/www/html

RUN sed -i 's|DirectoryIndex index.php index.html|DirectoryIndex home.html index.php index.html|g' /etc/apache2/mods-enabled/dir.conf

EXPOSE 80
