<template>



    <div>Show Employee</div>
    <div>Employee Name: {{employee.name}}</div>
    <div>Employee Position: {{employee.position}}</div>




</template>


<script>
    import { Link } from '@inertiajs/inertia-vue3'

    export default {
        props:{
          employee:Object
        },
        components: {
            Link,
        },
    }
</script>
