FROM  php:7.2.34-apache
WORKDIR /var/www/html
RUN apt update && php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');" && apt -y install zip  && php composer-setup.php --install-dir=/usr/local/bin --filename=composer
