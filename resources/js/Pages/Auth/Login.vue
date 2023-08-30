<template>


  <div class="w-1/2 mx-auto mt-10">
      <form @submit.prevent="submit">
          <div class="mb-6">
              <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email address</label>
              <input type="email" id="email" class="text-field" placeholder="john.doe@company.com" v-model="form.email" required>
              <div v-if="form.errors.email" class="error-label">{{ form.errors.email }}</div>
          </div>
          <div class="mb-6">
              <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Password</label>
              <input type="password" id="password" class="text-field" placeholder="•••••••••" v-model="form.password" required>
              <div v-if="form.errors.password" class="error-label">{{ form.errors.password }}</div>
          </div>
          <button type="submit" class="btn-primary">Login</button>
      </form>
  </div>




</template>



<script>

    import {useForm} from "@inertiajs/inertia-vue3";

    export default {
        name:'Login',
        data() {
            return {
                form: useForm({
                    email: null,
                    password: null,
                }),
            }
        },
        methods: {
            submit() {
                this.form.post(route('login.store'))
            },
        },
    }


</script>
