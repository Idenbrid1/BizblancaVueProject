<template>
     <!-- seconday-Navigation -->
        <header class="_secondary-header-nav p-0" id="secondary-header-nav">
            <div class="p-0 m-auto" style="height: 42px">
                <ul>
                    <li>
                        <router-link :to="{ name: 'CompanyProfile' }" class="secondaymenu" id="secondary-anker">My Page</router-link>
                        <span class="seprate-line"></span>
                    </li>
                    <li>
                        <router-link :to="{ name: 'CompanyProfile' }" class="secondaymenu" id="secondary-anker">Profile</router-link><span
                            class="seprate-line"></span>
                    </li>
                    <li>
                        <router-link :to="{ name: 'CompanyProfile' }" class="secondaymenu" id="secondary-anker-2">Messages</router-link><span
                            class="seprate-line"></span>
                    </li>
                    <li>
                        <router-link :to="{ name: 'CompanyProfile' }" class="secondaymenu" id="secondary-anker-3">Job Search</router-link><span
                            class="seprate-line"></span>
                    </li>
                    <li>
                        <router-link :to="{ name: 'CompanyProfile' }" class="secondaymenu" id="secondary-anker-4">Search Companies</router-link>
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