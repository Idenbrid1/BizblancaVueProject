<template>
    <div>
        <WebsiteNavbar />
        <CompanyNavbar />
        <div class="container user-profile-container cont-flex p-0">
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
                            <router-link to="/company-dashboard" class="msg-title">
                                JOB FOR MERN STACK DEVELOPER
                            </router-link>
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
                            <router-link to="/company-dashboard" class="msg-title">
                                JOB FOR MERN STACK DEVELOPER
                            </router-link>
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
                            <router-link to="/company-dashboard" class="msg-title">
                                JOB FOR MERN STACK DEVELOPER
                            </router-link>
                            <p class="msg-description">
                                Respected sir, My name is Muhammad Ahmad and I am graduated from Superior University, I
                                have expertise in...
                            </p>
                        </div>
                    </div>

                </div>
                <!---- ------------------------------>
                <!-- <div class="product-search-box">
                    <label class="search-box-h">
                        Keyword Search
                    </label>
                    <div class="col-md-12 search-container">
                        <form action="/">
                            <div> <label class="keyword-input-title">Keyword Search</label></div>
                            <input type="text" placeholder="* Includes All Keywords" name="search">
                            <button type="submit" @click.prevent="keywordSearch()" class="keyword-search-btn">Search</button>
                            <button type="submit" @click.prevent="clearSearch()" class="keyword-search-btn">Clear</button>
                        </form>
                    </div>
                </div> -->
                <!-- <div class="candidate">
                    <label class="candidate-tagline">
                        Candidates
                        <i class="fas fa-users"></i>
                    </label>
                    <div>
                        <div class="job-list-wrap">
                            <div class="row m-0 justify-content-start">
                                <div class="candidate-single">
                                    <div class="candidate-list-content">
                                        <div class="candidate-image">
                                            <div class="candidate-photo" style="{ backgroundImage:url('')}"></div>
                                            <div class="candidate-header mt-2 ml-2">
                                                <h6 class="candidate-name mb-0">Sameena Khan</h6>
                                            </div>
                                        </div>
                                        <p class="candidate-description my-1">My name is Sameena Khan and I am graduated
                                            from university of...</p>
                                        <ul class="candidate-list-meta">
                                            <li><i class="fas fa-venus-mars"></i>
                                                <div class="hide-line-1">Female</div>
                                            </li>
                                            <li class="mt-1"><i class="fas fa-graduation-cap"></i>
                                                <div class="hide-line-1">BSSE</div>
                                            </li>
                                            <li class="mt-1"><i class="fas fa-envelope-open-text"></i>
                                                <div class="hide-line-1">2 Years</div>
                                            </li>
                                            <li class="mt-1"><i class="fas fa-user-cog"></i>
                                                <div class="hide-line-1">HTML,Bootstrap,CSS,Node JS</div>
                                            </li>
                                            <li class="mt-1"><i class="fas fa-map-marker-alt"></i>
                                                <div class="hide-line-1">Lahore</div>
                                            </li>
                                        </ul>
                                        <ul class="candidate-list-fav">
                                            <li class="w-100"><a href="#" class="candidate-view-btn w-100">View
                                                    Profile</a></li>
                                            <li><a href="#" class="candidate-wishlist-btn ml-2 "><i
                                                        class="far fa-bookmark"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="candidate-single">
                                    <div class="candidate-list-content">
                                        <div class="candidate-image">
                                            <div class="candidate-photo" style="{ backgroundImage:url('')}"></div>
                                            <div class="candidate-header mt-2 ml-2">
                                                <h6 class="candidate-name mb-0">Sameena Khan</h6>
                                            </div>
                                        </div>
                                        <p class="candidate-description my-1">My name is Sameena Khan and I am graduated
                                            from university of...</p>
                                        <ul class="candidate-list-meta">
                                            <li><i class="fas fa-venus-mars"></i>
                                                <div class="hide-line-1">Female</div>
                                            </li>
                                            <li class="mt-1"><i class="fas fa-graduation-cap"></i>
                                                <div class="hide-line-1">BSSE</div>
                                            </li>
                                            <li class="mt-1"><i class="fas fa-envelope-open-text"></i>
                                                <div class="hide-line-1">2 Years</div>
                                            </li>
                                            <li class="mt-1"><i class="fas fa-user-cog"></i>
                                                <div class="hide-line-1">HTML,Bootstrap,CSS,Node JS</div>
                                            </li>
                                            <li class="mt-1"><i class="fas fa-map-marker-alt"></i>
                                                <div class="hide-line-1">Lahore</div>
                                            </li>

                                        </ul>

                                        <ul class="candidate-list-fav">
                                            <li class="w-100"><a href="#" class="candidate-view-btn w-100">View
                                                    Profile</a></li>
                                            <li><a href="#" class="candidate-wishlist-btn ml-2 "><i
                                                        class="far fa-bookmark"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="candidate-single">
                                    <div class="candidate-list-content">
                                        <div class="candidate-image">
                                            <div class="candidate-photo" style="{ backgroundImage:url('')}"></div>
                                            <div class="candidate-header mt-2 ml-2">
                                                <h6 class="candidate-name mb-0">Sameena Khan</h6>
                                            </div>
                                        </div>
                                        <p class="candidate-description my-1">My name is Sameena Khan and I am graduated
                                            from university of...</p>
                                        <ul class="candidate-list-meta">
                                            <li><i class="fas fa-venus-mars"></i>
                                                <div class="hide-line-1">Female</div>
                                            </li>
                                            <li class="mt-1"><i class="fas fa-graduation-cap"></i>
                                                <div class="hide-line-1">BSSE</div>
                                            </li>
                                            <li class="mt-1"><i class="fas fa-envelope-open-text"></i>
                                                <div class="hide-line-1">2 Years</div>
                                            </li>
                                            <li class="mt-1"><i class="fas fa-user-cog"></i>
                                                <div class="hide-line-1">HTML,Bootstrap,CSS,Node JS</div>
                                            </li>
                                            <li class="mt-1"><i class="fas fa-map-marker-alt"></i>
                                                <div class="hide-line-1">Lahore</div>
                                            </li>

                                        </ul>

                                        <ul class="candidate-list-fav">
                                            <li class="w-100"><a href="#" class="candidate-view-btn w-100">View
                                                    Profile</a></li>
                                            <li><a href="#" class="candidate-wishlist-btn ml-2 "><i
                                                        class="far fa-bookmark"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="show-more-anker">
                        <router-link class="show-more-common" to="/candidate-dashboard">Show more</router-link>
                        <p class="notify-unread-msgs">You have <span>12</span> unread messages</p>
                    </div>
                </div> -->
                <div class="candidate">
                    <label class="candidate-tagline">
                        Whishlist
                        <i class="fas fa-bookmark"></i>
                    </label>
                    <!-- Job List Toolbar Start -->
                    <div>
                        <!-- Job List Wrap Start -->
                        <div class="job-list-wrap">
                            <!-- <div class="job-search-count my-3 mx-1">1 to 20 Results (out of 10,000 results in total)</div> -->
                            <!-- Job List Start -->
                            <div class="row m-0 justify-content-start">
                                <div class="candidate-single" v-if="index < wishlist.length"
                                    v-for="(item, index) in wishlist" :key="index">
                                    <div class="candidate-list-content">
                                        <div class="candidate-image">
                                            <div class="candidate-photo"
                                                :style="{ backgroundImage: 'url(/storage/images/candidates/profile/'+item.candidate.profile_image+')'}">
                                            </div>
                                            <div class="candidate-header mt-2 ml-2">
                                                <h6 class="candidate-name mb-0">{{item.candidate.full_name}}</h6>
                                            </div>
                                        </div>
                                        <!-- <span class="job-post-date">20 hours ago</span> -->
                                        <p class="candidate-description my-1">{{item.candidate.bio}}</p>
                                        <ul class="candidate-list-meta">
                                            <li><i class="fas fa-venus-mars"></i>
                                                <div class="hide-line-1">{{item.candidate.gender}}</div>
                                            </li>
                                            <!-- <li class="mt-1"><i class="fas fa-graduation-cap"></i>
                                                <div class="hide-line-1">BSSE</div>
                                            </li> -->
                                            <li class="mt-1"><i class="fas fa-envelope-open-text"></i>
                                                <div class="hide-line-1">{{item.candidate.experience}} Years</div>
                                            </li>
                                            <li class="mt-1"><i class="fas fa-user-cog"></i>
                                                <div class="hide-line-1"
                                                    v-for="(skills, index) in item.candidate.candidate_skills"
                                                    :key="index">{{skills.name}}, </div>
                                            </li>
                                            <li class="mt-1"><i class="fas fa-map-marker-alt"></i>
                                                <div class="hide-line-1">{{item.candidate.city}}</div>
                                            </li>

                                        </ul>

                                        <ul class="candidate-list-fav">
                                            <li class="w-100">
                                                <router-link class="job-view-btn w-100" data-toggle="collapse"
                                                    :to="{ name: 'CandidateDetail', params: { id: item.candidate.id } }">
                                                    View Profile</router-link>
                                            </li>
                                            <li><a @click="removeToWishList(item.id)"
                                                    class="candidate-wishlist-btn ml-2"><i class="fas fa-bookmark"></i></a>
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
                        <p class="notify-unread-msgs">You have <span>{{wishlist.length}}</span> candidates in wishlist
                        </p>
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
<style src="vue-multiselect/dist/vue-multiselect.min.css"></style>
<script>
    import axios from 'axios';
    import WebsiteNavbar from '../partials/navbar.vue';
    import CompanyNavbar from '../partials/CompanyNavbar.vue';
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
            this.getCompanyWishList()
        },
        components: {
            WebsiteNavbar,
            CompanyNavbar,

        },
        methods: {
            getCompanyWishList() {
                axios.get('api/get-company-wish-list')
                    .then((response) => {
                        this.wishlist = response.data.wish_listed
                    });
            },
            removeToWishList(id) {
                axios.get('/api/remove-to-wish-list/' + id)
                    .then((response) => {
                        this.getCompanyWishList()
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
