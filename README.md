# Lucy's Celebration - Una Sorpresa Elegante

Proyecto web elegante para la celebración de Lucy. Una invitación interactiva construida con Laravel 9, Vue 3 y Tailwind CSS.

## Características

- **Página de inicio interactiva** con contador de regresión en tiempo real
- **Diseño elegante y receptivo** con tema personalizado
- **Componente Vue 3** para interactividad
- **Tailwind CSS** para estilos modernos
- **Fuentes personalizadas** (Noto Serif, Plus Jakarta Sans, Pinyon Script)
- **Iconos Material Symbols** integrados

## Requisitos

- PHP 8.0+
- Composer
- Node.js 14+
- npm o yarn

## Instalación

1. **Clonar el repositorio**
   ```bash
   git clone <repository-url>
   cd INV
   ```

2. **Instalar dependencias PHP**
   ```bash
   composer install
   ```

3. **Instalar dependencias Node**
   ```bash
   npm install
   ```

4. **Copiar archivo de configuración**
   ```bash
   cp .env.example .env
   ```

5. **Generar clave de aplicación**
   ```bash
   php artisan key:generate
   ```

6. **Compilar assets**
   ```bash
   npm run build
   ```

## Desarrollo

Para iniciar el servidor de desarrollo:

**Terminal 1 - Laravel:**
```bash
php artisan serve
```

**Terminal 2 - Vite (Hot reload):**
```bash
npm run dev
```

La aplicación estará disponible en `http://localhost:8000`

## Compilación para producción

```bash
npm run build
php artisan serve
```

## Estructura del Proyecto

```
├── resources/
│   ├── css/
│   │   └── app.css           # Estilos Tailwind
│   ├── js/
│   │   ├── app.js            # Punto de entrada Vue
│   │   └── App.vue           # Componente principal
│   └── views/
│       └── welcome.blade.php # Template Blade
├── vite.config.js            # Configuración Vite
├── tailwind.config.js        # Configuración Tailwind
├── postcss.config.js         # Configuración PostCSS
└── package.json              # Dependencias Node

```

## Tecnologías

- **Backend:** Laravel 9
- **Frontend:** Vue 3
- **Build Tool:** Vite
- **Styling:** Tailwind CSS
- **CSS Processing:** PostCSS, Autoprefixer
- **Icons:** Material Symbols

## Características del Componente

- Contador de regresión dinámico (Días, Horas, Minutos, Segundos)
- Se actualiza cada segundo
- Diseño responsivo
- Tema de color personalizado para la celebración

## Despliegue en Railway

### Pasos para desplegar:

1. **Conectar repositorio GitHub**
   - Ve a [Railway.app](https://railway.app)
   - Inicia sesión con tu cuenta de GitHub
   - Crea un nuevo proyecto
   - Selecciona "Deploy from GitHub repo"
   - Conecta el repositorio `Invitation_lucy`

2. **Configurar variables de entorno**
   - En el dashboard de Railway, ve a "Variables"
   - Copia las variables del archivo `.env.example`
   - Asegúrate de que `APP_ENV=production` y `APP_DEBUG=false`

3. **Variables necesarias en Railway:**
   ```
   APP_NAME=Lucy's Celebration
   APP_ENV=production
   APP_DEBUG=false
   APP_KEY=base64:... (Railway lo genera automáticamente)
   APP_URL=tu-dominio.railway.app
   ```

4. **Railway detectará automáticamente:**
   - El Dockerfile
   - Las dependencias de PHP (composer.json)
   - Las dependencias de Node (package.json)

5. **El despliegue incluye:**
   - ✓ Instalación de dependencias PHP
   - ✓ Instalación de dependencias Node
   - ✓ Compilación de assets (Vue + Tailwind)
   - ✓ Generación de clave APP_KEY
   - **No ejecuta migraciones** (solo muestra la página)

6. **Esperar a que se compile y despliegue**
   - Railway ejecutará el Dockerfile
   - Compilará los assets
   - Tu sitio estará disponible en el URL de Railway

### Troubleshooting:

- **Error de permisos:** Railway maneja los permisos automáticamente
- **Assets no se cargan:** Asegúrate de que `npm run build` se ejecutó (verificar en los logs)
- **Página en blanco:** Revisar los logs de Railway para ver errores

## Licencia

Este proyecto es de código abierto bajo la licencia MIT.

