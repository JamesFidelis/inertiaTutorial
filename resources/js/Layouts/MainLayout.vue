<template>


    <header class="border-b bg-white border-gray-200 dark:bg-gray-900 w-full">

            <nav class="bg-white border-gray-200 dark:bg-gray-900">
                <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
                    <a href="https://flowbite.com/" class="flex items-center">
                        <img src="https://flowbite.com/docs/images/logo.svg" class="h-8 mr-3" alt="Flowbite Logo" />
                        <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">Inertia Test</span>
                    </a>

                    <div class="hidden w-full md:block md:w-auto" id="navbar-default">
                       <div v-if="user">
                           <ul class="font-medium flex flex-col p-4 md:p-0 mt-4 border border-gray-100 rounded-lg bg-gray-50 md:flex-row md:space-x-8 md:mt-0 md:border-0 md:bg-white dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">



                            <li>
                                <Link href="/" class="nav-links"> Home </Link>
                            </li>
                            <li>
                                <Link :href="route('employees.index')" class="nav-links"> Show </Link>
                            </li>
                            <li>
                                <Link :href="route('employees.create')" class="nav-links"> Create </Link>
                            </li>
                            <li>
                                <button id="dropdownNavbarLink" data-dropdown-toggle="dropdownNavbar" class="flex items-center justify-between w-full py-2 pl-3 pr-4 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 md:w-auto dark:text-white md:dark:hover:text-blue-500 dark:focus:text-white dark:border-gray-700 dark:hover:bg-gray-700 md:dark:hover:bg-transparent">
                                    <img :src="'https://ui-avatars.com/api/?background=0D8ABC&color=fff&rounded=true&name='+user.name" class="h-8 mr-3" alt="" />
                                    {{user.name}}
                                    <svg class="w-2.5 h-2.5 ml-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
                                </svg></button>
                                <!-- Dropdown menu -->
                                <div id="dropdownNavbar" class="z-10 hidden font-normal bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700 dark:divide-gray-600">
                                    <ul class="py-2 text-sm text-gray-700 dark:text-gray-400" aria-labelledby="dropdownLargeButton">
                                        <li>
                                            <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">

                                                Dashboard</a>
                                        </li>
                                        <li>
                                            <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Settings</a>
                                        </li>
                                        <li>
                                            <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Earnings</a>
                                        </li>
                                    </ul>
                                    <div class="py-1">
                                        <Link :href="route('logout')" as="button"  method="DELETE" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-400 dark:hover:text-white">
                                            Sign out</Link>
                                    </div>
                                </div>
                            </li>
                        </ul>
                       </div>
                        <div v-else>
                            <ul class="font-medium flex flex-col p-4 md:p-0 mt-4 border border-gray-100 rounded-lg bg-gray-50 md:flex-row md:space-x-8 md:mt-0 md:border-0 md:bg-white dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
                                <li>
                                    <Link :href="route('register')" class="nav-links"> Register </Link>
                                </li>
                               <li>
                                    <Link :href="route('login')" class="nav-links"> Login </Link>
                                </li>

                            </ul>
                        </div>
                    </div>
                </div>
            </nav>

    </header>




    <main>


        <slot>Default</slot>

    </main>


</template>


<script>

    import { Link,usePage } from '@inertiajs/inertia-vue3';


    // const timer = ref(0)

    // setInterval(()=>timer.value++,1000)

    const page = usePage()


    export default{
        name:'MainLayout',
        data(){
            return{
                users:page.props.value.user,
                // user:null
            }
        },
        // created() {
        //     this.functions();
        // },
        // beforeUpdate() {
        //     this.functions();
        // },
        computed:{
            user: function () {
                return page.props.value.user
            }
        },
        components: {
            Link,
        },
        methods:{
            functions () {
                // return this.user=page.props.value.user
            }
        }
    }


</script>
