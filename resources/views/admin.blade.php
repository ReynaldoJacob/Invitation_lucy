<!DOCTYPE html>

<html class="light" lang="es"><head>
<meta charset="utf-8"/>
<meta name="csrf-token" content="{{ csrf_token() }}"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>Celebration Admin - Lucy's 65th Birthday</title>
<link href="https://fonts.googleapis.com/css2?family=Noto+Serif:ital,wght@0,400;0,700;1,400&amp;family=Plus+Jakarta+Sans:wght@300;400;500;600;700&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    "colors": {
                        "on-primary-container": "#522a2c",
                        "surface-bright": "#fbf9f1",
                        "on-primary-fixed-variant": "#663b3c",
                        "on-surface": "#1b1c17",
                        "surface-container-low": "#f6f4ec",
                        "surface": "#fbf9f1",
                        "on-tertiary": "#ffffff",
                        "on-secondary-fixed": "#2d1415",
                        "on-error-container": "#93000a",
                        "primary-fixed": "#ffdada",
                        "on-primary-fixed": "#321113",
                        "primary-fixed-dim": "#f4b7b8",
                        "on-tertiary-fixed": "#32120e",
                        "on-secondary": "#ffffff",
                        "error": "#ba1a1a",
                        "background": "#fbf9f1",
                        "tertiary-fixed-dim": "#f3b8b0",
                        "surface-container-lowest": "#ffffff",
                        "secondary-container": "#ffd2d1",
                        "surface-tint": "#815253",
                        "inverse-primary": "#f4b7b8",
                        "on-background": "#1b1c17",
                        "on-surface-variant": "#514444",
                        "error-container": "#ffdad6",
                        "surface-container-highest": "#e4e3db",
                        "on-tertiary-fixed-variant": "#653c36",
                        "inverse-surface": "#30312c",
                        "secondary-fixed": "#ffdad9",
                        "inverse-on-surface": "#f3f1e9",
                        "primary-container": "#c89091",
                        "surface-container": "#f0eee6",
                        "secondary": "#785655",
                        "secondary-fixed-dim": "#e8bcbb",
                        "tertiary": "#80534c",
                        "outline": "#837373",
                        "on-tertiary-container": "#512b26",
                        "outline-variant": "#d5c2c2",
                        "surface-variant": "#e4e3db",
                        "on-secondary-fixed-variant": "#5e3f3e",
                        "on-primary": "#ffffff",
                        "on-secondary-container": "#7b5858",
                        "surface-container-high": "#eae8e0",
                        "on-error": "#ffffff",
                        "tertiary-container": "#c8918a",
                        "tertiary-fixed": "#ffdad5",
                        "surface-dim": "#dcdad2",
                        "primary": "#815253"
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
                        "label": ["Plus Jakarta Sans"]
                    }
                },
            },
        }
    </script>
<style>
        body {
            background-color: #fbf9f1;
            font-family: 'Plus Jakarta Sans', sans-serif;
        }
        .serif-text { font-family: 'Noto Serif', serif; }
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
        }
        body {
          min-height: max(884px, 100dvh);
        }
    </style>
