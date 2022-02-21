<template>
  <layout>
    <div class="relative">
      <div class="max-w-2xl mx-auto py-4 px-4 sm:px-6 border">
        <div
          class="flex justify-between items-center border-b-2 border-gray-100 py-6 md:justify-start md:space-x-10"
        >
          <div class="-space-y-px">
            <!-- create a form -->
            <form>
              <!-- {{ csrf_field() }} -->
              <div class="-space-y-px">
                <label
                  for="name"
                  class="block text-sm font-medium leading-5 text-gray-700"
                >
                  Name
                </label>
                <div class="mt-1 rounded-md shadow-sm">
                  <input
                    id="name"
                    type="text"
                    v-model="form.name"
                    placeholder="Entre com seu nome"
                  />
                </div>
              </div>
              <div class="-space-y-px">
                <label
                  for="email"
                  class="block text-sm font-medium leading-5 text-gray-700"
                >
                  Email
                </label>
                <div class="mt-1 rounded-md shadow-sm">
                  <input
                    id="email"
                    type="email"
                    v-model="form.email"
                    placeholder="Entre com seu email"
                  />
                </div>
              </div>
              <div class="-space-y-px">
                <label
                  for="password"
                  class="block text-sm font-medium leading-5 text-gray-700"
                >
                  Password
                </label>
                <div class="mt-1 rounded-md shadow-sm">
                  <input
                    id="password"
                    type="password"
                    v-model="form.password"
                    placeholder="password"
                  />
                </div>
              </div>

              <div class="-space-y-px">
                <button type="submit" @click="handleForm">Salvar</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </layout>
</template>

<script>
import Layout from "../Layout.vue";
export default {
  components: { Layout },
  props: {},
  data: () => {
    return {
      form: {
        name: "",
        email: "",
        password: "",
      },
    };
  },

  methods: {
    handleForm(e) {
      e.preventDefault();
      this.$inertia.post("/Register", this.form);
      alert(JSON.stringify(this.form));
    },
  },
};
</script>

<style></style>
