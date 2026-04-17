<!DOCTYPE html>

<html class="light" lang="es">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Serif:ital,wght@0,400;0,700;1,400&amp;family=Plus+Jakarta+Sans:wght@300;400;500;600;700&amp;family=Pinyon+Script&amp;family=Alex+Brush&amp;display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet" />
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
                sessionStorage.setItem('audioPlaying', '1');
            } else {
                audio.pause();
                sessionStorage.removeItem('audioPlaying');
            }
        };
    </script>
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
</head>

<body class="bg-[#FCFAF2] text-on-surface font-body min-h-screen selection:bg-primary-fixed selection:text-on-primary-fixed" x-data="lugarPage()">
    <!-- Audio Player Global -->
    <audio id="background-music" loop style="display: none;">
        <source src="/hasta-mi-final.mp4" type="audio/mp4">
    </audio>
    <div class="relative min-h-screen flex flex-col max-w-lg mx-auto overflow-hidden bg-[#FCFAF2]">
        <!-- Floral Header -->
        <div class="floral-header"></div>
        <!-- Main Content Canvas -->
        <main class="relative w-full flex-1 flex flex-col items-center pt-36 pb-32 overflow-hidden px-6">
            <!-- Hero Title Section -->
             <br>
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
                 <!-- Venue Photo -->
                <div class="overflow-hidden rounded-3xl shadow-[0_4px_32px_rgba(129,82,83,0.08)] border border-primary/5 scroll-reveal">
                    <div class="relative w-full" style="height: 420px;">
                        <img src="/terraza.jpeg" alt="Terraza Puerta de Hierro" class="w-full h-full object-cover object-center" />
                        <div class="absolute inset-0 bg-gradient-to-t from-black/30 to-transparent"></div>
                        <p class="absolute bottom-4 left-0 right-0 text-center font-label text-[10px] uppercase tracking-[0.3em] text-white/90">Terraza Puerta de Hierro</p>
                    </div>
                </div>
                <div class="relative overflow-hidden bg-white/40 backdrop-blur-sm p-10 rounded-3xl shadow-[0_4px_32px_rgba(129,82,83,0.05)] text-center border border-primary/5 scroll-reveal">
                    <!-- <img src="/terraza.jpg" alt="Terraza Puerta de Hierro" class="absolute inset-0 w-full h-full object-cover opacity-25 mix-blend-multiply" /> -->
                    <div class="relative z-10 w-12 h-12 rounded-full bg-primary/5 text-primary flex items-center justify-center mx-auto mb-4">
                        <span class="material-symbols-outlined text-3xl">location_on</span>
                    </div>
                    <h3 class="relative z-10 text-2xl font-headline text-on-surface mb-2">Terraza Puerta de Hierro</h3>
                    <p class="relative z-10 text-on-surface-variant font-light leading-relaxed">
                        Francisco Zarco 1686, Girasoles, 28017 <br />
                        Colima, Col.
                    </p>
                </div>
                <!-- Croquis -->
                <div class="overflow-hidden rounded-3xl bg-white/50 backdrop-blur-sm border border-primary/5 shadow-sm scroll-reveal">
                    <div class="px-6 pt-6 pb-4 text-center">
                        <span class="material-symbols-outlined text-primary/50 text-2xl mb-2 block" style="font-variation-settings: 'FILL' 1;">on_device_training</span>
                        <p class="font-label text-[10px] uppercase tracking-[0.3em] text-on-surface-variant/60 mb-1">Cómo llegar</p>
                        <p class="font-headline italic text-on-surface-variant text-sm">Te esperamos aquí</p>
                    </div>
                    <img src="/Croquis.jpeg" alt="Croquis del lugar" class="w-full object-contain" />
                </div>
                <!-- Detail Grid -->
                <div class="grid grid-cols-2 gap-4">
                    <!-- <div class="bg-white/40 backdrop-blur-sm p-8 rounded-3xl text-center border border-primary/5 shadow-sm scroll-reveal">
<span class="material-symbols-outlined text-primary mb-2">local_parking</span>
<h4 class="font-label text-[10px] tracking-widest uppercase text-on-surface-variant/60 mb-1">Estacionamiento</h4>
<p class="text-on-surface text-sm font-semibold">Servicio de Valet</p>
</div> -->
                    <!-- <div class="bg-white/40 backdrop-blur-sm p-8 rounded-3xl text-center border border-primary/5 shadow-sm scroll-reveal">
<span class="material-symbols-outlined text-primary mb-2">schedule</span>
<h4 class="font-label text-[10px] tracking-widest uppercase text-on-surface-variant/60 mb-1">Horario</h4>
<p class="text-on-surface text-sm font-semibold">19:00 hrs</p>
</div> -->
                </div>
            </section>

            <!-- Closing phrase -->
            <div class="text-center mt-8 mb-4 px-4 scroll-reveal">
                <!-- <span class="material-symbols-outlined text-primary/30 text-3xl block mb-3" style="font-variation-settings: 'FILL' 1;">favorite</span> -->
                <p class="font-headline italic text-on-surface-variant text-lg leading-relaxed">
                    No te pierdas este momento especial.<br/>
                    <span class="text-primary">¡Te esperamos!</span>
                </p>
            </div>
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
            <span class="font-label uppercase tracking-[0.15em] text-[9px] mt-1">Confirmación</span>
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
            }, {
                threshold: 0.1,
                rootMargin: '0px 0px -50px 0px'
            });

            document.querySelectorAll('.scroll-reveal').forEach(el => observer.observe(el));
        }

        initLugarPage();
        // Auto-resume audio if was playing before navigation
        if (sessionStorage.getItem('audioPlaying')) {
            const audio = document.getElementById('background-music');
            if (audio) audio.play().catch(() => {});
        }
    </script>
</body>

</html>
