<template>
    <div>
        <WebsiteNavbar/>
            <router-view></router-view>
        <WebsiteFooter/>
    </div>
</template>
<script>
    import WebsiteFooter from '../website/partials/footer.vue';
    import WebsiteNavbar from '../website/partials/navbar.vue';

    export default {
        name: 'main-app',
        data(){
            return {

            }
        },
        components: {
            WebsiteFooter,
            WebsiteNavbar,
        },
        
    }
</script>
