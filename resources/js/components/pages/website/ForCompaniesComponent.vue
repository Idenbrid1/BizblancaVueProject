<template>
    <div>
        <WebsiteNavbar />
        <!-- seconday-Navigation -->
        <header class="_secondary-header-nav p-0" id="secondary-header-nav">
            <div class="p-0 m-auto">
                <ul>
                    <li>
                        <a href="#why-bizblanca" class="secondaymenu" id="secondary-anker">Why BizBlanca</a>
                        <span class="seprate-line"></span>
                    </li>
                    <li>
                        <a href="#flow-of-use" class="secondaymenu" id="secondary-anker-3">Flow of Use</a><span
                            class="seprate-line"></span>
                    </li>
                    <li>
                        <a href="#faq-section" class="secondaymenu" id="secondary-anker-4">FAQS</a><span
                            class="seprate-line"></span>
                    </li>
                    <li>
                        <a href="#testimonals-section" class="secondaymenu" id="secondary-anker-5">Testimonials</a>
                        <span class="seprate-line"></span>
                    </li>
                    <li>
                        <router-link to="/contact-us" class="secondaymenu" id="secondary-anker-5">Contact</router-link>
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
        <!-- company section -->
        <div class="company-banner w-100 row no-gutters" id="why-bizblanca">
            <div class="banner-sec-2 col-12 col-lg-6 px-2">
                <div class="left-box-banner">
                    <h4>WHY USE BIZBLANCA?</h4>
                    <p class="pb-2">
                        Find the perfect match from our extensive candidate database
                    </p>
                    <div class="d-flex justify-content-center">
                        <img class="banner-sec-2-img" src="/website/assets/images/pngwing.com (1)@2x.png" alt="" />
                    </div>
                </div>
            </div>
            <div class="banner-sec-1 col-md-12 col-lg-6">
                <div class="blue-inner-box">
                    <div class="banner-sec1-box1">
                        IT JOB KE LIYE <br />
                        BIZBANCA
                    </div>
                    <h4>
                        Start a conversation<br />
                        with one of our<br />
                        specialist consultants
                    </h4>
                    <p>
                        Send a brief overview of your requirements and we will contact you
                        to find out more about your needs.
                    </p>
                    <div class="banner-sec1-box2">
                        <a href="">Get in Touch</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="company-container w-100">
            <div class="company-description container my-4 my-md-5 px-2">
                <h4 class="heading-div">
                    <div class="mr-2 title-effect"></div>
                    How BizBlanca can help you
                </h4>
                <p>
                    BizBlanca provides a tailored service to help you recruit your next
                    employee. So you can be confident you'll find an option to suit your
                    needs, every time.
                </p>
                <p>
                    We go beyond simply finding you a new permanent employee on a one-off
                    basis, BizBlanca offers a level of service which allows us to build a
                    rapport with you and your organization. Even when we have found your
                    new hire, our experts continue to support you after your chosen
                    candidate has joined your organization.
                </p>
                <p>
                    Whether you’re searching for a
                    scarce skillset, or are struggling with a high volume of applications,
                    we can find you the right professional for your role, saving you time
                    and money. When working with us to recruit permanently, you’ll receive
                    the following as standard:
                </p>
                <ul class="p-0">
                    <li class="my-1">
                        - Expert advice on your job description, the salary you should offer
                        and talent attraction strategy
                    </li>
                    <li class="my-1">
                        - A vast range of compliance and screening checks
                    </li>
                    <li class="my-1">
                        - Support with arranging interviews and ensuring follow up
                    </li>
                    <li class="my-1">
                        - Guidance on offer negotiation and counteroffer scenarios
                    </li>
                </ul>
            </div>
            <div class="company-difference container px-2">
                <h4 class="heading-div">
                    <div class="mr-2 title-effect"></div>
                    The BizBlanca difference
                </h4>
                <div class="company-difference-attribute my-1">
                    Unlike other HR agents, BizBlanca focuses on creating an online
                    community
                    <i class="fas fa-chevron-down"></i>
                </div>
                <div class="company-difference-attribute my-1">
                    7 days from the start of service to hiring
                    <i class="fas fa-chevron-down"></i>
                </div>
                <div class="company-difference-attribute my-1">
                    50 to 70% cheaper than other companies in the same industry
                    <i class="fas fa-chevron-down"></i>
                </div>
                <div class="company-difference-attribute my-1">
                    Our company holds information on more than 5,000+ job seekers as a DB
                    <i class="fas fa-chevron-down"></i>
                </div>
                <div class="company-difference-attribute my-1">
                    No need to pay salaries directly to employees
                    <i class="fas fa-chevron-down"></i>
                </div>
            </div>
            <div class="company-help container px-2">
                <h4 class="heading-div mb-2">
                    <div class="mr-2 title-effect"></div>
                    We can help you find the best IT employees...
                </h4>
                <div class="swiper help-slider">
                    <div class="swiper-wrapper py-4">
                        <div class="swiper-slide">
                            <div class="company-help-box my-3">
                                <div class="company-help-box-top">1</div>
                                <div class="company-help-box-bottom">
                                    We Recruit across<span class="box-bottom-span">20</span>
                                    Specialist Sectors
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="company-help-box my-3">
                                <div class="company-help-box-top">1</div>
                                <div class="company-help-box-bottom">
                                    We have access to over<span class="box-bottom-span">5,000</span>
                                    Candidates
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="company-help-box my-3">
                                <div class="company-help-box-top">1</div>
                                <div class="company-help-box-bottom">
                                    Each month over<span class="box-bottom-span">50</span> business
                                    trust us to recruit
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="company-help-box my-3">
                                <div class="company-help-box-top">1</div>
                                <div class="company-help-box-bottom">
                                    We Recruit across<span class="box-bottom-span">20</span>
                                    Specialist Sectors
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="company-help-box my-3">
                                <div class="company-help-box-top">1</div>
                                <div class="company-help-box-bottom">
                                    We Recruit across<span class="box-bottom-span">20</span>
                                    Specialist Sectors
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-button-next help-slider-arrow"></div>
                    <div class="swiper-button-prev help-slider-arrow"></div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>
            <div class="company-capacity">
                <h4 class="mb-0">
                    Over 2000 talented people on standby, ready to receive a scout from
                    your company
                </h4>
                <div class="company-capacity-body">
                    <h5>
                        Join Pakistan's best startups and large companies using our platform
                    </h5>
                    <p>Ratio of company size to no. of people hired using BizBlanca</p>
                    <div class="row no-gutters container mx-auto p-0">
                        <div class="col-12 col-md-4">
                            <div class="company-capacity-bottom">
                                <img src="/website/assets/images/small.png" alt="" />
                                <div>
                                    <h1 class="employee-count">
                                        10<br />
                                        employees
                                    </h1>
                                    <h2>45%</h2>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-4">
                            <div class="company-capacity-bottom">
                                <img src="/website/assets/images/medium.png" alt="" />
                                <div class="ml-2">
                                    <h1 class="employee-count">
                                        10 - 50<br />
                                        employees
                                    </h1>
                                    <h2>32%</h2>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-4">
                            <div class="company-capacity-bottom">
                                <img src="/website/assets/images/large.png" alt="" />
                                <div class="ml-2">
                                    <h1 class="employee-count">
                                        51<br />
                                        employees
                                    </h1>
                                    <h2>23%</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="company-testimonial container" id="testimonals-section">
                <h4 class="heading-div testimonials-text">
                    <div class="mr-2 title-effect"></div>
                    Testimonials
                </h4>
                <div class="row no-gutters">
                    <div class="col-12 col-lg-6">
                        <div class="testimonial-card testimonial-card-1">
                            <img class="testimonial-card-img" src="/website/assets/images/Group1386.png" alt="1" />
                            <h1 class="mt-4">Tech World</h1>
                            <div class="testimonial-card-box my-1">Before</div>
                            <div class="testimonial-card-box-content my-1">
                                TechWorld is a leading cybersecurity and engineering solutions
                                company with vast experience in multiple services such as
                                security product
                            </div>
                            <div class="testimonial-card-box my-1">After</div>
                            <div class="testimonial-card-box-content my-1">
                                TechWorld now have more services such as malware research and
                                managed services for customers around the globe and with the
                                services of BizBlanca could get more better resource for their
                                research work and future goals.
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-6">
                        <div class="testimonial-card testimonial-card-2">
                            <img class="testimonial-card-img" src="/website/assets/images/Group1385.png" alt="2" />
                            <h1 class="mt-4">Tech World</h1>
                            <div class="testimonial-card-box my-1">Before</div>
                            <div class="testimonial-card-box-content my-1">
                                TechWorld is a leading cybersecurity and engineering solutions
                                company with vast experience in multiple services such as
                                security product
                            </div>
                            <div class="testimonial-card-box my-1">After</div>
                            <div class="testimonial-card-box-content my-1">
                                TechWorld now have more services such as malware research and
                                managed services for customers around the globe and with the
                                services of BizBlanca could get more better resource for their
                                research work and future goals.
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-6">
                        <div class="testimonial-card testimonial-card-3">
                            <img class="testimonial-card-img" src="/website/assets/images/Group1391.png" alt="2" />
                            <h1 class="mt-4">Tech World</h1>
                            <div class="testimonial-card-box my-1">Before</div>
                            <div class="testimonial-card-box-content my-1">
                                TechWorld is a leading cybersecurity and engineering solutions
                                company with vast experience in multiple services such as
                                security product
                            </div>
                            <div class="testimonial-card-box my-1">After</div>
                            <div class="testimonial-card-box-content my-1">
                                TechWorld now have more services such as malware research and
                                managed services for customers around the globe and with the
                                services of BizBlanca could get more better resource for their
                                research work and future goals.
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-6">
                        <div class="testimonial-card testimonial-card-4">
                            <img class="testimonial-card-img" src="/website/assets/images/Group1394.png" alt="3" />
                            <h1 class="mt-4">Tech World</h1>
                            <div class="testimonial-card-box my-1">Before</div>
                            <div class="testimonial-card-box-content my-1">
                                TechWorld is a leading cybersecurity and engineering solutions
                                company with vast experience in multiple services such as
                                security product
                            </div>
                            <div class="testimonial-card-box my-1">After</div>
                            <div class="testimonial-card-box-content my-1">
                                TechWorld now have more services such as malware research and
                                managed services for customers around the globe and with the
                                services of BizBlanca could get more better resource for their
                                research work and future goals.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="company-flow-container container-fluid" id="flow-of-use">
                <div class="company-flow container">
                    <h4 class="my-2 heading-div">
                        <div class="mr-2 title-effect"></div>
                        Flow of use
                    </h4>
                    <img class="flow-photo w-100" src="/website/assets/images/Group1687.svg" alt="" />
                </div>
            </div>
            <div class="company-faqs container px-2" id="faq-section">
                <h4 class="my-2 heading-div">
                    <div class="mr-2 title-effect"></div>
                    FAQS
                </h4>
                <div class="row no-gutters justify-content-between">
                    <div class="company-faq-box">
                        <div>
                            <div class="question">How much cost?</div>
                            <!-- <div class="answer">
                            <h1>How much cost?</h1>
                            <h2>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus id ea quae numquam repellendus veritatis laboriosam nihil quisquam hic, architecto quo a ipsum suscipit labore nobis obcaecati impedit, quibusdam incidunt!</h2>
                        </div> -->
                        </div>
                    </div>
                    <div class="company-faq-box">
                        <div>
                            <div class="question">How to try to DB?</div>
                        </div>
                    </div>
                    <div class="company-faq-box">
                        <div>
                            <div class="question">How to create an account</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>
