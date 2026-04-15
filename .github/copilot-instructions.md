# Instrucciones del Proyecto - Lucy's Celebration

## Descripción del Proyecto

Este es un proyecto Laravel 9 con Vue 3 que implementa una página de invitación elegante para la celebración de Lucy.

## Tecnologías

- **Laravel 9** - Framework PHP
- **Vue 3** - Framework JavaScript
- **Vite** - Build tool moderno
- **Tailwind CSS** - Framework CSS
- **PostCSS & Autoprefixer** - Procesamiento de CSS

## Estructura del Proyecto

### Rutas Principales

- `resources/js/app.js` - Punto de entrada de Vue
- `resources/js/App.vue` - Componente principal
- `resources/css/app.css` - Estilos Tailwind
- `resources/views/welcome.blade.php` - Template Blade

### Configuraciones

- `vite.config.js` - Configuración de Vite
- `tailwind.config.js` - Configuración de Tailwind
- `postcss.config.js` - Configuración de PostCSS

## Comandos Disponibles

### Desarrollo

```bash
# Terminal 1 - Servidor Laravel
php artisan serve

# Terminal 2 - Vite con Hot Reload
npm run dev
```

### Producción

```bash
# Compilar assets
npm run build

# Iniciar servidor
php artisan serve
```

## Características

- Contador de regresión dinámico (actualización cada segundo)
- Diseño responsivo con Tailwind CSS
- Componente Vue 3 con state reactivo
- Fuentes personalizadas elegantes
- Iconos Material Symbols
- Tema de color personalizado

## Notas para Desarrollo

1. Los assets se compilan automáticamente con Vite en modo desarrollo
2. El `manifest.json` se genera en `public/build/` después de compilar
3. Las fuentes están importadas desde Google Fonts en el archivo CSS
4. El countdown se calcula para el 28 de septiembre de 2026 a las 4:00 PM

## Personalización

Para cambiar la fecha objetivo del countdown, edita el archivo `resources/js/App.vue` en el método `calculateCountdown()`:

```javascript
const targetDate = new Date(2026, 8, 28, 16, 0, 0).getTime();
```

Para ajustar colores, edita `tailwind.config.js` en la sección `extend.colors`.
