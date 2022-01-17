<template>
    <div>
        <WebsiteNavbar />
        <!-- seconday-Navigation -->
        <header class="_secondary-header-nav p-0" id="secondary-header-nav">
            <div class="p-0 m-auto">
                <ul>
                    <li>
                        <router-link to="/about-us" class="secondaymenu" id="secondary-anker">About Us</router-link>
                        <span class="seprate-line"></span>
                    </li>
                    <li>
                        <a href="#process-section" class="secondaymenu" id="secondary-anker">Process</a><span
                            class="seprate-line"></span>
                    </li>
                    <li>
                        <a href="#videos" class="secondaymenu" id="secondary-anker-2">Videos</a><span
                            class="seprate-line"></span>
                    </li>
                    <li>
                        <a href="#certificate-section" class="secondaymenu" id="secondary-anker-3">Certificate</a><span
                            class="seprate-line"></span>
                    </li>
                    <li>
                        <a href="#testimonials-section" class="secondaymenu"
                            id="secondary-anker-4">Testimonials</a><span class="seprate-line"></span>
                    </li>
                    <li>
                        <a href="#testimonials-section" class="secondaymenu" id="secondary-anker-5">Our People</a>
                        <span class="seprate-line"></span>
                    </li>
                    <li>
                        <a href="#sign-up-now" class="secondaymenu" id="secondary-anker-5">Signup Now</a>
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
        <section class="candidate-section pt-5 p-md-0">
            <div class="row no-gutters">
                <section class="col-12 candidate-landing-section" id="about-us">
                    <div class="row m-0 banner-candidate">
                        <div class="col-12 col-md-6 left-content">
                            <div>
                                <h1>
                                    BizBlanca builds an IT recruitment community that helps to explore the candidate’s
                                    skills.
                                </h1>
                                <p>
                                    Under the mission of reducing mismatches in changing jobs, BizBlanca supports
                                    job-hunting activities that allow job seekers to work for the next company for a
                                    long time based on their background and can surely step up.
                                </p>
                                <a href="#" class="align-self-start">Signup Now</a>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 p-0 right-image">
                            <img class="candiate-banner-d" src="/website/assets/images/candidate-banner-m.png"
                                alt="img" />
                            <!-- <img src="/website/assets/images/candidate-banner-m.png" alt="img"> -->
                        </div>
                    </div>
                </section>
                <h1 class="msg-heading">
                    Upgrade and change your career with style now!
                </h1>
                <section class="col-12 cards-info-container p-md-0 px-1">
                    <div class="row no-gutters cards-info-wrap container">
                        <span>Upgrade and change your career with style Get scouted by the best
                            companies in Pakistan</span>
                        <p class="offers-job-para">
                            The future is of Information Technology and Automation. And before that time comes, we all
                            should be individually well aware of our worth & value in the market. For this, join
                            Bizblanca to receive job offers and uncover your potential & value in the industry.
                        </p>
                        <div class="cards-info col-12 col-md-4">
                            <img src="/website/assets/images/happy.svg" class="card-happy-img" alt="img" />
                            <h3>
                                More than 75% of the job offers on BizBlanca pay 100,000PKR or
                                more.
                            </h3>
                            <p>
                                We have over 300 job posts for high- paying, professional-level
                                jobs which can set you up for life.
                            </p>
                        </div>
                        <div class="cards-info col-12 col-md-4">
                            <img src="/website/assets/images/choose-best.svg" class="card-choose-best-img" alt="img" />
                            <h3>
                                With around 200 companies, we select the best companies across
                                the country
                            </h3>
                            <p>
                                We only work with the top companies of Pakistan to bring you job
                                offers that will give your career a big boost.
                            </p>
                        </div>
                        <div class="cards-info col-12 col-md-4">
                            <img src="/website/assets/images/help-you.svg" class="card-help-you" alt="img" />
                            <h3>We support you along the way- both online and offline</h3>
                            <p>
                                We are job hunting specialists and our team of experts will
                                support your career upgrade with dedication and consistency.
                            </p>
                        </div>
                    </div>
                </section>
                <section></section>
            </div>
        </section>
        <section class="career-upgrade-process container" id="process-section">
            <div class="content-career-steps">
                <h2 class="heading-div">
                    <div class="mr-2 title-effect"></div>
                    The career upgrade process
                </h2>
                <p>Follow these steps for career success</p>
                <div class="row no-gutters upgrade-process-steps">
                    <div class="col-6 col-md-3 upgrade-process-step">
                        <div>
                            <img class="steps-img" src="/website/assets/images/signup-bizblanca-cv-upgrade-process.svg"
                                alt="img" />
                            <h3>Step 1</h3>
                            <p>Sign up with BizBlanca and create your professional CV</p>
                        </div>
                        <img class="arrow-img" src="/website/assets/images/arrow.svg" alt="img" />
                    </div>
                    <div class="col-6 col-md-3 upgrade-process-step">
                        <div>
                            <img class="steps-img" src="/website/assets/images/top-rank-cand.svg" alt="img" />
                            <h3>Step 2</h3>
                            <p>
                                Become a top-ranking candidate, a.k.a a “Bizer’, and recieve job
                                offers
                            </p>
                        </div>
                        <img class="arrow-img v-on-d" src="/website/assets/images/arrow.svg" alt="img" />
                    </div>
                    <div class="col-6 col-md-3 upgrade-process-step">
                        <div>
                            <img class="steps-img" src="/website/assets/images/job-interview.svg" alt="img" />
                            <h3>Step 3</h3>
                            <p>
                                Attend a job interview and introduce yourself to your dream
                                company
                            </p>
                        </div>
                        <img class="arrow-img" src="/website/assets/images/arrow.svg" alt="img" />
                    </div>
                    <div class="col-6 col-md-3 upgrade-process-step">
                        <div id="expertise">
                            <img class="steps-img" src="/website/assets/images/rec-offer-job.svg" alt="img" />
                            <h3>Step 4</h3>
                            <p>Recieve your job offer and get ready to upgrade your career</p>
                        </div>
                        <!-- <img class="arrow-img" src="/website/assets/images/arrow.svg" alt="img"> -->
                    </div>
                </div>
                <h2>We are ready to provide expertises in 20 specialist sectors</h2>
                <p>
                    We have expertise in 20 specialist sectors, from Project Manager to Developers. We want to partner
                    with an experienced IT recruitment team in these, and other, sectors across Pakistan to build
                    successful partnerships and improve more lives through work
                </p>
                <div class="row no-gutters">
                    <div class="col-6 col-md-3">
                        <ul class="expertise-provide">
                            <li>
                                <img src="/website/assets/images/circle-arrow.svg" alt="img" />
                                <p>Project Manager</p>
                            </li>
                            <li>
                                <img src="/website/assets/images/circle-arrow.svg" alt="img" />
                                <p>Project Leader</p>
                            </li>
                            <li>
                                <img src="/website/assets/images/circle-arrow.svg" alt="img" />
                                <p>Management</p>
                            </li>
                            <li>
                                <img src="/website/assets/images/circle-arrow.svg" alt="img" />
                                <p>IT Consultant</p>
                            </li>
                            <li>
                                <img src="/website/assets/images/circle-arrow.svg" alt="img" />
                                <p>Web UI/UX Designer</p>
                            </li>
                        </ul>
                    </div>
                    <div class="col-6 col-md-3">
                        <ul class="expertise-provide">
                            <li>
                                <img src="/website/assets/images/circle-arrow.svg" alt="img" />
                                <p>Frontend Engineer</p>
                            </li>
                            <li>
                                <img src="/website/assets/images/circle-arrow.svg" alt="img" />
                                <p>Backend Engineer</p>
                            </li>
                            <li>
                                <img src="/website/assets/images/circle-arrow.svg" alt="img" />
                                <p>WordPress Engineer</p>
                            </li>
                            <li>
                                <img src="/website/assets/images/circle-arrow.svg" alt="img" />
                                <p>Mob App Engineer</p>
                            </li>
                            <li>
                                <img src="/website/assets/images/circle-arrow.svg" alt="img" />
                                <p>Network Engineer</p>
                            </li>
                        </ul>
                    </div>
                    <div class="col-6 col-md-3">
                        <ul class="expertise-provide">
                            <li>
                                <img src="/website/assets/images/circle-arrow.svg" alt="img" />
                                <p>Infrastructure Engineer</p>
                            </li>
                            <li>
                                <img src="/website/assets/images/circle-arrow.svg" alt="img" />
                                <p>QA Test Engineer</p>
                            </li>
                            <li>
                                <img src="/website/assets/images/circle-arrow.svg" alt="img" />
                                <p>Architecture Developer</p>
                            </li>
                            <li>
                                <img src="/website/assets/images/circle-arrow.svg" alt="img" />
                                <p>IT Security Engineer</p>
                            </li>
                            <li>
                                <img src="/website/assets/images/circle-arrow.svg" alt="img" />
                                <p>Sales Engieer</p>
                            </li>
                        </ul>
                    </div>
                    <div class="col-6 col-md-3">
                        <ul class="expertise-provide">
                            <li>
                                <img src="/website/assets/images/circle-arrow.svg" alt="img" />
                                <p>Data Scientist / Analyst</p>
                            </li>
                            <li>
                                <img src="/website/assets/images/circle-arrow.svg" alt="img" />
                                <p>IT Sales Department</p>
                            </li>
                            <li>
                                <img src="/website/assets/images/circle-arrow.svg" alt="img" />
                                <p>IT Human Resource</p>
                            </li>
                            <li>
                                <img src="/website/assets/images/circle-arrow.svg" alt="img" />
                                <p>IT Customer Support</p>
                            </li>
                            <li>
                                <img src="/website/assets/images/circle-arrow.svg" alt="img" />
                                <p>IT Legal / Finance</p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <div class="bg-Grey">
            <section class="upload-your-cv container" id="certificate-section">
                <div class="row no-gutters">
                    <div class="col-12 col-md-6 cv-upload">
                        <h3 class="heading-div">
                            <div class="mr-2 title-effect"></div>
                            What's Next...
                        </h3>
                        <p>
                            We're here to help you take your next step in the world of work,
                            wherever or whatever it is.
                        </p>
                        <a href="#">Upload your CV</a>
                        <div class="reply-img">
                            <img src="/website/assets/images/reply.svg" alt="reply" />
                        </div>
                    </div>
                    <div class="col-12 col-md-6 resume-upload">
                        <div class="row no-gutters">
                            <div class="col-12 col-md-8">
                                <img height="250" width="235" src="/website/assets/images/resume.svg" alt="img" />
                            </div>
                            <div class="col-12 col-md-4">
                                <div>
                                    <span class="upload-text">Upload</span>
                                    <h3 class="your-cv-online-text">your cv online</h3>
                                    <p class="content_para">
                                        Your CV is the first impression recruiters have of you. Most of the candidates
                                        still have a CV that looks like this. Are you one of them? If you are, there is
                                        an opportunity to turn it into a CV that will get you the job.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="certifications-and-payments container" id="certificate">
                <div class="row no-gutters">
                    <div class="col-3">
                        <img src="/website/assets/images/bizblancaBage.svg" alt="img" />
                    </div>
                    <div class="col-9">
                        <h3>BizBlanca Certification and Payment Partnership</h3>
                        <p style="font-weight:500;">Are you worried about your work? Everyone has some worries.</p>
                        <p class="payment-descrp-d">
                            At BizBlanca, we have a Payment Partnership with Bizers who have
                            BizBlanca Certification in order to eliminate the anxiety about
                            salary that many people have. This is a mechanism that allows you
                            to concentrate on your work stress-free by having our company
                            intervene and take over the work of receiving salary so that the
                            company you work for will pay your salary smoothly when you work
                            through BizBlanca.
                        </p>
                    </div>
                </div>
                <p class="payment-descrp-m">
                    At BizBlanca, we have a Payment Partnership with Bizers who have
                    BizBlanca Certification in order to eliminate the anxiety about salary
                    that many people have. This is a mechanism that allows you to
                    concentrate on your work stress-free by having our company intervene
                    and take over the work of receiving salary so that the company you
                    work for will pay your salary smoothly when you work through
                    BizBlanca.
                </p>
            </section>
        </div>
        <section class="success-stories container" id="testimonials-section">
            <h3 class="heading-div my-md-5">
                <div class="mr-2 title-effect"></div>
                BizBlanca's Success Stories
            </h3>
            <div class="swiper success-stories-swiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide p-md-5">
                        <div class="slider-content">
                            <img class="candidate-img" src="/website/assets/images/avatart.jpeg" alt="img" />
                            <p class="candidate-designation">Senior front end developer</p>
                            <h4 class="gender-age">Male's 20</h4>
                            <h3 class="scout-bizblanca">Because of BizBlanca's scout...</h3>
                            <p class="candidate-success-descrp">
                                After being scouted and hired by my company through BizBlanca, I
                                have become an accomplished and multifaceted technology leader
                                with 4 years of exceptional expertise in the provisions of
                                Frontend Development (HTML, CSS, BOOTSTRAP, React js), as well
                                as Backend Development (Php Laravel). I am now working as a team
                                leader in a multi-national company where I direct and lead a
                                professional team under my supervision and I also manage
                                client-based projects efficiently. I was unhappy, underpaid and
                                underperforming in my previous job but this career transition
                                allowed me to become the best version of myself. Signing up to
                                BizBlanca allowed me to sit back and be hired by the right
                                company that have appreciated and understood my value and worth.
                            </p>
                        </div>
                    </div>
                    <div class="swiper-slide p-md-5">
                        <div class="slider-content">
                            <img class="candidate-img" src="/website/assets/images/avatart.jpeg" alt="img" />
                            <p class="candidate-designation">Senior front end developer</p>
                            <h4 class="gender-age">Male's 20</h4>
                            <h3 class="scout-bizblanca">Because of BizBlanca's scout...</h3>
                            <p class="candidate-success-descrp">
                                After being scouted and hired by my company through BizBlanca, I
                                have become an accomplished and multifaceted technology leader
                                with 4 years of exceptional expertise in the provisions of
                                Frontend Development (HTML, CSS, BOOTSTRAP, React js), as well
                                as Backend Development (Php Laravel). I am now working as a team
                                leader in a multi-national company where I direct and lead a
                                professional team under my supervision and I also manage
                                client-based projects efficiently. I was unhappy, underpaid and
                                underperforming in my previous job but this career transition
                                allowed me to become the best version of myself. Signing up to
                                BizBlanca allowed me to sit back and be hired by the right
                                company that have appreciated and understood my value and worth.
                            </p>
                        </div>
                    </div>
                    <div class="swiper-slide p-md-5">
                        <div class="slider-content">
                            <img class="candidate-img" src="/website/assets/images/avatart.jpeg" alt="img" />
                            <p class="candidate-designation">Senior front end developer</p>
                            <h4 class="gender-age">Male's 20</h4>
                            <h3 class="scout-bizblanca">Because of BizBlanca's scout...</h3>
                            <p class="candidate-success-descrp">
                                After being scouted and hired by my company through BizBlanca, I
                                have become an accomplished and multifaceted technology leader
                                with 4 years of exceptional expertise in the provisions of
                                Frontend Development (HTML, CSS, BOOTSTRAP, React js), as well
                                as Backend Development (Php Laravel). I am now working as a team
                                leader in a multi-national company where I direct and lead a
                                professional team under my supervision and I also manage
                                client-based projects efficiently. I was unhappy, underpaid and
                                underperforming in my previous job but this career transition
                                allowed me to become the best version of myself. Signing up to
                                BizBlanca allowed me to sit back and be hired by the right
                                company that have appreciated and understood my value and worth.
                            </p>
                        </div>
                    </div>
                    <div class="swiper-slide p-md-5">
                        <div class="slider-content">
                            <img class="candidate-img" src="/website/assets/images/avatart.jpeg" alt="img" />
                            <p class="candidate-designation">Senior front end developer</p>
                            <h4 class="gender-age">Male's 20</h4>
                            <h3 class="scout-bizblanca">Because of BizBlanca's scout...</h3>
                            <p class="candidate-success-descrp">
                                After being scouted and hired by my company through BizBlanca, I
                                have become an accomplished and multifaceted technology leader
                                with 4 years of exceptional expertise in the provisions of
                                Frontend Development (HTML, CSS, BOOTSTRAP, React js), as well
                                as Backend Development (Php Laravel). I am now working as a team
                                leader in a multi-national company where I direct and lead a
                                professional team under my supervision and I also manage
                                client-based projects efficiently. I was unhappy, underpaid and
                                underperforming in my previous job but this career transition
                                allowed me to become the best version of myself. Signing up to
                                BizBlanca allowed me to sit back and be hired by the right
                                company that have appreciated and understood my value and worth.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="swiper-button-next success-stories-slider-arrow"></div>
                <div class="swiper-button-prev success-stories-slider-arrow"></div>
                <div class="swiper-pagination"></div>
            </div>
        </section>
        <!-- videos-section -->
        <div class="col-12 py-5 videos-anker" id="MOVIE">
            <div class="swiper video-slider" id="videos">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12 pb-3 pl-0">
                                    <h1 class="text-left heading-div" style="color: #fff">
                                        <div class="mr-2 title-effect" style="background-color: #fff"></div>
                                        Vidoes
                                    </h1>
                                </div>

                                <div class="col-md-6 movie-wrap">
                                    <div class="movie-inner">
                                        <video controls src="/website/assets/videos/Bizblanca.mp4" width="100%"
                                            height="280px">
                                        </video>
                                    </div>
                                </div>
                                <div class="col-md-6 movie-wrap-text">
                                    <!-- <div class="video-tag">Client</div> -->
                                    <h2 class="carousel__item-client" style="color: #fff">
                                        CEO Message for Candidates
                                    </h2>
                                    <p class="ceo-msg-description pt-3">
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                        Quibusdam non earum impedit commodi tempora sequi? Eligendi
                                        fugit facere eveniet incidunt, tempora maiores esse
                                        doloremque rerum fugiat ducimus velit veniam possimus.
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
        <div class="resume-builder container" id="sign-up-now">
            <div class="row no-gutters resume-builder-row">
                <div class="col-12 col-md-3">
                    <img src="/website/assets/images/resume-builder-banner.png" class="v-on-d" alt="img" />
                    <img src="/website/assets/images/resume-builder-banner@2x.png" class="v-on-m w-100 p-2" alt="img" />
                </div>
                <div class="col-12 col-md-9 p-2">
                    <p>
                        If you would like to be part of us, please sign up and upload your
                        resume. Your career journey will begin with us.
                    </p>
                    <a href="#">Signup Now</a>
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
                isRole: $("meta[name='role']").attr("content"),
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
            var swiper = new Swiper(".success-stories-swiper", {
                slidesPerView: 1,
                spaceBetween: 30,
                loop: true,
                pagination: {
                    el: ".swiper-pagination",
                    clickable: true,
                },
                navigation: {
                    nextEl: ".swiper-button-next",
                    prevEl: ".swiper-button-prev",
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
