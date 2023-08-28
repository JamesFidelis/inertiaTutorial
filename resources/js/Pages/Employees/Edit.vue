<template>



    <div>Edit Employee</div>


    <form @submit.prevent="submit">


        <div class="grid grid-cols-2 gap-6 p-8">

            <div>

                <label for="name">Full name</label>
                <input id="name" placeholder="Full Name" class="input-box" v-model="form.name" />
                <div v-if="form.errors.name" class="input-error">{{ form.errors.name }}</div>
            </div>
            <div>

                <label for="position">Position</label>
                <input id="position" placeholder="Position" class="input-box" v-model="form.position" />
                <div v-if="form.errors.position" class="input-error">{{ form.errors.position }}</div>
            </div>

            <div>
                <button type="submit" class="bg-sky-500 hover:bg-sky-700 text-center p-2 rounded-md" :disabled="form.processing">Submit</button>
            </div>


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
