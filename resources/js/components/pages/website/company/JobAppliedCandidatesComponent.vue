<template>
    <div>
        <WebsiteNavbar />
        <CompanyNavbar />
        <div class="container cont-flex user-profile-container PostJobContainer">
            <div class="condition-search-feilds">
                <div>
                    <h1 class="post_new_job_title">Job Applied Candidates</h1>
                    <p class="post_new_job_descrp">
                        To add more jobs in your company profile, Please click the Add more jobs button and after that
                        form
                        will appear in front of you and you have to fill this form with all the necessary requirements
                        and
                        then click on update, your job will be posted in your company dashboard.
                    </p>
                </div>
                <div class="post_new_job_anker">
                    <div></div>
                    <p>{{this.data.length}} Applicants</p>
                </div>
                <div class="candidate">
                    <label class="candidate-tagline">
                        Candidates
                    </label>
                    <div>
                        <!-- Job List Wrap Start -->
                        <div class="job-list-wrap" style="padding:10px">
                            <!-- Job List Start -->
                            <div class="row m-0 justify-content-start" v-for="(item, index) in data" :key="index">
                                <div class="candidate-single">
                                    <div class="candidate-list-content">
                                        <div class="candidate-image">
                                            <div class="candidate-photo" :style="{ 'background-image': 'url(/storage/images/candidates/' + item.candidate.candidates.profile_image + ')' }">
                                            </div>
                                            <div class="candidate-header mt-2 ml-2">
                                                <h6 class="candidate-name mb-0">{{item.candidate.candidates.full_name}}</h6>
                                            </div>
                                        </div>
                                        <!-- <span class="job-post-date">20 hours ago</span> -->
                                        <p class="candidate-description my-1">{{item.candidate.candidates.bio}}</p>
                                        <ul class="candidate-list-meta">
                                            <li><i class="fas fa-venus-mars"></i>
                                                <div class="hide-line-1">{{item.candidate.candidates.gender}}</div>
                                            </li>
                                            <!-- <li class="mt-1"><i class="fas fa-graduation-cap"></i>
                                                <div class="hide-line-1">BSSE</div>
                                            </li> -->
                                            <li class="mt-1"><i class="fas fa-envelope-open-text"></i>
                                                <div class="hide-line-1">{{item.candidate.candidates.experience}} years</div>
                                            </li>
                                            <!-- <li class="mt-1"><i class="fas fa-user-cog"></i>
                                                <div class="hide-line-1">HTML,Bootstrap,CSS,Node JS</div>
                                            </li> -->
                                            <li class="mt-1"><i class="fas fa-map-marker-alt"></i>
                                                <div class="hide-line-1">{{item.candidate.candidates.city}}</div>
                                            </li>

                                        </ul>

                                        <ul class="candidate-list-fav">
                                            <li class="w-100">
                                                <router-link class="job-view-btn" data-toggle="collapse"
                                                    :to="{ name: 'CandidateDetail', params: { id: item.candidate.candidates.id } }">
                                                    View Profile</router-link>
                                            </li>
                                            <li>
                                                <a v-if="item.is_wish_listed == false" @click="addToWishList(item.candidate.id)" class="candidate-wishlist-btn ml-2 "><i class="far fa-heart"></i></a>
                                                <a v-else @click="removeToWishList(item.candidate.id)" class="candidate-wishlist-btn ml-2 "><i class="fas fa-heart"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Job List Wrap Start -->
                    </div>
                </div>
            </div>
            <div class="common-sidebar">
                <br><br>
                <div class="col p-0 p-md-2">
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
                                            <p class="description">I have learned a lot of things in my life but to be a
                                                Laravel developer has changed my life.</p>
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
                                                Laravel developer has changed my life.</p>
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
                        <div class="side-card-title text-center text-white">FAQS</div>
                        <div class="side-card-body">
                            <div class="accordion-faq" id="accordionExample">
                                <div class="faq-card">
                                    <div class="faq-card-header" id="headingOne">
                                        <h5 class="mb-0">
                                            <button class="btn btn-block text-left faq-btn" type="button"
                                                data-toggle="collapse" data-target="#collapseOne" aria-expanded="true"
                                                aria-controls="collapseOne">
                                                <i class="fa fa-caret-right mr-2"></i>Q. What is BizBlanca?</button>
                                        </h5>
                                    </div>
                                    <div id="collapseOne" class="collapse fade" aria-labelledby="headingOne"
                                        data-parent="#accordionExample">
                                        <div class="faq-card-body">
                                            Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                            Lorem Ipsum has been the industry's standard dummy text ever since the
                                            1500s,
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
                                            Lorem Ipsum has been the industry's standard dummy text ever since the
                                            1500s,
                                        </div>
                                    </div>
                                </div>
                                <div class="faq-card">
                                    <div class="faq-card-header" id="headingTwo">
                                        <h5 class="mb-0">
                                            <button class="btn  collapsed btn-block text-left faq-btn" type="button"
                                                data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false"
                                                aria-controls="collapseTwo">
                                                <i class="fa fa-caret-right mr-2"></i>Q. What is BizBlanca mission?
                                            </button>
                                        </h5>
                                    </div>
                                    <div id="collapseTwo" class="collapse fade" aria-labelledby="headingTwo"
                                        data-parent="#accordionExample">
                                        <div class="faq-card-body">
                                            Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                            Lorem Ipsum has been the industry's standard dummy text ever since the
                                            1500s,
                                        </div>
                                    </div>
                                </div>
                                <div class="faq-card">
                                    <div class="faq-card-header" id="headingTwo">
                                        <h5 class="mb-0">
                                            <button class="btn  collapsed btn-block text-left faq-btn" type="button"
                                                data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false"
                                                aria-controls="collapseTwo">
                                                <i class="fa fa-caret-right mr-2"></i>Q. Why BizBlanca?
                                            </button>
                                        </h5>
                                    </div>
                                    <div id="collapseTwo" class="collapse fade" aria-labelledby="headingTwo"
                                        data-parent="#accordionExample">
                                        <div class="faq-card-body">
                                            Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                            Lorem Ipsum has been the industry's standard dummy text ever since the
                                            1500s,
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
    import CompanyNavbar from '../partials/CompanyNavbar.vue';
    export default {
        data() {
            return {
                data: []
            };
        },
        components: {
            WebsiteNavbar,
            CompanyNavbar,
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
            this.getSingleJobDetail()
        },
        methods: {
            getSingleJobDetail() {
                axios.get('/api/get-applied-applicants-list/' + this.$route.params.id)
                .then((response) => {
                    this.data = response.data
                });
            },
            addToWishList(id) {
                axios.get('/api/add-to-wish-list/' + id)
            },
            removeToWishList(id) {
                axios.get('/api/remove-to-wish-list/' + id)
            },
        },
    };

</script>
