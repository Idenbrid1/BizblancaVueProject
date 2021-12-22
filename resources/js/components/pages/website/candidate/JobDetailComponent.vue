<template>
    <div>
        <WebsiteNavbar />
        <!-- <CompanyNavbar /> -->
        <div class="container cont-flex PostJobContainer">
            <div class="col-sm-12 col-md-12 col-lg-12 xs-padding pt-3">
                <div class="job-detail-info">
                    <div class="job-info-visual">
                        <div class="job-info-img"
                            :style="{ 'background-image': 'url(/storage/images/companies/' + data.company.logo + ')' }">
                        </div>
                        <p class="job-info-title">{{data.company.comapny_name}}</p>
                    </div>
                    <div class="job-info-static">
                        <h1 class="job-title-view">{{data.title}}</h1>
                        <div class="job-apply-ankers">
                            <!-- <a href="" class="add-wishlist-anker">Add to Wishlist</a> -->
                            <a v-if="is_auth == true && already_applied == false && role == 'candidate'" @click="applyJob()" class="job-apply-anker">Apply Now</a>
                            <a v-if="is_auth == false" @click="showAlert()" class="job-apply-anker">Apply Now</a>
                            <a v-if="already_applied == true && role == 'candidate'" @click="alreadyAppliedAlert()" class="job-apply-anker">Apply Now</a>
                        </div>
                    </div>
                </div>
                <div class="job-detail-container">
                    <div class="job-dynamic-values">
                        <ul>
                            <li>
                                <img src="/website/assets/images/calendar-job.svg" alt="img">
                                <span>{{data.created_at | moment("YYYY-MM-DD")}}</span>
                            </li>
                            <li>
                                <img src="/website/assets/images/experience-job.svg" alt="">
                                <span>{{data.experience}} Years</span>
                            </li>
                        </ul>
                        <ul>
                            <li>
                                <img src="/website/assets/images/money-job.svg" alt="">
                                <span>{{data.salary_range}}</span>
                            </li>
                            <li>
                                <img height="16px" width="10px" src="/website/assets/images/pin.svg" alt="img">
                                <span>{{data.location}}</span>
                            </li>
                        </ul>
                        <ul>
                            <li>
                                <img src="/website/assets/images/suitcase-job.svg" alt="">
                                <span>{{data.shift}}</span>
                            </li>
                            <li>
                                <img src="/website/assets/images/switch-job.svg" alt="">
                                <span>{{data.job_type}}</span>
                            </li>
                        </ul>
                    </div>
                    <div class="job-detail-section">
                        <div>
                            <h3>Job Description:</h3>
                            <p>{{data.description}}</p>
                        </div>
                        <!-- <div>
                            <h3>Job Responsibilities:</h3>
                            <ul>
                                <li>{{data.job_responsibilities}}</li>
                            </ul>
                        </div> -->
                        <div>
                            <h3>Qualification and Technicalities:</h3>
                            <ul>
                                <li>{{data.qualification_level}}</li>
                            </ul>
                        </div>
                        <!-- <div>
                            <h3>Benefits:</h3>
                            <ul>
                                <li>{{data.benefits}}</li>
                            </ul>
                        </div> -->
                        <div class="job-info-visual">
                            <div class="job-info-img"
                                :style="{ 'background-image': 'url(/storage/images/companies/' + data.company.logo + ')' }">
                            </div>
                            <p class="job-info-title">{{data.company.comapny_name}}</p>
                        </div>
                        <div class="job-social-icons">
                            <a href=""><img src="/website/assets/images/whatsapp_icon.png" alt="img"></a>
                            <a href=""><img src="/website/assets/images/facebook_icon.png" alt="img"></a>
                            <a href=""><img src="/website/assets/images/linkedin_icon.png" alt="img"></a>
                            <a href=""><img src="/website/assets/images/github-logo_icon.png" alt="img"></a>
                        </div>
                        <div>
                            <h1 class="company-detail-title">Company Detail</h1>
                            <p>{{data.company.description}}</p>
                        </div>
                        <router-link class="more-detail-anker" data-toggle="collapse" :to="{ name: 'CompanyDetail', params: { id: data.company.id } }">View</router-link>
                        <!-- <a class="more-detail-anker" href="">More Details</a> -->
                    </div>
                </div>
                <div class="px-2">
                    <h1 class="post_new_job_title">Other Jobs</h1>
                    <p class="post_new_job_descrp">
                        This section is other jobs section offered by other companies of same position you are looking
                        for and may or may not better option then this job post and also you can check these jobs.
                    </p>
                </div>
                <!-- Job List Wrap Start -->
                <div class="job-list-wrap">
                    <!-- Job List Start -->
                    <div class="job-list" v-for="(item, index) in related_job.filter(i=>i.id != data.id)" :key="index">
                        <div class="company-logo col-auto py-2">
                            <img :src="'/storage/images/companies/'+item.company.logo" alt="Company Logo">
                            <span class="company-h">{{item.company.comapny_name}}</span>
                        </div>
                        <div class="job-list-content col">
                            <div class="job-header">
                                <h6 class="job-title mb-0">{{item.title}}</h6>
                                <!-- <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i> -->
                                <div class="d-flex align-items-center">
                                    <timeago class="job-post-date" :datetime="item.created_at"></timeago>
                                    <!-- <i class="far fa-heart"></i> -->
                                </div>
                            </div>
                            <p class="job-description">{{item.description}}</p>
                            <div class="job-content-wrap">
                                <div class="job-dynamic-values">
                                    <ul>
                                        <li>
                                            <img src="/website/assets/images/calendar-job.svg" alt="img">
                                            <span>{{item.created_at | moment("YYYY-MM-DD")}}</span>
                                        </li>
                                        <li>
                                            <img src="/website/assets/images/experience-job.svg" alt="">
                                            <span>{{item.experience}}</span>
                                        </li>
                                    </ul>
                                    <ul>
                                        <li>
                                            <img src="/website/assets/images/money-job.svg" alt="">
                                            <span>{{item.salary_range}}</span>
                                        </li>
                                        <li>
                                            <img height="16px" width="10px" style="margin:0px 3px"
                                                src="/website/assets/images/pin.svg" alt="img">
                                            <span>{{item.location}}</span>
                                        </li>
                                    </ul>
                                    <ul>
                                        <li>
                                            <img src="/website/assets/images/suitcase-job.svg" alt="">
                                            <span>{{item.shift}}</span>
                                        </li>
                                        <li>
                                            <img src="/website/assets/images/switch-job.svg" alt="">
                                            <span>{{item.salary_type}}</span>
                                        </li>
                                    </ul>
                                </div>
                                <ul class="job-list-fav m-0">
                                    <!-- <li><a href="#" class="job-wishlist-btn"><i class="fa fa-heart"></i></a></li> -->
                                    <li><router-link class="job-view-btn" data-toggle="collapse" :to="{ name: 'JobDetail', params: { id: item.id } }">View</router-link></li>
                                </ul>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <!-- Job List Wrap Start -->
            <!-- Pagination Start -->
            <div class="bottom-pagination">
                <!-- <pagination></pagination> -->
            </div>
            <!-- Pagination End -->
        </div>
    </div>
