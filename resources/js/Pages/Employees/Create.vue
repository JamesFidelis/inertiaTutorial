<template>



    <div>Create Employee</div>


    <form @submit.prevent="submit">
        <div class="col">

            <label for="name">Full name:</label>
            <input id="name" v-model="form.names" />
            <div v-if="form.errors.names">{{ form.errors.names }}</div>
        </div>
        <div class="col>">

            <label for="position">Position:</label>
            <input id="position" v-model="form.position" />
            <div v-if="form.errors.position">{{ form.errors.position }}</div>
        </div>

        <div class="col">
            <button type="submit" :disabled="form.processing">Submit</button>
        </div>

    </form>








</template>


<script>
    import { Link,useForm } from '@inertiajs/inertia-vue3';
    // import {   } from '@inertiajs/inertia-vue3';

    export default {
        data() {
            return {
                form: useForm({
                    names: null,
                    position: null,
                }),
            }
        },
        methods: {
            submit() {
                this.form.post('/employees')
            },
        },
        components: {
            Link,
        },
    }
</script>
