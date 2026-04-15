# Guía de Despliegue en Railway

## Información General

Este proyecto está configurado para desplegar en Railway usando Docker.

## Archivos de Configuración

- **Dockerfile** - Define el ambiente con PHP 8.1, Apache, Node.js
- **Procfile** - Define el comando para ejecutar la aplicación
- **railway.json** - Configuración específica para Railway
- **apache.conf** - Configuración de Apache para Laravel

## Proceso de Despliegue

### Paso 1: Preparar el Repositorio

El repositorio debe contener todos los archivos necesarios:

```
✓ Procfile
✓ Dockerfile
✓ railway.json
✓ apache.conf
✓ composer.json
✓ package.json
✓ .env.example
```

### Paso 2: Conectar a Railway

1. Registrarse en https://railway.app
2. Conectar cuenta de GitHub
3. Crear nuevo proyecto
4. Seleccionar el repositorio `Invitation_lucy`

### Paso 3: Configurar Variables de Entorno

En el panel de Railway, agregar las siguientes variables:

```
APP_NAME=Lucy's Celebration
APP_ENV=production
APP_DEBUG=false
APP_KEY=base64:... (se generará automáticamente)
APP_URL=tu-app.railway.app
LOG_CHANNEL=stack
LOG_LEVEL=info
```

### Paso 4: Despliegue Automático

Railway ejecutará automáticamente:

1. **Constructor de imagen Docker**
   - Descarga la imagen base de PHP 8.1 con Apache
   - Instala extensiones de PHP necesarias
   - Instala Node.js 18
   - Instala Composer

2. **Instalación de Dependencias**
   ```bash
   composer install --no-interaction --optimize-autoloader --no-dev
   npm install
   ```

3. **Construcción de Assets**
   ```bash
   npm run build
   ```
   - Vite compila Vue y Tailwind
   - Los assets se guardan en `public/build/`

4. **Generación de Clave**
   ```bash
   php artisan key:generate --force
   ```

5. **Configuración de Permisos**
   - Storage y bootstrap/cache son configurados correctamente

6. **Inicio del Servidor**
   ```bash
   apache2-foreground
   ```

### Paso 5: Verificar Despliegue

1. Ir al URL proporcionado por Railway
2. Ver que la página de Lucy aparece correctamente
3. Verificar que el contador regresivo funciona
4. Revisar los logs en Railway si hay problemas

## Estructura de Rutas

- `/` - Muestra la página principal de Lucy's Celebration
- Todos los assets se sirven desde `public/build/`

## Notas Importantes

- **No ejecuta migraciones** - Solo muestra la página
- **Base de datos opcional** - La aplicación no requiere BD para funcionar
- **Assets compilados** - Se compilan automáticamente durante el build
- **Logs** - Disponibles en el dashboard de Railway para debugging

## Troubleshooting

### La aplicación no se despliega

1. Revisar logs en Railway
2. Asegurar que el Dockerfile está presente
3. Verificar que `composer.json` y `package.json` son válidos

### Los assets no cargan

1. Verificar que `npm run build` completó sin errores
2. Revisar que `public/build/manifest.json` existe
3. Asegurar que hay espacio en disco (Railway tiene límite)

### Errores de PHP

1. Revisar que `APP_KEY` está configurado
2. Ver logs en Railway para errores específicos
3. Asegurar que versión de PHP es 8.1+

## Actualización de Cambios

Cada push a la rama `main` dispara automáticamente un nuevo despliegue en Railway.

```bash
git add .
git commit -m "Tu mensaje"
git push origin main
```

Railway detectará los cambios y compilará/desplegará automáticamente.

## Recursos Útiles

- [Documentación de Railway](https://docs.railway.app)
- [Laravel en Railway](https://docs.railway.app/guides/rest-api)
- [Documentación de Vite](https://vitejs.dev)
