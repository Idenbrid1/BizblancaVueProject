import Vue from 'vue';
import VueRouter from 'vue-router';

import LandingPage from './components/pages/website/LandingPageComponent.vue';

Vue.use(VueRouter);

const router = new VueRouter({
    mode: 'history',
    linkExactActiveClass: 'active',
    routes: [
        {
            path: '/',
            name: 'Landing Page',
            component: LandingPage
        },
    ]
});

export default router;