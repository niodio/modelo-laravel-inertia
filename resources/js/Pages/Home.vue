<template>
  <Layout>
    {{ message }} {{ user.name }}

    <!--
  This example requires Tailwind CSS v2.0+

  This example requires some changes to your config:

  ```
  // tailwind.config.js
  module.exports = {
    // ...
    plugins: [
      // ...
      require('@tailwindcss/forms'),
    ],
  }
  ```
-->
    <!--
  This example requires updating your template:

  ```
  <html class="h-full bg-gray-50">
  <body class="h-full">
  ```
-->
    <div
      class="min-h-full flex items-center justify-center py-12 px-4 sm:px-6 lg:px-8 border"
    >
      <div class="max-w-md space-y-8">
        <div>
          <img class="mx-auto h-12 w-auto" src="/img/logo-m-store.png" alt="Workflow" />
        </div>
        <form class="mt-8 space-y-6" action="/" method="get">
          <input type="hidden" name="remember" value="true" />
          <div class="rounded-md shadow-sm -space-y-px">
            <div>
              <label for="email-address" class="sr-only py-2">Entre com seu email</label>
              <input
                id="email"
                name="email"
                type="email"
                autocomplete="email"
                required
                class="appearance-none rounded-none relative block w-full px-3 py-2 border border-pink-900 placeholder-gray-500 text-gray-900 rounded-t-md bg-pink-100 focus:outline-none focus:ring-pink-900 focus:border-pink-700 focus:z-10 sm:text-sm"
                placeholder="Entre com seu email"
              />
            </div>
            <div>
              <label for="password" class="sr-only py-2">Password</label>
              <input
                id="password"
                name="password"
                type="password"
                autocomplete="current-password"
                required
                class="appearance-none rounded-none relative block w-full px-3 py-2 border border-pink-900 placeholder-gray-500 text-gray-900 bg-pink-100 rounded-b-md focus:outline-none focus:ring-pink-900 focus:border-pink-800 focus:z-10 sm:text-sm"
                placeholder="Entre com sua senha"
              />
            </div>
          </div>

          <div class="flex items-center justify-between">
            <div class="flex items-center">
              <input
                id="remember-me"
                name="remember-me"
                type="checkbox"
                class="h-4 w-4 text-indigo-600 focus:ring-indigo-500 border-gray-300 rounded"
              />
              <label for="remember-me" class="ml-2 block text-sm text-pink-900">
                Lembrar de mim
              </label>
            </div>

            <div class="text-sm">
              <a href="#" class="font-medium text-indigo-600 hover:text-indigo-500">
                Esqueceu sua senha?
              </a>
            </div>
          </div>

          <div>
            <button
              type="submit"
              class="group relative w-full flex justify-center py-2 px-4 border border-transparent text-sm font-medium rounded-md text-white bg-pink-900 hover:bg-pink-800 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
            >
              <span class="absolute left-0 inset-y-0 flex items-center pl-3">
                <!-- Heroicon name: solid/lock-closed -->
                <svg
                  class="h-5 w-5 text-indigo-500 group-hover:text-indigo-400"
                  xmlns="http://www.w3.org/2000/svg"
                  viewBox="0 0 20 20"
                  fill="currentColor"
                  aria-hidden="true"
                >
                  <path
                    fill-rule="evenodd"
                    d="M5 9V7a5 5 0 0110 0v2a2 2 0 012 2v5a2 2 0 01-2 2H5a2 2 0 01-2-2v-5a2 2 0 012-2zm8-2v2H7V7a3 3 0 016 0z"
                    clip-rule="evenodd"
                  />
                </svg>
              </span>
              Entrar
            </button>
          </div>
        </form>
      </div>
    </div>
  </Layout>
</template>

<script>
import Layout from "../Layout.vue";
export default {
  components: { Layout },
  name: "Home",
  props: {
    user: String,
  },
  data() {
    return {
      message: "Hello Vue!",
    };
  },
  components: { Layout },
};
</script>

<style></style>
