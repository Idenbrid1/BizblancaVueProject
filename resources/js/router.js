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
import CompanyAccountSetting from './components/pages/website/company/CompanyAccountSettingComponent.vue';
import JobAppliedCandidates from './components/pages/website/company/JobAppliedCandidatesComponent.vue';
import CandidateDetail from './components/pages/website/candidate/CandidateDetailComponent.vue';
import CandidateSearch from './components/pages/website/company/CandidateSearchComponent.vue';
import CandidateDashboard from './components/pages/website/candidate/CandidateDashboardComponent.vue';
import CandidateAccountSetting from './components/pages/website/candidate/CandidateAccountSettingComponent.vue';
import CompanySearch from './components/pages/website/candidate/CompanySearchComponent.vue';
import CompanyChat from './components/pages/website/company/CompanyChatComponent.vue';
import CandidateCvTemplate from './components/pages/website/candidate/CandidateCvTemplateComponent.vue';
import JobSearch from './components/pages/website/candidate/JobSearchComponent.vue';
import JobDetail from './components/pages/website/candidate/JobDetailComponent.vue';
import PackagePlans from './components/pages/admin/PackagePlansComponent.vue';
import ContactUs from './components/pages/website/ContactUsComponent.vue';
import TermsCondition from './components/pages/website/TermsConditionComponent.vue';
import Faq from './components/pages/website/FaqComponent.vue';
import PrivacyPolicy from './components/pages/website/PrivacyPolicyComponent.vue';
import AboutUs from './components/pages/website/AboutUsComponent.vue';
import NewsDetail from './components/pages/website/NewsDetailComponent.vue';
import Services from './components/pages/website/ServicesComponent.vue';
import SocialLogin from './components/pages/website/Auth/SocialLoginComponent.vue';

Vue.use(VueRouter);

const router = new VueRouter({
    mode: 'history',
    // linkExactActiveClass: 'font-weight-bold',
    routes: [

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
                axios.get('/api/check-candidate-role')
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
                axios.get('/api/check-company-role')
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
                axios.get('/api/check-company-role')
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
            path: '/company-account-setting',
            name: 'CompanyAccountSetting',
            component: CompanyAccountSetting,
            beforeEnter: (to, from, next) => {
                axios.get('/api/check-company-role')
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
            path: '/candidate-account-setting',
            name: 'CandidateAccountSetting',
            component: CandidateAccountSetting,
            beforeEnter: (to, from, next) => {
                axios.get('/api/check-candidate-role')
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
            path: '/job-applied-candidates/:id',
            name: 'JobAppliedCandidates',
            component: JobAppliedCandidates,
            beforeEnter: (to, from, next) => {
                axios.get('/api/check-company-role')
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
            path: '/company-dashboard',
            name: 'CompanyDashboard',
            component: CompanyDashboard,
            beforeEnter: (to, from, next) => {
                axios.get('/api/check-company-role')
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
            path: '/contact-us',
            name: 'ContactUs',
            component: ContactUs
        },
        {
            path: '/news-detail/:id',
            name: 'NewsDetail',
            component: NewsDetail
        },
        {
            path: '/social-login/:id',
            name: 'SocialLogin',
            component: SocialLogin
        },
        {
            path: '/candidate-cv',
            name: 'CandidateCvTemplate',
            component: CandidateCvTemplate
        },
        {
            path: '/privacy-policy',
            name: 'PrivacyPolicy',
            component: PrivacyPolicy
        },
        {
            path: '/terms-condition',
            name: 'TermsCondition',
            component: TermsCondition
        },
        {
            path: '/about-us',
            name: 'AboutUs',
            component: AboutUs
        },
        {
            path: '/services',
            name: 'Services',
            component: Services
        },
        {
            path: '/faq',
            name: 'Faq',
            component: Faq
        },
        {
            path: '/company-chat',
            name: 'CompanyChat',
            component: CompanyChat,
        },
        {
            path: '/candidate-dashboard',
            name: 'CandidateDashboard',
            component: CandidateDashboard,
            beforeEnter: (to, from, next) => {
                axios.get('/api/check-candidate-role')
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
            component: JobSearch,
        },
        {
            path: '/job-detail/:id',
            name: 'JobDetail',
            component: JobDetail
        },
        {
            path: '/package-plans',
            name: 'PackagePlans',
            component: PackagePlans,
            beforeEnter: (to, from, next) => {
                axios.get('/api/check-company-role')
                .then((response) => {
                    if (response.data.success == true) {
                        next()
                    } else {
                        next('/signin')
                    }
                });
            }
        },
    ]
});

export default router;
