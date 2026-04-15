<!DOCTYPE html>

<html class="light" lang="es"><head>
<meta charset="utf-8"/>
<meta name="csrf-token" content="{{ csrf_token() }}"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>Confirmación RSVP - 65 Años de Lucy</title>
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<link href="https://fonts.googleapis.com/css2?family=Noto+Serif:ital,wght@0,400;0,700;1,400&amp;family=Plus+Jakarta+Sans:wght@400;500;600;700&amp;family=Alex+Brush&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
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
<script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
<script>
    function rsvpForm() {
        return {
            linkId: new URLSearchParams(window.location.search).get('link_id'),
            contactName: '',
            attending: '',
            guestCount: 0,
            familyName: '',
            isLoading: false,
            isSubmitting: false,
            errorMessage: '',
            successMessage: '',
            showSuccessModal: false,

            async loadFamily() {
                if (!this.linkId) {
                    this.errorMessage = 'Link de invitación no válido';
                    return;
                }

                this.isLoading = true;
                try {
                    const response = await fetch(`/api/families/${this.linkId}`);
                    if (response.ok) {
                        const family = await response.json();
                        this.familyName = family.family_name;
                        this.contactName = family.contact_name || '';
                        this.attending = family.attending !== null ? (family.attending ? 'yes' : 'no') : '';
                        // guest_count already includes the contact person
                        this.guestCount = family.guest_count || 0;
                    } else {
                        this.errorMessage = 'Invitación no encontrada';
                    }
                } catch (error) {
                    this.errorMessage = 'Error al cargar los datos: ' + error.message;
                } finally {
                    this.isLoading = false;
                }
            },

            async submitRsvp() {
                if (!this.linkId) {
                    this.errorMessage = 'Link de invitación no válido';
                    return;
                }

                if (!this.contactName) {
                    this.errorMessage = 'Por favor ingresa tu nombre';
                    return;
                }

                if (!this.attending) {
                    this.errorMessage = 'Por favor indica si asistirás';
                    return;
                }

                this.isSubmitting = true;
                this.errorMessage = '';

                try {
                    const csrfToken = document.querySelector('meta[name="csrf-token"]').content;

                    const response = await fetch(`/api/families/${this.linkId}/rsvp`, {
                        method: 'POST',
                        headers: {
                            'Content-Type': 'application/json',
                            'X-CSRF-TOKEN': csrfToken,
                        },
                        body: JSON.stringify({
                            contact_name: this.contactName,
                            attending: this.attending === 'yes',
                            guest_count: this.guestCount
                        })
                    });

                    const data = await response.json();
                    if (data.success) {
                        this.showSuccessModal = true;
                    } else {
                        this.errorMessage = data.message || 'Error al confirmar RSVP';
                    }
                } catch (error) {
                    this.errorMessage = 'Error: ' + error.message;
                } finally {
                    this.isSubmitting = false;
                }
            },

            init() {
                this.loadFamily();
            }
        }
    }
</script>
</head>
<body class="bg-[#FCFAF2] text-on-surface min-h-screen flex flex-col items-center selection:bg-primary-fixed-dim selection:text-on-primary-fixed overflow-x-hidden" x-data="rsvpForm()" x-init="init()">
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
<p x-show="familyName" class="font-serif italic text-lg text-primary mt-4" x-text="familyName"></p>
</div>

<!-- RSVP Form Card -->
<div class="w-full bg-white/40 backdrop-blur-sm p-8 rounded-3xl shadow-[0_4px_32px_rgba(129,82,83,0.05)] border border-primary/5 space-y-8 scroll-reveal">

<!-- Error Message -->
<div x-show="errorMessage" class="bg-error-container text-on-error-container px-4 py-3 rounded-lg font-body text-sm">
<p x-text="errorMessage"></p>
</div>

<!-- Success Message -->
<div x-show="successMessage" class="bg-primary-fixed text-on-primary-fixed px-4 py-3 rounded-lg font-body text-sm">
<p x-text="successMessage"></p>
</div>

