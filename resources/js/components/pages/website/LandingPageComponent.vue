<template>
    <div>
        <!-- spinner -->
        <!-- <div class="parent-spinner">
            <span class="text_loading">BizBlanca<br>Loading....</span>
            <div class="spinner" style="font-size:16px"></div>
        </div> -->
        <!-- End -->
        <!--Preloader start here-->
        <div id="preloader">
            <div id="rs-preloader" class="rs-preloader">
                <div class="animation-preloader">
                    <div class="spinner1"></div>
                    <div class="txt-loading">
                        <span data-text-preloader="B" class="letters-loading">B</span>
                        <span data-text-preloader="I" class="letters-loading">I</span>
                        <span data-text-preloader="Z" class="letters-loading">Z</span>
                        <span data-text-preloader="B" class="letters-loading">B</span>
                        <span data-text-preloader="L" class="letters-loading">L</span>
                        <span data-text-preloader="A" class="letters-loading">A</span>
                        <span data-text-preloader="N" class="letters-loading">N</span>
                        <span data-text-preloader="C" class="letters-loading">C</span>
                        <span data-text-preloader="A" class="letters-loading">A</span>
                    </div>
                    <p class="text-center">Loading...</p>
                </div>
            </div>
        </div>
        <!--Preloader area end here-->
        <WebsiteNavbar />
        <!-- seconday-Navigation -->
        <header class="_secondary-header-nav p-0" id="secondary-header-nav">
            <div class="p-0 m-auto">
                <ul>
                    <li>
                        <a href="#news" class="secondaymenu" id="secondary-anker">News</a>
                        <span class="seprate-line"></span>
                    </li>
                    <li>
                        <a href="#expertise" class="secondaymenu" id="secondary-anker">Looking for jobs</a><span
                            class="seprate-line"></span>
                    </li>
                    <li>
                        <a href="#expertise" class="secondaymenu" id="secondary-anker-2">Looking for Employees</a><span
                            class="seprate-line"></span>
                    </li>
                    <li>
                        <a href="#happening" class="secondaymenu" id="secondary-anker-3">FAQ</a><span
                            class="seprate-line"></span>
                    </li>
                    <li>
                        <a href="#video" class="secondaymenu" id="secondary-anker-4">Videos</a><span
                            class="seprate-line"></span>
                    </li>
                    <li>
                        <a href="#contact" class="secondaymenu" id="secondary-anker-5">Contact</a>
                    </li>
                </ul>
            </div>
        </header>
        <span v-if="this.isRole == 'company'">
            <CompanyNavbar />
        </span>
        <span v-if="this.isRole == 'candidate'">
            <CandidateNavbar />
        </span>
        <!-- Hero Banner Section -->
        <section class="main-hero-banner py-5">
            <div class="container">
                <div class="row">
                    <div class="col-lg-10 m-auto">
                        <h2>IT job ke liye</h2>
                        <h1 class="mb-4">BizBlanca</h1>
                        <div class="d-flex banner-buttons">
                            <router-link :to="{ name: 'JobSearch' }" class="btn btn-black hero-banner-btn-job mr-2">
                                Looking for Jobs</router-link>
                            <router-link :to="{ name: 'CandidateSearch' }"
                                class="btn btn-black hero-banner-btn-employee" href="#">Looking for Employees
                            </router-link>
                        </div>
                    </div>
                </div>
            </div>
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
                                            <h2 class="site-heading mb-0">News</h2>
                                        </div>
                                        <p class="pt-1 pb-2 mb-0">
                                            <span class="news-text">We keep the bizers updated with Information
                                                Technology services and ever-lasting benefits. <br />Take a look at some
                                                of
                                                the recent posts of BizBlanca on our social sites. </span>
                                        </p>
                                    </div>
                                </div>
                                <div class="swiper-wrapper">
                                    <!--  -->
                                    <div class="swiper-slide single-blog-wrap" v-for="(item, index) in news"
                                        :key="index">
                                        <div class="single-blog">
                                            <img :src="'/storage/images/news/'+item.image" alt="blog-img" />
                                            <!-- <div class="eventdate"><strong>{{ item.created_at | moment("d")}}</strong>
                                                {{ item.created_at | moment("MMM")}}</div> -->
                                            <div class="news-card-day">
                                                <div class="blog-title">
                                                    <span>{{item.title}}</span>
                                                </div>
                                            </div>
                                            <p class="blog-description line-text-3">
                                                {{item.description}}
                                            </p>
                                            <router-link :to="{ name: 'NewsDetail',  params: { id: item.id } }"
                                                class="blog-news-btn">Read More
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
        <section id="expertise" class="bg-Grey">
            <div class="container">
                <div class="list__title-container row">
                    <div class="col-md-12">
                        <div class="heading-div mb-3">
                            <div class="mr-2 title-effect"></div>
                            <h2 class="site-heading mb-0">
                                We are IT-Jobs Provider
                            </h2>
                        </div>
                        <p class="body--lg">
                            Since 2020 BizBlanca has pioneered specialist recruitment, sourcing knowledgeable, skilled
                            professionals for jobs across Pakistan. Our experts recruit across the IT sector, so whether
                            you are looking to hire your next head of development, or urgently require supply managers,
                            we can help you.
                        </p>
                    </div>
                </div>
            </div>
            <!--  -->
            <div class="container fourth-section">
                <div class="row m-0">
                    <div class="col-12 col-md-6 p-0" id="content-faq-anker">
                        <div id="content-faq-head">
                            <router-link :to="{ name: 'JobSearch' }" class="job-head">
                                <div>
                                    <h2>Looking for Job?</h2>
                                    <p>We connect job searchers with reputable software houses as well as provide a
                                        platform for them to easily seek employment.</p>
                                    <span class="text-center btn-look">View more Detail
                                        <i class="fa fa-long-arrow-right" aria-hidden="true"></i></span>
                                </div>
                            </router-link>
                        </div>
                        <div class="content-faq-anker parent">
                            <div class="child bg-one">
                                <router-link :to="{ name: 'JobSearch' }"><span class="looking-h">Looking For
                                        Jobs?</span></router-link>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 p-0" id="social-media-anker">
                        <div id="social-media-head">
                            <router-link :to="{ name: 'CandidateSearch' }" class="employee-head">
                                <div id="videos-section">
                                    <h2>Looking for employees?</h2>
                                    <p>
                                        We find the most suitable employees within your budget that fulfill your
                                        requirements and work with dedication.
                                    </p>
                                    <span class="text-center btn-look">View more Detail
                                        <i class="fa fa-long-arrow-right" aria-hidden="true"></i></span>
                                </div>
                            </router-link>
                        </div>
                        <div class="parent right social-media-anker">
                            <div class="child bg-two">
                                <router-link :to="{ name: 'CandidateSearch' }"><span class="looking-h">Looking for
                                        Employees?</span></router-link>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="py-5">
            <div class="third-sections">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 pb-5 third-inner-sec">
                            <div class="heading-div mb-3">
                                <div class="mr-2 title-effect"></div>
                                <h2 class="site-heading mb-0">IT job ke liye, BizBlanca</h2>
                            </div>
                            <p class="pt-2">
                                Get scouted or headhunted by companies you never imagined you could work for. With
                                BizBlanca, it's not just a dream. We are an indispensable platform for reliable career
                                advancement. We carefully select candidates who have certain qualifications and do not
                                compromise on quality.
                            </p>
                            <img src="/website/assets/images/Group1492.png" alt="blog-img" width="100%" />
                        </div>
                        <router-link :to="{ name: 'Signup' }" class="process-btn m-auto">Register as a job seeker
                        </router-link>
                    </div>
                </div>
            </div>
        </section>
        <section class="bg-Grey" id="happening">
            <div class="container">
                <div class="heading-div mb-3">
                    <div class="mr-2 title-effect"></div>
                    <h2 class="site-heading mb-0">Learn more About BizBlanca</h2>
                </div>
                <p>
                    Get scouted or headhunted by companies you never imagined you could
                    work for.
                </p>
                <div class="list-socaial">
                    <div class="services-box">
                        <div class="list__card">
                            <div class="list__card-image-container">
                                <div class="list__card-image">
                                    <img src="/website/assets/images/Icon-awesome-question-circle.svg"></div>
                            </div>
                            <div class="list__card-content">
                                <h3 class="h5 list__card-title">FAQS</h3>
                                <p class="list__card-description body--sm">
                                    We have enlisted some Frequently Asked Questions about us and our services. Take a
                                    brief look at these FAQs and gather some reliable knowledge.
                                </p>
                            </div>
                            <router-link :to="{ name: 'Faq' }" tabindex="0" class="list__card-link minor-button-right">
                                Read more
                                <i aria-hidden="true" class="fa fa-long-arrow-right"></i></router-link>
                        </div>
                    </div>
                    <div class="services-box">
                        <div class="list__card">
                            <div class="list__card-image-container">
                                <div class="list__card-image"><img src="/website/assets/images/Group-1360.png"></div>
                            </div>
                            <div class="list__card-content">
                                <h3 class="h5 list__card-title">Social Media</h3>
                                <p class="list__card-description body--sm">
                                    We are connected worldwide through social media platforms like Facebook, Instagram,
                                    and Linkedin.
                                </p>
                            </div> <a href="#" tabindex="0" class="list__card-link minor-button-right">Read more
                                <i aria-hidden="true" class="fa fa-long-arrow-right"></i></a>
                        </div>
                    </div>
                    <div class="services-box">
                        <div class="list__card">
                            <div class="list__card-image-container">
                                <div class="list__card-image"><img src="/website/assets/images/Group1361.svg"></div>
                            </div>
                            <div class="list__card-content">
                                <h3 class="h5 list__card-title">
                                    Online Suggestions
                                </h3>
                                <p class="list__card-description body--sm">
                                    The Business Development Executive Mujtaba Tariq provides you with eye-opening
                                    suggestions for your career with BizBlanca.
                                </p>
                            </div>
                            <router-link :to="{ name: 'ContactUs' }" tabindex="0"
                                class="list__card-link minor-button-right">Read more
                                <i aria-hidden="true" class="fa fa-long-arrow-right"></i></router-link>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <div class="col-12 videos-anker py-5" id="video">
            <div class="swiper video-slider">
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12 pb-5 pl-0">
                                    <div class="story-heading-div mb-2">
                                        <div class="mr-2 story-title-effect"></div>
                                        <h2 class="video-heading text-left text-white m-0">
                                            Our Stories<span class="line"></span>
                                        </h2>
                                    </div>
                                </div>
                                <div class="col-md-6 movie-wrap">
                                    <div class="movie-inner">
                                        <video controls src="/website/assets/videos/Bizblanca.mp4" width="100%"
                                            height="280px"></video>
                                    </div>
                                </div>
                                <div class="col-md-6 movie-wrap-text">
                                    <div class="video-tag">Company</div>
                                    <h3 class="carousel__item-client">
                                        IDENBRID INC.
                                    </h3>
                                    <p class="video-description pt-3">
                                        We believe in change with IT for a better life. Till now, we have hired number
                                        of candidates with expert IT skills. Review more about us and get motivated.
                                    </p>
                                    <div id="contact-section" class="col-12 anker-list d-flex w-100 pt-2 mt-4 px-0">
                                        <a href="https://idenbrid.com" target="_blank" class="videoview-list-anker">Read
                                            More
                                            <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--- 2nd video ----->
                    <div class="swiper-slide">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12 pb-5 pl-0">
                                    <div class="story-heading-div mb-2">
                                        <div class="mr-2 story-title-effect"></div>
                                        <h2 class="video-heading text-left text-white m-0">
                                            Our Stories<span class="line"></span>
                                        </h2>
                                    </div>
                                </div>
                                <div class="col-md-6 movie-wrap">
                                    <div class="movie-inner">
                                        <video controls src="/website/assets/videos/Bizblanca.mp4" width="100%"
                                            height="280px">
                                        </video>
                                    </div>
                                </div>
                                <div class="col-md-6 movie-wrap-text">
                                    <div class="video-tag">Company</div>
                                    <h3 class="carousel__item-client">
                                        IDENRBID JP
                                    </h3>
                                    <p class="video-description pt-3">
                                        We believe in change with IT for a better life. Till now, we have hired number
                                        of candidates with expert IT skills. Review more about us and get motivated.
                                    </p>
                                    <div id="contact-section" class="col-12 anker-list d-flex w-100 pt-2 mt-4 px-0">
                                        <a href="https://idenbrid.com/jp" target="_blank"
                                            class="videoview-list-anker">Read More
                                            <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--  -->
        <section class="sixth-section py-5" id="contact">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-12 w-100 p-0 pr-md-5">
                        <form action="">
                            <div class="row m-0">
                                <div class="col-12 pb-4 px-0">
                                    <div class="heading-div mb-3">
                                        <div class="mr-2 title-effect"></div>
                                        <h2 class="site-heading mb-0">Any queries in your mind?</h2>
                                    </div>
                                    <p style="color: #081351">
                                        No worries, we are here for you. Fill in the details and one of our support team
                                        members will reach out to you soon.
                                    </p>
                                </div>
                                <div class="col-12 px-0">
                                    <div class="form-group">
                                        <label for="">Full Name</label>
                                        <input type="text" class="form-control pl-2" v-model="contact_us.name"
                                            placeholder="Please enter your full name" name="" id="" maxlength="50"
                                            required />
                                        <small>
                                            <span v-if="errors.name != null" class="text-danger float-left">
                                                {{errors.name[0]}}
                                            </span>
                                        </small>
                                    </div>
                                </div>
                                <div class="col-12 px-0">
                                    <div class="form-group">
                                        <label for="">Email</label>
                                        <input type="email" class="form-control pl-2" v-model="contact_us.email"
                                            placeholder="Please enter your email" name="" id="" maxlength="50"
                                            required />
                                        <small>
                                            <span v-if="errors.email != null" class="text-danger float-left">
                                                {{errors.email[0]}}
                                            </span>
                                        </small>
                                    </div>
                                </div>
                                <div class="col-12 px-0">
                                    <div class="form-group">
                                        <label for="">Phone Number</label>
                                        <input type="number" class="form-control pl-2" v-model="contact_us.phone"
                                            placeholder="Please enter your phone number" name="" id="" maxlength="20"
                                            required />
                                        <small>
                                            <span v-if="errors.phone != null" class="text-danger float-left">
                                                {{errors.phone[0]}}
                                            </span>
                                        </small>
                                    </div>
                                </div>
                                <div class="col-12 px-0">
                                    <div class="form-group">
                                        <label for="">Message</label>
                                        <textarea rows="4" type="text" class="form-control pl-3 message-box"
                                            v-model="contact_us.message" placeholder="Message" name="" id=""
                                            required></textarea>
                                        <small>
                                            <span v-if="errors.message != null" class="text-danger float-left">
                                                {{errors.message[0]}}
                                            </span>
                                        </small>
                                    </div>
                                </div>
                                <div class="col-12 px-0 py-4">
                                    <looping-rhombuses-spinner :animation-duration="1800" :size="40" color="#081351"
                                        v-if="spinnerSubmit == true" />
                                    <a @click.prevent="submitContactUs()" class="contact-submit-anker"
                                        v-if="spinnerSubmit == false">Send</a>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="col-12 col-md-6 map-office">
                        <div class="heading-div mb-3">
                            <div class="mr-2 title-effect"></div>
                            <h2 class="site-heading mb-0">Address</h2>
                        </div>
                        <p style="color: #081351">
                            <i class="fa fa-map-marker" aria-hidden="true"></i> 176-Y, DHA
                            Phase 4, Lahore
                        </p>
                        <p style="color: #081351">
                            <i class="fa fa-phone-alt" aria-hidden="true"></i> 0301-4345825
                        </p>
                        <div style="width: 100%">
                            <iframe width="100%" height="455" frameborder="0" scrolling="no" marginheight="0"
                                marginwidth="0"
                                src="https://maps.google.com/maps?width=100%25&amp;height=400&amp;hl=en&amp;q=176%20Y%20block%20%20DHA%20Phase%203%20%20Lahore%20Cantt%20%20Pakistan+(Idenbrid)&amp;t=&amp;z=16&amp;ie=UTF8&amp;iwloc=B&amp;output=embed">
                            </iframe>
                            <a href="./comming.html">Bizblanca office map</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</template>
