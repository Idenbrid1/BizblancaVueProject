import Vue from 'vue';
import VueRouter from 'vue-router';

import LandingPage from './components/pages/website/LandingPageComponent.vue';
import ForCompanies from './components/pages/website/ForCompaniesComponent.vue';
import ForCandidates from './components/pages/website/ForCandidatesComponent.vue';
import TestCandidateProfile from './components/pages/website/TestCandidateProfile.vue';

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
        {
            path: '/for-companies',
            name: 'For Companies',
            component: ForCompanies
        },
        {
            path: '/for-candidates',
            name: 'For Candidates',
            component: ForCandidates
        },
        {
            path: '/test-candidates-profile',
            name: 'Test Candidates Profile',
            component: TestCandidateProfile
        },
    ]
});

export default router;