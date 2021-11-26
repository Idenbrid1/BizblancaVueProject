import Vue from 'vue';
import axios from 'axios';
import VueRouter from 'vue-router';

import LandingPage from './components/pages/website/LandingPageComponent.vue';
import ForCompanies from './components/pages/website/ForCompaniesComponent.vue';
import ForCandidates from './components/pages/website/ForCandidatesComponent.vue';
import SignIn from './components/pages/website/Auth/SignInComponent.vue';
import SignUp from './components/pages/website/Auth/SignUpComponent.vue';
import CandidateResetPassword from './components/pages/website/Auth/CandidateResetPasswordComponent.vue';
import CandidateNewPassword from './components/pages/website/Auth/CandidateNewPasswordComponent.vue';
import CandidateProfile from './components/pages/website/candidate/CandidateProfileComponent.vue';
import CompanyProfile from './components/pages/website/company/CompanyProfileComponent.vue';
import CompanyPostJob from './components/pages/website/company/CompanyPostJobComponent.vue';
import CompanyDetail from './components/pages/website/company/CompanyDetailComponent.vue';
import CompanyDashboard from './components/pages/website/company/CompanyDashboardComponent.vue';
import CandidateDetail from './components/pages/website/candidate/CandidateDetailComponent.vue';
import CandidateSearch from './components/pages/website/company/CandidateSearchComponent.vue';
import CompanySearch from './components/pages/website/candidate/CompanySearchComponent.vue';
import JobSearch from './components/pages/website/candidate/JobSearchComponent.vue';
import JobDetail from './components/pages/website/candidate/JobDetailComponent.vue';
import PackagePlans from './components/pages/admin/PackagePlansComponent.vue';

Vue.use(VueRouter);

const router = new VueRouter({
    linkExactActiveClass: 'active',
    routes: [
        {   path: "*", 
            component: LandingPage 
        },
        {
            path: '/',
            name: 'Landing Page',
            component: LandingPage
        },
        {
            path: '/for-companies',
            name: 'ForCompanies',
            component: ForCompanies
        },
        {
            path: '/for-candidates',
            name: 'ForCandidates',
            component: ForCandidates
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
            path: '/candidate-profile',
            name: 'CandidateProfile',
            component: CandidateProfile,
            beforeEnter: (to, from, next) => { 
                axios.get('check-candidate-role')
                .then((response) => {
                    if (response.data.success == true) {
                        next()
                    } else {
                        next('/signin')
                    }
                });
            }
        },
        {
            path: '/company-post-job',
            name: 'CompanyPostJob',
            component: CompanyPostJob,
            beforeEnter: (to, from, next) => { 
                axios.get('check-company-role')
                .then((response) => {
                    if (response.data.success == true) {
                        next()
                    } else {
                        next('/signin')
                    }
                });
            }
        },
        {
            path: '/company-profile',
            name: 'CompanyProfile',
            component: CompanyProfile,
            beforeEnter: (to, from, next) => { 
                axios.get('check-company-role')
                .then((response) => {
                    if (response.data.success == true) {
                        next()
                    } else {
                        next('/signin')
                    }
                });
            }
        },
        {
            path: '/candidate-detail/:id',
            name: 'CandidateDetail',
            component: CandidateDetail
        },
        {
            path: '/company-detail/:id',
            name: 'CompanyDetail',
            component: CompanyDetail
        },
        {
            path: '/company-dashboard',
            name: 'CompanyDashboard',
            component: CompanyDashboard
        },
        {
            path: '/candidate-reset-password',
            name: 'CandidateResetPassword',
            component: CandidateResetPassword
        },
        {
            path: '/candidate-new-password:token',
            name: 'CandidateNewPassword',
            component: CandidateNewPassword
        },
        {
            path: '/candidate-search',
            name: 'CandidateSearch',
            component: CandidateSearch
        },
        {
            path: '/company-search',
            name: 'CompanySearch',
            component: CompanySearch
        },
        {
            path: '/job-search',
            name: 'JobSearch',
            component: JobSearch
        },
        {
            path: '/job-detail/:id',
            name: 'JobDetail',
            component: JobDetail
        },
        {
            path: '/package-plans',
            name: 'PackagePlans',
            component: PackagePlans
        },
    ]
});

export default router;