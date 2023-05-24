FROM php:8.0-apache
RUN apt-get update && \
    apt-get install -y wget && \
    wget https://getcomposer.org/installer -O /tmp/composer-setup.php && \
    php /tmp/composer-setup.php --install-dir=/usr/local/bin --filename=composer && \
    rm /tmp/composer-setup.php

RUN apt-get update && \
    apt-get install -y wget && \
    wget https://phar.phpunit.de/phpunit-9.phar -O /usr/local/bin/phpunit && \
    chmod +x /usr/local/bin/phpunit
ENTRYPOINT [ "./vendor/bin/phpunit" ] 
WORKDIR /var/www/html