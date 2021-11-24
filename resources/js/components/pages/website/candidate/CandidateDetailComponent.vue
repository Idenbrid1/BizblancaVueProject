<template>
    <div>
        <WebsiteNavbar />
        <div class="candidate-profile-container container">
            <div class="row no-gutters">
                <div class="col-5 col-md-3">
                    <div class="candidate-pic-detail">
                        <div class="candidate-detail-img"
                            style="background-image:url('/website/assets/images/Profile-detail-pic.png')"></div>
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
                                <p>Muhammad Ahmad</p>
                            </li>
                            <li class="v-on-d"><img src="/website/assets/images/pin-job.svg" alt=""> Lahore, Pakistan</li>
                            <li class="v-on-d"><i class="far fa-heart"></i> Add to Wishlist</li>
                        </ul>
                        <p class="candidate-designation">Web Developer</p>
                        <ul class="v-on-m m-0 p-0 pt-2 candidate-detail-list-m">
                            <li><img src="/website/assets/images/pin-job.svg" alt=""> Lahore, Pakistan</li>
                            <li><i class="far fa-heart"></i> Add to Wishlist</li>
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
                            <li><span>Phone:</span>+92 300 123 4567</li>
                            <li><span>Address:</span>178B - Lalazar Garden, Phase 2, Lahore</li>
                            <li><span>Email:</span><u>abdullah.idenbrid@gmail.com</u></li>
                        </ul>
                    </li>
                </ul>
                <ul class="row no-gutters basic-detail-title candidate-profile-detail">
                    <li class="col-12 col-md-3 candidate-detail-label">BASIC INFORMATION:</li>
                    <li class="col-12 col-md-9 candidate-detail-info">
                        <ul class="candidate-info">
                            <li><span>Date of Birth:</span>25 May, 1993</li>
                            <li><span>Gender:</span>Male</li>
                            <li><span>City:</span>Lahore</li>
                            <li><span>Zip Code:</span>54000</li>
                            <li><span>CNIC:</span>35202-0008766-0</li>
                            <li><span>Bio:</span>I am Graduated from University of South Asia, I have done BS Computer
                                Science. My expertise are UI/UX Designing, Product Designing, Graphic Designing, HTML,
                                CSS.</li>
                        </ul>
                    </li>
                </ul>
                <ul class="row no-gutters education-detail-title candidate-profile-detail">
                    <li class="col-12 col-md-3 candidate-detail-label">EDUCATION:</li>
                    <li class="col-12 col-md-9 candidate-detail-info">
                        <ul class="candidate-info">
                            <li><span>Matriculation:</span>2012 to 2014 - Lahore Children High School</li>
                            <li><span>Intermediate:</span>2014 to 2016 - Punjab Group of Colleges</li>
                            <li><span>Bachelors:</span>2016 to 2020 - BS (Computer Science) - University of South Asia,
                                Cantt Campus</li>
                        </ul>
                    </li>
                </ul>
                <ul class="row no-gutters work-detail-title candidate-profile-detail">
                    <li class="col-12 col-md-3 candidate-detail-label">WORK EXPERIENCE:</li>
                    <li class="col-12 col-md-9 candidate-detail-info">
                        <ul class="candidate-info">
                            <li><span>WORK EXPERIENCE:</span>UI/UX Designer - 6 months</li>
                            <li><span>Powerstar Group Limited:</span>Graphic Designer - 2 months</li>
                            <li><span>IDENBRID:</span>UI/UX Designer - Working</li>
                        </ul>
                    </li>
                </ul>
                <ul class="row no-gutters awards-detail-title candidate-profile-detail">
                    <li class="col-12 col-md-3 candidate-detail-label">SKILLS:</li>
                    <li class="col-12 col-md-9 candidate-detail-info">
                        <ul class="candidate-info">
                            <li class="skills-candidate">
                                <div>Product Designing</div>
                                <div>UI/UX Designing</div>
                                <div>Graphic Designing</div>
                                <div>HTML</div>
                                <div>CSS</div>
                            </li>
                        </ul>
                    </li>
                </ul>
                <ul class="row no-gutters awards-detail-title candidate-profile-detail">
                    <li class="col-12 col-md-3 candidate-detail-label">AWARDS:</li>
                    <li class="col-12 col-md-9 candidate-detail-info">
                        <ul class="candidate-info">
                            <li><span>Best Entrepreneurship Gala Seller:</span>2020</li>
                            <li><span>Best Photographer of the Year:</span>2019</li>
                            <li><span>Brainstorming Champion:</span>2019</li>
                        </ul>
                    </li>
                </ul>
                <ul class="row no-gutters language-detail-title candidate-profile-detail">
                    <li class="col-12 col-md-3 candidate-detail-label">LANGUAGES:</li>
                    <li class="col-12 col-md-9 candidate-detail-info">
                        <ul class="candidate-info">
                            <li class="skills-candidate">
                                <div>English</div>
                                <div>Urdu</div>
                                <div>Punjabi</div>
                            </li>
                        </ul>
                    </li>
                </ul>
                <ul class="row no-gutters portfolio-detail-title candidate-profile-detail">
                    <li class="col-12 col-md-3 candidate-detail-label">PORTFOLIO:</li>
                    <li class="col-12 col-md-9 candidate-detail-info">
                        <ul class="candidate-info">
                            <li><a href="" target="_blank">https://www.behance.net/abdullahnasir8</a></li>
                        </ul>
                    </li>
                </ul>
                <ul class="row no-gutters projects-detail-title candidate-profile-detail">
                    <li class="col-12 col-md-3 candidate-detail-label">PROJECTS:</li>
                    <li class="col-12 col-md-9 candidate-detail-info">
                        <ul class="candidate-info">
                            <li><a href="" target="_blank">https://github.com/abdulla20963</a></li>
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

            }
        },
        mounted() {

        },
        components: {
            WebsiteNavbar,
        },
        methods: {

        },
    };

</script>
