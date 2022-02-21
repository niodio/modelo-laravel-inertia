.
<template>
  <div class="bg-pink-100">
    <Header />

    <div>
      <slot />
    </div>
  </div>
</template>

<script>
import Header from "./components/Header.vue";
export default { components: { Header } };
</script>

<style></style>
