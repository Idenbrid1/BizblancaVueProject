<template>
    <div>
        <WebsiteNavbar />
        <div class="candidate-profile-container container">
            <div class="row no-gutters">
                <div class="col-5 col-md-3">
                    <div class="candidate-pic-detail">
                        <div class="candidate-detail-img" v-if="data.profile_image" :style="{ 'background-image': 'url(/storage/images/candidates/profile/' + data.profile_image + ')' }"></div>
                        <div class="candidate-detail-img" v-else> not avaiable</div>
                    </div>
                </div>
                <div class="col-7 col-md-9 candidate-detail-wrap">
                    <div>
                        <ul class="candidate-detail-list">
                            <li>
                                <p>{{data.full_name}}</p>
                            </li>
                            <li class="v-on-d"><img src="/website/assets/images/pin-job.svg" alt="img">{{data.city}}</li>
                            <!-- <li class="v-on-d"><a @click="download()"><i class="fas fa-download"></i> Download</a></li> -->
                        </ul>
                        <p class="candidate-designation">{{data.bio}}</p>
                        <ul class="v-on-m m-0 p-0 pt-2 candidate-detail-list-m">
                            <li><img src="/website/assets/images/pin-job.svg" alt="">{{data.city}}</li>
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
                            <li><span>Address:</span>{{data.city}}</li>
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
                            <li><span>Zip Code:</span>{{data.zipcode}}</li>
                            <li><span>CNIC:</span>{{data.cnic}}</li>
                            <li><span>Bio:</span>{{data.bio}}</li>
                        </ul>
                    </li>
                </ul>
                <ul class="row no-gutters education-detail-title candidate-profile-detail">
                    <li class="col-12 col-md-3 candidate-detail-label">EDUCATION:</li>
                    <li class="col-12 col-md-9 candidate-detail-info">
                        <ul class="candidate-info">
                            <li v-for="edu in data.candidate_education"><span>{{edu.school_name}}:</span>{{edu.start_date}} - {{edu.end_date}}</li>
                        </ul>
                    </li>
                </ul>
                <ul class="row no-gutters work-detail-title candidate-profile-detail">
                    <li class="col-12 col-md-3 candidate-detail-label">WORK EXPERIENCE:</li>
                    <li class="col-12 col-md-9 candidate-detail-info">
                        <ul class="candidate-info">
                            <li v-for="exp in data.candidate_experience"><span>{{exp.company_name}}:</span>{{exp.designation}} - <timeago v-if="exp.end_date != null" :datetime="exp.start_date"></timeago><p style="display:inline-block" v-if="exp.end_date == null">Currently Working</p></li>
                        </ul>
                    </li>
                </ul>
                <ul class="row no-gutters awards-detail-title candidate-profile-detail">
                    <li class="col-12 col-md-3 candidate-detail-label">SKILLS:</li>
                    <li class="col-12 col-md-9 candidate-detail-info">
                        <ul class="candidate-info">
                            <li class="skills-candidate">
                                <div v-for="skill in data.candidate_skills">{{skill.name}}</div>
                            </li>
                        </ul>
                    </li>
                </ul>
                <ul class="row no-gutters awards-detail-title candidate-profile-detail">
                    <li class="col-12 col-md-3 candidate-detail-label">AWARDS:</li>
                    <li class="col-12 col-md-9 candidate-detail-info">
                        <ul class="candidate-info">
                            <li v-for="awd in data.candidate_awards"><span>{{awd.name}}</span>{{awd.date}}</li>
                        </ul>
                    </li>
                </ul>
                <ul class="row no-gutters language-detail-title candidate-profile-detail">
                    <li class="col-12 col-md-3 candidate-detail-label">LANGUAGES:</li>
                    <li class="col-12 col-md-9 candidate-detail-info">
                        <ul class="candidate-info">
                            <li class="skills-candidate">
                                <div v-for="lang in data.candidate_language">{{lang.name}}</div>
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
                           <li v-for="pro in data.candidate_projects"><a>{{pro.link}}</a></li>
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
    export default {
        data() {
            return {
                data: {},
            }
        },
        created() {
            this.getSingleCandidateDetail()
        },
        components: {
            WebsiteNavbar,
        },
        methods: {
            getSingleCandidateDetail() {  
                axios.get('/get-single-candidate-detail/' + this.$route.params.id)
                    .then((response) => {
                        this.data = response.data.job
                    });
            },
            download(){
                window.open('/download-cv/', '_blank')
            },
        },
    };

</script>
