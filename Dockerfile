FROM php:8-apache
COPY --from=composer:2.0 /usr/bin/composer /usr/local/bin/composer
#RUN mv "$PHP_INI_DIR/php.ini-production" "$PHP_INI_DIR/php.ini"
RUN apt-get update && apt-get install -y unzip
RUN apt-get purge --auto-remove && apt-get clean
RUN rm -rf /var/lib/apt/lists/*
# no-install-recommend


#### Build image to use in docker-compose.yam.
# docker build -t apache-php-composer ./ 