import Vue from 'vue';
import VueRouter from 'vue-router';

import LandingPage from './components/pages/website/LandingPageComponent.vue';
import ForCompanies from './components/pages/website/ForCompaniesComponent.vue';
import ForCandidates from './components/pages/website/ForCandidatesComponent.vue';
import TestCandidateProfile from './components/pages/website/candidate/TestCandidateProfile.vue';
import TestCompanyProfile from './components/pages/website/company/TestCompanyProfile.vue';
import SignIn from './components/pages/website/Auth/SignInComponent.vue';
import SignUp from './components/pages/website/Auth/SignUpComponent.vue';
import CandidateDashboard from './components/pages/website/Auth/CandidateDashboardComponent.vue';
import CompanyProfile from './components/pages/website/company/CompanyProfileComponent.vue';

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
        {
            path: '/test-company-profile',
            name: 'Test Company Profile',
            component: TestCompanyProfile
        },
        {
            path: '/company-profile',
            name: 'For Company Profile',
            component: CompanyProfile
        },
        {
            path: '/signin',
            name: 'Signin',
            component: SignIn
        },
        {
            path: '/signup',
            name: 'Signup',
            component: SignUp
        },
        {
            path: '/candidate-dashboard',
            name: 'CandidateDashboard',
            component: CandidateDashboard
        },
    ]
});

export default router;