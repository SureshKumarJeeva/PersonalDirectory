
import { createApp, h } from 'vue';
import { createInertiaApp } from '@inertiajs/vue3';
import { IonicVue } from '@ionic/vue';
import { createRouter, createWebHistory } from 'vue-router';
import Home from "@/Pages/Home.vue"

import '@ionic/vue/css/core.css';
import '@ionic/vue/css/normalize.css';
import '@ionic/vue/css/structure.css';
import '@ionic/vue/css/typography.css';

import '@ionic/vue/css/padding.css';
import '@ionic/vue/css/float-elements.css';
import '@ionic/vue/css/text-alignment.css';
import '@ionic/vue/css/text-transformation.css';
import '@ionic/vue/css/flex-utils.css';
import '@ionic/vue/css/display.css';

const routes = [{path:"/home", Component:Home}];

const router = createRouter({
    history: createWebHistory(),
    routes, // You can leave this empty if you're using Laravel for routing
  });

createInertiaApp({
  resolve: name => {
    const pages = import.meta.glob('./Pages/**/*.vue', { eager: true });
    return pages[`./Pages/${name}.vue`]
  },
  setup({ el, App, props, plugin }) {
    createApp({ render: () => h(App, props) })
      .use(plugin)
      .use(router)
      .use(IonicVue)
      .mount(el)
  },
});