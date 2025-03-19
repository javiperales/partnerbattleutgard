# Usar la imagen oficial de PHP con Apache
FROM php:8.2-apache

# Copiar archivos del proyecto al contenedor
COPY . /var/www/html/

# Exponer el puerto 80
EXPOSE 80
