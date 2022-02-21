<template>
  <div>
    <!-- create a header with tailwindcss -->
    <div class="bg-pink-200">
      <!-- create an horizontal menu with a logo -->
      <div class="flex items-center justify-between px-4 py-6 sm:px-6">
        <div class="flex-1">
          <a href="#" class="block">
            <img src="/img/logo-m-store.png" alt="LOGO" class="h-16" />
          </a>
        </div>
        <!-- input search centered -->
        <div class="flex-1">
          <input
            type="text"
            class="bg-pink-100 appearance-none rounded-none w-full px-3 py-2 border border-pink-900 placeholder-gray-500 text-gray-900 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm"
            placeholder="Procurar produtos"
          />
        </div>

        <div class="-space-y-px">
          <a href="#" class="text-gray-500 hover:text-gray-900 px-3"> Promoções </a>
          <a href="#" class="text-gray-500 hover:text-gray-900 px-3"> Blog </a>
          <a href="#" class="text-gray-500 hover:text-gray-900 px-3"> Contato </a>
          <a href="#" class="text-gray-500 hover:text-gray-900 px-3"> Sobre Nós </a>
        </div>

        <div class="ml-4 flex items-center sm:ml-6">
          <Link
            href="{{ route('home') }}"
            class="px-3 py-2 border border-gray-300 rounded-md text-sm font-medium leading-5 text-gray-700 hover:text-gray-500 focus:outline-none focus:border-blue-300 focus:shadow-outline-blue active:bg-gray-50 active:text-gray-800 transition duration-150 ease-in-out"
          >
            Login
          </Link>

          <Link
            href="{{ route('about') }}"
            class="ml-3 px-3 py-2 border border-gray-300 rounded-md text-sm font-medium leading-5 text-gray-700 hover:text-gray-500 focus:outline-none focus:border-blue-300 focus:shadow-outline-blue active:bg-gray-50 active:text-gray-800 transition duration-150 ease-in-out"
          >
            Logout
          </Link>

          <div class="ml-3 relative">
            <div class="absolute inset-y-0 left-0 flex items-center pointer-events-none">
              <svg
                class="h-5 w-5 text-gray-400"
                fill="currentColor"
                viewBox="0 0 20 20"
              ></svg>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- create slot with name content -->

    <slot name="content" />
  </div>
</template>

<script>
export default {};
</script>

<style></style>
