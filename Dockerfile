# Usa la imagen oficial de PHP con FPM como base
FROM php:8.2-fpm

# Instala las extensiones necesarias
RUN apt-get update && apt-get install -y \
    libpng-dev \
    libjpeg-dev \
    libfreetype6-dev \
    libzip-dev \
    unzip \
    git \
    && docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install gd zip pdo pdo_mysql

# Establece el directorio de trabajo dentro del contenedor
WORKDIR /var/www/html

# Copia el archivo composer.lock y composer.json
COPY composer.lock composer.json ./

# Instala Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Instala las dependencias de Composer
RUN composer install --no-autoloader --no-scripts

# Copia el resto del código de tu aplicación al directorio de trabajo
COPY . .

# Genera el autoload de Composer
RUN composer dump-autoload

# Configura permisos (ajusta según tus necesidades)
RUN chown -R www-data:www-data /var/www/html/storage /var/www/html/bootstrap/cache

# Expone el puerto en el que se ejecuta tu aplicación
EXPOSE 8000

# Comando para ejecutar PHP-FPM
CMD ["php-fpm"]