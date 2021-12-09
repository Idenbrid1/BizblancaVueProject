<template>
    <div>
        <WebsiteNavbar/>
        <CompanyNavbar v-if="isAuth == true"/>
        <div class="container user-profile-container cont-flex">
            <div class="condition-search-feilds">
                <div class="product_accordion_container">
                    <div>
                        <input class="product_accordion" type="checkbox" name="accordion" id="first" checked>
                        <label class="search-box-h" for="first">
                            Condition Search
                            <span class="chevron">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round">
                                    <polyline points="6 9 12 15 18 9"></polyline>
                                </svg>
                            </span>
                        </label>
                        <div class="content">
                            <div class="content-body">
                                <div class="row m-0">
                                    <div class="col-md-6">
                                        <label>Experience</label>
                                        <input class="form-control" placeholder="Search by Experience"
                                            v-model="record.working_experience" id="cusSelectbox" type="number">
                                    </div>
                                    <!-- <div class="col-md-6">
                                        <label>Education</label>
                                        <select name="" class="cusSelectbox" v-model="record.education" id="cusSelectbox">
                                            <option value="Select">Please Select</option>
                                            <option value="India">India</option>
                                            <option value="Nepal">Nepal</option>
                                            <option value="Bangladesh">Bangladesh</option>
                                            <option value="Sri Lanka">Sri Lanka</option>
                                        </select>
                                    </div> -->
                                    <div class="col-md-6">
                                        <label>City</label>
                                        <input class="form-control" placeholder="Search by City" v-model="record.city"
                                            id="cusSelectbox" type="text">
                                    </div>
                                    <!-- <div class="col-md-6">
                                        <label>Area</label>
                                        <select name="" class="cusSelectbox" id="cusSelectbox">
                                            <option value="Select">Area</option>
                                            <option value="India">India</option>
                                            <option value="Nepal">Nepal</option>
                                            <option value="Bangladesh">Bangladesh</option>
                                            <option value="Sri Lanka">Sri Lanka</option>
                                        </select>
                                    </div>
                                    <div class="col-md-6">
                                        <label>Gender</label>
                                        <select name="" class="cusSelectbox" id="cusSelectbox">
                                            <option value="Select">Please Select</option>
                                            <option value="India">India</option>
                                            <option value="Nepal">Nepal</option>
                                            <option value="Bangladesh">Bangladesh</option>
                                            <option value="Sri Lanka">Sri Lanka</option>
                                        </select>
                                    </div> -->
                                    <div class="col-12 col-md-6">
                                        <label for="">Skills</label>
                                        <multiselect v-model="record.skills" placeholder="Search by Skills" label="name"
                                            track-by="name" :options="options" :searchable="true" :multiple="true"
                                            :taggable="true" @tag="addSkill">
                                        </multiselect>
                                    </div>
                                    <!-- <div class="col-12 col-md-6">
                                        <label for="">Occupation</label>
                                        <input type="text" name="" placeholder="Search by Occupation" class="form-control"/>
                                    </div> -->
                                    <div class="col-12 conditioncheck">
                                        <input name='gender' v-model="record.gender" value="Male" type="radio"
                                            class="keeplogin-checkbox" id="male">
                                        <label for="male">Male</label>
                                        <input name='gender' v-model="record.gender" value="Female" type="radio"
                                            class="keeplogin-checkbox" id="female">
                                        <label for="female">Female</label>
                                        <!-- <input name='gender' v-model="record.gender" value="All" type="radio" class="keeplogin-checkbox"
                                            id="all-genders">
                                        <label for="all-genders">All Genders</label> -->
                                    </div>
                                    <div class="col-12 job-condition">
                                        <button type="submit" @click="search()"
                                            class="job-condition-search-btn">Search</button>
                                        <button type="submit" @click="clearSearch()"
                                            class="job-condition-clear-btn">Clear</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!---- ------------------------------>
                <div class="product-search-box">
                    <label class="search-box-h">
                        Keyword Search
                    </label>
                    <div class="col-md-12 search-container">
                        <form>
                            <div> <label class="keyword-input-title">Keyword Search</label></div>
                            <input class="form-control" type="text" placeholder="* Search by Name" name="search"
                                v-model="record.keyword">
                            <div class="keyword-search-ankers">
                                <button type="submit" @click.prevent="keywordSearch()"
                                    class="keyword-search-btn">Search</button>
                                <button type="submit" @click.prevent="clearSearch()"
                                    class="keyword-clear-btn">Clear</button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="candidate">
                    <label class="candidate-tagline">
                        Candidates
                    </label>
                    <!-- Job List Toolbar Start -->
                    <div>
                        <!-- Job List Wrap Start -->
                        <div class="job-list-wrap">
                            <!-- <div class="job-search-count my-3 mx-1">1 to 20 Results (out of 10,000 results in total)</div> -->
                            <!-- Job List Start -->
                            <div class="row m-0 justify-content-start">
                                <div class="candidate-single" v-if="index < searchData.length"
                                    v-for="(item, index) in candidateToShow" :key="index">
                                    <div class="candidate-list-content">
                                        <div class="candidate-image">
                                            <div class="candidate-photo"
                                                :style="{ backgroundImage: 'url(/storage/images/candidates/profile/'+searchData[index].candidate.profile_image+')'}">
                                            </div>
                                            <div class="candidate-header mt-2 ml-2">
                                                <h6 class="candidate-name mb-0">
                                                    {{searchData[index].candidate.full_name}}</h6>
                                            </div>
                                        </div>
                                        <!-- <span class="job-post-date">20 hours ago</span> -->
                                        <timeago class="job-post-date" :datetime="searchData[index].created_at">
                                        </timeago>
                                        <p class="candidate-description my-1"> {{searchData[index].candidate.bio}}</p>
                                        <ul class="candidate-list-meta">
                                            <li><i class="fas fa-venus-mars"></i>
                                                <div class="hide-line-1"> {{searchData[index].candidate.gender}}</div>
                                            </li>
                                            <!-- <li class="mt-1"><i class="fas fa-graduation-cap"></i>
                                                <div class="hide-line-1">BSSE</div>
                                            </li> -->
                                            <li class="mt-1"><i class="fas fa-envelope-open-text"></i>
                                                <div class="hide-line-1"> {{searchData[index].candidate.experience}}
                                                    Years</div>
                                            </li>
                                            <li class="mt-1"><i class="fas fa-user-cog"></i>
                                                <div class="hide-line-1"
                                                    v-for="(skills, index) in searchData[index].candidate.candidate_skills"
                                                    :key="index"> {{skills.name}},</div>
                                            </li>
                                            <li class="mt-1"><i class="fas fa-map-marker-alt"></i>
                                                <div class="hide-line-1"> {{searchData[index].candidate.city}}</div>
                                            </li>
                                        </ul>
                                        <ul class="candidate-list-fav">
                                            <li class="w-100">
                                                <router-link class="job-view-btn w-100" data-toggle="collapse"
                                                    :to="{ name: 'CandidateDetail', params: { id: searchData[index].candidate.id } }">
                                                    View Profile</router-link>
                                            </li>
                                            <li>
                                                <a v-if="searchData[index].is_wish_listed == false"
                                                    @click="addToWishList(searchData[index].candidate.id)"
                                                    class="candidate-wishlist-btn ml-2 "><i
                                                        class="far fa-heart"></i></a>
                                                <a v-else @click="removeToWishList(searchData[index].candidate.id)"
                                                    class="candidate-wishlist-btn ml-2 "><i
                                                        class="fas fa-heart"></i></a>
                                            </li>
                                            <!-- <li v-if="searchData[index].is_wish_listed == true"><a @click="addToWishList(searchData[index].candidate.id)" class="">liked</a></li> -->
                                        </ul>
                                    </div>
                                </div>
                                <span class="show-result-msg" v-if="this.showError == true">Data Not Found</span>
                            </div>
                            <!-- </div> -->
                        </div>
                    </div>
                </div>
                <!-- Job List Wrap Start -->
                <div class="text-center" v-if="searchData.length">
                    <button class="load-more-btn mx-auto"
                        v-if="searchData.length != candidateToShow && totalcandidates > candidateToShow"
                        @click="candidateToShow += 10">Load more</button>
                </div>
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
                                                <img src="/website//website/assets/images/position-crown.svg">
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
    import Multiselect from 'vue-multiselect'
    export default {
        data() {
            return {
                options: [{
                        name: 'Javascript',
                        language: 'JavaScript'
                    },
                    {
                        name: 'Adonis',
                        language: 'Adonis'
                    },
                    {
                        name: 'Rails',
                        language: 'Ruby'
                    },
                    {
                        name: 'Sinatra',
                        language: 'Ruby'
                    },
                    {
                        name: 'Laravel',
                        language: 'PHP'
                    },
                    {
                        name: 'Phoenix',
                        language: 'Elixir'
                    }
                ],
                record: {
                    working_experience: '',
                    city: '',
                    gender: '',
                    keyword: '',
                    skills: [],
                },
                is_auth: false,
                searchData: '',
                candidateToShow: 10,
                totalcandidates: 0,
                showError: false,
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
            this.getCandidate()
            this.checkAuth()
        },
        components: {
            WebsiteNavbar,
            CompanyNavbar,
            Multiselect,
        },
        methods: {
            checkAuth(){
                axios.get('check-auth')
                .then((response) => {
                    if(response.data.isAuth == true){
                        this.is_auth = response.data.isAuth
                    }
                });
            },
            addSkill(newTag) {
                const tag = {
                    name: newTag,
                    code: newTag
                }
                this.options.push(tag)
                this.record.skills.push(tag)
            },
            getCandidate(page = 1) {
                axios.get('/get-candidates-search?page=' + page)
                    .then((response) => {
                        this.searchData = response.data
                        this.totalcandidates = this.searchData.length

                    });
            },
            search() {
                axios.post('/candidate-search', this.record)
                    .then((response) => {
                        this.searchData = response.data
                        this.totalcandidates = this.searchData.length
                        if (response.data.length == 0) {
                            this.showError = true
                        } else {
                            this.showError = false
                        }
                    });
            },
            keywordSearch() {
                this.searchData = '';
                this.candidateToShow = 3;
                this.totalcandidates = 0;
                if (this.record.keyword == '') {
                    Swal.fire({
                        icon: 'error',
                        title: 'Field Empty',
                    })
                } else {
                    axios.get('/candidate-keyword-search/' + this.record.keyword)
                        .then((response) => {
                            this.searchData = response.data
                            this.totalcandidates = this.searchData.length
                            if (response.data.length == 0) {
                                this.showError = true
                            } else {
                                this.showError = false
                            }
                        });
                }
            },
            addToWishList(id) {
                if(this.is_auth == true){
                    axios.get('/add-to-wish-list/' + id)
                }else{
                    Swal.fire({
                        icon: 'error',
                        title: 'Oops...🧐',
                        confirmButtonText: 'Understood!',
                        text: 'Please login before apply to any job!',
                        footer: '<a href="/#/signin">Login?</a>',
                        timer: 1500
                    })
                }
            },
            removeToWishList(id) {
                axios.get('/remove-to-wish-list/' + id)
            },
            clearSearch() {
                this.record = {
                    working_experience: '',
                    city: '',
                    gender: '',
                    keyword: '',
                    skills: [],
                };
                this.searchData = '';
                this.candidateToShow = 3;
                this.totalcandidates = 0;
            },

        },
    };

</script>
