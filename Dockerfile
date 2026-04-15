FROM debian:bookworm-slim

# Instalar PHP y Apache desde cero
RUN apt-get update && apt-get install -y \
    apache2 \
    libapache2-mod-php8.3 \
    php8.3 \
    php8.3-pdo \
    php8.3-mysql \
    php8.3-zip \
    php8.3-xml \
    php8.3-mbstring \
    php8.3-cli \
    curl \
    git \
    unzip \
    && apt-get clean && rm -rf /var/lib/apt/lists/*

# Instalar Composer
RUN curl -sS https://getcomposer.org/installer | php8.3 -- --install-dir=/usr/local/bin --filename=composer

# Habilitar módulos de Apache necesarios
RUN a2enmod rewrite && \
    a2enmod php8.3

# Establecer directorio de trabajo
WORKDIR /var/www/html

# Copiar archivos del proyecto
COPY . .

# Configurar Apache
COPY apache.conf /etc/apache2/sites-available/000-default.conf

# Instalar dependencias PHP
ENV COMPOSER_ALLOW_SUPERUSER=1
RUN composer install --no-interaction --no-dev --optimize-autoloader --prefer-dist --no-progress 2>&1 || true

# Generar clave de aplicación
RUN php artisan key:generate --force 2>&1 || true

# Configurar permisos
RUN chown -R www-data:www-data /var/www/html && \
    chmod -R 755 /var/www/html/storage && \
    chmod -R 755 /var/www/html/bootstrap/cache

EXPOSE 80

CMD ["apache2ctl", "-D", "FOREGROUND"]
