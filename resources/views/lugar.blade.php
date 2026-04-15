<!DOCTYPE html>

<html class="light" lang="es"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<link href="https://fonts.googleapis.com/css2?family=Noto+Serif:ital,wght@0,400;0,700;1,400&amp;family=Plus+Jakarta+Sans:wght@300;400;500;600;700&amp;family=Pinyon+Script&amp;family=Alex+Brush&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Tangerine:wght@400;700&display=swap" rel="stylesheet">
<script id="tailwind-config">
      tailwind.config = {
        darkMode: "class",
        theme: {
          extend: {
            "colors": {
                    "on-tertiary": "#ffffff",
                    "error-container": "#ffdad6",
                    "on-secondary-container": "#7b5858",
                    "on-primary-fixed": "#321113",
                    "error": "#ba1a1a",
                    "outline-variant": "#d5c2c2",
                    "inverse-on-surface": "#f3f1e9",
                    "on-tertiary-fixed-variant": "#653c36",
                    "on-surface": "#1b1c17",
                    "on-tertiary-fixed": "#32120e",
                    "tertiary": "#80534c",
                    "on-error": "#ffffff",
                    "surface-variant": "#e4e3db",
                    "primary-fixed-dim": "#f4b7b8",
                    "surface-container-highest": "#e4e3db",
                    "primary-container": "#c89091",
                    "surface-container": "#f0eee6",
                    "on-secondary-fixed": "#2d1415",
                    "surface-container-low": "#f6f4ec",
                    "on-error-container": "#93000a",
                    "secondary": "#785655",
                    "on-primary": "#ffffff",
                    "surface-bright": "#fbf9f1",
                    "on-secondary": "#ffffff",
                    "secondary-container": "#ffd2d1",
                    "outline": "#837373",
                    "tertiary-fixed-dim": "#f3b8b0",
                    "inverse-surface": "#30312c",
                    "primary": "#815253",
                    "secondary-fixed": "#ffdad9",
                    "on-surface-variant": "#514444",
                    "on-secondary-fixed-variant": "#5e3f3e",
                    "background": "#FCFAF2",
                    "surface-dim": "#dcdad2",
                    "surface": "#FCFAF2",
                    "on-primary-fixed-variant": "#663b3c",
                    "tertiary-container": "#c8918a",
                    "on-background": "#1b1c17",
                    "on-primary-container": "#522a2c",
                    "secondary-fixed-dim": "#e8bcbb",
                    "inverse-primary": "#f4b7b8",
                    "tertiary-fixed": "#ffdad5",
                    "surface-container-lowest": "#ffffff",
                    "surface-container-high": "#eae8e0",
                    "on-tertiary-container": "#512b26",
                    "surface-tint": "#815253",
                    "primary-fixed": "#ffdada"
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
                    "script": ["Pinyon Script"],
                    "howell": ["Alex Brush"]
            }
          },
        }
      }
    </script>
