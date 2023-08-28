
<template>


    <div>Employees</div>
    <br>
    <div class="grid grid-cols-2 gap-3">



            <div v-for="employee in employees" :key="employee.id" >
                <Box>
                    <div >{{employee.name}}</div><br>

                    <Link :href="route('employees.edit',{employee:employee.id})" class="bg-green-500 hover:bg-green-700 text-center p-2 rounded-md">Edit</Link>&nbsp;
                    <Link :href="route('employees.show',{employee:employee.id})" class="bg-gray-500 hover:bg-gray-700 text-center p-2 rounded-md">View</Link>&nbsp;
                    <Link :href="route('employees.destroy',{employee:employee.id})" method="DELETE" class="bg-sky-500 hover:bg-sky-700 text-center p-2 rounded-md">Delete</Link>
                </Box>
            </div>



    </div>


</template>





<script>
    import { Link } from '@inertiajs/inertia-vue3';
    import { router } from '@inertiajs/vue3'
    import Box from "../../Components/UI/Box.vue";



    export default {
        props: {
            employees: Array,
        },
        components: {
            Link,
            Box

        },
    }
</script>






