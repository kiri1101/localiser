<template>
  <Head title="Home" />

  <FrontEndLayout>
    <section class="hero">
      <div class="grid min-h-[28rem] xl:min-h-[33rem] bg-gradient-to-b from-gray-900/60 via-gray-900/40 to-gray-900/20">
        <div class="self-center w-11/12 mx-auto rounded-lg shadow-lg bg-white/95 h-80 sm:w-9/12">
          <Chart />
        </div>

        <SearchBar class="self-center w-11/12 mx-auto sm:w-9/12 max-w-screen-2xl" />
      </div>
    </section>

    <section class="bg-white w-full overflow-auto mx-1 h-96">
      <h1 class="font-bold text-2xl text-center leading-tight underline underline-offset-8 decoration-sky-600">
        The latest Listings
      </h1>

      <ul class="flex gap-1">
        <li>
          <Block>
            <div
              class="absolute top-0 z-20 bg-gradient-to-b from-transparent via-transparent to-sky-600/40 h-full w-full">
              <div
                class="grid place-content-center rounded-full cursor-pointer w-9 h-9 bg-sky-800 hover:bg-sky-500 ml-5 mt-5">
                <span class="text-2xl">&hearts;</span>
              </div>
            </div>
          </Block>
        </li>
        <li>
          <Block>
            <div
              class="absolute top-0 z-40 bg-gradient-to-b from-transparent via-transparent to-sky-600/40 h-full w-full">
              <div
                class="grid place-content-center rounded-full cursor-pointer w-9 h-9 bg-sky-800 hover:bg-sky-500 ml-5 mt-5">
                <span class="text-2xl">&hearts;</span>
              </div>
            </div>
          </Block>
        </li>
        <li>
          <Block>
            <div
              class="absolute top-0 z-40 bg-gradient-to-b from-transparent via-transparent to-sky-600/40 h-full w-full">
              <div
                class="grid place-content-center rounded-full cursor-pointer w-9 h-9 bg-sky-800 hover:bg-sky-500 ml-5 mt-5">
                <span class="text-2xl">&hearts;</span>
              </div>
            </div>
          </Block>
        </li>
      </ul>
    </section>
  </FrontEndLayout>
</template>

<script setup>
import { ref } from "vue";
import { Link, Head } from "@inertiajs/vue3";
import SearchBar from "@/Components/Gadgets/SearchBar.vue";
import FrontEndLayout from "@/Layouts/FrontEndLayout.vue";
import Chart from "@/Components/Gadgets/Chart.vue";
import Block from "@/Components/Block.vue";

const hover = ref(false);

const hoverActive = () => (hover.value = true);
</script>

<style scoped>
.hero {
  background-image: url(/assets/images/bg/37.jpg);
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}
</style>
