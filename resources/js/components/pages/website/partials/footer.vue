<template>
    <!-----------------------------------------------------  footer ----------------------------------------------->
    <footer class="footer">
        <div class="container">
            <div class="footer__main row">
                <nav aria-label="main-footer-nav" class="nav col-lg-7 col-12 p-0">
                    <div class="nav__col mb-4">
                        <div class="footer-heading-div mb-2">
                            <div class="mr-2 footer-title-effect"></div>
                            <span class="nav__col-title">For Employers</span>
                        </div>
                        <router-link class="nav__item" :to="{ name: 'ForCompanies' }">Authorise Timesheets</router-link>
                        <router-link class="nav__item" :to="{ name: 'ForCompanies' }">Permanent Recruitment
                        </router-link>
                        <router-link class="nav__item" :to="{ name: 'ForCompanies' }">Temporary Recruitment
                        </router-link>
                        <router-link class="nav__item" :to="{ name: 'ForCompanies' }">Executive Search</router-link>
                        <!-- <router-link class="nav__item" :to="{ name: 'ForCompanies' }">All Services</router-link> -->
                    </div>
                    <div class="nav__col mb-4">
                        <div class="footer-heading-div mb-2">
                            <div class="mr-2 footer-title-effect"></div>
                            <span class="nav__col-title">For Candidates</span>
                        </div>
                        <router-link class="nav__item" :to="{ name: 'ForCompanies' }">Submit Timesheets</router-link>
                        <router-link class="nav__item" :to="{ name: 'ForCompanies' }">Find a Role</router-link>
                        <router-link class="nav__item" :to="{ name: 'ForCompanies' }">Work with a Consultant
                        </router-link>
                        <router-link class="nav__item" :to="{ name: 'ForCompanies' }">Learning &amp; Development
                        </router-link>
                    </div>
                    <div class="nav__col mb-4">
                        <div class="footer-heading-div mb-2">
                            <div class="mr-2 footer-title-effect"></div>
                            <span class="nav__col-title">Our Expertise</span>
                        </div>
                        <a class="nav__item" href="#">Accountancy &amp; Finance</a>
                        <a class="nav__item" href="#">Business Support</a>
                        <a class="nav__item" href="#">Education</a>
                        <a class="nav__item" href="#">Technology</a>
                        <!-- <a class="nav__item" href="#">All Sectors</a> -->
                    </div>
                    <div class="nav__col mb-4">
                        <div class="footer-heading-div mb-2">
                            <div class="mr-2 footer-title-effect"></div>
                            <span class="nav__col-title">Resources</span>
                        </div>
                        <a class="nav__item" href="#">Articles</a>
                        <a class="nav__item" href="#">eBooks, Guides &amp; Tools</a>
                        <a class="nav__item" href="#">Events</a>
                    </div>
                    <div class="nav__col mb-4">
                        <div class="footer-heading-div mb-2">
                            <div class="mr-2 footer-title-effect"></div>
                            <span class="nav__col-title">About Bizblanca</span>
                        </div>
                        <a class="nav__item" href="#">Our Story</a>
                        <a class="nav__item" href="#">Our Social Impact</a>
                        <a class="nav__item" href="#">The Reed Group</a>
                        <a class="nav__item" href="#">Work for Reed</a>
                        <!-- <a class="nav__item" href="#" target="_blank">Franchise Partnerships</a> -->
                    </div>
                    <div class="nav__col mb-4">
                        <div class="footer-heading-div mb-2">
                            <div class="mr-2 footer-title-effect"></div>
                            <span class="nav__col-title">Contact</span>
                        </div>
                        <a class="nav__item" href="#">Find a Reed Office</a>
                        <a class="nav__item" href="#">Get In Touch</a>
                        <a href="#" class="nav__item" target="_blank">Facebook</a>
                        <!-- <a href="#" class="nav__item" target="_blank">Twitter</a> -->
                        <a href="#" class="nav__item" target="_blank">LinkedIn</a>
                    </div>
                </nav>
                <div class="col-lg-4 col-12 offset-lg-1 p-0">
                    <div class="footer-heading-div mb-2">
                        <div class="mr-2 footer-title-effect"></div>
                        <h3 class="h4 m-0">NEWS LETTER</h3>
                    </div>
                    <p>Please enter your email to subscribe our news letter!</p>
                    <input type="email" class="form-control news-letter-sub pl-2" placeholder="Enter Email" maxlength="50" v-model="record.email" required="">
                    <small>
                        <span v-if="errors.email != null" class="text-danger">
                            {{errors.email[0]}}
                        </span>
                    </small>
                    <div class="footer__sign-up">
                        <looping-rhombuses-spinner :animation-duration="1800" :size="120" color="#ffffff" v-if="spinnerSubmit == true" />
                        <a v-else class="mail-subscribe-btn" @click="subscribe()">Subscribe</a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div role="navigation" class="footer__links col-12 p-0">
                    <router-link :to="{ name: 'PrivacyPolicy' }" class="nav__item"> Privacy Policy</router-link><span
                        class="seprate-line"></span>
                    <router-link :to="{ name: 'TermsCondition' }" class="nav__item">Terms &amp; Conditions</router-link>
                    <span class="seprate-line"></span>
                    <router-link :to="{ name: 'ContactUs' }" class="nav__item">Contact Us</router-link><span
                        class="seprate-line"></span>
                    <router-link :to="{ name: 'Faq' }" class="nav__item">FAQs</router-link><span
                        class="seprate-line"></span>
                    <router-link :to="{ name: 'Services' }" class="nav__item">Services</router-link><span
                        class="seprate-line"></span>
                    <a target="_blank" href="#" class="nav__item">Blogs</a><span class="seprate-line"></span>
                    <a class="nav__item" href="#">Sitemap</a>
                </div>
            </div>
        </div>
        <div class="copyright-main">
            <div class="container company-rights py-1">
                <a href="https://idenbrid.com/">
                    support@bizblanca.com</a>
                <a href="https://idenbrid.com/">
                    © IDENBRID INC.™, 2021. All rights reserved.</a>
                <ul class="social-icons-footer">
                    <li><a href="https://www.facebook.com/bizblanca/"><i class="fab fa-facebook-square"></i></a></li>
                    <li><a href="https://www.linkedin.com/company/bizblanca/"><i class="fab fa-linkedin"></i></a></li>
                    <li><a href="https://api.whatsapp.com/send?phone=+923404913508"><i
                                class="fab fa-whatsapp-square"></i></a></li>
                    <li><a href="https://www.instagram.com/bizblanca/"><i class="fab fa-instagram-square"></i></a></li>
                </ul>
            </div>
        </div>
    </footer>
    <!-------------------------         footer-end     --------------------------->
</template>
<script>
    import axios from 'axios';
    import {
        LoopingRhombusesSpinner
    } from 'epic-spinners'
    export default {
        data() {
            return {
                record: {
                    email: '',
                },
                errors: [],
                spinnerSubmit: false,

            };
        },
        components: {
            LoopingRhombusesSpinner,
        },
        methods: {
            subscribe() {
                this.spinnerSubmit = true
                axios.post('/footer/news_letter', this.record)
                .then((response) => {
                    if(response.data.success == true){
                        Swal.fire({
                            icon: 'success',
                            title: 'Subscribe',
                            text: 'Successfully Subscribed Newsletter! Thanks',
                        })
                        this.errors = []
                        this.spinnerSubmit = false
                    }else{
                        this.errors = response.data.errors
                        this.spinnerSubmit = false

                    }
                });
            },
        }
    };

</script>
