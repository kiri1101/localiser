<template>
  <Head title="Home" />

  <FrontEndLayout>
    <section class="hero">
      <div
        class="grid min-h-[28rem] xl:min-h-[33rem] bg-gradient-to-b from-gray-900/60 via-gray-900/40 to-gray-900/20"
      >
        <div
          class="self-center bg-white/95 h-80 w-11/12 sm:w-9/12 mx-auto rounded-lg shadow-lg"
        >
          <Chart />
        </div>

        <SearchBar class="self-center w-11/12 sm:w-9/12 max-w-screen-2xl mx-auto" />
      </div>
    </section>
  </FrontEndLayout>
</template>

<script setup>
import { Link, Head } from "@inertiajs/vue3";
import SearchBar from "@/Components/Gadgets/SearchBar.vue";
import FrontEndLayout from "@/Layouts/FrontEndLayout.vue";
import Chart from "@/Components/Gadgets/Chart.vue";
</script>

<style scoped>
.hero {
  background-image: url(/assets/images/bg/37.jpg);
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}
</style>
