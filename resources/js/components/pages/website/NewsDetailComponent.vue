<template>
    <div>
        <WebsiteNavbar />
        <h1 class="pricing-plan-title">News</h1>
        <div class="pacakges-plan-container container">
            <section class="privacy-policy-container">
                <div class="news-detail-img"
                    :style="{ backgroundImage: 'url(/storage/images/news/'+data.image+')'}">
                    <div class="news-date">
                        <span>{{data.created_at | moment("d")}}</span>
                        <span>{{data.created_at | moment("MMM")}}</span>
                    </div>
                </div>
                <ul class="privacy-policy-queries">
                    <li>
                        <h1>{{data.title}}</h1>
                        <p>
                            {{data.description}}
                        </p>
                    </li>
                </ul>
            </section>
            <section id="news" class="main-home-section py-5">
                <div class="row m-0">
                    <!--  -->
                    <div class="col-12 p-0 first-section">
                        <section id="news-section" class="container">
                            <div  v-if="this.showShimmer == true">
                                <blockShimmer style="--shimmer-color: #eee" height="1000px" width="1000px" />
                            </div>
                            <!-- swiper blogs -->
                            <div v-if="this.showShimmer == false" id="blogs-section-scroll">
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
                                                <router-link :to="{ name: 'NewsDetail',  params: { id: item.id } }" class="blog-news-btn">Read More
                                                <i class="fa fa-long-arrow-right" aria-hidden="true"></i></router-link>
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
    import axios from 'axios';
    import WebsiteNavbar from '../website/partials/navbar.vue';
    import {
        blockShimmer,
        circleShimmer,
        imageShimmer,
        paragraphsShimmer,
        sentencesShimmer,
        textShimmer
    } from 'vue-shimmer'
    export default {
        data() {
            return {
                data: {},
                news: [],
                showShimmer: true
            }
        },
        watch: {
            '$route.path': function (val, oldVal) {
                this.init_component();
            },
        },
        mounted() {

        },
        created() {
            this.init_component();
            this.getNews();
        },
        components: {
            WebsiteNavbar,
            blockShimmer,
            circleShimmer,
            imageShimmer,
            paragraphsShimmer,
            sentencesShimmer,
            textShimmer,
        },
        methods: {
            swiperInit() {
                this.$nextTick(function() {
                    $('.parent-spinner').fadeOut();
                    var swiper = new Swiper(".blogs-swiper", {
                        slidesPerView: 3.5,
                        spaceBetween: 5,
                        centeredSlides: true,
                        loop: true,
                        autoplay: {
                            delay: 2500,
                            disableOnInteraction: false,
                        },
                        pagination: {
                            el: ".swiper-pagination",
                            clickable: true,
                        },
                        breakpoints: {
                            360: {
                                slidesPerView: 2,
                                centeredSlides: false,
                                spaceBetween: 1,
                            },
                            640: {
                                slidesPerView: 2,
                            },
                            768: {
                                slidesPerView: 2.5,
                                spaceBetween: 20,
                            },
                            1024: {
                                slidesPerView: 3.5,
                                spaceBetween: 30,
                            },
                            1224: {
                                slidesPerView: 3.5,
                                spaceBetween: 5,
                            },
                        },
                        navigation: {
                            nextEl: ".swiper-button-next",
                            prevEl: ".swiper-button-prev",
                        },
                        autoplay: {
                            delay: 3000,
                            disableOnInteraction: false,
                        },
                    });
                })
            },
            init_component(){
                this.getSingleNewsDetail();
            },
            getSingleNewsDetail() {
                axios.get('/api/get-single-news-detail/' + this.$route.params.id)
                .then((response) => {
                    this.data = response.data
                    // this.showShimmer = false 
                });
            },
            getNews() {
                axios.get('/api/landingpage/news')
                    .then( async (response) => {
                    this.news = response.data
                    this.showShimmer = false 
                    this.swiperInit()
                });
            },
        },
    };

</script>
