<template>




    <div class="flex items-center -space-x-px h-8 text-sm">


                <Link v-for="(page,index) in pages"
                      :key="index"
                      :href="page.url"
                      :aria-current="page.active?page.label:''"
                      :class="page.active?'active-page':'inactive-page'"
                v-html="page.label">

                </Link>

    </div>





</template>

<script>

    import { Link } from '@inertiajs/inertia-vue3';



    export default {
        name:'Pagination',
        props: {
            pages: Array,
        },
        components:{
            Link
        }
    }


</script>