<script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
<script>
    function adminPanel() {
        return {
            isModalOpen: false,
            familyName: '',
            isLoading: false,
            generatedLink: '',
            generatedFamilyName: '',
            errorMessage: '',
            families: [],
            totalConfirmed: 0,
            totalGuests: 0,
            isLoadingFamilies: true,
            copied: false,

            async createInvitation() {
                this.isLoading = true;
                this.errorMessage = '';

                try {
                    const csrfToken = document.querySelector('meta[name="csrf-token"]').content;
                    const response = await fetch('/api/families', {
                        method: 'POST',
                        headers: {
                            'Content-Type': 'application/json',
                            'X-CSRF-TOKEN': csrfToken,
                        },
                        body: JSON.stringify({ family_name: this.familyName })
                    });

                    const data = await response.json();
                    if (data.success) {
                        this.generatedLink = data.link;
                        this.generatedFamilyName = this.familyName;
                        this.familyName = '';
                        this.loadFamilies();
                    } else {
                        this.errorMessage = data.message || 'Error al generar la invitación';
                    }
                } catch (error) {
                    this.errorMessage = 'Error: ' + error.message;
                } finally {
                    this.isLoading = false;
                }
            },

            async loadFamilies() {
                this.isLoadingFamilies = true;
                try {
                    const response = await fetch('/api/families-list');
                    const data = await response.json();
                    this.families = data.families;
                    this.totalConfirmed = data.total_confirmed;
                    this.totalGuests = data.total_guests;
                } catch (error) {
                    console.error('Error loading families:', error);
                } finally {
                    this.isLoadingFamilies = false;
                }
            },

            copyToClipboard() {
                const nombre = this.generatedFamilyName ? `${this.generatedFamilyName}, ` : '';
                const mensaje = `${nombre}te invitamos a la celebración sorpresa de Lucy 🌸✨\n\nEs un secreto, por favor no lo menciones 🤫\n\nPor favor confirma tu asistencia antes del 30 de abril 🗓️\n\nConfirma tu asistencia aquí:\n${this.generatedLink}`;
                navigator.clipboard.writeText(mensaje).then(() => {
                    this.copied = true;
                    setTimeout(() => { this.copied = false; }, 2500);
                });
            },

            getConfirmationStatus(family) {
                if (family.attending === null) {
                    return 'Pendiente';
                }
                return family.attending ? 'Confirmado' : 'No asistirá';
            },

            getGuestDisplay(family) {
                if (!family.attending) {
                    return 'No asiste';
                }
                const total = family.guest_count || 0;
                return `${total} persona${total !== 1 ? 's' : ''}`;
            },

            init() {
                this.loadFamilies();
            }
        }
    }
</script>
</head>
<body class="bg-background text-on-surface min-h-screen relative selection:bg-primary-fixed" style="background-color: #fbf9f1;" x-data="adminPanel()" x-init="init()">
<!-- TopAppBar -->
<header class="w-full top-0 sticky bg-[#fbf9f1] dark:bg-stone-950 z-50" style="background-color: #fbf9f1;">
<div class="flex items-center justify-between px-6 py-4 w-full max-w-full">
<div class="flex items-center gap-4">
<button class="material-symbols-outlined text-[#815253] dark:text-[#f4b7b8] hover:bg-[#f0eee6] p-2 rounded-lg transition-colors active:scale-95 duration-150">
                    menu
                </button>
<h1 class="font-serif tracking-tight text-lg font-bold text-[#815253] dark:text-[#f4b7b8]">Celebration Admin</h1>
</div>
<div class="flex items-center gap-4">
<div class="w-8 h-8 rounded-full bg-primary-container flex items-center justify-center overflow-hidden border border-outline-variant/15">
<img alt="Profile" class="w-full h-full object-cover" data-alt="Close-up portrait of a professional woman with a friendly smile, soft natural lighting, elegant corporate attire" src="https://lh3.googleusercontent.com/aida-public/AB6AXuAjk7liy6iQFeDu7XnqPREw_-Nxu47InA3m6WDWPZ0Zbkh1-jqrN9MAuse5AVCWpu_M5fZRBVTm4nAUR2bI3OQZVI3JDo5szD7hHhYN8vu5vg68IFvCQfolO9KmISeX6xGUZNkt-94kq4harDWXOgb2wQJhELXB6aO9iQ72fZIOzYHdXVmUJGMEtoI4aoD0styg5t1yVm5F2Usqa-wlyKYTwyjx9NEb2p1k4QWhwRGBlgLO6heH07Vw0HkgjLKcPsy8B-9_s2clmCc"/>
</div>
</div>
</div>
<div class="bg-[#f0eee6] dark:bg-stone-900 h-[1px] w-full"></div>
</header>
<!-- Background Decoration: Subtle 65 and Floral Accents -->
<div class="fixed inset-0 pointer-events-none z-0 flex items-center justify-center overflow-hidden">
<span class="font-serif text-[40rem] leading-none text-primary-fixed-dim/10 select-none">65</span>
</div>
<!-- Main Content Canvas -->
<main class="relative z-10 max-w-5xl mx-auto px-6 pb-32">
<!-- Summary Section -->
<section class="mb-12">
<div class="bg-surface-container-lowest rounded-xl p-8 shadow-[0_4px_24px_rgba(27,28,23,0.04)] border border-outline-variant/15 flex flex-col md:flex-row items-center justify-between gap-6">
<div class="text-center md:text-left">
<p class="font-label text-xs uppercase tracking-[0.2em] text-on-surface-variant mb-2">Estado de la Celebración</p>
<h2 class="font-headline text-3xl text-primary">Panel de Control</h2>
</div>
<div class="bg-surface-container-low px-10 py-6 rounded-xl text-center border border-outline-variant/10">
<p class="font-label text-[10px] uppercase tracking-widest text-on-surface-variant mb-1">Personas Confirmadas</p>
<span class="font-headline text-5xl font-bold text-primary" x-text="totalConfirmed"></span>
<p class="font-label text-[8px] uppercase tracking-wider text-on-surface-variant/60 mt-2">(Incluyendo contactos principales)</p>
</div>
</div>
</section>
<!-- Guest List Section -->
<section class="bg-surface-container-low/50 backdrop-blur-sm rounded-xl p-6 md:p-10 border border-outline-variant/10">
<div class="flex items-center justify-between mb-8">
<h3 class="font-headline text-2xl text-on-surface">Lista de Invitados</h3>
<button @click="isModalOpen = true" class="flex items-center gap-2 bg-primary text-white px-4 py-2 rounded-lg hover:bg-on-primary-fixed-variant transition-all shadow-sm mr-4 active:scale-95"><span class="material-symbols-outlined text-sm">person_add</span><span class="text-xs font-label uppercase tracking-widest">Crear invitación</span></button>
</div>

