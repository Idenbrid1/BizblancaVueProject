<template>
     <!-- seconday-Navigation -->
        <header class="_secondary-header-nav common-secondary-header p-0" id="secondary-header-nav">
            <div class="p-0 m-auto">
                <ul>
                    <li>
                        <router-link :to="{ name: 'CompanyDashboard' }" :class="this.$route.path == '/company-dashboard' ? 'company-active' : '' " class="secondaymenu" id="secondary-anker">My Page</router-link>
                        <span class="seprate-line"></span>
                    </li>
                    <li>
                        <router-link :to="{ name: 'CompanyProfile' }" :class="this.$route.path == '/company-profile' ? 'company-active' : '' " class="secondaymenu" id="secondary-anker">Profile</router-link><span
                            class="seprate-line"></span>
                    </li>
                    <li>
                        <router-link :to="{ name: 'CompanyChat' }" :class="this.$route.path == '/company-chat' ? 'company-active' : '' " class="secondaymenu" id="secondary-anker-2">Messages</router-link><span
                            class="seprate-line"></span>
                    </li>
                    <li>
                        <router-link :to="{ name: 'CandidateSearch' }" :class="this.$route.path == '/candidate-search' ? 'company-active' : '' " class="secondaymenu" id="secondary-anker-3">Candidate Search</router-link><span
                            class="seprate-line"></span>
                    </li>
                    <li>
                        <router-link :to="{ name: 'CompanyPostJob' }" :class="this.$route.path == '/company-post-job' ? 'company-active' : '' " class="secondaymenu" id="secondary-anker-4">Job Management</router-link>
                    </li>
                </ul>
            </div>
        </header>
</template>
<script>
import axios from 'axios';
    export default {
        data() {
            return {
                
            };
        },
        mounted(){
            
        },
        created() {
            
        },
        methods: {
            
        }
    };
</script>