FROM phpdockerio/php:8.3-fpm
WORKDIR "/application"

FROM php:8.3-fpm

# Instalações de pacotes necessários
RUN apt-get update && \
    apt-get install -y libpq-dev && \
    apt-get clean

# Instala o driver pdo_pgsql
RUN docker-php-ext-install pdo_pgsql
