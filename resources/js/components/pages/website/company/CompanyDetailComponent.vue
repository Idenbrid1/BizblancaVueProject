<template>
    <div>
        <WebsiteNavbar />
        <CandidateNavbar />
        <div class="container cont-flex PostJobContainer">
            <div class="col-sm-12 col-md-12 col-lg-12 xs-padding pt-3">
                <h1 class="post_new_job_title mx-2">Company Profile</h1>
                <div class="company_detail_info px-2 row no-gutters">
                    <div class="info_left col-12 col-md-4">
                        <figure class="company_image" :style="{ 'background-image': 'url(/storage/images/companies/' + data.logo + ')' }">
                        </figure>
                        <p class="company_name">{{data.company_name}}</p>
                    </div>
                    <div class="info_right col-12 col-md-8">
                        <ul>
                            <li>
                                <img width="20px" height="25px" src="/website/assets/images/founded-icon@2x.png" alt="img">
                                <div>
                                    <span class="info_title_label">Founded</span>
                                    <span class="info_dynamic">{{data.establish_at}}</span>
                                </div>
                            </li>
                            <li>
                                <img width="20px" height="20px" src="/website/assets/images/industry.svg" alt="img">
                                <div>
                                    <span class="info_title_label">Industry</span>
                                    <span class="info_dynamic">{{data.industry}}</span>
                                </div>
                            </li>
                            <li>
                                <img width="20px" height="17px" src="/website/assets/images/multiple-users-silhouette.svg" alt="img">
                                <div>
                                    <span class="info_title_label">No of Employees</span>
                                    <span class="info_dynamic">{{data.no_of_employees}}</span>
                                </div>
                            </li>
                            <li>
                                <img width="20px" height="26px" src="/website/assets/images/ceo.svg" alt="img">
                                <div>
                                    <span class="info_title_label">CEO</span>
                                    <span class="info_dynamic">{{data.ceo}}</span>
                                </div>
                            </li>
                            <li>
                                <img width="20px" height="20px" src="/website/assets/images/city.svg" alt="img">
                                <div>
                                    <span class="info_title_label">City</span>
                                    <span class="info_dynamic">{{data.city}}</span>
                                </div>
                            </li>
                        </ul>
                        <ul>
                            <li>
                                <img width="20px" height="15px" src="/website/assets/images/email@2x.png" alt="img">
                                <div>
                                    <span class="info_title_label">Email</span>
                                    <span class="info_dynamic">{{data.email}}</span>
                                </div>
                            </li>
                            <li>
                                <img width="20px" height="20px" src="/website/assets/images/phone-call.svg" alt="img">
                                <div>
                                    <span class="info_title_label">Phone</span>
                                    <span class="info_dynamic">{{data.phone}}</span>
                                </div>
                            </li>
                            <li>
                                <img width="20px" height="30px" src="/website/assets/images/pin.svg" alt="img">
                                <div>
                                    <span class="info_title_label">Address</span>
                                    <span class="info_dynamic">{{data.address}}</span>
                                </div>
                            </li>
                            <li>
                                <img width="20px" height="20px" src="/website/assets/images/world.svg" alt="img">
                                <div>
                                    <span class="info_title_label">Website </span>
                                    <span class="info_dynamic">{{data.web_link}}</span>
                                </div>
                            </li>
                            <li>
                                <img class="company_social_icons" src="/website/assets/images/whatsapp_icon.png" alt="img">
                                <img class="company_social_icons" src="/website/assets/images/facebook_icon.png" alt="img">
                                <img class="company_social_icons" src="/website/assets/images/linkedin_icon.png" alt="img">
                                <img class="company_social_icons" src="/website/assets/images/twitter_icon.svg" alt="img">
                                <img class="company_social_icons" src="/website/assets/images/github-logo_icon.png" alt="img">
                            </li>
                        </ul>
                    </div>
                </div>
                <div v-if="data.profile_gallery" class="company_images_detail">
                    <img v-for="(item, index) in data.profile_gallery.split(',')" :key="index" :src="'/storage/images/companies/'+item" alt="img">
                </div>
                <div class="px-2">
                    <h1 class="post_new_job_title">Company Detail</h1>
                    <p class="post_new_job_descrp">
                        {{data.description}}
                    </p>
                </div>
                <div class="px-2" v-if="data.profile_video">
                    <h1 class="post_new_job_title">Profile Video</h1>
                    <video controls :src="'/storage/images/companies/'+data.profile_video" class="CompanyProfileVideo"></video>
                </div>
                <div class="px-2">
                    <h1 class="post_new_job_title">Jobs by this Company</h1>
                    <p class="post_new_job_descrp">
                        This section is jobs by this same company you are standing on section offered by other companies
                        of same position you are looking for and may or may not better option then this job post and
                        also you can check these jobs.
                    </p>
                </div>
                <!-- Job List Wrap Start -->
               <div class="job-list-wrap p-0">
                    <div class="job-list" v-for="(item, index) in data.jobs" :key="index">
                        <div class="company-logo col-auto py-2">
                            <img :src="'/storage/images/companies/'+item.bannar" alt="Company Logo">
                            <span class="company-h line-clamp-1">{{item.title}}</span>
                        </div>
                        <div class="job-list-content col">
                            <div class="job-header">
                                <h6 class="job-title mb-0">{{item.title}}</h6>
                                <div class="d-flex align-items-center">
                                    <timeago class="job-post-date" :datetime="item.created_at"></timeago>
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
                                            <img height="16px" width="10px" style="margin:0px 3px;" src="/website/assets/images/pin.svg"
                                                alt="img">
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
                                            <span>{{item.job_type}}</span>
                                        </li>
                                    </ul>
                                </div>
                                <ul class="job-list-fav m-0">
                                    <li>
                                        <router-link class="job-view-btn" data-toggle="collapse"
                                            :to="{ name: 'JobDetail', params: { id: item.id } }">View</router-link>
                                    </li>
                                </ul>
                            </div>

                        </div>
                    </div>
                    <!-- </div> -->
                </div>
                <!-- Job List Wrap Start -->
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
                data: '',
            };
        },
        created() {
            this.getSingleCompanyDetail()
        },
        components: {
            WebsiteNavbar,
            CandidateNavbar,
        },
        methods: {
            getSingleCompanyDetail() {
                axios.get('/get-single-company-detail/'+this.$route.params.id)
                .then((response) => {
                    this.data = response.data
                });
            },
        },
    };

</script>
<style>

</style>
