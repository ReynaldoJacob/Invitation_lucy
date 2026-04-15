# Configuración para Railway

## Variables de Entorno Necesarias

En el dashboard de Railway, en la sección **Variables**, configura lo siguiente:

### Obligatorias:

```
APP_NAME=Lucy's Celebration
APP_ENV=production
APP_DEBUG=false
APP_KEY=base64:NdF29VhhMn/vtXw5JlaMfv3PlklnqWhAwngWNcAU2Mw=
APP_URL=https://tu-dominio.railway.app
LOG_CHANNEL=stack
LOG_LEVEL=info
```

### Opcionales (Base de datos):

Si en el futuro necesitas base de datos:

```
DB_CONNECTION=mysql
DB_HOST=tu-host.railway.app
DB_PORT=3306
DB_DATABASE=lucy
DB_USERNAME=root
DB_PASSWORD=tu-contraseña
```

## Proceso de Despliegue

1. **Conecta tu rama `main` a Railway**
   - Ya debería estar vinculada

2. **Espera a que se compile**
   - Dockerfile construirá la imagen
   - npm instalará dependencias
   - Assets se compilarán

3. **Configura las variables en Railway**
   - Ve al servicio → Variables
   - Agrega las variables anteriores
   - **Haz un redeploy** para que se apliquen

4. **Haz un redeploy**
   ```bash
   git commit --allow-empty -m "Trigger Railway redeploy"
   git push origin main
   ```

## Verificación

- Accede a tu URL de Railway
- Deberías ver la página de Lucy's Celebration
- El contador regresivo debe funcionar
- Los estilos deben verse correctamente

## Troubleshooting

### Error 404
- Verifica que APP_URL sea correcto
- Los assets deben estar en `public/build/`

### Página sin estilos
- Limpia caché del navegador (Ctrl+Shift+Del)
- Verifica los logs en Railway

### Error de aplicación
- Revisa los logs: Dashboard → Logs
- Asegúrate de que APP_KEY está configurada
- Verifica que APP_ENV=production

## Notas Importantes

- **No ejecuta migraciones** (configurado para solo mostrar página)
- **Assets precompilados** en `public/build/` (compilados localmente)
- **Usa `php artisan serve`** en puerto 8000
- La APP_KEY ya está lista en el repositorio
