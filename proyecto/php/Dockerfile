FROM php:8.2-apache

# Instalar mysqli
RUN docker-php-ext-install mysqli

# Habilitar el módulo de reescritura de Apache (opcional, útil para algunos proyectos)
RUN a2enmod rewrite