<!-- Loading State -->
<div x-show="isLoading && !linkId" class="text-center">
<p class="font-body text-on-surface-variant">Cargando datos...</p>
</div>

<!-- Contact Name -->
<div class="space-y-2">
<label class="block font-serif italic text-lg text-primary" for="contact-name">Nombre del contacto principal</label>
<input x-model="contactName" class="w-full bg-surface-container-low border-none rounded-xl px-4 py-3 text-on-surface placeholder:text-on-surface-variant/40 focus:ring-2 focus:ring-primary/20 outline-none transition-all" id="contact-name" name="contact-name" placeholder="Tu nombre completo" type="text"/>
</div>

<!-- Attendance Personal -->
<div class="space-y-4">
<p class="font-serif italic text-lg text-primary">¿Asistirás tú personalmente?</p>
<div class="flex flex-col gap-3">
<label class="flex items-center gap-3 cursor-pointer group">
<input x-model="attending" class="w-5 h-5 text-primary border-outline-variant focus:ring-primary/20 focus:ring-offset-0 bg-surface-container" name="attending" type="radio" value="yes"/>
<span class="text-on-surface group-hover:text-primary transition-colors">Sí, allí estaré</span>
</label>
<label class="flex items-center gap-3 cursor-pointer group">
<input x-model="attending" class="w-5 h-5 text-primary border-outline-variant focus:ring-primary/20 focus:ring-offset-0 bg-surface-container" name="attending" type="radio" value="no"/>
<span class="text-on-surface group-hover:text-primary transition-colors">No podré asistir</span>
</label>
</div>
</div>

<!-- Total Guests -->
<div class="space-y-2">
<label class="block font-serif italic text-lg text-primary" for="guests-count">Número de acompañantes (incluyéndote)</label>
<div class="relative">
<input x-model.number="guestCount" class="w-full bg-surface-container-low border-none rounded-xl px-4 py-3 text-on-surface placeholder:text-on-surface-variant/40 focus:ring-2 focus:ring-primary/20 outline-none transition-all" id="guests-count" min="0" name="guests-count" placeholder="0" type="number"/>
<span class="absolute right-4 top-1/2 -translate-y-1/2 text-on-surface-variant/50 material-symbols-outlined">group</span>
</div>
<p class="text-[11px] text-on-surface-variant/60 leading-tight">Si escribes 3, significa que vendrán 3 personas en total (incluyéndote a ti + 2 personas más).</p>
</div>
</div>

<!-- Action Button -->
<div class="flex flex-col items-center gap-8 scroll-reveal">
<button @click="submitRsvp()" :disabled="isLoading || isSubmitting" class="w-full max-w-xs py-4 px-8 bg-primary text-on-primary font-label text-xs tracking-[0.2em] uppercase font-bold rounded-xl hover:bg-primary-container transition-all duration-300 shadow-xl active:scale-[0.98] disabled:opacity-50 disabled:cursor-not-allowed">
<span x-show="!isSubmitting" x-text="linkId ? 'Confirmar' : 'Cargando...'"></span>
<span x-show="isSubmitting">Enviando...</span>
</button>
<p class="text-sm italic font-serif text-on-surface-variant/80 text-center px-4 leading-relaxed max-w-xs">
"Celebrar la vida es compartirla con quienes más amamos."
</p>
</div>
</section>
</main>

<!-- Success Modal -->
<div x-show="showSuccessModal" class="fixed inset-0 z-[70] flex items-center justify-center p-6" x-transition:enter="transition ease-out duration-500" x-transition:enter-end="opacity-100" x-transition:enter-start="opacity-0" x-transition:leave="transition ease-in duration-300" x-transition:leave-end="opacity-0" x-transition:leave-start="opacity-100">
<!-- Backdrop subtle -->
<div class="absolute inset-0 bg-white/60 backdrop-blur-sm" @click="showSuccessModal = false"></div>