<!-- Loading State -->
<div x-show="isLoadingFamilies" class="text-center py-10">
<p class="font-body text-on-surface-variant">Cargando familias...</p>
</div>

<!-- Empty State -->
<div x-show="!isLoadingFamilies && families.length === 0" class="text-center py-10">
<span class="material-symbols-outlined text-4xl text-on-surface-variant/30 block mb-2">inbox</span>
<p class="font-body text-on-surface-variant">No hay familias registradas aún</p>
</div>

<!-- Table-like List -->
<div x-show="!isLoadingFamilies && families.length > 0" class="space-y-4">
<!-- Column Headers -->
<div class="grid grid-cols-12 px-6 py-2">
<div class="col-span-4 md:col-span-5 font-label text-[10px] uppercase tracking-widest text-on-surface-variant/70">Familia</div>
<div class="col-span-3 md:col-span-3 font-label text-[10px] uppercase tracking-widest text-on-surface-variant/70">Estado</div>
<div class="col-span-5 md:col-span-4 font-label text-[10px] uppercase tracking-widest text-on-surface-variant/70 text-right">Asistentes</div>
</div>

<!-- Guest Items -->
<template x-for="family in families" :key="family.id">
<div class="grid grid-cols-12 items-center px-6 py-5 bg-surface-container-lowest rounded-lg hover:bg-surface-container transition-colors duration-200">
<div class="col-span-4 md:col-span-5">
<span class="font-headline text-base md:text-lg text-on-surface block" x-text="family.family_name"></span>
<span class="text-xs text-on-surface-variant italic" x-text="family.contact_name ? 'Contacto: ' + family.contact_name : 'Sin contacto'"></span>
</div>
<div class="col-span-3 md:col-span-3">
<span class="px-3 py-1 rounded-full font-label text-xs font-medium"
      :class="family.attending === null ? 'bg-orange-100 text-orange-700' : family.attending ? 'bg-green-100 text-green-700' : 'bg-red-100 text-red-700'"
      x-text="getConfirmationStatus(family)"></span>
