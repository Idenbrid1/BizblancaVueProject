<template>
    <div>
        <!--back-top-top-->
        <button onclick="topFunction()" class="back-to-top" id="back-to-top" title="Go to top">
            <i class="fa fa-angle-up"></i>
        </button>
        <!---mobile view menu-->
        <div class="mobile-view px-0">
            <div class="logo">
                <router-link data-toggle="collapse" :to="{ name: 'Landing Page' }">
                    <img src="/website/assets/images/Logo.svg" alt="logo" /></router-link>
            </div>
            <div class="mobile-button">
                <router-link title="company" class="company-mbl-btn activeCompany" data-toggle="collapse" v-if="this.$route.name == 'ForCompanies'"
                    :to="{ name: 'ForCompanies' }"><i class="fas fa-building"></i> For Companies</router-link>
                <router-link title="company" class="company-mbl-btn " data-toggle="collapse" v-else
                    :to="{ name: 'ForCompanies' }"><i class="fas fa-building"></i> For Companies</router-link>
                <router-link title="candidate" class="company-mbl-btn activeCandidate" data-toggle="collapse" v-if="this.$route.name == 'ForCandidates'"
                    :to="{ name: 'ForCandidates' }"><i class="fas fa-users"></i> For Candidate</router-link>
                <router-link title="candidate" class="company-mbl-btn" data-toggle="collapse" v-else
                    :to="{ name: 'ForCandidates' }"><i class="fas fa-users"></i> For Candidate</router-link>
                <!-- <li class="header-block-link">
                </li>
                <li class="header-block-link pr-3 border-line">
                </li>
                <router-link class="company-mbl-btn" data-toggle="collapse" :to="{ name: 'ForCompanies' }"><i
                        class="fas fa-building"></i> For Companies</router-link>
                <router-link class="candidate-mbl-btn" data-toggle="collapse" :to="{ name: 'ForCandidates' }"><i
                        class="fas fa-users"></i> For Candidate</router-link> -->
            </div>
            <div class="navbar">
                <div class="icon-bar" onclick="ShowNavbar()">
                    <i></i>
                    <i></i>
                    <i></i>
                </div>
                <ul id="nav-lists">
                    <!-- <li class="close"><span onclick="Hide()">×</span></li> -->
                    <div class="d-flex mobile-view-btns px-3">
                        <a href="#" class="register-mbl-btn mr-2">Create CV</a>
                        <router-link v-if="this.isAuth == false" class="signin-mbl-btn ml-2" data-toggle="collapse" :to="{ name: 'Signin' }">
                            <i class="fas fa-users"></i> Sign In</router-link>
                        <a v-if="this.isAuth == true" class="register-desktop-btn ml-2" @click="logoutUser()">SignOut</a>
                    </div>
                    <a href="#news">
                        <li><i class="fas fa-globe"></i> News</li>
                    </a>
                    <a href="#expertise">
                        <li>
                            <i class="fas fas fa-search" aria-hidden="true"></i> Looking for a
                            job
                        </li>
                    </a>
                    <a href="#expertise">
                        <li>
                            <i class="fas fas fa-search" aria-hidden="true"></i> Looking for
                            employees
                        </li>
                    </a>
                    <a href="#happening">
                        <li><i class="fas fa-building" aria-hidden="true"></i> FAQS</li>
                    </a>
                    <a href="#video">
                        <li><i class="fas fa-video" aria-hidden="true"></i> Videos</li>
                    </a>
                    <a href="#contact">
                        <li><i class="fas fa-envelope" aria-hidden="true"></i> Contact</li>
                    </a>
                </ul>
            </div>
        </div>
        <div class="header-space"></div>
        <!--end-mobile-view-->
        <!--desktop-view-->
        <header id="main-header" class="top-header">
            <div class="header-inner">
                <router-link class="bizblanca-logo header-block-link" data-toggle="collapse"
                    :to="{ name: 'Landing Page' }">
                    <img class="log-site" src="/website/assets/images/Logo.svg" alt="logo" /></router-link>
                <ul class="main-navigation float-left py-2">
                    <li class="header-block-link">
                        <router-link title="company" class="menu-item activeCompany" data-toggle="collapse" v-if="this.$route.name == 'ForCompanies'"
                            :to="{ name: 'ForCompanies' }"><i class="fas fa-building"></i> For Companies</router-link>
                        <router-link title="company" class="menu-item" data-toggle="collapse" v-else
                        :to="{ name: 'ForCompanies' }"><i class="fas fa-building"></i> For Companies</router-link>
                    </li>
                    <li class="header-block-link pr-3 border-line">
                        <router-link title="candidate" class="menu-item activeCandidate" data-toggle="collapse" v-if="this.$route.name == 'ForCandidates'"
                            :to="{ name: 'ForCandidates' }"><i class="fas fa-users"></i> For Candidate</router-link>
                        <router-link title="candidate" class="menu-item" data-toggle="collapse" v-else
                            :to="{ name: 'ForCandidates' }"><i class="fas fa-users"></i> For Candidate</router-link>
                    </li>
                </ul>

                <ul class="main-navigation float-right d-flex align-items-center">
                    <li class="header-block-link" >
                        <router-link v-if="this.isAuth == false" class="register-desktop-btn ml-2" data-toggle="collapse" :to="{ name: 'Signin' }">
                            <i class="fas fa-users"></i>&nbsp;Sign In</router-link>
                        <a v-if="this.isAuth == true" class="register-desktop-btn ml-2" @click="logoutUser()">SignOut</a>
                    </li>
                    <div class="dropdown">
                    </div>
                    <li class="header-block-link">
                        <router-link v-if="this.isAuth == false" class="register-desktop-btn ml-2" data-toggle="collapse" :to="{ name: 'Signin' }">
                            <i class="fas fa-address-book" aria-hidden="true"></i>&nbsp;Create CV</router-link>
                    </li>
                    <li class="header-block-link">
                            <router-link v-if="this.isAuth == false" class="postjob-desktop-btn mr-2" data-toggle="collapse" :to="{ name: 'Signin' }">
                            <i class="fas fa-briefcase" aria-hidden="true"></i>&nbsp;Posts a job</router-link>
                    </li>
                </ul>
            </div>
        </header>
    </div>
</template>
<script>
import axios from 'axios';
    export default {
        data() {
            return {
                isAuth: '',
                url: '',
                role: $("meta[name='role']").attr("content")
            };
        },
        created() {
            this.checkAuth()
        },
        methods: {
            checkAuth() {
                // axios.get('/api/check-auth')
                // .then((response) => {
                //     this.isAuth = response.data.isAuth
                // });
                // this.role = $("meta[name='role']").attr("content");
                if(this.role == "false"){
                    this.isAuth = false
                }else{
                    this.isAuth = true
                }
            },
            logoutUser()
            {
                axios.get('/api/user-logout')
                .then((response) => {
                    if (response.data.success == true) {
                        this.isAuth = false
                        this.role = $("meta[name='role']").attr("content", 'false');
                        this.$router.push({ name: 'Signin' })
                    }
                });
            }
        }
    };

</script>
