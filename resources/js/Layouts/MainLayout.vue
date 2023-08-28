<template>


    <header class="border-b border-gray-200 dark:border-gray-700 bg-white dark:bg-gray-800 w-full">
        <div class="container mx-auto">
            <nav class="p-4 flex items-center justify-between">
                <div class="text-lg font-medium">
                    <Link href="/"> Home </Link>
                </div>
                <div class="text-xl text-indigo-600 dark:text-indigo-300 font-bold text-center">
                    <Link :href="route('employees.index')"> Show </Link>
                </div>
                <div class="bg-indigo-600 hover:bg-indigo-900 text-xl text-white dark:text-white font-bold text-center p-2 rounded-md">
                    <Link :href="route('employees.create')" > Create </Link></div>
            </nav>
        </div>
    </header>



    <main>
        <slot>Default</slot>

    </main>


</template>


<script>

    import { Link,usePage } from '@inertiajs/inertia-vue3';


    // const timer = ref(0)

    // setInterval(()=>timer.value++,1000)

    export default{
        name:'MainLayout',
        components: {
            Link,
        },
    }


</script>
