FROM php:7-apache

RUN apt-get update && docker-php-ext-install pdo_mysql

EXPOSE 80