<!-- Modal Content -->
<div class="relative w-full max-w-sm bg-surface-bright rounded-3xl shadow-xl overflow-hidden border border-primary/10">
<!-- Floral decorative top -->
<div class="absolute top-0 left-0 right-0 h-40 opacity-40 pointer-events-none" style="background-image: url(https://lh3.googleusercontent.com/aida-public/AB6AXuAFwoqNm0aDz0YqD-LjAD6WPDkFAE10NXiS4WTvXcCiZ9e5zXB4s0MX_wwsyLEO4VBap8TZqY5ERibW82g5Ao-DTAeiCz-jMrruvXGhT4l5FMp9J7K827JjnCrdC8t0H2fuzphftXnxRS_XxCbyA6UxsTADqakXF-nBRl8gUcDNA8XzVPG3EffYXfcKTWB0qAfAQIussejCMT5NlEvJgK6n1XBqY_eUvsNp0m353fEuXCxB811uMUxMZoY-JitLGZ_2qOOrzlmAheE); background-size: cover; background-position: top center;"></div>

<!-- Content -->
<div class="relative px-8 py-16 text-center space-y-6 z-10">
<!-- Check mark -->
<div class="text-6xl mb-2" style="animation: bounce 0.6s ease-out;">✓</div>

<!-- Title -->
<h2 class="font-serif text-4xl text-primary font-bold leading-tight">¡Confirmado!</h2>

<!-- Main message -->
<p class="font-body text-on-surface-variant text-base leading-relaxed">
Tu asistencia ha sido confirmada con éxito.
</p>

<!-- Important note in elegant box -->
<div class="bg-primary-fixed/30 border border-primary/20 rounded-2xl p-6 space-y-3 my-4">
<p class="font-howell text-2xl text-primary italic">Un pequeño secreto…</p>
<div class="space-y-2 text-on-surface text-sm leading-relaxed">
<p>• Es sorpresa, así que guardalo bien</p>
<p>• No le cuentes nada a Lucy</p>
<p>• Por favor, llega puntual al local</p>
</div>
</div>

<!-- Quote -->
<p class="font-serif italic text-on-surface-variant text-sm pt-2">
"Cada momento con Lucy es un regalo"
</p>

<!-- Button -->
<button @click="window.location.href = '/'" class="mt-8 w-full max-w-xs mx-auto py-3 px-6 bg-primary text-on-primary font-label text-xs tracking-[0.15em] uppercase font-bold rounded-xl hover:bg-primary-container transition-all duration-300 shadow-lg active:scale-95">
Volver al inicio
</button>
</div>
</div>
</div>

<!-- Floral Footer -->
<div class="floral-footer"></div>
</div>
<!-- Bottom Navigation Bar -->
<nav class="fixed bottom-0 left-1/2 -translate-x-1/2 w-full max-w-lg z-50 bg-[#FCFAF2]/90 backdrop-blur-xl border-t border-primary/5 flex justify-around items-center h-20 pb-safe px-8 shadow-[0_-10px_40px_rgba(129,82,83,0.05)]">
<a :href="linkId ? '/?link_id=' + linkId : '/'" class="flex flex-col items-center justify-center text-on-surface-variant/40 hover:text-primary transition-all">
<span class="material-symbols-outlined text-2xl">auto_awesome</span>
<span class="font-label uppercase tracking-[0.15em] text-[9px] mt-1">Inicio</span>
</a>
<a :href="linkId ? '/lugar?link_id=' + linkId : '/lugar'" class="flex flex-col items-center justify-center text-on-surface-variant/40 hover:text-primary transition-all">
<span class="material-symbols-outlined text-2xl">location_on</span>
<span class="font-label uppercase tracking-[0.15em] text-[9px] mt-1">Lugar</span>
</a>
<a :href="linkId ? '/rsvp?link_id=' + linkId : '/rsvp'" class="flex flex-col items-center justify-center text-primary transition-all scale-105">
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
