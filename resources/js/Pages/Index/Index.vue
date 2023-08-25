
<template>


     <div>Index</div>
     <div>
         The message is {{message}}
     </div>


</template>





<script>
    import { Link } from '@inertiajs/inertia-vue3';
    import MainLayout from "../../Layouts/MainLayout.vue";


    export default {
        layout:MainLayout,
        props: {
            message: String,
        },
        components: {
            Link,

        },
    }
</script>






