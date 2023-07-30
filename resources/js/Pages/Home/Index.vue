<template>
  <Head title="Home" />

  <FrontEndLayout>
    <section id="hero" class="hero">
      <div class="grid min-h-[28rem] xl:min-h-[33rem] bg-gradient-to-b from-gray-900/60 via-gray-900/40 to-gray-900/20">
        <div class="self-center w-11/12 mx-auto rounded-lg shadow-lg bg-white/95 h-80 sm:w-9/12">
          <Chart />
        </div>

        <SearchBar class="self-center w-11/12 mx-auto sm:w-9/12 max-w-screen-2xl" />
      </div>
    </section>

    <section id="listing" class="bg-white mb-8">
      <div class="relative font-bold text-2xl text-center leading-tight my-10">
        <p class="text-6xl text-sky-100 font-bold font-serif uppercase">
          Newest Listings
        </p>

        <span class="absolute top-0 right-0 left-0 mt-2 text-4xl font-mono text-sky-800 capitalize">
          The Latest Listings
        </span>

        <div class="h-1 w-16 mx-auto rounded-l-full rounded-r-full bg-sky-500"></div>

        <p class="text-center text-sm text-sky-900 mt-3 max-w-2xl mx-auto">
          Lorem ipsum, dolor sit amet consectetur adipisicing elit. Assumenda eligendi
          quasi, iste facere harum consequatur quaerat dignissimos eius obcaecati ducimus
          culpa ea saepe ex nemo quam iusto doloribus tempora placeat?
        </p>
      </div>

      <Splide :options="option" aria-label="My Favorite Images">
        <SplideSlide>
          <Block>
            <div class="absolute top-0 bottom-0 right-0 left-0">
              <div
                class="grid place-content-center rounded-full cursor-pointer w-9 h-9 bg-sky-800 hover:bg-sky-500 ml-5 mt-5">
                <span class="text-2xl">&hearts;</span>
              </div>
            </div>
          </Block>
        </SplideSlide>
        <SplideSlide>
          <Block>
            <div class="absolute top-0 bottom-0 right-0 left-0">
              <div
                class="grid place-content-center rounded-full cursor-pointer w-9 h-9 bg-sky-800 hover:bg-sky-500 ml-5 mt-5">
                <span class="text-2xl">&hearts;</span>
              </div>
            </div>
          </Block>
        </SplideSlide>
        <SplideSlide>
          <Block>
            <div class="absolute top-0 bottom-0 right-0 left-0">
              <div
                class="grid place-content-center rounded-full cursor-pointer w-9 h-9 bg-sky-800 hover:bg-sky-500 ml-5 mt-5">
                <span class="text-2xl">&hearts;</span>
              </div>
            </div>
          </Block>
        </SplideSlide>
      </Splide>
    </section>

    <div class="grid">
      <button type="button" class="bg-white h-10 w-24 self-end justify-self-center translate-y-5 rounded-lg"></button>
    </div>

    <section id="announcement" class="grid bg-shapes-animation min-h-[32rem] text-white">
      <div class="grid md:grid-cols-2 h-full">
        <div class="self-center justify-self-center w-5/6 mx-auto md:w-96">
          <h1 class="text-4xl leading-tight font-serif">Title Here</h1>

          <p class="text-sm mt-4">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus itaque libero, officiis earum incidunt
            architecto quis minus laborum quo veritatis explicabo, unde ad odit natus maxime laudantium distinctio
            tempore
            fugiat.
          </p>

          <button type="button"
            class="flex gap-3 items-center ring-4 ring-white/60 rounded-md bg-sky-800 hover:bg-sky-600 mt-5 text-xs px-5 py-3 text-center">
            <span class="text-sky-400">16</span>
            <span class="capitalize text-white font-semibold">YouTube Channel</span>
          </button>
        </div>
        <div></div>
      </div>
    </section>

    <section id="explore" class="bg-gray-50 mb-8">
      <div class="relative font-bold text-2xl text-center leading-tight my-8">
        <p class="text-6xl text-sky-100 font-bold font-serif uppercase">
          Catalog of Categories
        </p>

        <span class="absolute top-0 right-0 left-0 mt-2 text-4xl font-mono text-sky-800 capitalize">
          Explore Best Cities
        </span>

        <div class="h-1 w-16 mx-auto rounded-l-full rounded-r-full bg-sky-500"></div>
      </div>

      <div class="max-w-screen-lg mx-2 md:mx-auto 2xl:max-w-screen-2xl">
        <ul id="list-group" class="grid md:grid-cols-3 gap-4 justify-center">
          <li id="list1" class="inline-block">
            <Block>
              <div class="absolute top-0 bottom-0 right-0 left-0">
                <button type="button"
                  class="flex gap-3 items-center ring-4 ring-white/60 rounded-md bg-sky-800 hover:bg-sky-600 ml-5 mt-5 text-xs px-3 py-2 text-center">
                  <span class="text-sky-400">16</span>
                  <span class="capitalize text-white font-semibold">locations</span>
                </button>
              </div>
            </Block>
          </li>
          <li id="list2">
            <Block>
              <div class="absolute top-0 bottom-0 right-0 left-0">
                <button type="button"
                  class="flex gap-3 items-center ring-4 ring-white/60 rounded-md bg-sky-800 hover:bg-sky-600 ml-5 mt-5 text-xs px-3 py-2 text-center">
                  <span class="text-sky-400">16</span>
                  <span class="capitalize text-white font-semibold">locations</span>
                </button>
              </div>
            </Block>
          </li>
          <li id="list3">
            <Block>
              <div class="absolute top-0 bottom-0 right-0 left-0">
                <button type="button"
                  class="flex gap-3 items-center ring-4 ring-white/60 rounded-md bg-sky-800 hover:bg-sky-600 ml-5 mt-5 text-xs px-3 py-2 text-center">
                  <span class="text-sky-400">16</span>
                  <span class="capitalize text-white font-semibold">locations</span>
                </button>
              </div>
            </Block>
          </li>
          <li id="list4">
            <Block>
              <div class="absolute top-0 bottom-0 right-0 left-0">
                <button type="button"
                  class="flex gap-3 items-center ring-4 ring-white/60 rounded-md bg-sky-800 hover:bg-sky-600 ml-5 mt-5 text-xs px-3 py-2 text-center">
                  <span class="text-sky-400">16</span>
                  <span class="capitalize text-white font-semibold">locations</span>
                </button>
              </div>
            </Block>
          </li>
          <li id="list5">
            <Block>
              <div class="absolute top-0 bottom-0 right-0 left-0">
                <button type="button"
                  class="flex gap-3 items-center ring-4 ring-white/60 rounded-md bg-sky-800 hover:bg-sky-600 ml-5 mt-5 text-xs px-3 py-2 text-center">
                  <span class="text-sky-400">16</span>
                  <span class="capitalize text-white font-semibold">locations</span>
                </button>
              </div>
            </Block>
          </li>
          <li id="list6">
            <Block>
              <div class="absolute top-0 bottom-0 right-0 left-0">
                <button type="button"
                  class="flex gap-3 items-center ring-4 ring-white/60 rounded-md bg-sky-800 hover:bg-sky-600 ml-5 mt-5 text-xs px-3 py-2 text-center">
                  <span class="text-sky-400">16</span>
                  <span class="capitalize text-white font-semibold">locations</span>
                </button>
              </div>
            </Block>
          </li>
        </ul>
      </div>

      <div class="grid justify-center my-4">
        <button type="button"
          class="flex gap-3 items-center ring-4 ring-sky-300/60 rounded-md bg-sky-800 hover:bg-sky-600 ml-5 mt-5 text-xs px-5 py-3 text-center">
          <!-- <span class="text-sky-400">16</span> -->
          <span class="capitalize text-white font-semibold">View all categories</span>
          <span class="text-white text-xl">&RightArrow;</span>
        </button>
      </div>
    </section>

    <section id="counter" class="bg-gray-600">
      <ul class="grid items-center text-white sm:grid-cols-2 md:grid-cols-4 h-64">
        <li class="text-center">
          <h3 class="text-4xl font-bold">66</h3>

          <span class="text-xs leading-tight capitalize">Secteur d'activiter</span>
        </li>
        <li class="text-center">
          <h3 class="text-4xl font-bold">66</h3>

          <span class="text-xs leading-tight capitalize">Secteur d'activiter</span>
        </li>
        <li class="text-center">
          <h3 class="text-4xl font-bold">66</h3>

          <span class="text-xs leading-tight capitalize">Secteur d'activiter</span>
        </li>
        <li class="text-center">
          <h3 class="text-4xl font-bold">66</h3>

          <span class="text-xs leading-tight capitalize">Secteur d'activiter</span>
        </li>
      </ul>
    </section>

    <section id="entreprise" class="bg-gray-50 mb-8">
      <div class="relative font-bold text-2xl text-center leading-tight my-8">
        <p class="text-6xl text-sky-100 font-bold font-serif uppercase">
          Best Company Listing
        </p>

        <span class="absolute top-0 right-0 left-0 mt-2 text-4xl font-mono text-sky-800 capitalize">
          Espace Entreprises
        </span>

        <div class="h-1 w-16 mx-auto rounded-l-full rounded-r-full bg-sky-500"></div>

        <p class="text-xs text-center capitalize mt-4">Retrouvez vos entreprises</p>
      </div>

      <div class="max-w-screen-lg mx-2 md:mx-auto 2xl:max-w-screen-2xl">
        <ul id="list-group" class="grid sm:grid-cols-2 md:grid-cols-3 gap-4 justify-center">
          <li class="inline-block">
            <div
              class="relative w-full max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 overflow-hidden">
              <a href="#">
                <img class="object-center object-cover transition-all duration-700 ease-out rounded-t-lg hover:scale-105"
                  :src="`${$page.props.ziggy.url}/assets/images/all/48.jpg`" alt="product image" />
              </a>

              <i class="fa-regular fa-heart absolute top-0 text-white ml-4 mt-4 text-3xl cursor-pointer"></i>

              <div class="px-5 pb-5">
                <a href="#">
                  <h5 class="text-xl font-semibold tracking-tight text-gray-900 dark:text-white">Apple Watch Series 7 GPS,
                    Aluminium Case, Starlight Sport</h5>
                </a>
                <div class="flex items-center mt-2.5 mb-5">
                  <svg class="w-4 h-4 text-yellow-300 mr-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                    fill="currentColor" viewBox="0 0 22 20">
                    <path
                      d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                  </svg>
                  <svg class="w-4 h-4 text-yellow-300 mr-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                    fill="currentColor" viewBox="0 0 22 20">
                    <path
                      d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                  </svg>
                  <svg class="w-4 h-4 text-yellow-300 mr-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                    fill="currentColor" viewBox="0 0 22 20">
                    <path
                      d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                  </svg>
                  <svg class="w-4 h-4 text-yellow-300 mr-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                    fill="currentColor" viewBox="0 0 22 20">
                    <path
                      d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                  </svg>
                  <svg class="w-4 h-4 text-gray-200 dark:text-gray-600" aria-hidden="true"
                    xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                    <path
                      d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                  </svg>
                  <span
                    class="bg-blue-100 text-blue-800 text-xs font-semibold mr-2 px-2.5 py-0.5 rounded dark:bg-blue-200 dark:text-blue-800 ml-3">5.0</span>
                </div>

                <div class="flex items-center justify-between">
                  <button type="button" @click="openModal"
                    class="text-white text-xs bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                    Message
                  </button>

                  <button type="button"
                    class="text-white text-xs bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                    Review
                  </button>
                </div>
              </div>
            </div>
          </li>
          <li>
            <div
              class="w-full max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 overflow-hidden">
              <a href="#">
                <img class="object-center object-cover transition-all duration-700 ease-out rounded-t-lg hover:scale-105"
                  :src="`${$page.props.ziggy.url}/assets/images/all/48.jpg`" alt="product image" />
              </a>
              <div class="px-5 pb-5">
                <a href="#">
                  <h5 class="text-xl font-semibold tracking-tight text-gray-900 dark:text-white">Apple Watch Series 7 GPS,
                    Aluminium Case, Starlight Sport</h5>
                </a>
                <div class="flex items-center mt-2.5 mb-5">
                  <svg class="w-4 h-4 text-yellow-300 mr-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                    fill="currentColor" viewBox="0 0 22 20">
                    <path
                      d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                  </svg>
                  <svg class="w-4 h-4 text-yellow-300 mr-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                    fill="currentColor" viewBox="0 0 22 20">
                    <path
                      d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                  </svg>
                  <svg class="w-4 h-4 text-yellow-300 mr-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                    fill="currentColor" viewBox="0 0 22 20">
                    <path
                      d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                  </svg>
                  <svg class="w-4 h-4 text-yellow-300 mr-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                    fill="currentColor" viewBox="0 0 22 20">
                    <path
                      d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                  </svg>
                  <svg class="w-4 h-4 text-gray-200 dark:text-gray-600" aria-hidden="true"
                    xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                    <path
                      d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                  </svg>
                  <span
                    class="bg-blue-100 text-blue-800 text-xs font-semibold mr-2 px-2.5 py-0.5 rounded dark:bg-blue-200 dark:text-blue-800 ml-3">5.0</span>
                </div>

                <div class="flex items-center justify-between">
                  <button type="button" @click="openModal"
                    class="text-white text-xs bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                    Message
                  </button>

                  <button type="button"
                    class="text-white text-xs bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                    Review
                  </button>
                </div>
              </div>
            </div>
          </li>
          <li>
            <div
              class="w-full max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 overflow-hidden">
              <a href="#">
                <img class="object-center object-cover transition-all duration-700 ease-out rounded-t-lg hover:scale-105"
                  :src="`${$page.props.ziggy.url}/assets/images/all/48.jpg`" alt="product image" />
              </a>
              <div class="px-5 pb-5">
                <a href="#">
                  <h5 class="text-xl font-semibold tracking-tight text-gray-900 dark:text-white">Apple Watch Series 7 GPS,
                    Aluminium Case, Starlight Sport</h5>
                </a>
                <div class="flex items-center mt-2.5 mb-5">
                  <svg class="w-4 h-4 text-yellow-300 mr-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                    fill="currentColor" viewBox="0 0 22 20">
                    <path
                      d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                  </svg>
                  <svg class="w-4 h-4 text-yellow-300 mr-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                    fill="currentColor" viewBox="0 0 22 20">
                    <path
                      d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                  </svg>
                  <svg class="w-4 h-4 text-yellow-300 mr-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                    fill="currentColor" viewBox="0 0 22 20">
                    <path
                      d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                  </svg>
                  <svg class="w-4 h-4 text-yellow-300 mr-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                    fill="currentColor" viewBox="0 0 22 20">
                    <path
                      d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                  </svg>
                  <svg class="w-4 h-4 text-gray-200 dark:text-gray-600" aria-hidden="true"
                    xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                    <path
                      d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                  </svg>
                  <span
                    class="bg-blue-100 text-blue-800 text-xs font-semibold mr-2 px-2.5 py-0.5 rounded dark:bg-blue-200 dark:text-blue-800 ml-3">5.0</span>
                </div>

                <div class="flex items-center justify-between">
                  <button type="button" @click="openModal"
                    class="text-white text-xs bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                    Message
                  </button>

                  <button type="button"
                    class="text-white text-xs bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                    Review
                  </button>
                </div>
              </div>
            </div>
          </li>
          <li>
            <div
              class="w-full max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 overflow-hidden">
              <a href="#">
                <img class="object-center object-cover transition-all duration-700 ease-out rounded-t-lg hover:scale-105"
                  :src="`${$page.props.ziggy.url}/assets/images/all/48.jpg`" alt="product image" />
              </a>
              <div class="px-5 pb-5">
                <a href="#">
                  <h5 class="text-xl font-semibold tracking-tight text-gray-900 dark:text-white">Apple Watch Series 7 GPS,
                    Aluminium Case, Starlight Sport</h5>
                </a>
                <div class="flex items-center mt-2.5 mb-5">
                  <svg class="w-4 h-4 text-yellow-300 mr-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                    fill="currentColor" viewBox="0 0 22 20">
                    <path
                      d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                  </svg>
                  <svg class="w-4 h-4 text-yellow-300 mr-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                    fill="currentColor" viewBox="0 0 22 20">
                    <path
                      d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                  </svg>
                  <svg class="w-4 h-4 text-yellow-300 mr-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                    fill="currentColor" viewBox="0 0 22 20">
                    <path
                      d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                  </svg>
                  <svg class="w-4 h-4 text-yellow-300 mr-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                    fill="currentColor" viewBox="0 0 22 20">
                    <path
                      d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                  </svg>
                  <svg class="w-4 h-4 text-gray-200 dark:text-gray-600" aria-hidden="true"
                    xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                    <path
                      d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                  </svg>
                  <span
                    class="bg-blue-100 text-blue-800 text-xs font-semibold mr-2 px-2.5 py-0.5 rounded dark:bg-blue-200 dark:text-blue-800 ml-3">5.0</span>
                </div>

                <div class="flex items-center justify-between">
                  <button type="button" @click="openModal"
                    class="text-white text-xs bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                    Message
                  </button>

                  <button type="button"
                    class="text-white text-xs bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                    Review
                  </button>
                </div>
              </div>
            </div>
          </li>
          <li>
            <div
              class="w-full max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 overflow-hidden">
              <a href="#">
                <img class="object-center object-cover transition-all duration-700 ease-out rounded-t-lg hover:scale-105"
                  :src="`${$page.props.ziggy.url}/assets/images/all/48.jpg`" alt="product image" />
              </a>
              <div class="px-5 pb-5">
                <a href="#">
                  <h5 class="text-xl font-semibold tracking-tight text-gray-900 dark:text-white">Apple Watch Series 7 GPS,
                    Aluminium Case, Starlight Sport</h5>
                </a>
                <div class="flex items-center mt-2.5 mb-5">
                  <svg class="w-4 h-4 text-yellow-300 mr-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                    fill="currentColor" viewBox="0 0 22 20">
                    <path
                      d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                  </svg>
                  <svg class="w-4 h-4 text-yellow-300 mr-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                    fill="currentColor" viewBox="0 0 22 20">
                    <path
                      d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                  </svg>
                  <svg class="w-4 h-4 text-yellow-300 mr-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                    fill="currentColor" viewBox="0 0 22 20">
                    <path
                      d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                  </svg>
                  <svg class="w-4 h-4 text-yellow-300 mr-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                    fill="currentColor" viewBox="0 0 22 20">
                    <path
                      d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                  </svg>
                  <svg class="w-4 h-4 text-gray-200 dark:text-gray-600" aria-hidden="true"
                    xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                    <path
                      d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                  </svg>
                  <span
                    class="bg-blue-100 text-blue-800 text-xs font-semibold mr-2 px-2.5 py-0.5 rounded dark:bg-blue-200 dark:text-blue-800 ml-3">5.0</span>
                </div>

                <div class="flex items-center justify-between">
                  <button type="button" @click="openModal"
                    class="text-white text-xs bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                    Message
                  </button>

                  <button type="button"
                    class="text-white text-xs bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                    Review
                  </button>
                </div>
              </div>
            </div>
          </li>
          <li>
            <div
              class="w-full max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 overflow-hidden">
              <a href="#">
                <img class="object-center object-cover transition-all duration-700 ease-out rounded-t-lg hover:scale-105"
                  :src="`${$page.props.ziggy.url}/assets/images/all/48.jpg`" alt="product image" />
              </a>
              <div class="px-5 pb-5">
                <a href="#">
                  <h5 class="text-xl font-semibold tracking-tight text-gray-900 dark:text-white">Apple Watch Series 7 GPS,
                    Aluminium Case, Starlight Sport</h5>
                </a>
                <div class="flex items-center mt-2.5 mb-5">
                  <svg class="w-4 h-4 text-yellow-300 mr-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                    fill="currentColor" viewBox="0 0 22 20">
                    <path
                      d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                  </svg>
                  <svg class="w-4 h-4 text-yellow-300 mr-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                    fill="currentColor" viewBox="0 0 22 20">
                    <path
                      d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                  </svg>
                  <svg class="w-4 h-4 text-yellow-300 mr-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                    fill="currentColor" viewBox="0 0 22 20">
                    <path
                      d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                  </svg>
                  <svg class="w-4 h-4 text-yellow-300 mr-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                    fill="currentColor" viewBox="0 0 22 20">
                    <path
                      d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                  </svg>
                  <svg class="w-4 h-4 text-gray-200 dark:text-gray-600" aria-hidden="true"
                    xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                    <path
                      d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                  </svg>
                  <span
                    class="bg-blue-100 text-blue-800 text-xs font-semibold mr-2 px-2.5 py-0.5 rounded dark:bg-blue-200 dark:text-blue-800 ml-3">5.0</span>
                </div>

                <div class="flex items-center justify-between">
                  <button type="button" @click="openModal"
                    class="text-white text-xs bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                    Message
                  </button>

                  <button type="button"
                    class="text-white text-xs bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                    Review
                  </button>
                </div>
              </div>
            </div>
          </li>
        </ul>
      </div>

      <div class="grid justify-center my-4">
        <button type="button"
          class="flex gap-3 items-center ring-4 ring-sky-300/60 rounded-md bg-sky-800 hover:bg-sky-600 ml-5 mt-5 text-xs px-5 py-3 text-center">
          <!-- <span class="text-sky-400">16</span> -->
          <span class="capitalize text-white font-semibold">View all categories</span>
          <span class="text-white text-xl">&RightArrow;</span>
        </button>
      </div>
    </section>

    <Modal :show="messageModal" @close="closeModal">
      <div class="p-6">
        <h2 class="text-lg text-center font-medium text-gray-900">
          Send a message to this company manager
        </h2>

        <div class="mt-6">
          <InputLabel for="title" value="title" />

          <TextInput id="title" ref="titleInput" v-model="form.title" type="text" class="mt-1 block w-full"
            placeholder="Provide a title" />
        </div>

        <div class="mt-6">
          <InputLabel for="message" value="message" />

          <textarea id="message" rows="4"
            class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
            placeholder="Write your thoughts here..."></textarea>
        </div>

        <div class="mt-6 flex justify-end">
          <PrimaryButton class="ml-3" :class="{ 'opacity-25': form.processing }" :disabled="form.processing">
            Submit
          </PrimaryButton>
        </div>
      </div>
    </Modal>
  </FrontEndLayout>
