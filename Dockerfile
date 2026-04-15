FROM php:8.1-apache

# Instalar extensiones de PHP necesarias
RUN apt-get update && apt-get install -y \
    curl \
    git \
    unzip \
    libzip-dev \
    libpq-dev \
    libfreetype6-dev \
    libjpeg62-turbo-dev \
    libpng-dev \
    && docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install \
    pdo \
    pdo_mysql \
    zip \
    gd \
    && a2enmod rewrite \
    && rm -rf /var/lib/apt/lists/*

# Instalar Composer (última versión)
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer && \
    composer self-update

# Instalar Node.js 18
RUN curl -fsSL https://deb.nodesource.com/setup_18.x | bash - && \
    apt-get install -y nodejs && \
    rm -rf /var/lib/apt/lists/*

# Establecer directorio de trabajo
WORKDIR /var/www/html

# Copiar archivos del proyecto
COPY . .

# Configurar Apache
COPY apache.conf /etc/apache2/sites-available/000-default.conf

# Instalar dependencias PHP (actualizar composer lock si es necesario)
RUN composer install --no-interaction --no-dev --optimize-autoloader 2>&1 || \
    (rm -f composer.lock && composer install --no-interaction --no-dev --optimize-autoloader)

# Instalar dependencias Node.js
RUN npm ci --only=production || npm install

# Compilar assets
RUN npm run build

# Generar clave de aplicación
RUN php artisan key:generate --force || true

# Configurar permisos
RUN chown -R www-data:www-data /var/www/html && \
    chmod -R 755 /var/www/html/storage && \
    chmod -R 755 /var/www/html/bootstrap/cache

EXPOSE 80

CMD ["apache2-foreground"]
