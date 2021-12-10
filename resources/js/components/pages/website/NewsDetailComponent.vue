<template>
    <div>
        <WebsiteNavbar />
        <CompanyNavbar />
        <h1 class="pricing-plan-title">News</h1>
        <div class="pacakges-plan-container container">
            <section class="privacy-policy-container">
                <div class="news-detail-img"
                    style="background-image:url('/website/assets/images/meeting-image-update.png')">
                    <div class="news-date">
                        <span>01</span>
                        <span>DEC</span>
                    </div>
                </div>
                <ul class="privacy-policy-queries">
                    <li>
                        <h1>Lorem ipsum dolor sit amet, into consectetuer adipiscing elit. Lorem ipsum dolor sit.</h1>
                        <p>
                            Lorem ipsum dolor sit amet, consectetuer adipiscing elitjhjk. Lorem is ipsum dolor sit amet,
                            consectetuer adipiscing elit. Lorem ipsum dolor sit amet, consectetuer adipiscing elitjhjk.
                            Lorem is ipsum dolor sit amet, consectetuer adipiscing elit. Lorem ipsum dolor sit amet,
                            consectetuer adipiscing elitjhjk. Lorem is ipsum dolor sit amet, consectetuer adipiscing
                            elit. Lorem ipsum dolor sit amet, consectetuer adipiscing elitjhjk. Lorem is ipsum dolor sit
                            amet, consectetuer adipiscing elit. Lorem ipsum dolor sit amet, consectetuer adipiscing
                            elitjhjk. Lorem is ipsum dolor sit amet, consectetuer adipiscing elit. Lorem ipsum dolor sit
                            amet, consectetuer adipiscing elitjhjk. Lorem is ipsum dolor sit amet, consectetuer
                            adipiscing elit. Lorem ipsum dolor sit amet, consectetuer adipiscing elitjhjk. Lorem is
                            ipsum dolor sit amet, consectetuer adipiscing elit. Lorem ipsum dolor sit amet, consectetuer
                            adipiscing elitjhjk. Lorem is ipsum dolor sit amet, consectetuer adipiscing elit. Lorem
                            ipsum dolor sit amet, consectetuer adipiscing elitjhjk. Lorem is ipsum dolor sit amet,
                            consectetuer adipiscing elit. Lorem ipsum dolor sit amet, consectetuer adipiscing elitjhjk.
                            Lorem is ipsum dolor sit amet, consectetuer adipiscing elit.
                        </p>
                    </li>
                </ul>
            </section>
            <section id="news" class="main-home-section py-5">
                <div class="row m-0">
                    <!--  -->
                    <div class="col-12 p-0 first-section">
                        <section id="news-section" class="container">
                            <!-- swiper blogs -->
                            <div class="" id="blogs-section-scroll">
                                <div class="swiper-container blogs-swiper">
                                    <div class="row">
                                        <div class="col-md-12 text-left">
                                            <div class="heading-div">
                                                <div class="mr-2 title-effect"></div>
                                                <h2 class="site-heading mb-0">Popular News</h2>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-wrapper">
                                        <!--  -->
                                        <div class="swiper-slide single-blog-wrap" v-for="(item, index) in news"
                                            :key="index">
                                            <div class="single-blog">
                                                <img :src="'/storage/images/news/'+item.image" alt="blog-img" />
                                                <div class="eventdate">
                                                    <strong>{{ item.created_at | moment("d")}}</strong>
                                                    {{ item.created_at | moment("MMM")}}</div>
                                                <div class="news-card-day">
                                                    <div class="blog-title">
                                                        <span>{{item.title}}</span>
                                                    </div>
                                                </div>
                                                <p class="blog-description line-text-3">
                                                    {{item.description}}
                                                </p>
                                                <a class="blog-news-btn" href="#">Read More
                                                    <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
                                            </div>
                                        </div>
                                        <!--  -->
                                    </div>
                                    <div class="swiper-button-prev"></div>
                                    <div class="swiper-button-next"></div>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
            </section>
        </div>
    </div>
</template>
<script>
    import WebsiteNavbar from '../website/partials/navbar.vue';
    export default {
        data() {
            return {

            }
        },
        mounted() {},
        created() {},
        components: {
            WebsiteNavbar,
        },
        methods: {

        },
    };

</script>
