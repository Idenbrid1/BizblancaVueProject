<template>
    <div>
        <WebsiteNavbar />
        <CompanyNavbar />
        <h1>company serach</h1>
    </div>
</template>
<script>
    import axios from 'axios';
    import WebsiteNavbar from '../partials/navbar.vue';
    import CompanyNavbar from '../partials/CompanyNavbar.vue';
    export default {
        data() {
            return {

            }
        },
        components: {
            WebsiteNavbar,
            CompanyNavbar,
        },
        mounted() {
            
        },
        methods: {
            
        },
    };

</script>