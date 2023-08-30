<template>

<div class="w-1/2 mx-auto mt-10">

    <form @submit.prevent="submit">
        <div class="mb-6">
            <label for="full_name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Full name</label>
            <input type="text" id="full_name" class="text-field" placeholder="John Doe" v-model="form.name"  required>
            <div v-if="form.errors.name" class="error-label">{{ form.errors.name }}</div>
        </div>
        <div class="mb-6">
            <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email address</label>
            <input type="email" id="email" class="text-field" placeholder="john.doe@company.com" v-model="form.email" required>
            <div v-if="form.errors.email" class="error-label">{{ form.errors.email }}</div>
        </div>
        <div class="mb-6">
            <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Password</label>
            <input type="password" id="password" class="text-field" placeholder="•••••••••" v-model="form.password"  required>
            <div v-if="form.errors.password" class="error-label">{{ form.errors.password }}</div>
        </div>
        <div class="mb-6">
            <label for="confirm_password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Confirm password</label>
            <input type="password" id="confirm_password" class="text-field" placeholder="•••••••••" v-model="form.password_confirmation" required>
            <div v-if="form.errors.password_confirmation" class="error-label">{{ form.errors.password_confirmation }}</div>
        </div>
        <div class="flex items-start mb-6">
            <div class="flex items-center h-5">
                <input id="remember" type="checkbox" value="" class="w-4 h-4 border border-gray-300 rounded bg-gray-50 focus:ring-3 focus:ring-blue-300 dark:bg-gray-700 dark:border-gray-600 dark:focus:ring-blue-600 dark:ring-offset-gray-800" required>
            </div>
            <label for="remember" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">I agree with the <a href="#" class="text-blue-600 hover:underline dark:text-blue-500">terms and conditions</a>.</label>
        </div>
        <button type="submit" class="btn-primary">Create Account</button>
    </form>

</div>



</template>



<script>

    import {useForm} from "@inertiajs/inertia-vue3";

    export default {
        name:'Register',
        data() {
            return {
                form: useForm({
                    name:null,
                    email: null,
                    password: null,
                    password_confirmation: null,
                }),
            }
        },
        methods: {
            submit() {
                this.form.post(route('register.store'))
            },
        },


    }


</script>
