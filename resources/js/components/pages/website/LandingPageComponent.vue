<template>
    <div>
        <WebsiteNavbar />
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
                            <a class="btn btn-black hero-banner-btn-job mr-2" href="#">Looking for a Jobs</a>
                            <a class="btn btn-black hero-banner-btn-employee" href="#">Looking for Employees</a>
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
                            <div class="swiper-container BlogsSwiper">
                                <div class="row">
                                    <div class="col-md-12 text-left">
                                        <div class="heading-div">
                                            <div class="mr-2 titleEffect"></div>
                                            <h2 class="site-heading mb-0">News</h2>
                                        </div>
                                        <p class="pt-1 pb-2 mb-0">
                                            <span class="news-text">See the latest information on BizBlanca</span>
                                        </p>
                                    </div>
                                </div>
                                <div class="swiper-wrapper">
                                    <!--  -->
                                    <div class="swiper-slide single-blog-wrap">
                                        <div class="single-blog">
                                            <img src="/website/assets/images/meeting-2-update.png" alt="blog-img" />
                                            <div class="eventdate"><strong>06</strong> Jun</div>
                                            <div class="news-card-day">
                                                <div class="blog-title">
                                                    <span>Tons of Companies joining</span>
                                                </div>
                                            </div>
                                            <p class="blog-description line-text-3">
                                                Hundreds of Companies using the BizBlanca platform. Many
                                                companies are joining the BizBlanca Community because of
                                                our Human Resource and Service set of standards.
                                            </p>
                                            <a class="blog-news-btn" href="#">Read More
                                                <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
                                        </div>
                                    </div>
                                    <!--  -->
                                    <!--  -->
                                    <div class="swiper-slide single-blog-wrap">
                                        <div class="single-blog">
                                            <img src="/website/assets/images/candidate-image.png" alt="blog-img" />
                                            <div class="eventdate"><strong>03</strong> Aug</div>
                                            <div class="news-card-day">
                                                <div class="blog-title">
                                                    <span>Bizer of the Month</span>
                                                </div>
                                            </div>
                                            <p class="blog-description line-text-3">
                                                M. Basit Ali declared bizer of the month after securing
                                                a great job opportunity in a very reputable company in
                                                Lahore. The road was not easy but Basit overcame all the
                                                hurdles and became one of the highest earning bizer from
                                                BizBlanca as a Senior Bizer.
                                            </p>
                                            <a class="blog-news-btn" href="#">Read More
                                                <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
                                        </div>
                                    </div>
                                    <!--  -->
                                    <!--  -->
                                    <div class="swiper-slide single-blog-wrap">
                                        <div class="single-blog">
                                            <img src="/website/assets/images/meeting-image-update.png" alt="blog-img" />
                                            <div class="eventdate"><strong>01</strong> Aug</div>
                                            <div class="news-card-day">
                                                <div class="blog-title">
                                                    <span>BizBlanca Team’s Visit</span>
                                                </div>
                                            </div>
                                            <p class="blog-description line-text-3">
                                                Our Business Leaders from BizBlanca went on a Business
                                                Visit to TechnoGeneics for a MoU event discussion.
                                                TechnoGenics is one the leading Cyber Security company
                                                based in Lahore working with US clients. All such
                                                companies are promoting Pakistan’s IT services and
                                                making us all proud.
                                            </p>
                                            <a class="blog-news-btn" href="#">Read More
                                                <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
                                        </div>
                                    </div>
                                    <!--  -->
                                    <!--  -->
                                    <div class="swiper-slide single-blog-wrap">
                                        <div class="single-blog">
                                            <img src="/website/assets/images/Artboard 4-100.jpg" alt="blog-img" />
                                            <div class="eventdate"><strong>07</strong> Aug</div>
                                            <div class="news-card-day">
                                                <div class="blog-title">
                                                    <span> BizBlanca Team Party</span>
                                                </div>
                                            </div>
                                            <p class="blog-description line-text-3">
                                                Idenbrid Inc. is throwing a big party for BizBlanca’s
                                                Development Team at Royal Palm. From project managers to
                                                associates all are invited. Everyone will be given
                                                special appreciation. The CEO and CFO are chief guests
                                                and will make speeches as well.
                                            </p>
                                            <a class="blog-news-btn" href="#">Read More
                                                <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
                                        </div>
                                    </div>
                                    <!--  -->
                                    <!--  -->
                                    <div class="swiper-slide single-blog-wrap">
                                        <div class="single-blog">
                                            <img src="/website/assets/images/Artboard 7-100.jpg" alt="blog-img" />
                                            <div class="eventdate"><strong>09</strong> Aug</div>
                                            <div class="news-card-day">
                                                <div class="blog-title">
                                                    <span>Fastest Growing HR Database</span>
                                                </div>
                                            </div>
                                            <p class="blog-description line-text-3">
                                                Many Tech Tycoons predict that BizBlanca will become one
                                                of the biggest human resources databases of the IT
                                                sector in Pakistan soon. From Executive to Fresh IT
                                                professionals all are joining the BizBlanca family to be
                                                part of the bigger picture.
                                            </p>
                                            <a class="blog-news-btn" href="#">Read More
                                                <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
                                        </div>
                                    </div>
                                    <!--  -->
                                    <!--  -->
                                    <div class="swiper-slide single-blog-wrap">
                                        <div class="single-blog">
                                            <img src="/website/assets/images/Artboard 5-100.jpg" alt="blog-img" />
                                            <div class="eventdate"><strong>11</strong> Aug</div>
                                            <div class="news-card-day">
                                                <div class="blog-title">
                                                    <span>One in a million approach</span>
                                                </div>
                                            </div>
                                            <p class="blog-description line-text-3">
                                                Hundreds of resumes are received daily but only some are
                                                able to become bizers and join reputable companies in
                                                Pakistan which shows how much BizBlanca focuses on Human
                                                Resource quality by all means.
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
        <section id="expertise" class="bg-Grey">
            <div class="container">
                <div class="list__title-container row">
                    <div class="col-md-12">
                        <div class="heading-div mb-3">
                            <div class="mr-2 titleEffect"></div>
                            <h2 class="site-heading mb-0">
                                We are an IT recruiting expertise
                            </h2>
                        </div>
                        <p class="body--lg">
                            Since 2020 IDNEBRID has pioneered specialist recruitment, sourcing
                            knowledgeable, skilled professionals for jobs across Pakistan. Our
                            experts recruit across IT sector, so whether you are looking to
                            hire your next head of development, or urgently require supply
                            managers, we can help you.
                        </p>
                    </div>
                </div>
            </div>
            <!--  -->
            <div class="container fourth-section">
                <div class="row m-0">
                    <div class="col-12 col-md-6 p-0" id="content-faq-anker">
                        <div id="content-faq-head">
                            <a href="./comming.html" class="job-head">
                                <div>
                                    <h2>Looking for a job?</h2>
                                    <p>Top quality IT career changes for life-winners</p>
                                    <span class="text-center btn-look">View more Detail
                                        <i class="fa fa-long-arrow-right" aria-hidden="true"></i></span>
                                </div>
                            </a>
                        </div>
                        <div class="content-faq-anker parent">
                            <div class="child bg-one">
                                <a href="#"><span class="looking-h">Looking for a job?</span></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 p-0" id="social-media-anker">
                        <div id="social-media-head">
                            <a href="./comming.html" class="employee-head">
                                <div id="videos-section">
                                    <h2>Looking for employees?</h2>
                                    <p>
                                        Hire top-quality, specialized and ready-to-work IT employees
                                    </p>
                                    <span class="text-center btn-look">View more Detail
                                        <i class="fa fa-long-arrow-right" aria-hidden="true"></i></span>
                                </div>
                            </a>
                        </div>
                        <div class="parent right social-media-anker">
                            <div class="child bg-two">
                                <a href="#"><span class="looking-h">Looking for employees?</span></a>
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
                                <div class="mr-2 titleEffect"></div>
                                <h2 class="site-heading mb-0">IT job ke liye, BizBlanca</h2>
                            </div>
                            <p class="pt-2">
                                Get scouted or headhunted by companies you never imagined you
                                could work for. With BizBlanca, it's not just a dream. Bizblanca
                                is an indispensable platform for reliable career advancement. We
                                carefully select candidates who have certain qualifications and
                                do not compromise on quality. We call these candidates,
                                "Bizers," who then go on to receive job offers from the most
                                succesful and well-known companies in Pakistan.
                            </p>
                            <img src="/website/assets/images/Group 1492.png" alt="blog-img" width="100%" />
                        </div>
                        <a href="#" class="process-btn m-auto">Register as a job seeker</a>
                    </div>
                </div>
            </div>
        </section>
        <section class="bg-Grey" id="happening">
            <div class="container">
                <div class="heading-div mb-3">
                    <div class="mr-2 titleEffect"></div>
                    <h2 class="site-heading mb-0">What's happening</h2>
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
                                    <img src="/website/assets/images/Icon awesome-question-circle.svg"></div>
                            </div>
                            <div class="list__card-content">
                                <h3 class="h5 list__card-title">FAQS</h3>
                                <p class="list__card-description body--sm">
                                    Here are answers to frequently asked questions about BizBlanca. Please refer to it.
                                    If you don’t find the question you’re looking for, from the Contact Us section you
                                    can send your inquires to the BizBlanca business team directly.
                                </p>
                            </div> <a tabindex="0" href="/tools/reed-salary-guides-2021"
                                class="list__card-link minor-button-right">Read more
                                <i aria-hidden="true" class="fa fa-long-arrow-right"></i></a>
                        </div>
                    </div>
                    <div class="services-box">
                        <div class="list__card">
                            <div class="list__card-image-container">
                                <div class="list__card-image"><img src="/website/assets/images/Group-1360.png"></div>
                            </div>
                            <div class="list__card-content">
                                <h3 class="h5 list__card-title">Social Media of BizBlanca</h3>
                                <p class="list__card-description body--sm">
                                    BizBlanca receives job posts from many IT companies every day. In addition, We
                                    received CVs from many candidates too. BizBlanca also conducts headhunting and has
                                    excellent human resources in our DB that are not even in the market. Stay updated on
                                    BizBlanca social media.
                                </p>
                            </div> <a tabindex="0" href="/tools/reed-salary-guides-2021"
                                class="list__card-link minor-button-right">Read more
                                <i aria-hidden="true" class="fa fa-long-arrow-right"></i></a>
                        </div>
                    </div>
                    <div class="services-box">
                        <div class="list__card">
                            <div class="list__card-image-container">
                                <div class="list__card-image"><img src="/website/assets/images/Group 1361.svg"></div>
                            </div>
                            <div class="list__card-content">
                                <h3 class="h5 list__card-title">
                                    BizBlanca ONLINESALON information
                                </h3>
                                <p class="list__card-description body--sm">
                                    In this webinar, our BizBlanca Business Development Executive Mujtaba gives you an
                                    eye opening speech for career with BizBlanca. For companies, we are guiding our top
                                    tips for you to use on interviewing candidates to get the most out of your time with
                                    applicant.
                                </p>
                            </div> <a tabindex="0" href="/tools/reed-salary-guides-2021"
                                class="list__card-link minor-button-right">Read more
                                <i aria-hidden="true" class="fa fa-long-arrow-right"></i></a>
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
                                        <div class="mr-2 story-titleEffect"></div>
                                        <h2 class="video-heading text-left text-white m-0">
                                            Our Stories<span class="line"></span>
                                        </h2>
                                    </div>
                                </div>
                                <div class="col-md-6 movie-wrap">
                                    <div class="movie-inner">
                                        <iframe src="https://www.youtube.com/embed/djqoRNnDqFU" frameborder="0"
                                            allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                                            allowfullscreen="" width="100%" height="280px">
                                        </iframe>
                                    </div>
                                </div>
                                <div class="col-md-6 movie-wrap-text">
                                    <div class="video-tag">Client</div>
                                    <h3 class="carousel__item-client">
                                        Bespoke IT Solutions Ltd
                                    </h3>
                                    <p class="video-description pt-3">
                                        Lorem Ipsum is simply dummy text of the printing and
                                        typesetting industry. Lorem Ipsum has been the industry's
                                        standard dummy text ever since the 1500s, when an unknown
                                        printer took a galley of type and scrambled it to make a
                                        type specimen book.
                                    </p>
                                    <div id="contact-section" class="col-12 anker-list d-flex w-100 pt-2 mt-4 px-0">
                                        <a href="./comming.html" class="videoview-list-anker">Read More
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
                                        <div class="mr-2 story-titleEffect"></div>
                                        <h2 class="video-heading text-left text-white m-0">
                                            Our Stories<span class="line"></span>
                                        </h2>
                                    </div>
                                </div>
                                <div class="col-md-6 movie-wrap">
                                    <div class="movie-inner">
                                        <iframe src="https://www.youtube.com/embed/djqoRNnDqFU" frameborder="0"
                                            allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                                            allowfullscreen="" width="100%" height="280px">
                                        </iframe>
                                    </div>
                                </div>
                                <div class="col-md-6 movie-wrap-text">
                                    <div class="video-tag">Client</div>
                                    <h3 class="carousel__item-client">
                                        Bespoke IT Solutions Ltd
                                    </h3>
                                    <p class="video-description pt-3">
                                        Lorem Ipsum is simply dummy text of the printing and
                                        typesetting industry. Lorem Ipsum has been the industry's
                                        standard dummy text ever since the 1500s, when an unknown
                                        printer took a galley of type and scrambled it to make a
                                        type specimen book.
                                    </p>
                                    <div id="contact-section" class="col-12 anker-list d-flex w-100 pt-2 mt-4 px-0">
                                        <a href="./comming.html" class="videoview-list-anker">Read More
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
                        <form action="" class="">
                            <div class="row m-0">
                                <div class="col-12 pb-4 px-2">
                                    <div class="heading-div mb-3">
                                        <div class="mr-2 titleEffect"></div>
                                        <h2 class="site-heading mb-0">Contact Us</h2>
                                    </div>
                                    <p style="color: #081351">
                                        Please complete the form with your enquiry for the Bizblanca
                                        team and we will respond to you as soon as possible.
                                    </p>
                                </div>
                                <div class="col-12 px-2">
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
                                <div class="col-12 px-2">
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
                                <div class="col-12 px-2">
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
                                <div class="col-12 px-2">
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
                                <div class="col-12 px-2 py-4">
                                    <a @click.prevent="submitContactUs()" class="contact-submit-anker">Send
                                    </a>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="col-12 col-md-6 map-office">
                        <div class="heading-div mb-3">
                            <div class="mr-2 titleEffect"></div>
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
<script src="/website/assets/js/swiper/swiper-bundle.min.js"></script>
<script>
    import axios from 'axios';
    import WebsiteNavbar from './partials/navbar.vue';
    import CompanyNavbar from './partials/CompanyNavbar.vue';
    import CandidateNavbar from './partials/CandidateNavbar.vue';
    export default {
        data() {
            return {
                isRole: '',
                contact_us: {
                    name: '',
                    email: '',
                    phone: '',
                    message: '',
                },
                errors: []
            };
        },
        components: {
            WebsiteNavbar,
            CompanyNavbar,
            CandidateNavbar,
        },
        created() {
            this.checkRole()
        },
        mounted() {
            var swiper = new Swiper(".BlogsSwiper", {
                slidesPerView: 1,
                spaceBetween: 1,
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
            checkRole() {
                axios.get('navbar-check-roles')
                    .then((response) => {
                        if (response.data.success) {
                            this.isRole = response.data.role
                        }
                    });
            },
            expireTodayJobs() {
                axios.get('expire-today-jobs')
            },
            submitContactUs() {
                Swal.fire({
                    text: 'Please Wait We SettingUp Your Dashboard',
                    didOpen: () => {
                        Swal.showLoading()
                    },
                })
                axios.post('/submit-contact-us', this.contact_us)
                    .then((response) => {
                        if (response.data.success == true) {
                            Swal.close()
                            Swal.fire({
                                icon: 'success',
                                title: 'Contact us query raised',
                                text: 'Please wait we will contact you as soon as possible! THANKS',
                            })
                        } else {
                            Swal.close()
                            this.errors = response.data.errors
                        }
                    });
            }
        }
    };

</script>
