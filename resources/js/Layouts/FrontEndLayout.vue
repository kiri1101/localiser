<template>
  <div class="min-h-screen grid grid-rows-auto-frame">
    <div>
      <NavbarHome />

      <main class="relative">
        <slot />
      </main>
    </div>

    <FooterHome />
  </div>
</template>

<script setup>
import NavbarHome from "@/Components/Navbar/NavbarHome.vue";
import FooterHome from "@/Components/Footer/FooterHome.vue";
</script>
