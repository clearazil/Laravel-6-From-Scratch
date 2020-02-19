FROM php:7.4-apache
RUN apt-get update -y && apt-get install -y libonig-dev libmcrypt-dev openssl nano
RUN docker-php-ext-install pdo_mysql
RUN mkdir /app
COPY .docker/vhosts.conf /etc/apache2/sites-available/000-default.conf
WORKDIR /app
RUN chown -R www-data:www-data /app && a2enmod rewrite
