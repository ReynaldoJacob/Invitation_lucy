FROM php:8.1-apache

# Instalar extensiones de PHP necesarias
RUN apt-get update && apt-get install -y \
    curl \
    git \
    zip \
    unzip \
    libzip-dev \
    libpq-dev \
    && docker-php-ext-install \
    pdo \
    pdo_mysql \
    zip \
    && a2enmod rewrite \
    && apt-get clean

# Instalar Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Instalar Node.js
RUN curl -fsSL https://deb.nodesource.com/setup_18.x | bash - && \
    apt-get install -y nodejs

# Establecer directorio de trabajo
WORKDIR /var/www/html

# Copiar archivos del proyecto
COPY . .

# Configurar Apache
COPY apache.conf /etc/apache2/sites-available/000-default.conf

# Instalar dependencias PHP
RUN composer install --no-interaction --optimize-autoloader --no-dev

# Instalar dependencias Node.js
RUN npm install

# Compilar assets
RUN npm run build

# Generar clave de aplicación si no existe
RUN php artisan key:generate --force || true

# Configurar permisos
RUN chown -R www-data:www-data /var/www/html && \
    chmod -R 755 /var/www/html/storage && \
    chmod -R 755 /var/www/html/bootstrap/cache

EXPOSE 80

CMD ["apache2-foreground"]
