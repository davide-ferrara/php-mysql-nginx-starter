# Usa un'immagine base di PHP-FPM
FROM php:8.0-fpm

# Installa le estensioni di PHP necessarie, ad esempio per MySQL
RUN docker-php-ext-install mysqli pdo pdo_mysql

# Copia il file di configurazione personalizzato di PHP (se ne hai uno)
#COPY php.ini /usr/local/etc/php/

# Imposta la directory di lavoro per PHP
WORKDIR /var/www/html

# Espone la porta 9000 per PHP-FPM
EXPOSE 9000

