<!DOCTYPE html>

<html class="light" lang="en"><head>
<meta charset="utf-8"/>
<meta name="csrf-token" content="{{ csrf_token() }}"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>Lucy's Celebration - Una Sorpresa Elegante</title>
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<link href="https://fonts.googleapis.com/css2?family=Noto+Serif:ital,wght@0,400;0,700;1,400&amp;family=Plus+Jakarta+Sans:wght@300;400;500;600;700&amp;family=Pinyon+Script&amp;display=swap" rel="stylesheet"/>
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
                      "on-error-container": "#93000a",
                      "inverse-surface": "#30312c",
                      "secondary": "#785655",
                      "secondary-fixed-dim": "#e8bcbb",
                      "surface-dim": "#dcdad2",
                      "on-tertiary-fixed": "#32120e",
                      "outline": "#837373",
                      "primary-container": "#c89091",
                      "on-surface": "#1b1c17",
                      "tertiary-fixed-dim": "#f3b8b0",
                      "secondary-container": "#ffd2d1",
                      "surface-container": "#f0eee6",
                      "on-primary-fixed": "#321113",
                      "primary-fixed-dim": "#f4b7b8",
                      "primary-fixed": "#ffdada",
                      "on-error": "#ffffff",
                      "surface-container-lowest": "#ffffff",
                      "surface-bright": "#fbf9f1",
                      "outline-variant": "#d5c2c2",
                      "on-secondary-container": "#7b5858",
                      "on-tertiary-fixed-variant": "#653c36",
                      "surface-container-high": "#eae8e0",
                      "on-primary-container": "#522a2c",
                      "on-secondary": "#ffffff",
                      "primary": "#815253",
                      "on-surface-variant": "#514444",
                      "inverse-on-surface": "#f3f1e9",
                      "error-container": "#ffdad6",
                      "tertiary-container": "#c8918a",
                      "tertiary": "#80534c",
                      "on-tertiary-container": "#512b26",
                      "on-secondary-fixed-variant": "#5e3f3e",
                      "surface-variant": "#e4e3db",
                      "surface-container-low": "#f6f4ec",
                      "secondary-fixed": "#ffdad9",
                      "background": "#FCFAF2",
                      "inverse-primary": "#f4b7b8",
                      "tertiary-fixed": "#ffdad5",
                      "surface": "#FCFAF2",
                      "on-primary-fixed-variant": "#663b3c",
                      "on-primary": "#ffffff",
                      "error": "#ba1a1a",
                      "on-secondary-fixed": "#2d1415",
                      "surface-container-highest": "#e4e3db",
                      "on-tertiary": "#ffffff",
                      "on-background": "#1b1c17",
                      "surface-tint": "#815253"
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
                      "script": ["Pinyon Script"]
              }
            },
          }
        }
    </script>
<style>.material-symbols-outlined {
    font-variation-settings: "FILL" 0, "wght" 300, "GRAD" 0, "opsz" 24
    }
body {
    font-family: "Plus Jakarta Sans", sans-serif;
    background-color: #FCFAF2;
    margin: 0;
    padding: 0;
    overflow-x: hidden
    }
.serif-text {
    font-family: "Noto Serif", serif
    }
.script-text {
    font-family: "Pinyon Script", cursive
    }
.tangerine-bold {
    font-family: "Tangerine", cursive;
    font-weight: 800;
    font-style: normal;
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
    mask-image: linear-gradient(to bottom, black 40%, transparent 100%)
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
    height: 180px;
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
    -webkit-mask-image: linear-gradient(to top, black 40%, transparent 100%);
    mask-image: linear-gradient(to top, black 40%, transparent 100%)
    }
