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
                                <div class="row">
                                    <div class="col-md-6">
                                        <label>Experience</label>
                                        <input class="form-control" v-model="record.experience" id="cusSelectbox"
                                            type="number">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="">Salary Range</label>
                                        <select name="salary_range" v-model="record.salary_range" class="form-control">
                                            <option value="10000-20000">10000 - 20000 </option>
                                            <option value="20000-30000">20000 - 30000</option>
                                            <option value="30000-40000">30000 - 40000</option>
                                            <option value="40000-50000">40000 - 50000</option>
                                            <option value="50000-60000">50000 - 60000</option>
                                            <option value="60000-70000">60000 - 70000</option>
                                            <option value="70000-80000">70000 - 80000</option>
                                            <option value="80000-90000">80000 - 90000</option>
                                            <option value="90000-100000">90000 - 100000</option>
                                            <option value="100000-150000">100000 - 150000</option>
                                        </select>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="">Shift</label>
                                        <select name="shift" v-model="record.shift" class="form-control">
                                            <option value="Night">Night</option>
                                            <option value="Morning">Morning</option>
                                            <option value="Afternoon">Afternoon</option>
                                            <option value="Please Select">Please Select</option>
                                        </select>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="">Location</label>
                                        <input type="text" placeholder="Enter Location" v-model="record.location"
                                            name="location" class="form-control" />
                                    </div>
                                    <div class="col-md-6">
                                        <label for="">Job Type</label>
                                        <select name="job_type" v-model="record.job_type" class="form-control">
                                            <option value="Full Time">Full Time</option>
                                            <option value="Part Time">Part Time</option>
                                            <option value="Internship">Internship</option>
                                            <option value="Permenent">Permenent</option>
                                            <option value="Contract">Contract</option>
                                            <option value="Freelance">Freelance</option>
                                        </select>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="">Qualifications & Technicalities</label>
                                        <select name="qualification_level" v-model="record.qualification_level"
                                            class="form-control">
                                            <option value="Metric">Metric</option>
                                            <option value="Intermediate">Intermediate</option>
                                            <option value="Graduation">Graduation</option>
                                            <option value="Masters">Masters</option>
                                        </select>
                                    </div>
                                    <!-- <div class="col-md-6">
                                        <label for="">Skills</label>
                                        <multiselect 
                                            v-model="record.skills"
                                            track-by="name"
                                            label="name"
                                            placeholder="Select one"
                                            :options="options"
                                            :searchable="true"
                                            :allow-empty="false"
                                            @tag="addSkill"
                                            :multiple="true" 
                                            :taggable="true">
                                            
                                        </multiselect>
                                    </div> -->
                                    <div class="col-12 conditioncheck">
                                        <input name='gender' value="Male" v-model="record.gender" type="radio"
                                            class="keeplogin-checkbox" id="male">
                                        <label for="male">Male</label>
                                        <input name='gender' value="Female" v-model="record.gender" type="radio"
                                            class="keeplogin-checkbox" id="female">
                                        <label for="female">Female</label>
                                        <input name='gender' value="All" v-model="record.gender" type="radio"
                                            class="keeplogin-checkbox" id="all-genders">
                                        <label for="all-genders">All Genders</label>
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
                            <input class="form-control" type="text" placeholder="* Includes All Keywords" name="search"
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
                <div class="candidate border-0">
                    <!-- Job List Toolbar Start -->
                    <div>
                        <!-- <div class="job-list-toolbar">
                            <ul class="job-pagination pagination-center ">
                                <li class="job-page-item"><a class="job-page-link" href="#"><i class="fa fa-angle-left"
                                            aria-hidden="true"></i> Previous 20</a></li>
                                <li class="job-page-item active"><a class="job-page-link" href="#">1</a></li>
                                <li class="job-page-item"><a class="job-page-link" href="#">2</a></li>
                                <li class="job-page-item"><a class="job-page-link" href="#">3</a></li>
                                <li class="job-page-item"><a class="job-page-link" href="#">4</a></li>
                                <li class="job-page-item"><a class="job-page-link" href="#"><i class="fa fa-angle-right"
                                            aria-hidden="true"></i> Next 20</a></li>
                            </ul>
                            <div class="job-filter">
                                <select class="job-select">
                                    <option>Search order by</option>
                                    <option>Top Rated</option>
                                    <option>Most Popular</option>
                                </select>
                            </div>
                        </div> -->
                        <!-- Job List Toolbar End -->
                        <!-- Job List Wrap Start -->
                        <div class="job-list-wrap p-0">
                            <div class="job-list" v-if="index < searchData.length" v-for="(item, index) in jobToShow"
                                :key="index">
                                <div class="company-logo col-auto py-2">
                                    <img :src="'/storage/images/companies/'+searchData[index].company.logo"
                                        alt="Company Logo">
                                    <span class="company-h line-clamp-1">{{searchData[index].company.company_name}}</span>
                                </div>
                                <div class="job-list-content col">
                                    <div class="job-header">
                                        <h6 class="job-title mb-0">{{searchData[index].title}}</h6>
                                        <!-- <i class="fa fa-star" aria-hidden="true"></i>
                                             <i class="fa fa-star" aria-hidden="true"></i>
                                             <i class="fa fa-star" aria-hidden="true"></i>
                                             <i class="fa fa-star" aria-hidden="true"></i>
                                             <i class="fa fa-star" aria-hidden="true"></i> -->
                                        <div class="d-flex align-items-center">
                                            <span class="job-post-date">20 hours ago </span>
                                            <i class="far fa-heart"></i>
                                        </div>
                                    </div>

                                    <p class="job-description">{{searchData[index].description}}</p>
                                    <div class="job-content-wrap">
                                        <div class="job-dynamic-values">
                                            <ul>
                                                <li>
                                                    <img src="/website/assets/images/calendar-job.svg" alt="img">
                                                    <span>{{searchData[index].created_at | moment("YYYY-MM-DD")}}</span>
                                                </li>
                                                <li>
                                                    <img src="/website/assets/images/experience-job.svg" alt="">
                                                    <span>{{searchData[index].experience}}</span>
                                                </li>
                                            </ul>
                                            <ul>
                                                <li>
                                                    <img src="/website/assets/images/money-job.svg" alt="">
                                                    <span>{{searchData[index].salary_range}}</span>
                                                </li>
                                                <li>
                                                    <img height="16px" width="10px" style="margin:0px 3px;" src="/website/assets/images/pin.svg"
                                                        alt="img">
                                                    <span>{{searchData[index].location}}</span>
                                                </li>
                                            </ul>
                                            <ul>
                                                <li>
                                                    <img src="/website/assets/images/suitcase-job.svg" alt="">
                                                    <span>{{searchData[index].shift}}</span>
                                                </li>
                                                <li>
                                                    <img src="/website/assets/images/switch-job.svg" alt="">
                                                    <span>{{searchData[index].job_type}}</span>
                                                </li>
                                            </ul>
                                        </div>
                                        <ul class="job-list-fav m-0">
                                            <li>
                                                <router-link class="job-view-btn" data-toggle="collapse"
                                                    :to="{ name: 'JobDetail', params: { id: searchData[index].id } }">View</router-link>
                                            </li>
                                        </ul>
                                    </div>

                                </div>
                            </div>
                            <div v-if="searchData.length == 0">
                                <h2>Data Not Found</h2>
                            </div>
                            <!-- </div> -->
                        </div>
                    </div>
                    <div class="text-center" v-if="searchData.length">
                        <button class="load-more-btn mx-auto" @click="jobToShow += 2">Load more</button>
                    </div>
                </div>
                <!-- Job List Wrap Start -->
                <!-- Pagination Start -->
                <!-- <div class="bottom-pagination">
                    <ul class="job-pagination pagination-center ">
                        <li class="job-page-item"><a class="job-page-link" href="#"><i class="fa fa-angle-left"
                                    aria-hidden="true"></i> Previous 20</a></li>
                        <li class="job-page-item active"><a class="job-page-link" href="#">1</a></li>
                        <li class="job-page-item"><a class="job-page-link" href="#">2</a></li>
                        <li class="job-page-item"><a class="job-page-link" href="#">3</a></li>
                        <li class="job-page-item"><a class="job-page-link" href="#">4</a></li>
                        <li class="job-page-item"><a class="job-page-link" href="#"><i class="fa fa-angle-right"
                                    aria-hidden="true"></i> Next 20</a></li>
                    </ul>
                    <div class="job-search-count my-3">1 to 20 Results (out of 10,000 results in total)</div>
                </div> -->
                <!-- Pagination End -->
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
                                <li><button class="btn btn-whatsapp"><img
                                            src="/website/assets/images/whatsapp-quaries.svg"><span>+92 306
                                            404 1221</span></button></li>
                                <li><button class="btn btn-facebook"><img
                                            src="/website/assets/images/facebook-quaries.svg"><span>@BizBlanca</span></button>
                                </li>
                                <li><button class="btn btn-linkedin"><img
                                            src="/website/assets/images/linkdine-quaries.svg"><span>@BizBlanca</span></button>
                                </li>
                                <li><button class="btn btn-google"><img
                                            src="/website/assets/images/gmail-quaries.svg"><span>bizer@bizblanca.com</span></button>
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
    import CandidateNavbar from '../partials/CandidateNavbar.vue';
    import pagination from 'laravel-vue-pagination'
    import Multiselect from 'vue-multiselect'
    export default {
        data() {
            return {
                record: {
                    experience: '',
                    salary_range: '',
                    shift: '',
                    job_type: '',
                    qualification_level: '',
                    gender: '',
                    location: '',
                    keyword: '',
                    // skills: '',
                },
                // options: [
                //     { name: 'Javascript', language: 'JavaScript' },
                //     { name: 'Adonis', language: 'Adonis' },
                //     { name: 'Rails', language: 'Ruby' },
                //     { name: 'Sinatra', language: 'Ruby' },
                //     { name: 'Laravel', language: 'PHP' },
                //     { name: 'Phoenix', language: 'Elixir' }
                // ],
                searchData: [],
                totalJobs: 0,
                jobToShow: 2
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
        components: {
            WebsiteNavbar,
            CandidateNavbar,
            Multiselect,
            pagination,
        },
        methods: {
            search() {
                axios.post('/job-search', this.record)
                .then((response) => {
                    this.searchData = []
                    this.searchData = response.data
                    this.totalJobs = this.searchData.length
                });
            },
            keywordSearch() {
                axios.get('/job-keyword-search/'+this.record.keyword)
                .then((response) => {
                    this.searchData = []
                    this.searchData = response.data
                    this.totalJobs = this.searchData.length
                });
            },
            // addSkill (newTag) {
            //     const tag = {
            //         name: newTag,
            //         code: newTag
            //     }
            //     this.options.push(tag)
            //     this.record.skills.push(tag)
            // },
            clearSearch() {
                this.record = {
                    experience: '',
                    salary_range: '',
                    shift: '',
                    job_type: '',
                    qualification_level: '',
                    gender: '',
                    location: '',
                    keyword: '',
                    skills: '',
                };
                this.searchData = [],
                    this.totalJobs = 0,
                    this.jobToShow = 2
            }
        },
    };

</script>
