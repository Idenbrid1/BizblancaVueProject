<template>
    <div>
        <WebsiteNavbar />
        <CandidateNavbar />
        <div class="container cont-flex">
            <div class="col-sm-12 col-md-8 col-lg-8 xs-padding">
                <!---- ------------------------------>
                <div class="product-search-box">
                    <label class="search-box-h" for="first">
                        Keyword Search
                    </label>
                    <div class="col-md-12 search-container">
                        <form>
                            <div> <label class="keyword-input-title">Keyword Search</label></div>
                            <input type="text" placeholder="* Includes All Keywords" name="search" v-model="record.keyword">
                            <button type="submit" @click.prevent="keywordSearch()" class="keyword-search-btn">Search</button>
                            <button type="submit" @click.prevent="clearSearch()" class="keyword-search-btn">Clear</button>
                        </form>
                    </div>
                </div>
                <!-- Job List Toolbar Start -->
                <!-- <div class="job-list-toolbar mt-5">
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
                <div class="job-list-wrap">
                    <!-- <div class="job-search-count mb-3">1 to 20 Results (out of 10,000 results in total)</div> -->
                    <!-- Job List Start -->
                    <div class="job-list" v-if="index < searchData.length" v-for="(item, index) in companiesToShow" :key="index">
                        <div class="company-logo col-auto py-2">
                            <img :src="'/storage/images/companies/'+searchData[index].logo" alt="Company Logo">
                            <span class="company-h">{{searchData[index].company_name}}</span>
                        </div>
                        <div class="job-list-content col">
                            <div class="job-header">
                                <h6 class="job-title mb-0">{{searchData[index].company_name}}</h6>
                            </div>
                            <span class="job-post-date">20 hours ago</span>
                            <p class="job-description">{{searchData[index].description}}</p>
                            <ul class="job-list-meta m-0 border-post">
                                <li><i class="fa fa-calendar"></i>{{searchData[index].created_at | moment("YYYY-MM-DD")}}</li>
                                <li><i class="fal fa-address-card"></i>{{searchData[index].experience}}</li>
                            </ul>
                            <ul class="job-list-meta m-0 border-post">
                                <li><i class="fal fa-money-bill-alt"></i>{{searchData[index].salary_range}}</li>
                                <li><i class="fa fa-map-marker"></i>{{searchData[index].location}}</li>
                            </ul>
                            <ul class="job-list-meta m-0">
                                <li><i class="fal fa-laptop-house"></i>{{searchData[index].shift}}</li>
                                <li><i class="fal fa-clock"></i>{{searchData[index].job_type}}</li>
                            </ul>
                            <ul class="job-list-fav m-0">
                                <li><a href="#" class="job-wishlist-btn"><i class="fa fa-heart"></i></a></li>
                                <li class="w-100"><router-link class="job-view-btn" data-toggle="collapse" :to="{ name: 'CompanyDetail', params: { id: searchData[index].id } }">View</router-link></li>
                            </ul>
                        </div>
                    </div>
                    <button class="job-view-btn text-center" v-if="searchData.length > 0" @click="companiesToShow += 2">load more</button>
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
                    <div class="job-search-count mb-3">1 to 20 Results (out of 10,000 results in total)</div>
                </div> -->
                <!-- Pagination End -->
            </div>
            <div class="col-sm-12 col-md-4 col-lg-4">
                <br><br>
                <div class="col p-0">
                    <div class="side-card h-300 shadow-sm">
                        <div class="side-card-title text-center text-white">For Queries</div>
                        <div class="side-card-body">
                            <p class="card-title">If you have any further queries, please contact us without any
                                hesitation.</p>
                            <ul class="social-btns center-block">
                                <li><button class="btn btn-whatsapp"><img
                                            src="/website/assets/images/whatsapp-quaries.svg"><span>+92 306 404
                                            1221</span></button></li>
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
                                                <i class="fa fa-caret-right mr-2"></i>Q. What is BizBlanca?
                                            </button>
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
    import CandidateNavbar from '../partials/CandidateNavbar.vue';
    export default {
        data() {
            return {
                record: {
                    keyword: ''
                },
                searchData: '',
                companiesToShow: 2,
                totalCompanies: 0,

            }
        },
        components: {
            WebsiteNavbar,
            CandidateNavbar,
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
        methods: {
            keywordSearch() {
                axios.get('/companies-keyword-search/'+this.record.keyword)
                .then((response) => {
                    this.searchData = response.data
                    this.totalCompanies = this.searchData.length
                });
            },
            clearSearch(){
                this.record = {
                    keyword: '',
                };
                this.scompaniesToShow = 2,
                this.searchData = ''
            }
        },
    };

</script>