</template>
<script>
    import axios from 'axios';
    import WebsiteNavbar from '../partials/navbar.vue';
    // import CompanyNavbar from '../partials/CompanyNavbar.vue';

    export default {
        data() {
            return {
                data: {},
                related_job: '',
                is_auth: '',
                role: '',
                already_applied: ''
            }
        },
        created() {
            this.init_component();
            this.checkAuth()
        },
        components: {
            WebsiteNavbar,
            // CompanyNavbar,

        },
        watch: {
            '$route.path': function (val, oldVal) {
                this.init_component();
            }
        },
        methods: {
            showAlert(){
                Swal.fire({
                    icon: 'error',
                    title: 'Oops...🧐',
                    confirmButtonText: '<a style="color:#ffffff" href="/#/signin">Login?</a>',
                    text: 'Please login before apply to any job!',
                    timer: 3000
                })
            },
            checkAuth(){
                axios.get('/api/check-auth')
                .then((response) => {
                    if(response.data.isAuth == true){
                        this.is_auth = response.data.isAuth
                        axios.get('/api/check-already-applied/'+this.data.id)
                        .then((response) => {
                            this.already_applied = response.data.already_applied
                        });
                        axios.get('/api/check-role')
                        .then((response) => {
                            this.role = response.data
                        });
                    }
                });
            },
            init_component(){
                this.getSingleJobDetail();
                this.checkAuth()
            },
            getSingleJobDetail() {
                axios.get('/api/get-single-job-detail/' + this.$route.params.id)
                    .then((response) => {
                        this.data = response.data.job
                        this.related_job = response.data.related_job
                    });
            },
            applyJob(){
                axios.get('/api/apply-job/'+this.data.id)
                .then((response) => {
                    this.already_applied =  true
                    if(response.data.success == true)
                    {
                        Swal.fire({
                            icon: 'success',
                            title: 'Applied Successfully',
                            confirmButtonText:'<i class="fa fa-thumbs-up"></i> Understood!',
                            text: 'Please be patients we will contact you as soon as possible!',
                        })
                    }
                });
            },
            alreadyAppliedAlert(){
                Swal.fire({
                    icon: 'info',
                    title: 'Already Applied!',
                    confirmButtonText:'<i class="fa fa-thumbs-up"></i> Understood!',
                    text: 'You have already applied for this job wait for response!',
                })
            }
        },
    };

</script>
