
FROM php:8.1-apache


RUN apt-get update && apt-get install -y libpng-dev libjpeg-dev libfreetype6-dev && \
    docker-php-ext-configure gd --with-freetype --with-jpeg && \
    docker-php-ext-install gd


RUN a2enmod rewrite

WORKDIR /var/www/html


COPY . /var/www/html/


EXPOSE 80

CMD ["apache2-foreground"]
