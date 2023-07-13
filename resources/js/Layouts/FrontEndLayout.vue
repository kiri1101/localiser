<script setup>
import NavbarHome from '@/Components/Navbar/NavbarHome.vue';
</script>

<template>
    <div class="min-h-screen">
        <NavbarHome />

        <main class="w-full px-6 overflow-hidden">
            <slot />
        </main>
    </div>
</template>