</template>

<script setup>
import { ref } from "vue";
import { Link, Head, useForm } from "@inertiajs/vue3";
import SearchBar from "@/Components/Gadgets/SearchBar.vue";
import FrontEndLayout from "@/Layouts/FrontEndLayout.vue";
import Chart from "@/Components/Gadgets/Chart.vue";
import Block from "@/Components/Block.vue";
import { Splide, SplideSlide } from "@splidejs/vue-splide";
import "@splidejs/vue-splide/css/skyblue";
import InputLabel from "@/Components/InputLabel.vue";
import PrimaryButton from "@/Components/PrimaryButton.vue";
import TextInput from "@/Components/TextInput.vue";
import Modal from "@/Components/Modal.vue";

const messageModal = ref(false);

const openModal = () => messageModal.value = true;

const closeModal = () => messageModal.value = false;

const form = useForm({
  title: '',
  message: '',
});

const option = {
  updateOnMove: false,
  type: "loop",
  perPage: 3,
  perMove: 1,
  focus: "center",
  gap: "1rem",
  autoplay: true,
  interval: 2000,
  breakpoints: {
    640: {
      perPage: 1,
    },
    768: {
      perPage: 2,
    },
  },
};
</script>

<style scoped>
.hero {
  background-image: url(/assets/images/bg/37.jpg);
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}

#list1 {
  grid-area: list1;
}

#list2 {
  grid-area: list2;
}

#list3 {
  grid-area: list3;
}

#list4 {
  grid-area: list4;
}

#list5 {
  grid-area: list5;
}

#list6 {
  grid-area: list6;
}

#list-group {
  grid-template-areas:
    "list1"
    "list2"
    "list3"
    "list4"
    "list5"
    "list6";
}

@media screen and (min-width: 768px) {
  #list-group {
    grid-template-areas:
      "list1 list2 list3"
      "list4 list5 list6";
  }
}
</style>
