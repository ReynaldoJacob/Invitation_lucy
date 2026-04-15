<template>
  <div class="relative min-h-screen flex flex-col max-w-lg mx-auto overflow-hidden bg-[#FCFAF2]">
    <!-- Floral Header Decorative Element -->
    <div class="floral-header"></div>
    <main class="relative z-10 flex-grow flex flex-col pt-32 px-12">
      <!-- Hero Section -->
      <section class="flex flex-col items-center justify-center text-center w-full mb-12">
        <div class="mb-4 w-full flex flex-col items-center justify-center">
            <br>
            <br>
          <h2 class="script-text text-6xl md:text-7xl text-primary leading-tight text-center">Shhh!</h2>
          <p class="font-label uppercase tracking-[0.4em] text-[10px] text-on-surface-variant/80 text-center">Es una sorpresa</p>
        </div>
        <h1 class="tangerine-bold text-[120px] md:text-[150px] text-primary tracking-tight leading-none mb-6">
          Lucy
        </h1>
         <!-- <h1 class="script-text text-8xl md:text-6xl font-bold text-primary tracking-tight leading-none mb-6">
          65
        </h1> -->
        <div class="flex items-center justify-center gap-4 my-12 flex-wrap">
          <span class="serif-text text-base md:text-xl font-bold text-primary/80 uppercase">Sab</span>
          <div class="h-8 w-[1px] bg-outline-variant/40"></div>
          <div class="flex flex-col items-center">
            <span class="serif-text text-3xl font-bold text-primary leading-none">09</span>
            <span class="serif-text text-xs md:text-[12px] text-primary/80 uppercase tracking-wide">Mayo</span>
          </div>
          <div class="h-8 w-[1px] bg-outline-variant/40"></div>
          <span class="serif-text text-base md:text-xl font-bold text-primary/80">1:00 pm</span>
        </div>
        <div class="mt-8 px-4">
          <div class="mb-6">
            <span class="material-symbols-outlined text-primary/40 text-4xl">flare</span>
          </div>
          <p class="text-on-surface-variant leading-relaxed italic serif-text text-xl">
            <br>
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
      <section class="mb-16 relative">
        <div class="bg-white/40 backdrop-blur-sm rounded-full p-8 text-center relative overflow-hidden border border-primary/5 shadow-sm">
          <h3 class="font-label uppercase tracking-widest text-[10px] text-on-surface-variant/60 mb-6">Faltan para el momento</h3>
          <div class="grid grid-cols-4 gap-2">
            <div class="flex flex-col items-center">
              <span class="serif-text text-3xl font-bold text-primary">{{ countdown.days }}</span>
              <span class="font-label text-[8px] uppercase tracking-wider text-on-surface-variant/70 mt-1">Días</span>
            </div>
            <div class="flex flex-col items-center">
              <span class="serif-text text-3xl font-bold text-primary">{{ countdown.hours }}</span>
              <span class="font-label text-[8px] uppercase tracking-wider text-on-surface-variant/70 mt-1">Horas</span>
            </div>
            <div class="flex flex-col items-center">
              <span class="serif-text text-3xl font-bold text-primary">{{ countdown.minutes }}</span>
              <span class="font-label text-[8px] uppercase tracking-wider text-on-surface-variant/70 mt-1">Mins</span>
            </div>
            <div class="flex flex-col items-center">
              <span class="serif-text text-3xl font-bold text-primary">{{ countdown.seconds }}</span>
              <span class="font-label text-[8px] uppercase tracking-wider text-on-surface-variant/70 mt-1">Segs</span>
            </div>
          </div>
        </div>
      </section>

      <!-- Actions Section -->
      <section class="grid grid-cols-1 gap-6 mb-20 relative">
        <!-- Lugar Button -->
        <button class="group flex flex-col items-center justify-center p-8 bg-white/50 backdrop-blur-sm rounded-3xl border border-primary/5 hover:bg-white/70 transition-all duration-500">
          <div class="w-12 h-12 rounded-full bg-primary/5 text-primary flex items-center justify-center mb-4 group-hover:scale-110 transition-transform">
            <span class="material-symbols-outlined text-2xl">location_on</span>
          </div>
          <span class="font-label uppercase tracking-[0.2em] text-[11px] font-semibold text-on-surface">Lugar</span>
          <span class="text-[9px] text-on-surface-variant mt-1 italic">Ver mapa y dirección</span>
        </button>

        <!-- RSVP Button -->
        <button class="group flex flex-col items-center justify-center p-8 bg-primary text-on-primary rounded-3xl shadow-xl shadow-primary/10 hover:shadow-2xl hover:-translate-y-1 transition-all duration-500 relative overflow-hidden">
          <div class="w-12 h-12 rounded-full bg-on-primary/15 flex items-center justify-center mb-4 group-hover:scale-110 transition-transform relative z-10">
            <span class="material-symbols-outlined text-2xl">mail</span>
          </div>
          <span class="font-label uppercase tracking-[0.2em] text-[11px] font-semibold relative z-10">Confirmar Asistencia</span>
          <span class="text-[9px] opacity-80 mt-1 italic relative z-10">Tu presencia es el regalo</span>
        </button>
      </section>
    </main>

    <!-- Floral Footer Decorative Element -->
    <div class="floral-footer"></div>
  </div>

  <!-- BottomNavBar -->
  <nav class="fixed bottom-0 left-1/2 -translate-x-1/2 w-full max-w-lg z-50 bg-[#FCFAF2]/90 backdrop-blur-xl border-t border-primary/5 flex justify-around items-center h-20 pb-safe px-8 shadow-[0_-10px_40px_rgba(129,82,83,0.05)]">
    <a class="flex flex-col items-center justify-center text-primary transition-all scale-105" href="#">
      <span class="material-symbols-outlined text-2xl">auto_awesome</span>
      <span class="font-label uppercase tracking-[0.15em] text-[9px] font-bold mt-1">Inicio</span>
    </a>
    <a class="flex flex-col items-center justify-center text-on-surface-variant/40 hover:text-primary transition-all" href="#">
      <span class="material-symbols-outlined text-2xl">location_on</span>
      <span class="font-label uppercase tracking-[0.15em] text-[9px] mt-1">Lugar</span>
    </a>
    <a class="flex flex-col items-center justify-center text-on-surface-variant/40 hover:text-primary transition-all" href="#">
      <span class="material-symbols-outlined text-2xl">mail</span>
      <span class="font-label uppercase tracking-[0.15em] text-[9px] mt-1">RSVP</span>
    </a>
  </nav>
