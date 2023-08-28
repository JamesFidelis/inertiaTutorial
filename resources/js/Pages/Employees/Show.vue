<template>


    <div>Show Employee</div>
    <Box>
    <div>Employee Name: {{employee.name}}</div>
    <div>Employee Position: {{employee.position}}</div>
    </Box>




</template>


<script>
    import { Link } from '@inertiajs/inertia-vue3'
    import Box from "../../Components/UI/Box.vue";

    export default {
        props:{
          employee:Object
        },
        components: {
            Box,
            Link,
        },
    }
</script>
