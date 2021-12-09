<template>
    <div>
        <WebsiteNavbar />
        <CompanyNavbar />
        <h1 class="pricing-plan-title">About Us</h1>
        <section class="about-us-container container">
            <div class="bizlanca-about-wrap">
                <img src="/website/assets/images/about-us.png" alt="img">
                <div class="about-info">
                    <h1>Lorem ipsum dolor sit amet, consectetuer.</h1>
                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Lorem
                        ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Lorem
                        ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Lorem
                        ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Lorem
                        ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor.</p>
                    <a href="">READ MORE &nbsp; <i class="fas fa-arrow-right"></i></a>
                </div>
            </div>
            <div class="about-comp-info">
                <h2>Lorem ipsum dolor sit amet, consectetuer.</h2>
                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Lorem
                    ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Lorem ipsum
                    dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Lorem ipsum dolor
                    sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Lorem ipsum dolor sit
                    amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor.</p>
            </div>
        </section>
        <div class="our-goals-wrap">
            <div class="bizlanca-about-wrap container">
                <div class="about-info">
                    <h1>Our Goal</h1>
                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Lorem
                        ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Lorem
                        ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Lorem
                        ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Lorem
                        ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor.</p>
                </div>
                <img src="/website/assets/images/our-goal.svg" alt="img">
            </div>
        </div>
    </div>
</template>
<script>
    import WebsiteNavbar from '../website/partials/navbar.vue';
    export default {
        data() {
            return {}
        },
        mounted() {},
        created() {},
        components: {
            WebsiteNavbar,
        },
        methods: {},
    };

</script>
