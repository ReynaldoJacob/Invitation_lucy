FROM php:8.3-apache

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

# Instalar Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

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

# Instalar dependencias PHP con configuración relajada
ENV COMPOSER_ALLOW_SUPERUSER=1
ENV COMPOSER_NO_INTERACTION=1
RUN composer config --global --auth http-basic.repo.packagist.com token token 2>/dev/null || true && \
    composer install --prefer-dist --no-progress --no-dev 2>&1 || \
    composer install --prefer-dist --no-progress --no-dev --no-audit 2>&1 || \
    composer update --prefer-dist --no-progress --no-dev 2>&1 || true

# Instalar dependencias Node.js
RUN npm ci --only=production 2>&1 || npm install --omit=dev 2>&1 || npm install 2>&1

# Compilar assets
RUN npm run build 2>&1

# Generar clave de aplicación
RUN php artisan key:generate --force 2>&1 || true

# Configurar permisos
RUN chown -R www-data:www-data /var/www/html && \
    chmod -R 755 /var/www/html/storage && \
    chmod -R 755 /var/www/html/bootstrap/cache

EXPOSE 80

CMD ["apache2-foreground"]
