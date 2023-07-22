<template>
  <nav class=" border-gray-200 bg-[#2E3F6E]">
    <div class="flex items-center justify-between p-4 mx-auto">
      <div class="flex items-center justify-between gap-4">
        <Link href="https://flowbite.com/" class="flex items-center">
        <img :src="`${$page.props.ziggy.url}/assets/images/logo.png`" class="max-h-[2rem]" alt="Site Logo" />
        </Link>

        <button type="button"
          class="flex self-end justify-between text-white transition-all duration-300 rounded-full sm:items-center sm:py-2 sm:px-2 lg:px-6 lg:w-32 sm:bg-sky-500 sm:hover:bg-sky-400">
          <Search />
          <span class="hidden text-xs lg:block">|</span>
          <span class="hidden text-xs lg:block">Search</span>
        </button>
      </div>

      <div class="hidden w-full lg:block md:w-auto" id="navbar-default">
        <ul
          class="flex flex-col p-4 mt-4 text-sm font-medium rounded-lg md:p-0 md:flex-row md:space-x-8 md:mt-0 md:border-0">
          <li>
            <a href="#" class="block py-2 pl-3 pr-4 text-blue-400 rounded md:bg-transparent md:p-0"
              aria-current="page">Home</a>
          </li>
          <li>
            <a href="#" class="block py-2 pl-3 pr-4 text-white hover:text-blue-400 md:p-0">About</a>
          </li>
          <li>
            <a href="#" class="block py-2 pl-3 pr-4 text-white hover:text-blue-400 md:p-0">Services</a>
          </li>
          <li>
            <a href="#" class="block py-2 pl-3 pr-4 text-white hover:text-blue-400 md:p-0">Pricing</a>
          </li>
          <li>
            <a href="#" class="block py-2 pl-3 pr-4 text-white hover:text-blue-400 md:p-0">Contact</a>
          </li>
        </ul>
      </div>

      <div class="flex items-center">
        <div class="flex items-center">
          <Dropdown align="right" width="48">
            <template #trigger>
              <button type="button" data-dropdown-toggle="language-dropdown-menu"
                class="inline-flex items-center justify-center px-4 py-2 text-sm font-medium text-white rounded-lg cursor-pointer hover:bg-sky-700">
                <Globe />

                <span class="ml-2">En</span>
              </button>
            </template>

            <template #content>
              <DropdownLink :href="route('home')"> French </DropdownLink>
              <DropdownLink :href="route('home')"> English </DropdownLink>
            </template>
          </Dropdown>

          <button type="button" class="p-1 rounded hover:bg-sky-700">
            <User />
          </button>

          <Dropdown align="right" width="64">
            <template #trigger>
              <span class="inline-flex rounded-md">
                <button data-collapse-toggle="navbar-language" type="button"
                  class="inline-flex items-center justify-center w-10 h-10 p-2 text-sm text-gray-500 rounded-lg md:hidden hover:bg-sky-700 focus:outline-none focus:ring-2 focus:ring-gray-200"
                  aria-controls="navbar-language" aria-expanded="false">
                  <span class="sr-only">Open main menu</span>
                  <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                    viewBox="0 0 17 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                      d="M1 1h15M1 7h15M1 13h15" />
                  </svg>
                </button>
              </span>
            </template>

            <template #content>
              <DropdownLink :href="route('profile.edit')"> Home </DropdownLink>
              <DropdownLink :href="route('profile.edit')"> About </DropdownLink>
              <DropdownLink :href="route('logout')" method="post" as="button">
                Log Out
              </DropdownLink>
            </template>
          </Dropdown>
        </div>
      </div>
    </div>
  </nav>
</template>

<script setup>
import { Link } from "@inertiajs/vue3";
import User from "@/Components/SVG/User.vue";
import Search from "@/Components/SVG/Search.vue";
import Globe from "@/Components/SVG/Globe.vue";
import Dropdown from "@/Components/Dropdown.vue";
import DropdownLink from "@/Components/DropdownLink.vue";
</script>

<style lang="scss" scoped></style>
