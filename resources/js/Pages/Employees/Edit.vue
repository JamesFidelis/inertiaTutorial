<template>



    <div>Edit Employee</div>


    <form @submit.prevent="submit">
        <div class="col">

            <label for="name">Full name:</label>
            <input id="name" v-model="form.name" />
            <div v-if="form.errors.name">{{ form.errors.name }}</div>
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
        props:{
            employee: Object
        },
        data() {
            return {
                form: useForm({
                    name: this.employee.name,
                    position: this.employee.position,
                }),
            }
        },
        methods: {
            submit() {
                this.form.put(`/employees/${this.employee.id}`)
            },
        },
        components: {
            Link,
        },
    }
</script>
