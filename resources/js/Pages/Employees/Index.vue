
<template>


    <div>Employees</div>
    <br>
    <div class="grid grid-cols-2 gap-3">



            <div v-for="employee in employees.data" :key="employee.id" >
                <Box>
                    <div >{{employee.name}}</div><br>

                    <Link :href="route('employees.edit',{employee:employee.id})" class="bg-green-500 hover:bg-green-700 text-center p-2 rounded-md">Edit</Link>&nbsp;
                    <Link :href="route('employees.show',{employee:employee.id})" class="bg-gray-500 hover:bg-gray-700 text-center p-2 rounded-md">View</Link>&nbsp;
                    <Link :href="route('employees.destroy',{employee:employee.id})" method="DELETE" class="bg-sky-500 hover:bg-sky-700 text-center p-2 rounded-md">Delete</Link>
                </Box>
            </div>



    </div>

    <div class="w-full flex justify-center mt-8 mb-8">
        <Pagination v-if="employees.data.length" :pages="employees.links"></Pagination>
    </div>


</template>





<script>
    import { Link } from '@inertiajs/inertia-vue3';
    import { router } from '@inertiajs/vue3'
    import Box from "../../Components/UI/Box.vue";
    import Pagination from "../../Components/UI/Pagination.vue";



    export default {
        props: {
            employees: Object,
        },
        components: {
            Link,
            Box,
            Pagination

        },
    }
</script>






