<!DOCTYPE html>

<html class="light" lang="es"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>Confirmación RSVP - 65 Años de Lucy</title>
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<link href="https://fonts.googleapis.com/css2?family=Noto+Serif:ital,wght@0,400;0,700;1,400&amp;family=Plus+Jakarta+Sans:wght@400;500;600;700&amp;family=Alex+Brush&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Tangerine:wght@400;700&display=swap" rel="stylesheet">
<style>
        @font-face {
            font-family: 'Howell';
            src: local('Noto Serif'), local('Georgia');
        }
        body {
            font-family: 'Plus Jakarta Sans', sans-serif;
            background-color: #FCFAF2;
            -webkit-font-smoothing: antialiased;
        }
        .font-serif { font-family: 'Noto Serif', serif; }
        .font-howell { font-family: 'Alex Brush', cursive; }

        .floral-header {
            position: absolute;
            top: 0;
            left: 50%;
            transform: translateX(-50%);
            width: min(100%, 500px);
            max-width: 600px;
            height: 200px;
            background-image: url(https://lh3.googleusercontent.com/aida-public/AB6AXuAFwoqNm0aDz0YqD-LjAD6WPDkFAE10NXiS4WTvXcCiZ9e5zXB4s0MX_wwsyLEO4VBap8TZqY5ERibW82g5Ao-DTAeiCz-jMrruvXGhT4l5FMp9J7K827JjnCrdC8t0H2fuzphftXnxRS_XxCbyA6UxsTADqakXF-nBRl8gUcDNA8XzVPG3EffYXfcKTWB0qAfAQIussejCMT5NlEvJgK6n1XBqY_eUvsNp0m353fEuXCxB811uMUxMZoY-JitLGZ_2qOOrzlmAheE);
            background-size: cover;
            background-repeat: no-repeat;
            background-position: top center;
            opacity: 0.85;
            z-index: 0;
            pointer-events: none;
            -webkit-mask-image: linear-gradient(to bottom, black 40%, transparent 100%);
            mask-image: linear-gradient(to bottom, black 40%, transparent 100%);
        }
        @media (min-width: 768px) {
            .floral-header {
                height: 280px;
                width: 90%;
                max-width: 800px;
            }
        }
        .floral-footer {
            position: relative;
            width: min(100%, 500px);
            max-width: 600px;
            height: 250px;
            margin-left: auto;
            margin-right: auto;
            background-image: url(https://lh3.googleusercontent.com/aida-public/AB6AXuAFwoqNm0aDz0YqD-LjAD6WPDkFAE10NXiS4WTvXcCiZ9e5zXB4s0MX_wwsyLEO4VBap8TZqY5ERibW82g5Ao-DTAeiCz-jMrruvXGhT4l5FMp9J7K827JjnCrdC8t0H2fuzphftXnxRS_XxCbyA6UxsTADqakXF-nBRl8gUcDNA8XzVPG3EffYXfcKTWB0qAfAQIussejCMT5NlEvJgK6n1XBqY_eUvsNp0m353fEuXCxB811uMUxMZoY-JitLGZ_2qOOrzlmAheE);
            background-size: cover;
            background-repeat: no-repeat;
            background-position: bottom center;
            opacity: 0.85;
            z-index: 0;
            margin-top: 20px;
            pointer-events: none;
            -webkit-mask-image: linear-gradient(to top, black 20%, transparent 100%);
            mask-image: linear-gradient(to top, black 20%, transparent 100%);
        }
        @media (min-width: 768px) {
            .floral-footer {
                height: 350px;
                width: 90%;
                max-width: 800px;
                margin-top: 40px;
            }
        }
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 300, 'GRAD' 0, 'opsz' 24;
        }
        @keyframes bubble-pop-in {
            0% {
                opacity: 0;
                transform: scale(0.5) translateY(20px);
            }
            100% {
                opacity: 1;
                transform: scale(1) translateY(0);
            }
        }
        .scroll-reveal {
            opacity: 0;
            transform: scale(0.8) translateY(30px);
        }
        .scroll-reveal.visible {
            animation: bubble-pop-in 0.6s ease-out forwards;
        }
    </style>
<script id="tailwind-config">
      tailwind.config = {
        darkMode: "class",
        theme: {
          extend: {
            "colors": {
                    "tertiary-container": "#c8918a",
                    "background": "#FCFAF2",
                    "tertiary-fixed": "#ffdad5",
                    "on-surface": "#1b1c17",
                    "primary-fixed-dim": "#f4b7b8",
                    "outline": "#837373",
                    "on-primary-container": "#522a2c",
                    "on-primary-fixed": "#321113",
                    "inverse-on-surface": "#f3f1e9",
                    "secondary-fixed-dim": "#e8bcbb",
                    "on-primary-fixed-variant": "#663b3c",
                    "secondary": "#785655",
                    "surface-container-low": "#f6f4ec",
                    "surface-variant": "#e4e3db",
                    "on-secondary": "#ffffff",
                    "primary": "#815253",
                    "inverse-primary": "#f4b7b8",
                    "tertiary-fixed-dim": "#f3b8b0",
                    "surface-dim": "#dcdad2",
                    "on-error": "#ffffff",
                    "on-tertiary-fixed-variant": "#653c36",
                    "surface-bright": "#fbf9f1",
                    "on-tertiary-container": "#512b26",
                    "secondary-fixed": "#ffdad9",
                    "primary-container": "#c89091",
                    "inverse-surface": "#30312c",
                    "on-tertiary-fixed": "#32120e",
                    "on-surface-variant": "#514444",
                    "on-secondary-fixed-variant": "#5e3f3e",
                    "on-secondary-fixed": "#2d1415",
                    "on-error-container": "#93000a",
                    "primary-fixed": "#ffdada",
                    "on-secondary-container": "#7b5858",
                    "surface-container-lowest": "#ffffff",
                    "on-primary": "#ffffff",
                    "surface-container-high": "#eae8e0",
                    "secondary-container": "#ffd2d1",
                    "tertiary": "#80534c",
                    "surface": "#FCFAF2",
                    "surface-container": "#f0eee6",
                    "surface-container-highest": "#e4e3db",
                    "on-tertiary": "#ffffff",
                    "outline-variant": "#d5c2c2",
                    "on-background": "#1b1c17",
                    "error-container": "#ffdad6",
                    "surface-tint": "#815253",
                    "error": "#ba1a1a"
            },
            "borderRadius": {
                    "DEFAULT": "0.125rem",
                    "lg": "0.25rem",
                    "xl": "0.5rem",
                    "full": "0.75rem"
            },
            "fontFamily": {
                    "headline": ["Noto Serif"],
                    "body": ["Plus Jakarta Sans"],
                    "label": ["Plus Jakarta Sans"],
                    "howell": ["Alex Brush"]
            }
          },
        },
      }
    </script>
</head>
<body class="bg-[#FCFAF2] text-on-surface min-h-screen flex flex-col items-center selection:bg-primary-fixed-dim selection:text-on-primary-fixed overflow-x-hidden">
<div class="relative min-h-screen w-full max-w-lg mx-auto flex flex-col overflow-hidden bg-[#FCFAF2]">
<!-- Floral Header -->
<div class="floral-header"></div>
<main class="relative flex-1 flex flex-col items-center pt-36 pb-32 overflow-hidden px-6">
<!-- Large Background '65' -->
<div class="absolute top-48 left-0 w-full flex items-center justify-center -z-10 pointer-events-none select-none">
<span class="text-[14rem] font-serif font-bold" style="color: rgba(244, 183, 184, 0.4);">65</span>
</div>
<!-- Content Section -->
<section class="w-full space-y-12 z-10 scroll-reveal">
<!-- Title Header -->
<div class="text-center space-y-2">
<p class="font-label text-[10px] tracking-[0.4em] text-on-surface-variant/80 uppercase mb-2">RSVP</p>
<h2 class="font-howell text-6xl text-primary leading-none">Confirmar</h2>
<h3 class="font-serif italic text-4xl text-on-surface tracking-tight -mt-2">Asistencia</h3>
</div>
<!-- Family Selection Card -->
<div class="w-full bg-white/40 backdrop-blur-sm p-10 rounded-3xl shadow-[0_4px_32px_rgba(129,82,83,0.05)] border border-primary/5 space-y-8 scroll-reveal">
<div class="space-y-1">
<h3 class="font-serif italic text-2xl text-primary">Tu Familia</h3>
<p class="text-sm text-on-surface-variant/70">Por favor, selecciona quiénes nos acompañarán.</p>
</div>
<div class="space-y-6">
<!-- RSVP Item: Juan Pérez -->
<div class="flex items-center justify-between group">
<label class="text-lg font-body text-on-surface cursor-pointer" for="guest-1">Juan Pérez</label>
<div class="relative inline-flex items-center cursor-pointer">
<input checked="" class="sr-only peer" id="guest-1" type="checkbox"/>
<div class="w-11 h-6 bg-surface-container-highest rounded-full peer peer-checked:after:translate-x-full after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:rounded-full after:h-5 after:w-5 after:transition-all peer-checked:bg-primary"></div>
</div>
</div>
<!-- RSVP Item: María García -->
<div class="flex items-center justify-between group">
<label class="text-lg font-body text-on-surface cursor-pointer" for="guest-2">María García</label>
<div class="relative inline-flex items-center cursor-pointer">
<input checked="" class="sr-only peer" id="guest-2" type="checkbox"/>
<div class="w-11 h-6 bg-surface-container-highest rounded-full peer peer-checked:after:translate-x-full after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:rounded-full after:h-5 after:w-5 after:transition-all peer-checked:bg-primary"></div>
</div>
</div>
<!-- RSVP Item: Luis Pérez -->
<div class="flex items-center justify-between group">
<label class="text-lg font-body text-on-surface cursor-pointer" for="guest-3">Luis Pérez</label>
<div class="relative inline-flex items-center cursor-pointer">
<input class="sr-only peer" id="guest-3" type="checkbox"/>
<div class="w-11 h-6 bg-surface-container-highest rounded-full peer peer-checked:after:translate-x-full after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:rounded-full after:h-5 after:w-5 after:transition-all peer-checked:bg-primary"></div>
</div>
</div>
</div>
</div>
<!-- Action Button -->
<div class="flex flex-col items-center gap-8 scroll-reveal">
<button class="w-full max-w-xs py-4 px-8 bg-primary text-on-primary font-label text-xs tracking-[0.2em] uppercase font-bold rounded-xl hover:bg-primary-container transition-all duration-300 shadow-xl active:scale-[0.98]">
                CONFIRMAR
            </button>
<p class="text-sm italic font-serif text-on-surface-variant/80 text-center px-4 leading-relaxed max-w-xs">
                "Celebrar la vida es compartirla con quienes más amamos."
            </p>
</div>
</section>
</main>
<!-- Floral Footer -->
<div class="floral-footer"></div>
</div>
<!-- Bottom Navigation Bar -->
<nav class="fixed bottom-0 left-1/2 -translate-x-1/2 w-full max-w-lg z-50 bg-[#FCFAF2]/90 backdrop-blur-xl border-t border-primary/5 flex justify-around items-center h-20 pb-safe px-8 shadow-[0_-10px_40px_rgba(129,82,83,0.05)]">
<a href="/" class="flex flex-col items-center justify-center text-on-surface-variant/40 hover:text-primary transition-all">
<span class="material-symbols-outlined text-2xl">auto_awesome</span>
<span class="font-label uppercase tracking-[0.15em] text-[9px] mt-1">Inicio</span>
</a>
<a href="/lugar" class="flex flex-col items-center justify-center text-on-surface-variant/40 hover:text-primary transition-all">
<span class="material-symbols-outlined text-2xl">location_on</span>
<span class="font-label uppercase tracking-[0.15em] text-[9px] mt-1">Lugar</span>
</a>
<a href="/rsvp" class="flex flex-col items-center justify-center text-primary transition-all scale-105">
<span class="material-symbols-outlined text-2xl" style="font-variation-settings: 'FILL' 1;">how_to_reg</span>
<span class="font-label uppercase tracking-[0.15em] text-[9px] font-bold mt-1">RSVP</span>
</a>
</nav>

<script>
// Scroll reveal animation with Intersection Observer
const observerOptions = {
    threshold: 0.1,
    rootMargin: '0px 0px -50px 0px'
};

const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
        if (entry.isIntersecting) {
            entry.target.classList.add('visible');
            observer.unobserve(entry.target);
        }
    });
}, observerOptions);

// Observe all scroll-reveal elements
document.querySelectorAll('.scroll-reveal').forEach(el => {
    observer.observe(el);
});
</script>
</body></html>
