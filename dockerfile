# syntax=docker/dockerfile:1
FROM wordpress:php8.2-fpm-alpine
ENV PHP_IDE_CONFIG 'serverName=wordpress'
RUN apk add --no-cache $PHPIZE_DEPS \
    && apk add --update linux-headers \
    && pecl install xdebug-3.2.1 \
    && docker-php-ext-enable xdebug\
    && echo "xdebug.mode=debug" >> /usr/local/etc/php/conf.d/docker-php-ext-xdebug.ini \
    && echo "xdebug.client_host = host.docker.internal" >> /usr/local/etc/php/conf.d/docker-php-ext-xdebug.ini \
    && echo "xdebug.start_with_request = yes" >> /usr/local/etc/php/conf.d/docker-php-ext-xdebug.ini