<script>
    import axios from 'axios';
    import WebsiteNavbar from './partials/navbar.vue';
    import CompanyNavbar from './partials/CompanyNavbar.vue';
    import CandidateNavbar from './partials/CandidateNavbar.vue';
    import {
        LoopingRhombusesSpinner
    } from 'epic-spinners'
    export default {
        data() {
            return {
                isRole: $("meta[name='role']").attr("content"),
                contact_us: {
                    name: '',
                    email: '',
                    phone: '',
                    message: '',
                },
                errors: [],
                spinnerSubmit: false,
                news: '',
            };
        },
        components: {
            WebsiteNavbar,
            CompanyNavbar,
            CandidateNavbar,
            LoopingRhombusesSpinner,
        },
        created() {
            // this.checkRole();
            this.getNews();
        },
        mounted() {
            this.swiperInit()
            var swiper = new Swiper(".video-slider", {
                slidesPerView: 1,
                breakpoints: {
                    640: {
                        slidesPerView: 1,
                    },
                    768: {
                        slidesPerView: 1,
                        spaceBetween: 20,
                    },
                    1024: {
                        slidesPerView: 1,
                        spaceBetween: 30,
                    },
                    1224: {
                        slidesPerView: 1,
                        spaceBetween: 5,
                    },
                },
                navigation: {
                    nextEl: ".swiper-button-next",
                    prevEl: ".swiper-button-prev",
                },
            });
            setTimeout(() => {
                this.expireTodayJobs()
            }, 5000)
        },
        methods: {
            swiperInit() {
                if (sessionStorage.getItem("count_loader")) {
                        $('#preloader').fadeOut(100);
                } else {
                    sessionStorage.setItem("count_loader", "0");
                    if (JSON.parse(sessionStorage.getItem("count_loader")) == 0) {
                        $('#preloader').fadeIn();
                        setTimeout(() => {
                            $('#preloader').fadeOut();
                        }, 2000)
                    }
                }

                this.$nextTick(function () {
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
            // checkRole() {
            //     axios.get('api/navbar-check-roles')
            //     .then((response) => {
            //         if (response.data.success) {
            //             this.isRole = response.data.role
            //         }
            //     });
            // },
            getNews() {
                axios.get('/api/landingpage/news')
                    .then((response) => {
                        this.news = response.data
                        this.swiperInit()
                    });
            },
            expireTodayJobs() {
                axios.get('api/expire-today-jobs')
            },
            submitContactUs() {
                this.spinnerSubmit = true
                Swal.fire({
                    text: 'Please Wait...',
                    didOpen: () => {
                        Swal.showLoading()
                    },
                })
                axios.post('/api/submit-contact-us', this.contact_us)
                    .then((response) => {
                        if (response.data.success == true) {
                            Swal.close()
                            Swal.fire({
                                icon: 'success',
                                title: 'Contact us query raised',
                                text: 'Please wait we will contact you as soon as possible! THANKS',
                            })
                            this.contact_us = {
                                name: '',
                                email: '',
                                phone: '',
                                message: '',
                            };
                            this.errors = []
                            this.spinnerSubmit = false

                        } else {
                            Swal.close()
                            this.errors = response.data.errors
                            this.spinnerSubmit = false
                        }
                    });
            }
        }
    };

</script>
<style scoped>
    #preloader {
        display: none;
    }

    .text_loading {
        color: #f1f1f1;
        position: fixed;
        z-index: 200000;
        left: 50%;
        top: 50%;
        transform: translate(-50%, -50%)
    }

    .parent-spinner {
        background: #050115;
        display: flex;
        height: 100vh;
        width: 100vw;
        overflow: hidden;
        position: fixed;
        z-index: 10000;
        opacity: 0.6;
    }

    .spinner {
        width: 10em;
        height: 10em;
        border-top: .5em solid #d5fff7;
        border-right: .5em solid transparent;
        animation: spinner .4s linear infinite;
        border-radius: 50%;
        margin: auto
    }

    .head {
        width: 1em;
        height: 1em;
        border-radius: 50%;
        margin-left: 8.5em;
        margin-top: .5em;
        background-color: #d5fff7
    }

    @keyframes spinner {
        to {
            transform: rotate(360deg)
        }
    }

    /* LOADING  */
    .rs-preloader {
        align-items: center;
        cursor: default;
        display: flex;
        height: 100%;
        justify-content: center;
        position: fixed;
        left: 0;
        top: 0;
        width: 100%;
        background: #fff;
        z-index: 9000;
    }

    .rs-preloader .animation-preloader {
        z-index: 1000;
    }

    .rs-preloader .animation-preloader .spinner1 {
        animation: preloaderspinner1 1s infinite linear;
        border-radius: 50%;
        /* border: 3px solid rgba(0, 0, 0, 0.2);
	  border-top-color: rgba(255, 255, 255, 0.2); */
        border: 3px solid #081351;
        border-top-color: rgba(255, 255, 255, 0.2);
        height: 9em;
        margin: 0 auto 3.5em auto;
        width: 9em;
    }

    .rs-preloader .animation-preloader .txt-loading {
        font: bold 5em "Poppins", sans-serif;
        text-align: center;
        user-select: none;
    }

    .rs-preloader .animation-preloader .txt-loading .letters-loading {
        color: rgba(0, 0, 0, 0.2);
        position: relative;
    }

    .rs-preloader .animation-preloader .txt-loading .letters-loading:before {
        animation: letters-loading 4s infinite;
        /* color: #000; */
        color: #081351;
        content: attr(data-text-preloader);
        left: 0;
        opacity: 0;
        font-family: "Poppins", sans-serif;
        position: absolute;
        top: -3px;
        transform: rotateY(-90deg);
    }

    .rs-preloader .animation-preloader .txt-loading .letters-loading:nth-child(2):before {
        animation-delay: 0.2s;
    }

    .rs-preloader .animation-preloader .txt-loading .letters-loading:nth-child(3):before {
        animation-delay: 0.4s;
    }

    .rs-preloader .animation-preloader .txt-loading .letters-loading:nth-child(4):before {
        animation-delay: 0.6s;
    }

    .rs-preloader .animation-preloader .txt-loading .letters-loading:nth-child(5):before {
        animation-delay: 0.8s;
    }

    .rs-preloader .animation-preloader .txt-loading .letters-loading:nth-child(6):before {
        animation-delay: 1s;
    }

    .rs-preloader .animation-preloader .txt-loading .letters-loading:nth-child(7):before {
        animation-delay: 1.2s;
    }

    .rs-preloader .animation-preloader .txt-loading .letters-loading:nth-child(8):before {
        animation-delay: 1.4s;
    }

    .rs-preloader .animation-preloader .txt-loading .letters-loading:nth-child(9):before {
        animation-delay: 1.6s;
    }

    .rs-preloader p {
        font-size: 14px;
        font-weight: 500;
        text-transform: uppercase;
        letter-spacing: 8px;
        color: #3b3b3b;
    }

    @keyframes preloaderspinner1 {
        to {
            transform: rotateZ(360deg);
        }
    }

    @keyframes letters-loading {

        0%,
        75%,
        100% {
            opacity: 0;
            transform: rotateY(-90deg);
        }

        25%,
        50% {
            opacity: 1;
            transform: rotateY(0deg);
        }
    }

    @media screen and (max-width:768px) {
        .rs-preloader .animation-preloader .spinner1 {
            height: 5em;
            width: 5em;
        }

        .rs-preloader .animation-preloader .txt-loading {
            font-size: 2em;
        }
    }

</style>
