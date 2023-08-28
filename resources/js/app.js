import { createApp, h } from 'vue';
import { createInertiaApp } from '@inertiajs/inertia-vue3';
import MainLayout from "./Layouts/MainLayout.vue";
import '../css/app.css'
import {InertiaProgress} from "@inertiajs/progress";
import {ZiggyVue} from "ziggy-js/dist/vue.es";



InertiaProgress.init({
    delay:0,
    color:'#29d',
    includeCSS:true,
    showSpinner:true
})


createInertiaApp({
    resolve: name => {
        const pages = import.meta.glob('./Pages/**/*.vue', { eager: true })
        let page = pages[`./Pages/${name}.vue`]
        page.default.layout = page.default.layout || MainLayout
        return page

    },
    setup({ el, App, props, plugin }) {
        createApp({ render: () => h(App, props) })
            .use(plugin)
            .use(ZiggyVue)
            .mount(el)
    },
});
