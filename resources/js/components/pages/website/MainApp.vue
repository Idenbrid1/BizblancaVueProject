<template>
    <div>
        <router-view></router-view>
        <WebsiteFooter/>
    </div>
</template>
<script>
    import WebsiteFooter from '../website/partials/footer.vue';

    export default {
        name: 'main-app',
        data(){
            return {

            }
        },
        components: {
            WebsiteFooter,
        },
        
    }
</script>
