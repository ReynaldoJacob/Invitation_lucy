#!/bin/bash
set -e

# Generar clave de aplicación si no existe
if [ -z "$APP_KEY" ]; then
    php artisan key:generate --force || true
fi

# Ejecutar migraciones si es necesario (comentado por ahora)
# php artisan migrate --force

# Iniciar aplicación
php artisan serve --host=0.0.0.0 --port=8000
