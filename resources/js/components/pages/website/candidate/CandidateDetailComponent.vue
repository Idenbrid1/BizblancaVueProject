<template>
    <div>
        <WebsiteNavbar />
        <!-- <CompanyNavbar /> -->
        <div class="candidate-profile-container container">
            <div class="row no-gutters">
                <div class="col-5 col-md-3">
                    <div class="candidate-pic-detail">
                        <div class="candidate-detail-img" v-if="data.profile_image" :style="{ 'background-image': 'url(/storage/images/candidates/profile/' + data.profile_image + ')' }"></div>
                        <div class="candidate-detail-img" v-else> not avaiable</div>
                        <a class="candidate-send-msg" href="">
                            <img class="ionic-send-msg" src="/website/assets/images/Icon ionic-ios-send.svg" alt="">
                            Send Message
                        </a>
                    </div>
                </div>
                <div class="col-7 col-md-9 candidate-detail-wrap">
                    <div>
                        <ul class="candidate-detail-list">
                            <li>
                                <p>{{data.full_name}}</p>
                            </li>
                            <li class="v-on-d"><img src="/website/assets/images/pin-job.svg" alt=""> {{data.city}}</li>
                            <!-- <li class="v-on-d"><i class="far fa-heart"></i> Add to Wishlist</li> -->
                        </ul>
                        <p class="candidate-designation">{{data.bio}}</p>
                        <ul class="v-on-m m-0 p-0 pt-2 candidate-detail-list-m">
                            <li><img src="/website/assets/images/pin-job.svg" alt=""> {{data.city}}</li>
                            <!-- <li><i class="far fa-heart"></i> Add to Wishlist</li> -->
                        </ul>
                    </div>
                    <p class="detail-label"><i class="fas fa-user pr-2"></i> Detailed Information</p>
                </div>
            </div>
            <div class="candidate-profile-detail-wrap">
                <ul class="row no-gutters candidate-profile-detail">
                    <li class="col-12 col-md-3 candidate-detail-label">CONTACT INFORMATION:</li>
                    <li class="col-12 col-md-9 candidate-detail-info">
                        <ul class="candidate-info">
                            <li><span>Phone:</span>{{data.phone}}</li>
                            <li><span>Address:</span>{{data.location}}</li>
                            <li><span>Email:</span><u>{{data.email}}</u></li>
                        </ul>
                    </li>
                </ul>
                <ul class="row no-gutters basic-detail-title candidate-profile-detail">
                    <li class="col-12 col-md-3 candidate-detail-label">BASIC INFORMATION:</li>
                    <li class="col-12 col-md-9 candidate-detail-info">
                        <ul class="candidate-info">
                            <li><span>Date of Birth:</span>{{data.date_of_birth}}</li>
                            <li><span>Gender:</span>{{data.gender}}</li>
                            <li><span>City:</span>{{data.city}}</li>
                            <li><span>Zip Code:</span>{{data.zip_code}}</li>
                            <li><span>CNIC:</span>{{data.cnic}}</li>
                            <li><span>Bio:</span>{{data.bio}}</li>
                        </ul>
                    </li>
                </ul>
                <ul class="row no-gutters education-detail-title candidate-profile-detail">
                    <li class="col-12 col-md-3 candidate-detail-label">EDUCATION:</li>
                    <li class="col-12 col-md-9 candidate-detail-info">
                        <ul class="candidate-info">
                            <li v-for="(edu, index) in data.candidate_education" :key="index"><span>{{edu.school_type}}:</span>{{edu.start_date}} to {{edu.end_date}} - {{edu.school_name}}</li>
                            <!-- <li><span>Intermediate:</span>2014 to 2016 - Punjab Group of Colleges</li>
                            <li><span>Bachelors:</span>2016 to 2020 - BS (Computer Science) - University of South Asia,
                                Cantt Campus</li> -->
                        </ul>
                    </li>
                </ul>
                <ul class="row no-gutters work-detail-title candidate-profile-detail">
                    <li class="col-12 col-md-3 candidate-detail-label">WORK EXPERIENCE:</li>
                    <li class="col-12 col-md-9 candidate-detail-info">
                        <ul class="candidate-info">
                            <li v-for="(com, index) in data.candidate_experience" :key="index"><span>{{com.company_name}}:</span>{{com.designation}} - {{com.start_date}} to {{com.end_date}}</li>
                            <!-- <li><span>Powerstar Group Limited:</span>Graphic Designer - 2 months</li>
                            <li><span>IDENBRID:</span>UI/UX Designer - Working</li> -->
                        </ul>
                    </li>
                </ul>
                <ul class="row no-gutters awards-detail-title candidate-profile-detail">
                    <li class="col-12 col-md-3 candidate-detail-label">SKILLS:</li>
                    <li class="col-12 col-md-9 candidate-detail-info">
                        <ul class="candidate-info">
                            <li class="skills-candidate">
                                <div v-for="(skills, index) in data.candidate_skills" :key="index">{{skills.name}}</div>
                            </li>
                        </ul>
                    </li>
                </ul>
                <ul class="row no-gutters awards-detail-title candidate-profile-detail">
                    <li class="col-12 col-md-3 candidate-detail-label">AWARDS:</li>
                    <li class="col-12 col-md-9 candidate-detail-info">
                        <ul class="candidate-info">
                            <li v-for="(award, index) in data.candidate_awards" :key="index"><span>{{award.name}}:</span>{{award.date}}</li>
                        </ul>
                    </li>
                </ul>
                <ul class="row no-gutters language-detail-title candidate-profile-detail">
                    <li class="col-12 col-md-3 candidate-detail-label">LANGUAGES:</li>
                    <li class="col-12 col-md-9 candidate-detail-info">
                        <ul class="candidate-info">
                            <li  class="skills-candidate">
                                <div v-for="(language, index) in data.candidate_language" :key="index">{{language.name}}</div>
                            </li>
                        </ul>
                    </li>
                </ul>
                <!-- <ul class="row no-gutters portfolio-detail-title candidate-profile-detail">
                    <li class="col-12 col-md-3 candidate-detail-label">PORTFOLIO:</li>
                    <li class="col-12 col-md-9 candidate-detail-info">
                        <ul class="candidate-info">
                            <li><a href="" target="_blank">https://www.behance.net/abdullahnasir8</a></li>
                        </ul>
                    </li>
                </ul> -->
                <ul class="row no-gutters projects-detail-title candidate-profile-detail">
                    <li class="col-12 col-md-3 candidate-detail-label">PROJECTS:</li>
                    <li class="col-12 col-md-9 candidate-detail-info">
                        <ul class="candidate-info">
                            <li v-for="(project, index) in data.candidate_projects" :key="index"><a :href="project.link" target="_blank">{{project.name}},</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
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
                related_candidate: '',
            }
        },
        created() {
            this.getSingleCandidateDetail()
        },
        components: {
            WebsiteNavbar,
            // CompanyNavbar,
        },
        methods: {
            getSingleCandidateDetail() {  
                axios.get('/get-single-candidate-detail/' + this.$route.params.id)
                    .then((response) => {
                        this.data = response.data.job
                        this.related_candidate = response.data.related_candidate
                    });
            },
        },
    };

</script>
