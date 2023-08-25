
<template>


    <div>Employees</div>
    <br>
    <div>


            <div v-for="employee in employees" :key="employee.id">
                <div>{{employee.name}}</div>

                <Link :href="`/employees/${employee.id}/edit`">Edit</Link>&nbsp;
                <Link :href="`/employees/${employee.id}`">View</Link>&nbsp;
                <Link :href="`/employees/${employee.id}`" method="DELETE" as="button" type="button">Delete</Link>
                <br>
                <br>
            </div>



    </div>


</template>





<script>
    import { Link } from '@inertiajs/inertia-vue3';
    import { router } from '@inertiajs/vue3'



    export default {
        props: {
            employees: Array,
        },
        components: {
            Link,

        },
    }
</script>