@media (min-width: 768px) {
    .floral-footer {
        height: 280px;
        width: 90%;
        max-width: 800px;
        margin-top: 40px;
    }
}
@keyframes ripple {
    0% {
        transform: scale(0);
        opacity: 0.6;
    }
    100% {
        transform: scale(4);
        opacity: 0;
    }
}
.ripple {
    position: absolute;
    border-radius: 50%;
    background: rgba(255, 255, 255, 0.5);
    transform: scale(0);
    animation: ripple 0.6s ease-out;
    pointer-events: none;
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

/* ── Envelope Modal ── */
#envelope-modal {
    position: fixed;
    inset: 0;
    z-index: 100;
    background-color: #FCFAF2;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    transition: opacity 0.8s ease;
    overflow: hidden;
}
.envelope-container { perspective: 1000px; }
.envelope {
    position: relative;
    width: 320px;
    height: 220px;
    background-color: #fbf9f1;
    border-radius: 0 0 4px 4px;
    box-shadow: 0 10px 30px rgba(27, 28, 23, 0.08);
    cursor: pointer;
    transition: transform 0.6s cubic-bezier(0.4, 0, 0.2, 1);
}
.envelope:hover { transform: translateY(-5px) scale(1.02); }
.envelope-flap {
    position: absolute;
    top: 0; left: 0;
    width: 0; height: 0;
    border-left: 160px solid transparent;
    border-right: 160px solid transparent;
    border-top: 120px solid #f0eee6;
    transform-origin: top;
    transition: transform 0.6s 0.2s ease-in-out;
    z-index: 3;
    filter: drop-shadow(0 2px 2px rgba(0,0,0,0.05));
}
.envelope-flap-inner {
    position: absolute;
    top: -120px; left: -160px;
    width: 0; height: 0;
    border-left: 160px solid transparent;
    border-right: 160px solid transparent;
    border-top: 118px solid #ffdada;
    opacity: 0.2;
}
.envelope-body {
    position: absolute;
    bottom: 0; width: 100%; height: 100%;
    background-color: #fbf9f1;
    z-index: 2;
    clip-path: polygon(0 0, 100% 0, 100% 100%, 0 100%, 0 0, 160px 110px, 0 0);
}
.card-inside {
    position: absolute;
    top: 10px; left: 50%;
    transform: translateX(-50%);
    width: 290px; height: 200px;
    background: white;
    z-index: 1;
    transition: transform 0.8s 0.6s cubic-bezier(0.175, 0.885, 0.32, 1.275);
    padding: 24px;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    border: 1px solid rgba(213, 194, 194, 0.2);
}
.wax-seal {
    position: absolute;
    top: 100px; left: 50%;
    transform: translate(-50%, -50%);
    width: 44px; height: 44px;
    background: radial-gradient(circle at 30% 30%, #c89091, #815253);
    border-radius: 50%;
    z-index: 4;
    display: flex;
    align-items: center;
    justify-content: center;
    box-shadow: 0 4px 8px rgba(129, 82, 83, 0.3);
    transition: opacity 0.3s ease;
}
.envelope-wrapper:hover .envelope-flap { transform: rotateX(180deg); z-index: 0; }
.envelope-wrapper:hover .card-inside   { transform: translate(-50%, -100px); }
.envelope-wrapper:hover .wax-seal      { opacity: 0; }
</style>
<script>
    // Definir funciones globalmente
    window.welcomePage = function() {
        return {
            linkId: new URLSearchParams(window.location.search).get('link_id'),
        }
    };

    // Inicializar audio: play directo en clic del sobre (gesto real del usuario)
    window.addEventListener('DOMContentLoaded', () => {
        const audio  = document.getElementById('background-music');
        const modal  = document.getElementById('envelope-modal');
        const target = document.getElementById('envelope-click-target');
        if (!audio || !modal || !target) return;

        target.addEventListener('click', () => {
            // Gesto directo del usuario → sin restricciones de autoplay
            audio.play().catch(e => console.log(e));

            // Cerrar modal con fade
            modal.style.opacity = '0';
            modal.style.pointerEvents = 'none';
            setTimeout(() => modal.remove(), 800);
        });
    });

    window.toggleAudio = function() {
        const audio = document.getElementById('background-music');
        const btn = document.getElementById('audio-state');

        if (audio.paused) {
            audio.muted = false;
            audio.play().catch(e => console.log('Play prevented:', e));
            if (btn) btn.textContent = '⏸ Pausar';
        } else {
            audio.pause();
            if (btn) btn.textContent = '▶ Reproducir';
        }
    };

</script>
<script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
</head>
<body class="text-on-surface selection:bg-primary-container selection:text-on-primary-container" x-data="welcomePage()">

<!-- ── Envelope Modal ── -->
<div id="envelope-modal">
  <!-- Floral header dentro del modal -->
  <div class="floral-header"></div>

  <div class="text-center mb-8 relative z-10">
    <p class="font-label uppercase tracking-[0.3em] text-[11px] text-on-surface-variant/70 mb-4">Estás cordialmente invitado</p>
    <div class="h-px w-12 bg-primary mx-auto opacity-30"></div>
  </div>

  <!-- Sobre interactivo -->
  <div class="envelope-wrapper group cursor-pointer relative z-10" id="envelope-click-target">
    <div class="envelope-container">
      <div class="envelope">
        <div class="envelope-flap">
          <div class="envelope-flap-inner"></div>
        </div>
        <div class="wax-seal">
          <span class="material-symbols-outlined text-white text-lg" style="font-variation-settings: 'FILL' 1;">favorite</span>
        </div>
        <div class="card-inside shadow-sm">
          <div class="text-center">
            <span class="font-headline text-4xl text-primary-container opacity-60 block mb-1">65</span>
            <h1 class="font-headline text-2xl text-primary mb-3">Lucy</h1>
            <p class="font-label uppercase tracking-[0.2em] text-[9px] text-on-surface-variant">A Heritage Celebration</p>
          </div>
        </div>
        <div class="envelope-body"></div>
      </div>
    </div>
  </div>

  <p class="mt-12 font-label text-[11px] tracking-[0.3em] uppercase text-on-surface-variant/60 animate-pulse text-center relative z-10">
    Presiona el sobre para descubrir la invitación
  </p>

  <!-- Floral footer dentro del modal -->
  <div class="floral-footer" style="position: absolute; bottom: 0; margin-top: 0;"></div>
</div>

<!-- Audio Player Global -->
<audio id="background-music" loop style="display: none;">
<source src="/hasta-mi-final.mp4" type="audio/mp4">
</audio>



<div class="relative min-h-screen flex flex-col max-w-lg mx-auto overflow-hidden bg-[#FCFAF2]">
<!-- Floral Header Decorative Element -->
<div class="floral-header"></div>

<main class="relative z-10 flex-grow flex flex-col pt-36 px-12">
<!-- Hero Section -->
<section class="flex flex-col items-center justify-center text-center w-full mb-12 scroll-reveal">
<div class="mb-4">
<h2 class="script-text text-6xl md:text-7xl text-primary leading-tight">Shhh!</h2>
<p class="font-label uppercase tracking-[0.4em] text-[10px] text-on-surface-variant/80">Es una sorpresa</p>
</div>
<br><br>
<div class="relative flex items-center justify-center mb-6">
<span class="absolute inset-0 flex items-center justify-center serif-text text-[12rem] md:text-[16rem] font-bold select-none pointer-events-none z-0" style="color: rgba(244, 183, 184, 0.4); font-variation-settings: 'wght' 700;">65</span>
<h1 class="tangerine-bold text-[120px] md:text-[150px] text-primary tracking-wide leading-none font-normal relative z-10">
        Lucy
    </h1>
</div>
<div class="flex items-center justify-center w-full my-10">
<div class="flex items-center gap-6 md:gap-8">
<div class="flex flex-col items-end">
<span class="serif-text text-lg md:text-xl font-medium text-primary/70 uppercase tracking-widest">Sab</span>
</div>
<div class="h-10 w-[0.5px] bg-primary/20"></div>
<div class="flex flex-col items-center px-2">
<span class="serif-text text-4xl md:text-5xl font-bold text-primary leading-none">09</span>
<span class="serif-text text-[10px] md:text-[11px] text-primary/80 uppercase tracking-[0.3em] mt-1">May</span>
</div>
<div class="h-10 w-[0.5px] bg-primary/20"></div>
<div class="flex flex-col items-start">
<span class="serif-text text-lg md:text-xl font-medium text-primary/70 tracking-tight">1:00 pm <br>-<br> 7:00 pm
</span>
</div>
</div>
</div>
<div class="mt-8 px-4">
<div class="mb-6">
<span class="material-symbols-outlined text-primary/40 text-4xl" style="font-variation-settings: 'wght' 200">flare</span>
</div>
<p class="text-on-surface-variant leading-relaxed italic serif-text text-xl">
                    ¿Nos ayudas a guardar el secreto?<br/>
                    <br>
                    Te invitamos a celebrar a Lucy...<br/>
                    <br>
                    Ella no lo sabe...<br/>
                    Ella no lo espera...<br/>
                    ¡Es una sorpresa!
                </p>
</div>
</section>
<!-- Countdown Section -->
<section class="mb-16 relative scroll-reveal">
<div class="bg-white/40 backdrop-blur-sm rounded-full p-8 text-center relative overflow-hidden border border-primary/5 shadow-sm">
<h3 class="font-label uppercase tracking-widest text-[10px] text-on-surface-variant/60 mb-6">Faltan para el momento</h3>
<div class="grid grid-cols-4 gap-2">
<div class="flex flex-col items-center">
<span id="days" class="serif-text text-3xl font-bold text-primary">0</span>
<span class="font-label text-[8px] uppercase tracking-wider text-on-surface-variant/70 mt-1">Días</span>
</div>
<div class="flex flex-col items-center">
<span id="hours" class="serif-text text-3xl font-bold text-primary">0</span>
<span class="font-label text-[8px] uppercase tracking-wider text-on-surface-variant/70 mt-1">Horas</span>
</div>
<div class="flex flex-col items-center">
<span id="minutes" class="serif-text text-3xl font-bold text-primary">0</span>
<span class="font-label text-[8px] uppercase tracking-wider text-on-surface-variant/70 mt-1">Mins</span>
</div>
<div class="flex flex-col items-center">
<span id="seconds" class="serif-text text-3xl font-bold text-primary">0</span>
<span class="font-label text-[8px] uppercase tracking-wider text-on-surface-variant/70 mt-1">Segs</span>
</div>
</div>
</div>
</section>
<!-- Audio Player Controls Section -->
<section class="mb-12 relative scroll-reveal">
<div class="bg-white/40 backdrop-blur-sm rounded-3xl p-4 border border-primary/5 overflow-hidden flex items-center justify-center gap-3">
<span class="material-symbols-outlined text-primary/60 text-xl">music_note</span>
<button onclick="toggleAudio()" class="px-4 py-2 bg-primary/10 hover:bg-primary/20 text-primary font-label text-xs uppercase tracking-wider rounded-lg transition-colors">
<span id="audio-state">▶ Reproducir</span>
</button>
<span id="audio-status" class="text-[10px] text-on-surface-variant/60 italic">Il Divo - Hasta mi final</span>
</div>
</section>

<!-- Actions Section -->
<section class="grid grid-cols-1 gap-6 mb-20 relative shadow-sm">
<!-- Lugar Button -->
<a :href="linkId ? '/lugar?link_id=' + linkId : '/lugar'" class="ripple-button group flex flex-col items-center justify-center p-8 bg-white/50 backdrop-blur-sm rounded-3xl border border-primary/5 hover:bg-white/70 transition-all duration-500 relative overflow-hidden scroll-reveal">
<div class="w-12 h-12 rounded-full bg-primary/5 text-primary flex items-center justify-center mb-4 group-hover:scale-110 transition-transform">
<span class="material-symbols-outlined text-2xl" data-icon="location_on">location_on</span>
</div>
<span class="font-label uppercase tracking-[0.2em] text-[11px] font-semibold text-on-surface">Lugar</span>
<span class="text-[9px] text-on-surface-variant mt-1 italic">Ver mapa y dirección</span>
</a>
<!-- RSVP Button -->
<a :href="linkId ? '/rsvp?link_id=' + linkId : '/rsvp'" class="ripple-button group flex flex-col items-center justify-center p-8 bg-white/50 backdrop-blur-sm rounded-3xl border border-primary/5 hover:bg-white/70 transition-all duration-500 relative overflow-hidden scroll-reveal">
<div class="w-12 h-12 rounded-full bg-primary/5 text-primary flex items-center justify-center mb-4 group-hover:scale-110 transition-transform">
<span class="material-symbols-outlined text-2xl" data-icon="mail">mail</span>
</div>
<span class="font-label uppercase tracking-[0.2em] text-[11px] font-semibold relative z-10">Confirmar Asistencia</span>
<span class="text-[9px] opacity-80 mt-1 italic relative z-10">Tu presencia es el regalo</span>
</a>
</section>
</main>
<!-- Floral Footer Decorative Element -->
<div class="floral-footer"></div>
</div>
<!-- BottomNavBar -->
<!-- <nav class="fixed bottom-0 left-1/2 -translate-x-1/2 w-full max-w-lg z-50 bg-[#FCFAF2]/90 backdrop-blur-xl border-t border-primary/5 flex justify-around items-center h-20 pb-safe px-8 shadow-[0_-10px_40px_rgba(129,82,83,0.05)]">
<a class="flex flex-col items-center justify-center text-primary transition-all scale-105" href="#">
<span class="material-symbols-outlined text-2xl" data-icon="auto_awesome">auto_awesome</span>
<span class="font-label uppercase tracking-[0.15em] text-[9px] font-bold mt-1">Inicio</span>
</a>
<a class="flex flex-col items-center justify-center text-on-surface-variant/40 hover:text-primary transition-all" href="#">
<span class="material-symbols-outlined text-2xl" data-icon="location_on">location_on</span>
<span class="font-label uppercase tracking-[0.15em] text-[9px] mt-1">Lugar</span>
</a>
<a class="flex flex-col items-center justify-center text-on-surface-variant/40 hover:text-primary transition-all" href="#">
<span class="material-symbols-outlined text-2xl" data-icon="mail">mail</span>
<span class="font-label uppercase tracking-[0.15em] text-[9px] mt-1">RSVP</span>
</a>
</nav> -->
<script>
function updateCountdown() {
    const targetDate = new Date(2026, 4, 9, 13, 0, 0).getTime();
    const now = new Date().getTime();
    const difference = targetDate - now;

    if (difference > 0) {
        const days = Math.floor(difference / (1000 * 60 * 60 * 24));
        const hours = Math.floor((difference / (1000 * 60 * 60)) % 24);
        const minutes = Math.floor((difference / 1000 / 60) % 60);
        const seconds = Math.floor((difference / 1000) % 60);

        document.getElementById('days').textContent = String(days).padStart(2, '0');
        document.getElementById('hours').textContent = String(hours).padStart(2, '0');
        document.getElementById('minutes').textContent = String(minutes).padStart(2, '0');
        document.getElementById('seconds').textContent = String(seconds).padStart(2, '0');
    }
}

// Ripple effect for buttons
document.querySelectorAll('.ripple-button').forEach(button => {
    button.addEventListener('click', function(e) {
        const ripple = document.createElement('span');
        ripple.className = 'ripple';

        const rect = this.getBoundingClientRect();
        const size = Math.max(rect.width, rect.height);
        const x = e.clientX - rect.left - size / 2;
        const y = e.clientY - rect.top - size / 2;

        ripple.style.width = ripple.style.height = size + 'px';
        ripple.style.left = x + 'px';
        ripple.style.top = y + 'px';

        this.appendChild(ripple);

        setTimeout(() => ripple.remove(), 600);
    });
});

// Update countdown every second
setInterval(updateCountdown, 1000);
updateCountdown();

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
