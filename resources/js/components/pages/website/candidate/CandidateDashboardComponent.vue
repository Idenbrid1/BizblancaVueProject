<template>
    <div>
        <WebsiteNavbar />
        <CandidateNavbar />

        <div class="container user-profile-container cont-flex">
            <div class="condition-search-feilds">
                <div class="product_accordion_container">
                    <div>
                        <input class="product_accordion" type="checkbox" name="accordion" id="first" checked>
                        <label class="search-box-h" for="first">
                            Message&nbsp;<i class="far fa-comment-alt"></i>
                        </label>
                    </div>
                    <div class="dashboard-msgs-container">
                        <div class="msg-wrap" @click="ShowMessageError()">
                            <div class="msg-user-name">
                                <h2><i class="far fa-building"></i> BizBlanca Admin</h2>
                                <p class="msg-time-date">10/08/2021, 09:10 am</p>
                            </div>
                            <a class="msg-title">
                                JOB FOR MERN STACK DEVELOPER
                            </a>
                            <p class="msg-description">
                                Respected sir, My name is Muhammad Ahmad and I am graduated from Superior University, I
                                have expertise in...
                            </p>
                        </div>
                        <div class="msg-wrap" @click="ShowMessageError()">
                            <div class="msg-user-name">
                                <h2><i class="far fa-building"></i> BizBlanca Admin</h2>
                                <p class="msg-time-date">10/08/2021, 09:10 am</p>
                            </div>
                            <a class="msg-title">
                                JOB FOR MERN STACK DEVELOPER
                            </a>
                            <p class="msg-description">
                                Respected sir, My name is Muhammad Ahmad and I am graduated from Superior University, I
                                have expertise in...
                            </p>
                        </div>
                        <div class="msg-wrap" @click="ShowMessageError()">
                            <div class="msg-user-name">
                                <h2><i class="far fa-building"></i> BizBlanca Admin</h2>
                                <p class="msg-time-date">10/08/2021, 09:10 am</p>
                            </div>
                            <a class="msg-title">
                                JOB FOR MERN STACK DEVELOPER
                            </a>
                            <p class="msg-description">
                                Respected sir, My name is Muhammad Ahmad and I am graduated from Superior University, I
                                have expertise in...
                            </p>
                        </div>
                    </div>

                </div>
                <div class="candidate">
                    <label class="candidate-tagline">
                        Recommended Jobs
                        <i class="fas fa-briefcase"></i>
                    </label>
                    <!-- Job List Toolbar Start -->
                    <div>
                        <!-- Job List Wrap Start -->
                        <div class="job-list-wrap p-0">
                            <div class="job-list">
                                <div class="company-logo col-auto py-2">
                                    <img src="" alt="Company Logo">
                                    <span class="company-h line-clamp-1">i2c</span>
                                </div>
                                <div class="job-list-content col">
                                    <div class="job-header">
                                        <h6 class="job-title mb-0">Data Analyst</h6>
                                        <div class="d-flex align-items-center">
                                            <span class="job-post-date">20 hours ago </span>
                                            <i class="far fa-heart"></i>
                                        </div>
                                    </div>

                                    <p class="job-description">As a Data Scientist, you will be in a central position as
                                        you will be evangelizing data and our methodologies to other functional analysts
                                        and other stakeholders in the company.</p>
                                    <div class="job-content-wrap">
                                        <div class="job-dynamic-values">
                                            <ul>
                                                <li>
                                                    <img src="/website/assets/images/calendar-job.svg" alt="img">
                                                    <span>Aug 23, 2021</span>
                                                </li>
                                                <li>
                                                    <img src="/website/assets/images/experience-job.svg" alt="">
                                                    <span>3 Years</span>
                                                </li>
                                            </ul>
                                            <ul>
                                                <li>
                                                    <img src="/website/assets/images/money-job.svg" alt="">
                                                    <span>80K to 100K</span>
                                                </li>
                                                <li>
                                                    <img height="16px" width="10px" style="margin:0px 3px;"
                                                        src="/website/assets/images/pin.svg" alt="img">
                                                    <span>Lahore, Pakistan</span>
                                                </li>
                                            </ul>
                                            <ul>
                                                <li>
                                                    <img src="/website/assets/images/suitcase-job.svg" alt="">
                                                    <span>Morning Shift</span>
                                                </li>
                                                <li>
                                                    <img src="/website/assets/images/switch-job.svg" alt="">
                                                    <span>Full Time</span>
                                                </li>
                                            </ul>
                                        </div>
                                        <ul class="job-list-fav m-0">
                                            <li>
                                                <router-link to="/candidate-dashboard" class="job-view-btn">View
                                                </router-link>
                                            </li>
                                        </ul>
                                    </div>

                                </div>
                            </div>
                            <!-- </div> -->
                        </div>
                    </div>
                    <div class="show-more-anker">
                        <router-link class="show-more-common" to="/candidate-dashboard">Show more</router-link>
                        <p class="notify-unread-msgs">You have <span>12</span> unread messages</p>
                    </div>
                </div>
                <!-- whishlist -->
                <div class="candidate">
                    <label class="candidate-tagline">
                        Whishlist
                        <i class="fas fa-heart"></i>
                    </label>
                    <!-- Job List Toolbar Start -->
                    <div>
                        <!-- Job List Wrap Start -->
                        <div class="job-list-wrap p-0">
                            <div class="job-list">
                                <div class="company-logo col-auto py-2">
                                    <img src="" alt="Company Logo">
                                    <span class="company-h line-clamp-1">i2c</span>
                                </div>
                                <div class="job-list-content col">
                                    <div class="job-header">
                                        <h6 class="job-title mb-0">Data Analyst</h6>
                                        <div class="d-flex align-items-center">
                                            <span class="job-post-date">20 hours ago </span>
                                            <i class="far fa-heart"></i>
                                        </div>
                                    </div>

                                    <p class="job-description">As a Data Scientist, you will be in a central position as
                                        you will be evangelizing data and our methodologies to other functional analysts
                                        and other stakeholders in the company.</p>
                                    <div class="job-content-wrap">
                                        <div class="job-dynamic-values">
                                            <ul>
                                                <li>
                                                    <img src="/website/assets/images/calendar-job.svg" alt="img">
                                                    <span>Aug 23, 2021</span>
                                                </li>
                                                <li>
                                                    <img src="/website/assets/images/experience-job.svg" alt="">
                                                    <span>3 Years</span>
                                                </li>
                                            </ul>
                                            <ul>
                                                <li>
                                                    <img src="/website/assets/images/money-job.svg" alt="">
                                                    <span>80K to 100K</span>
                                                </li>
                                                <li>
                                                    <img height="16px" width="10px" style="margin:0px 3px;"
                                                        src="/website/assets/images/pin.svg" alt="img">
                                                    <span>Lahore, Pakistan</span>
                                                </li>
                                            </ul>
                                            <ul>
                                                <li>
                                                    <img src="/website/assets/images/suitcase-job.svg" alt="">
                                                    <span>Morning Shift</span>
                                                </li>
                                                <li>
                                                    <img src="/website/assets/images/switch-job.svg" alt="">
                                                    <span>Full Time</span>
                                                </li>
                                            </ul>
                                        </div>
                                        <ul class="job-list-fav m-0">
                                            <li>
                                                <router-link to="/candidate-dashboard" class="job-view-btn">View
                                                </router-link>
                                            </li>
                                        </ul>
                                    </div>

                                </div>
                            </div>
                            <!-- </div> -->
                        </div>
                    </div>
                    <div class="show-more-anker">
                        <!-- <router-link class="show-more-common" to="/candidate-dashboard">Show more</router-link> -->
                        <p class="notify-unread-msgs">You have <span>{{wishlist.length}}</span> unread messages</p>
                    </div>
                </div>
                <!-- Job List Wrap Start -->
            </div>
            <div class="common-sidebar">
                <br><br>
                <div class="col p-0">
                    <div class="side-card h-300 shadow-sm">
                        <div class="side-card-title text-center text-white">For Queries</div>
                        <div class="side-card-body">
                            <p class="card-title">If you have any further queries, please contact us without any
                                hesitation.</p>
                            <ul class="social-btns center-block">
                                <li>
                                    <a target="_blank" href="https://api.whatsapp.com/send?phone=+923064041221"
                                        class="btn btn-whatsapp">
                                        <img src="/website/assets/images/whatsapp-quaries.svg">
                                        <span>+92 306 404 1221</span>
                                    </a>
                                </li>
                                <li>
                                    <a target="_blank" href="https://www.facebook.com/bizblanca/"
                                        class="btn btn-facebook">
                                        <img src="/website/assets/images/facebook-quaries.svg">
                                        <span>@BizBlanca</span>
                                    </a>
                                </li>
                                <li>
                                    <a target="_blank" href="https://www.linkedin.com/company/bizblanca/"
                                        class="btn btn-linkedin">
                                        <img src="/website/assets/images/linkdine-quaries.svg">
                                        <span>@BizBlanca</span>
                                    </a>
                                </li>
                                <li>
                                    <a target="_blank" href="https://www.instagram.com/bizblanca/"
                                        class="btn btn-google">
                                        <img src="/website/assets/images/gmail-quaries.svg">
                                        <span>bizer@bizblanca.com</span>
                                    </a>
                                </li>

                            </ul>
                        </div>
                    </div>
                    <div class="divider">
                        <hr />
                    </div>
                    <div class="side-card h-300 shadow-sm">
                        <div class="side-card-title text-center text-white">New Govt Jobs</div>
                        <div class="side-govtjobcard-body ">
                            <div class="gov-job-box">
                                <div class="govt-job-img col-auto p-0">
                                    <img
                                        src="https://upload.wikimedia.org/wikipedia/commons/e/ef/State_emblem_of_Pakistan.svg">
                                </div>
                                <div class="govt-job-list-content col px-2">
                                    <h6>BOP Galaxy Management Trainee Program</h6>
                                    <p class="mb-2">If you have any further queries, please contact us without any
                                        hesitation.</p>
                                </div>
                            </div>
                            <div class="gov-job-box">
                                <div class="govt-job-img col-auto p-0">
                                    <img
                                        src="https://upload.wikimedia.org/wikipedia/commons/e/ef/State_emblem_of_Pakistan.svg">
                                </div>
                                <div class="govt-job-list-content col px-2">
                                    <h6>Incharge Information Center</h6>
                                    <p class="mb-2">If you have any further queries, please contact us without any
                                        hesitation.</p>
                                </div>
                            </div>
                            <div class="gov-job-box">
                                <div class="govt-job-img col-auto p-0">
                                    <img
                                        src="https://upload.wikimedia.org/wikipedia/commons/e/ef/State_emblem_of_Pakistan.svg">
                                </div>
                                <div class="govt-job-list-content col px-2">
                                    <h6>Education Department KPK</h6>
                                    <p class="mb-2">If you have any further queries, please contact us without any
                                        hesitation.</p>
                                </div>
                            </div>
                            <div class="gov-job-box">
                                <div class="govt-job-img col-auto p-0">
                                    <img
                                        src="https://upload.wikimedia.org/wikipedia/commons/e/ef/State_emblem_of_Pakistan.svg">
                                </div>
                                <div class="govt-job-list-content col px-2">
                                    <h6>BOP Galaxy Management Trainee Program</h6>
                                    <p class="mb-2">If you have any further queries, please contact us without any
                                        hesitation.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="divider">
                        <hr />
                    </div>
                    <div class="side-card h-300 shadow-sm">
                        <div class="side-card-title text-center text-white">Top Rizer's Ranking</div>
                        <div class="side-card-body">
                            <div class="swiper bizer-ranking-slider">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <div class="wrapper">
                                            <div class="profile">
                                                <img src="https://images.unsplash.com/photo-1484186139897-d5fc6b908812?ixlib=rb-0.3.5&s=9358d797b2e1370884aa51b0ab94f706&auto=format&fit=crop&w=200&q=80%20500w"
                                                    class="thumbnail">
                                            </div>
                                            <h3 class="name">Natasha Anjum</h3>
                                            <p class="title">Laravel Developer</p>
                                            <div class="position-box">
                                                <img src="/website/assets/images/position-crown.svg">
                                                <h3 class="position-number">1st</h3>
                                            </div>
                                            <p class="description line-clamp-3">I have learned a lot of things in my
                                                life but to be a
                                                Laravel
                                                developer has changed my life.</p>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="wrapper">
                                            <div class="profile">
                                                <img src="https://images.unsplash.com/photo-1484186139897-d5fc6b908812?ixlib=rb-0.3.5&s=9358d797b2e1370884aa51b0ab94f706&auto=format&fit=crop&w=200&q=80%20500w"
                                                    class="thumbnail">
                                            </div>
                                            <h3 class="name">Natasha Anjum</h3>
                                            <p class="title">Laravel Developer</p>
                                            <div class="position-box">
                                                <img src="/website/assets/images/position-crown.svg">
                                                <h3 class="position-number">2nd</h3>
                                            </div>
                                            <p class="description">I have learned a lot of things in my life but to be a
                                                Laravel
                                                developer has changed my life.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-pagination"></div>
                            </div>
                        </div>
                    </div>
                    <div class="divider">
                        <hr />
                    </div>
                    <div class="side-card h-300 shadow-sm">
                        <div class="side-card-title text-center text-white">Payment Plans</div>
                        <div class="plan free-plan">
                            <div class="plan-text h5 ">Free</div>
                            <div class="plan-fees h4 mt-0 mb-3">No Fees</div>
                            <div class="plan-options">
                                <div class="btn mr-1">Select Plan</div>
                                <div class="btn ml-1">More Details</div>
                            </div>
                        </div>

                        <div class="plan paid-plan">
                            <div class="plan-text h5 ">Basic</div>
                            <div class="plan-fees h4 mt-0 mb-3">12,000 / Year</div>
                            <div class="plan-options">
                                <div class="btn mr-1">Select Plan</div>
                                <div class="btn ml-1">More Details</div>
                            </div>
                        </div>

                    </div>
                    <div class="divider">
                        <hr />
                    </div>
                    <div class="side-card h-300 shadow-sm">
                        <div class="side-card-title text-center text-white">FAQS</div>
                        <div class="side-card-body">
                            <div class="accordion-faq" id="accordionExample">
                                <div class="faq-card">
                                    <div class="faq-card-header" id="headingOne">
                                        <h5 class="mb-0">
                                            <button class="btn btn-block text-left faq-btn" type="button"
                                                data-toggle="collapse" data-target="#collapseOne" aria-expanded="true"
                                                aria-controls="collapseOne">
                                                <i class="fa fa-caret-right mr-2"></i>Q. What is BizBlanca?
                                            </button>
                                        </h5>
                                    </div>
                                    <div id="collapseOne" class="collapse fade" aria-labelledby="headingOne"
                                        data-parent="#accordionExample">
                                        <div class="faq-card-body">
                                            Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                            Lorem Ipsum
                                            has been the industry's standard dummy text ever since the 1500s,
                                        </div>
                                    </div>
                                </div>
                                <div class="faq-card">
                                    <div class="faq-card-header" id="headingTwo">
                                        <h5 class="mb-0">
                                            <button class="btn  collapsed btn-block text-left faq-btn" type="button"
                                                data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false"
                                                aria-controls="collapseTwo">
                                                <i class="fa fa-caret-right mr-2"></i>Q. How BizBlanca works?
                                            </button>
                                        </h5>
                                    </div>
                                    <div id="collapseTwo" class="collapse fade" aria-labelledby="headingTwo"
                                        data-parent="#accordionExample">
                                        <div class="faq-card-body">
                                            Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                            Lorem Ipsum
                                            has been the industry's standard dummy text ever since the 1500s,
                                        </div>
                                    </div>
                                </div>
                                <div class="faq-card">
                                    <div class="faq-card-header" id="headingThree">
                                        <h5 class="mb-0">
                                            <button class="btn  collapsed btn-block text-left faq-btn" type="button"
                                                data-toggle="collapse" data-target="#collapseThree"
                                                aria-expanded="false" aria-controls="collapseThree">
                                                <i class="fa fa-caret-right mr-2"></i>Q. What is BizBlanca mission?
                                            </button>
                                        </h5>
                                    </div>
                                    <div id="collapseThree" class="collapse fade" aria-labelledby="headingThree"
                                        data-parent="#accordionExample">
                                        <div class="faq-card-body">
                                            Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                            Lorem Ipsum
                                            has been the industry's standard dummy text ever since the 1500s,
                                        </div>
                                    </div>
                                </div>
                                <div class="faq-card">
                                    <div class="faq-card-header" id="headingFour">
                                        <h5 class="mb-0">
                                            <button class="btn  collapsed btn-block text-left faq-btn" type="button"
                                                data-toggle="collapse" data-target="#collapseFour" aria-expanded="false"
                                                aria-controls="collapseFour">
                                                <i class="fa fa-caret-right mr-2"></i>Q. Why BizBlanca?
                                            </button>
                                        </h5>
                                    </div>
                                    <div id="collapseFour" class="collapse fade" aria-labelledby="headingFour"
                                        data-parent="#accordionExample">
                                        <div class="faq-card-body">
                                            Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                            Lorem Ipsum
                                            has been the industry's standard dummy text ever since the 1500s,
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="divider">
                        <hr />
                    </div>
                    <div class="side-card h-300 shadow-sm">
                        <div class="side-card-title text-center text-white">Ads</div>
                        <div class="ads-side-card-body">
                            <div class="swiper ads-slider">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <img src="https://images.unsplash.com/photo-1484186139897-d5fc6b908812?ixlib=rb-0.3.5&s=9358d797b2e1370884aa51b0ab94f706&auto=format&fit=crop&w=200&q=80%20500w"
                                            class="ads-img">
                                    </div>
                                    <div class="swiper-slide">
                                        <img src="https://images.unsplash.com/photo-1484186139897-d5fc6b908812?ixlib=rb-0.3.5&s=9358d797b2e1370884aa51b0ab94f706&auto=format&fit=crop&w=200&q=80%20500w"
                                            class="ads-img">
                                    </div>
                                    <div class="swiper-slide">
                                        <img src="https://images.unsplash.com/photo-1484186139897-d5fc6b908812?ixlib=rb-0.3.5&s=9358d797b2e1370884aa51b0ab94f706&auto=format&fit=crop&w=200&q=80%20500w"
                                            class="ads-img">
                                    </div>
                                </div>
                                <div class="swiper-button-next"></div>
                                <div class="swiper-button-prev"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>
<script>
    import axios from 'axios';
    import WebsiteNavbar from '../partials/navbar.vue';
    import CandidateNavbar from '../partials/CandidateNavbar.vue';
    export default {
        data() {
            return {
                wishlist: [],
            }
        },
        mounted() {
            var swiper = new Swiper(".bizer-ranking-slider", {
                pagination: {
                    el: ".swiper-pagination",
                },
            });
            var swiper = new Swiper(".ads-slider", {
                navigation: {
                    nextEl: ".swiper-button-next",
                    prevEl: ".swiper-button-prev",
                },
            });
        },
        created() {
            this.getCandidateWishList()
        },
        components: {
            WebsiteNavbar,
            CandidateNavbar,
        },
        methods: {
            getCandidateWishList() {
                axios.get('get-candidate-wish-list')
                    .then((response) => {
                        this.wishlist = response.data
                    });
            },
            ShowMessageError() {
                Swal.fire(
                    'UnderDevelopment',
                    'Chat Functionality UnderDevelopment',
                    'info'
                );
            },
        },
    };

</script>