</template>

<script setup>
import { ref, onMounted, onUnmounted } from 'vue';

const countdown = ref({
  days: 14,
  hours: 8,
  minutes: 42,
  seconds: 15
});

let countdownInterval;

const calculateCountdown = () => {
  // Fecha objetivo: 9 de Mayo de 2026 a las 1:00 PM
  const targetDate = new Date(2026, 4, 9, 13, 0, 0).getTime();
  const now = new Date().getTime();
  const difference = targetDate - now;

  if (difference > 0) {
    countdown.value.days = Math.floor(difference / (1000 * 60 * 60 * 24));
    countdown.value.hours = Math.floor((difference / (1000 * 60 * 60)) % 24);
    countdown.value.minutes = Math.floor((difference / 1000 / 60) % 60);
    countdown.value.seconds = Math.floor((difference / 1000) % 60);
  } else {
    // La fecha ya pasó
    countdown.value = { days: 0, hours: 0, minutes: 0, seconds: 0 };
    clearInterval(countdownInterval);
  }
};

onMounted(() => {
  calculateCountdown();
  countdownInterval = setInterval(calculateCountdown, 1000);
});

onUnmounted(() => {
  clearInterval(countdownInterval);
});
</script>

<style scoped>
.material-symbols-outlined {
  font-variation-settings: "FILL" 0, "wght" 300, "GRAD" 0, "opsz" 24;
}
</style>
