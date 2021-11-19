<template>
    <div>
        <WebsiteNavbar />
        <CompanyNavbar />
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
                <!-- <div class="px-2">
                    <h1 class="post_new_job_title">About i2c</h1>
                    <p class="post_new_job_descrp">
                        i2c’s mission is to empower our clients to create differentiated payment and banking experiences
                        for consumers and businesses around the world. We build the payment technology and services
                        global brands, financial institutions, corporations, and governments need to deliver
                        high-impact, personalized payments and commerce solutions that build loyalty and engage today’s
                        consumers in new ways, creating more profitable relationships. i2c’s highly-configurable,
                        cloud-based Agile Processing payments platform provides unparalleled flexibility, agility, and
                        reliability so companies can quickly and cost-effectively deploy differentiated, feature-rich
                        credit, debit, and prepaid programs anywhere in the world. Our customers rely on us to support
                        the highly-differentiated needs of cardholders in 216 countries and territories across 24 time
                        zones.
                    </p>
                </div> -->
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
                <div class="job-list-wrap">
                    <!-- Job List Start -->
                    <div class="job-list" v-for="(item, index) in data.jobs" :key="index">
                        <div class="company-logo col-auto py-2">
                            <img :src="'/storage/images/companies/'+item.bannar" alt="Company Logo">
                            <span class="company-h">{{item.title}}</span>
                        </div>
                        <div class="job-list-content col">
                            <div class="job-header">
                                <h6 class="job-title mb-0">{{item.title}}</h6>
                                <!-- <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i> -->
                            </div>
                            <!-- <span class="job-post-date">20 hours ago</span> -->
                            <p class="job-description">{{item.description}}</p>
                            <ul class="job-list-meta m-0 border-post">
                                <li><i class="fa fa-calendar"></i>{{item.created_at | moment("YYYY-MM-DD")}}</li>
                                <li><i class="fal fa-address-card"></i>{{item.experience}}</li>
                            </ul>
                            <ul class="job-list-meta m-0 border-post">
                                <li><i class="fal fa-money-bill-alt"></i>{{item.salary_range}}</li>
                                <li><i class="fa fa-map-marker"></i>{{item.location}}</li>
                            </ul>
                            <ul class="job-list-meta m-0">
                                <li><i class="fal fa-laptop-house"></i>{{item.shift}}</li>
                                <li><i class="fal fa-clock"></i>{{item.salary_type}}</li>
                            </ul>
                            <ul class="job-list-fav m-0">
                                <!-- <li><a href="#" class="job-wishlist-btn"><i class="fa fa-heart"></i></a></li> -->
                                <li><a href="#" class="job-view-btn">View</a></li>
                            </ul>
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
    </div>
</template>
<script>
    import axios from 'axios';
    import WebsiteNavbar from '../partials/navbar.vue';
    import CompanyNavbar from '../partials/CompanyNavbar.vue';
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
            CompanyNavbar,
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
