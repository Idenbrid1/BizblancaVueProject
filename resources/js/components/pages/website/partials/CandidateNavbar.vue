<template>
     <!-- seconday-Navigation -->
        <header class="_secondary-header-nav common-secondary-header p-0" id="secondary-header-nav">
            <div class="p-0 m-auto">
                <ul>
                    <li>
                        <router-link :to="{ name: 'CandidateDashboard' }" class="secondaymenu" :class="this.$route.path == '/candidate-dashboard' ? 'candidate-active' : '' " id="secondary-anker">My Page</router-link>
                        <span class="seprate-line"></span>
                    </li>
                    <li>
                        <router-link :to="{ name: 'CandidateProfile' }" class="secondaymenu" :class="this.$route.path == '/candidate-profile' ? 'candidate-active' : ''" id="secondary-anker">Profile</router-link><span
                            class="seprate-line"></span>
                    </li>
                    <!-- <li>
                        <router-link :to="{ name: 'CompanyChat' }" class="secondaymenu" :class="this.$route.path == '/company-chat' ? 'candidate-active' : ''" id="secondary-anker-2">Messages</router-link><span
                            class="seprate-line"></span>
                    </li> -->
                    <li>
                        <router-link :to="{ name: 'JobSearch' }" class="secondaymenu" :class="this.$route.path == '/job-search' ? 'candidate-active' : ''" id="secondary-anker-3">Job Search</router-link><span
                            class="seprate-line"></span>
                    </li>
                    <li>
                        <router-link :to="{ name: 'CandidateAccountSetting' }" class="secondaymenu" :class="this.$route.path == '/candidate-account-setting' ? 'candidate-active' : ''" id="secondary-anker-2">Setting</router-link>
                        <span class="seprate-line"></span>
                    </li>
                    <li>
                        <router-link :to="{ name: 'CompanySearch' }" class="secondaymenu" :class="this.$route.path == '/company-search' ? 'candidate-active' : ''" id="secondary-anker-4">Companies Search</router-link>
                    </li>
                    
                </ul>
            </div>
        </header>
</template>
<script>
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