</div>
<div class="col-span-5 md:col-span-4 text-right">
<span x-show="family.attending" class="bg-primary-fixed/40 text-on-primary-fixed-variant px-3 py-1 rounded-full font-label text-xs md:text-sm font-medium" x-text="getGuestDisplay(family)"></span>
<span x-show="!family.attending" class="text-on-surface-variant text-xs md:text-sm">—</span>
</div>
</div>
</template>
</div>
</section>
</main>
<!-- BottomNavBar -->
<nav class="fixed bottom-0 left-0 w-full flex justify-around items-center px-4 pt-2 pb-6 bg-[#fbf9f1]/80 dark:bg-stone-950/80 backdrop-blur-md z-50 rounded-t-xl border-t border-[#d5c2c2]/15 shadow-[0_-4px_24px_rgba(27,28,23,0.04)]">
<a class="flex flex-col items-center justify-center text-[#1b1c17] dark:text-stone-400 opacity-70 hover:text-[#815253] transition-all scale-105 duration-200" href="/admin">
<span class="material-symbols-outlined">dashboard</span>
<span class="font-sans text-[10px] tracking-widest uppercase mt-1">Overview</span>
</a>
<a class="flex flex-col items-center justify-center bg-[#ffdada]/40 dark:bg-[#815253]/20 text-[#815253] dark:text-[#f4b7b8] rounded-xl px-4 py-1 transition-all scale-105 duration-200" href="/admin">
<span class="material-symbols-outlined">group</span>
<span class="font-sans text-[10px] tracking-widest uppercase mt-1">Guest List</span>
</a>
<a class="flex flex-col items-center justify-center text-[#1b1c17] dark:text-stone-400 opacity-70 hover:text-[#815253] transition-all scale-105 duration-200" href="/admin">
<span class="material-symbols-outlined">settings</span>
<span class="font-sans text-[10px] tracking-widest uppercase mt-1">Settings</span>
</a>
</nav>
<!-- Modal Backdrop -->
<div class="fixed inset-0 z-[60] bg-black/30 backdrop-blur-sm flex items-center justify-center p-6" style="display: none;" x-show="isModalOpen" x-transition:enter="transition ease-out duration-300" x-transition:enter-end="opacity-100" x-transition:enter-start="opacity-0" x-transition:leave="transition ease-in duration-200" x-transition:leave-end="opacity-0" x-transition:leave-start="opacity-100">
<!-- Modal Content -->
<div @click.away="isModalOpen = false" class="bg-surface-container-lowest w-full max-w-md rounded-2xl shadow-2xl relative overflow-hidden border border-outline-variant/20">
<div class="p-8">
<div class="flex justify-between items-center mb-6">
<h3 class="font-headline text-2xl text-primary">Nueva Invitación</h3>
<button @click="isModalOpen = false" class="material-symbols-outlined text-on-surface-variant hover:text-primary">close</button>
</div>

<!-- Form or Generated Link View -->
<div x-show="!generatedLink" class="space-y-6">
<div>
<label class="block font-label text-[10px] uppercase tracking-widest text-on-surface-variant mb-2">Nombre del Invitado o Familia</label>
<input x-model="familyName" class="w-full bg-surface-container-low border border-outline-variant/30 rounded-lg py-3 px-4 focus:ring-primary focus:border-primary font-body text-on-surface placeholder:text-on-surface-variant/40" placeholder="Ej. Familia Martínez Silva" type="text"/>
</div>

<div x-show="errorMessage" class="bg-error-container text-on-error-container px-4 py-3 rounded-lg font-body text-sm">
<p x-text="errorMessage"></p>
</div>

<button @click="createInvitation()" :disabled="!familyName || isLoading" class="w-full bg-primary text-white py-4 rounded-xl font-label uppercase tracking-widest text-sm font-bold shadow-lg hover:shadow-primary/20 transition-all active:scale-95 disabled:opacity-50 disabled:cursor-not-allowed">
<span x-show="!isLoading">Generar Link</span>
<span x-show="isLoading">Generando...</span>
</button>
</div>

<!-- Success View -->
<div x-show="generatedLink" class="space-y-6">
<div class="bg-primary-fixed/20 border border-primary-fixed/50 rounded-lg p-4">
<p class="font-label text-xs uppercase tracking-widest text-primary mb-2">Link Generado</p>
<p class="font-body text-sm text-on-surface break-all" x-text="generatedLink"></p>
</div>

<button @click="copyToClipboard()" class="w-full py-3 rounded-lg font-label uppercase tracking-widest text-sm font-bold transition-all active:scale-95" :class="copied ? 'bg-green-600 text-white' : 'bg-primary text-white hover:bg-on-primary-fixed-variant'">
<span class="material-symbols-outlined text-sm inline mr-2" x-text="copied ? 'check_circle' : 'content_copy'"></span>
<span x-text="copied ? '¡Copiado!' : 'Copiar Mensaje'"></span>
</button>

<button @click="generatedLink = ''; generatedFamilyName = ''; familyName = ''; copied = false;" class="w-full bg-surface-container text-primary py-3 rounded-lg font-label uppercase tracking-widest text-sm font-bold hover:bg-surface-container-high transition-all">
Crear Otra Invitación
</button>

<button @click="isModalOpen = false" class="w-full bg-surface-container text-on-surface py-3 rounded-lg font-label uppercase tracking-widest text-sm font-bold hover:bg-surface-container-high transition-all">
Cerrar
</button>
</div>
</div>
</div>
</div>
</body></html>
