<template>
  <Head title="Home" />

  <FrontEndLayout>
    <section class="grid min-h-[42rem] hero">
      <SearchBar class="self-center w-9/12 max-w-screen-2xl mx-auto" />
    </section>
  </FrontEndLayout>
</template>

<script setup>
import SearchBar from "@/Components/Gadgets/SearchBar.vue";
import FrontEndLayout from "@/Layouts/FrontEndLayout.vue";
import { Link, Head } from "@inertiajs/vue3";
</script>

<style scoped>
.hero {
  background-image: url(/assets/images/bg/37.jpg);
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}
</style>