<script>
    import axios from 'axios';
    import WebsiteNavbar from './partials/navbar.vue';
    import CompanyNavbar from './partials/CompanyNavbar.vue';
    import CandidateNavbar from './partials/CandidateNavbar.vue';
    export default {
        data() {
            return {
                isRole: '',
            };
        },
        components: {
            WebsiteNavbar,
            CompanyNavbar,
            CandidateNavbar,
        },
        created(){
            this.checkRole()
        },
        mounted() {
            var swiper = new Swiper(".help-slider", {
                slidesPerView: 3,
                spaceBetween: 1,
                loop: true,
                pagination: {
                    el: ".swiper-pagination",
                    clickable: true,
                },
                navigation: {
                    nextEl: ".swiper-button-next",
                    prevEl: ".swiper-button-prev",
                },
                breakpoints: {
                    360: {
                        slidesPerView: 1,
                        centeredSlides: false,
                        spaceBetween: 1,
                    },
                    640: {
                        slidesPerView: 1,
                    },
                    768: {
                        slidesPerView: 2,
                        spaceBetween: 20,
                    },
                    1024: {
                        slidesPerView: 3,
                        spaceBetween: 10,
                    },
                    1224: {
                        slidesPerView: 3,
                        spaceBetween: 5,
                    },
                },
            });
        },
        methods: {
            checkRole() {
                axios.get('api/navbar-check-roles')
                    .then((response) => {
                        if (response.data.success) {
                            this.isRole = response.data.role
                        }
                    });
            },
        }
        
    };

</script>
