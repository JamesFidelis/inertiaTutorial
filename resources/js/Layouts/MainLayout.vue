<template>
    <Link href="/"> Home </Link>&nbsp;
    <Link href="/show"> Show </Link>&nbsp;


    <slot>Default</slot>
</template>


<script>

    import { Link } from '@inertiajs/inertia-vue3';


    // const timer = ref(0)

    // setInterval(()=>timer.value++,1000)

    export default{
        name:'MainLayout',
        components: {
            Link,
        },
    }


</script>
