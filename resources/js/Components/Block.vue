<template>
    <div @mouseover="hoverActive" @mouseleave="hover = false"
        class="relative max-w-md h-72 mt-8 overflow-hidden rounded-lg">
        <a href="#">
            <img :class="{
                'z-10 rounded-lg object-cover object-center transition-all duration-700 ease-out': true,
                'scale-105': hover,
            }" :src="`${$page.props.ziggy.url}/assets/images/all/48.jpg`" alt="product image" />
        </a>

        <slot />
    </div>
</template>

<script setup>
import { ref } from "vue";

const hover = ref(false);

const hoverActive = () => (hover.value = true);
</script>

<style lang="scss" scoped></style>
