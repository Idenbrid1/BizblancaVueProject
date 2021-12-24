<template>
    <!-----------------------------------------------------  footer ----------------------------------------------->
    <footer class="footer">
        <div class="container">
            <div class="footer__main row">
                <nav aria-label="main-footer-nav" class="nav col-lg-7 col-12 p-0">
                    <div class="nav__col mb-4">
                        <div class="footer-heading-div mb-2">
                            <div class="mr-2 footer-title-effect"></div>
                            <span class="nav__col-title">JOBS</span>
                        </div>
                        <router-link class="nav__item" :to="{ name: 'JobSearch' }">Job Search</router-link>
                        <router-link class="nav__item" :to="{ name: 'CandidateSearch' }">Looking For Candidate
                        </router-link>
                        <router-link class="nav__item" :to="{ name: 'CompanySearch' }">Looking For Company</router-link>
                    </div>
                    <div class="nav__col mb-4">
                        <div class="footer-heading-div mb-2">
                            <div class="mr-2 footer-title-effect"></div>
                            <span class="nav__col-title">RECRUITER</span>
                        </div>
                        <router-link class="nav__item" :to="{ name: 'CompanyPostJob' }">Post a Job</router-link>
                        <router-link class="nav__item" :to="{ name: 'CandidateSearch' }">Cv Search</router-link>
                        <router-link class="nav__item" :to="{ name: 'CandidateDashboard' }">Cv Create</router-link>
                    </div>
                    <div class="nav__col mb-4">
                        <div class="footer-heading-div mb-2">
                            <div class="mr-2 footer-title-effect"></div>
                            <span class="nav__col-title">Info</span>
                        </div>
                        <router-link class="nav__item" :to="{ name: 'CompanySearch' }">For Companies</router-link>
                        <router-link class="nav__item" :to="{ name: 'CandidateSearch' }">For Candidate</router-link>
                    </div>
                    <div class="nav__col mb-4">
                        <div class="footer-heading-div mb-2">
                            <div class="mr-2 footer-title-effect"></div>
                            <span class="nav__col-title">HELP</span>
                        </div>
                        <router-link class="nav__item" :to="{ name: 'Faq' }">General</router-link>
                        <router-link class="nav__item" :to="{ name: 'Faq' }">Payment</router-link>
                        <router-link class="nav__item" :to="{ name: 'Faq' }">Refund</router-link>
                        <router-link class="nav__item" :to="{ name: 'Faq' }">Products&Services</router-link>
                        <router-link class="nav__item" :to="{ name: 'Faq' }">Registration Issue</router-link>
                        <router-link class="nav__item" :to="{ name: 'Faq' }">Technical Issue</router-link>
                    </div>
                    <div class="nav__col mb-4">
                        <div class="footer-heading-div mb-2">
                            <div class="mr-2 footer-title-effect"></div>
                            <span class="nav__col-title">RECRUITER</span>
                        </div>
                        <router-link class="nav__item" :to="{ name: 'CompanyPostJob' }">Post a Job</router-link>
                        <router-link class="nav__item" :to="{ name: 'CandidateSearch' }">Cv Search</router-link>
                        <router-link class="nav__item" :to="{ name: 'CandidateDashboard' }">Cv Create</router-link>
                    </div>
                    <div class="nav__col mb-4">
                        <div class="footer-heading-div mb-2">
                            <div class="mr-2 footer-title-effect"></div>
                            <span class="nav__col-title">More from BizBlanca</span>
                        </div>
                        <router-link class="nav__item" :to="{ name: 'AboutUs' }">About us</router-link>
                        <router-link class="nav__item" :to="{ name: 'Faq' }">FAQ's</router-link>
                        <router-link class="nav__item" :to="{ name: 'ContactUs' }">Contact Us</router-link>
                        <router-link class="nav__item" :to="{ name: 'TermsCondition' }">Terms & Conditions
                        </router-link>
                        <router-link class="nav__item" :to="{ name: 'PrivacyPolicy' }">Privacy Policy</router-link>
                        <router-link class="nav__item" :to="{ name: 'NewsDetail' }">News</router-link>
                    </div>
                </nav>
                <div class="col-lg-4 col-12 offset-lg-1 p-0">
                    <div class="footer-heading-div mb-2">
                        <div class="mr-2 footer-title-effect"></div>
                        <h3 class="h4 m-0">NEWS LETTER</h3>
                    </div>
                    <p>Please enter your email to subscribe our news letter!</p>
                    <input type="email" class="form-control news-letter-sub pl-2" placeholder="Enter Email"
                        maxlength="50" v-model="record.email" required="">
                    <small>
                        <span v-if="errors.email != null" class="text-danger">
                            {{errors.email[0]}}
                        </span>
                    </small>
                    <div class="footer__sign-up">
                        <looping-rhombuses-spinner :animation-duration="1800" :size="120" color="#ffffff"
                            v-if="spinnerSubmit == true" />
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
                    <!-- <router-link :to="{ name: 'BlogDetail' }" class="nav__item">Blogs</router-link><span class="seprate-line"></span> -->
                    <!-- <router-link :to="{ name: 'NewsDetail' }" class="nav__item">News</router-link><span class="seprate-line"></span> -->
                    <router-link class="nav__item" :to="{ name: 'AboutUs' }">About</router-link>
                </div>
            </div>
        </div>
        <div class="copyright-main">
            <div class="container company-rights py-1">
                <a target="_blank" href="https://idenbrid.com/">
                    support@bizblanca.com</a>
                <a target="_blank" href="https://idenbrid.com/">
                    © IDENBRID INC.™, 2021. All rights reserved.</a>
                <ul class="social-icons-footer">
                    <li><a target="_blank" href="https://www.facebook.com/bizblanca/">
                            <i class="fab fa-facebook-square"></i></a></li>
                    <li><a target="_blank" href="https://www.linkedin.com/company/bizblanca/">
                            <i class="fab fa-linkedin"></i></a></li>
                    <li><a target="_blank" href="https://api.whatsapp.com/send?phone=+923064041221">
                            <i class="fab fa-whatsapp-square"></i></a></li>
                    <li><a target="_blank" href="https://www.instagram.com/bizblanca/">
                            <i class="fab fa-instagram-square"></i></a></li>
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
                axios.post('/api/footer/news_letter', this.record)
                    .then((response) => {
                        if (response.data.success == true) {
                            Swal.fire({
                                icon: 'success',
                                title: 'Subscribe',
                                text: 'Successfully Subscribed Newsletter! Thanks',
                            })
                            this.errors = []
                            this.spinnerSubmit = false
                        } else {
                            this.errors = response.data.errors
                            this.spinnerSubmit = false

                        }
                    });
            },
        }
    };

</script>
