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

## Licencia

Este proyecto es de código abierto bajo la licencia MIT.


## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