<style>
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 300, 'GRAD' 0, 'opsz' 24;
        }
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
        mask-image: linear-gradient(to top, black 20%, transparent 100%)
        }
        @media (min-width: 768px) {
            .floral-footer {
                height: 350px;
                width: 90%;
                max-width: 800px;
                margin-top: 40px;
            }
        }
        body {
            min-height: max(884px, 100dvh);
            background-color: #FCFAF2;
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
<script>
    window.lugarPage = function() {
        return {
            linkId: new URLSearchParams(window.location.search).get('link_id'),
        }
    };

    window.toggleAudio = function() {
        const audio = document.getElementById('background-music');
        if (!audio) return;
        if (audio.paused) {
            audio.play().catch(e => console.log('Play prevented:', e));
        } else {
            audio.pause();
        }
    };
</script>
<script src="https://cdn.jsdelivr.net/npm/@hotwired/turbo@8.0.12/dist/turbo.es2017-umd.js"></script>
<script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
</head>
<body class="bg-[#FCFAF2] text-on-surface font-body min-h-screen selection:bg-primary-fixed selection:text-on-primary-fixed" x-data="lugarPage()">
<!-- Audio Player Global -->
<audio id="background-music" loop style="display: none;" data-turbo-permanent>
<source src="/hasta-mi-final.mp4" type="audio/mp4">
</audio>
<div class="relative min-h-screen flex flex-col max-w-lg mx-auto overflow-hidden bg-[#FCFAF2]">
<!-- Floral Header -->
<div class="floral-header"></div>
<!-- Main Content Canvas -->
<main class="relative w-full flex-1 flex flex-col items-center pt-36 pb-32 overflow-hidden px-6">
<!-- Hero Title Section -->
<section class="relative flex flex-col items-center justify-center text-center mb-12 z-10 scroll-reveal">
<div class="absolute inset-0 flex items-center justify-center -z-10 pointer-events-none">
<span class="text-[12rem] font-headline font-bold select-none" style="color: rgba(244, 183, 184, 0.4);">65</span>
</div>
<div class="mt-8">
<h2 class="text-6xl font-howell text-primary leading-none">
                Lucy
            </h2>
<h3 class="text-4xl font-headline italic text-on-surface mt-4 tracking-tight">
                Lugar <span class="text-on-surface-variant">del Evento</span>
</h3>
</div>
</section>
<!-- Venue Details Card -->
<section class="w-full space-y-6 z-10">
<div class="bg-white/40 backdrop-blur-sm p-10 rounded-3xl shadow-[0_4px_32px_rgba(129,82,83,0.05)] text-center border border-primary/5 scroll-reveal">
<div class="w-12 h-12 rounded-full bg-primary/5 text-primary flex items-center justify-center mx-auto mb-4">
<span class="material-symbols-outlined text-3xl">location_on</span>
</div>
<h3 class="text-2xl font-headline text-on-surface mb-2">Terraza Puerta de Hierro</h3>
<p class="text-on-surface-variant font-light leading-relaxed">
                Francisco Zarco 1686, Girasoles, 28017  <br/>
                  Colima, Col.
            </p>
</div>
<!-- Stylized Map Component -->
<div class="group relative overflow-hidden rounded-3xl bg-white/50 backdrop-blur-sm border border-primary/5 shadow-sm scroll-reveal">
<div class="h-64 w-full opacity-80 mix-blend-multiply">
<img class="w-full h-full object-cover grayscale brightness-110 contrast-75" data-alt="Minimalist abstract map view of an upscale city neighborhood" src="https://lh3.googleusercontent.com/aida-public/AB6AXuC99LfafRoZxtmA8biqRj85B1pxzDz-zWxdF6AaO6iNo648N4_e_g27DDNuDFJvgmk4JjSkNZ7VC_wuh6MyAkfHNmM2j10kenPJ7-fcgVk8_TcCPiAbsBf6eY1zpx68B0lD7QKXGqeiROgtdRsXkLmPeOce8tGmpNaexfVWcf1zDxlKPv8Xmrhva8W9SvtroJ2kTPKYmK7h8YnBomit9Rx_0edYX5rjzncD04vFK5yT53O4OJILsbkLVOgO4qtWZ9_Cx2FOMj5Rgd8"/>
</div>
<div class="absolute inset-0 flex items-center justify-center bg-black/5 group-hover:bg-black/0 transition-colors">
<a href="https://www.google.com/maps?q=terraza+puerta+de+hierro,+Francisco+Zarco+1686,+Girasoles,+28017+Colima,+Col.&ftid=0x84255b00053567a7:0x7b739d236dbcabc2&entry=gps&shh=CAE&lucs=,94297699,94231188,94280568,47071704,94218641,94282134,94286869&g_ep=CAISEjI2LjE0LjAuODkxOTAzMTgwMBgAIIgnKj8sOTQyOTc2OTksOTQyMzExODgsOTQyODA1NjgsNDcwNzE3MDQsOTQyMTg2NDEsOTQyODIxMzQsOTQyODY4NjlCAk1Y&skid=9b4737a4-4812-4c4a-a342-b3a8b5eea61d&g_st=iw" target="_blank" class="bg-primary text-on-primary px-8 py-4 rounded-full font-label text-xs uppercase tracking-[0.2em] shadow-xl flex items-center gap-3 hover:shadow-primary/20 transition-all duration-300 transform group-hover:scale-105">
<span class="material-symbols-outlined text-sm" style="font-variation-settings: 'FILL' 1;">directions</span>
                    Ver en Google Maps
                </a>
</div>
</div>
<!-- Detail Grid -->
<div class="grid grid-cols-2 gap-4">
<div class="bg-white/40 backdrop-blur-sm p-8 rounded-3xl text-center border border-primary/5 shadow-sm scroll-reveal">
<span class="material-symbols-outlined text-primary mb-2">local_parking</span>
<h4 class="font-label text-[10px] tracking-widest uppercase text-on-surface-variant/60 mb-1">Estacionamiento</h4>
<p class="text-on-surface text-sm font-semibold">Servicio de Valet</p>
</div>
<div class="bg-white/40 backdrop-blur-sm p-8 rounded-3xl text-center border border-primary/5 shadow-sm scroll-reveal">
<span class="material-symbols-outlined text-primary mb-2">schedule</span>
<h4 class="font-label text-[10px] tracking-widest uppercase text-on-surface-variant/60 mb-1">Horario</h4>
<p class="text-on-surface text-sm font-semibold">19:00 hrs</p>
</div>
</div>
</section>
</main>
<!-- Floral Footer -->
<div class="floral-footer"></div>
</div>
<!-- Bottom Navigation Bar -->
<nav class="fixed bottom-0 left-1/2 -translate-x-1/2 w-full max-w-lg z-50 bg-[#FCFAF2]/90 backdrop-blur-xl border-t border-primary/5 flex justify-around items-center h-20 pb-safe px-8 shadow-[0_-10px_40px_rgba(129,82,83,0.05)]">
<a :href="linkId ? '/?link_id=' + linkId : '/'" class="flex flex-col items-center justify-center text-on-surface-variant/40 hover:text-primary transition-all">
<span class="material-symbols-outlined text-2xl" data-icon="auto_awesome">auto_awesome</span>
<span class="font-label uppercase tracking-[0.15em] text-[9px] mt-1">Inicio</span>
</a>
<button class="flex flex-col items-center justify-center text-primary transition-all scale-105">
<span class="material-symbols-outlined text-2xl" data-icon="location_on" style="font-variation-settings: 'FILL' 1;">location_on</span>
<span class="font-label uppercase tracking-[0.15em] text-[9px] font-bold mt-1">Lugar</span>
</button>
<a :href="linkId ? '/rsvp?link_id=' + linkId : '/rsvp'" class="flex flex-col items-center justify-center text-on-surface-variant/40 hover:text-primary transition-all">
<span class="material-symbols-outlined text-2xl" data-icon="mail">mail</span>
<span class="font-label uppercase tracking-[0.15em] text-[9px] mt-1">RSVP</span>
</a>
</nav>

<script>
function initLugarPage() {
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('visible');
                observer.unobserve(entry.target);
            }
        });
    }, { threshold: 0.1, rootMargin: '0px 0px -50px 0px' });

    document.querySelectorAll('.scroll-reveal').forEach(el => observer.observe(el));
}

document.addEventListener('DOMContentLoaded', initLugarPage);
document.addEventListener('turbo:load', initLugarPage);
</script>
</body></html>
