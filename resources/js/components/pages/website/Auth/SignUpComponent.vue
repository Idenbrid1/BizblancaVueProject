<template>
    <div>
        <WebsiteNavbar />
        <div class="register-container py-2">
            <div class="container p-0">
                <div class="login-wrapper row m-0">
                    <section class="col-md-4 col-12 p-0 v-on-d">
                        <div class="left-register">
                            <img src="/website/assets/images/login-profile.png" alt="img" />
                            <span>Hello Friend</span>
                            <p>
                                To keep connected with us please login with your personal info
                            </p>
                        </div>
                    </section>
                    <div class="col-md-8 col-12 right-register">
                        <div class="login-text">
                            <h1>Create Account</h1>
                            <ul class="nav nav-tabs border-0" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link candidate-register active" data-toggle="tab"
                                        href="#candidate-tab">Candidate</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link company-register" data-toggle="tab"
                                        href="#company-tab">Company</a>
                                </li>
                            </ul>
                        </div>
                        <div class="tab-content w-100">
                            <div id="candidate-tab" class="tab-pane active">
                                <form method="POST" @submit.prevent="registerCandidate">
                                    <div class="row m-0">
                                        <div class="col-12 p-0">
                                            <section class="row m-0">
                                                <div class="col-12 register-tab">
                                                    <div class="login-feilds">
                                                        <div class="form-group">
                                                            <input class="is-invali" type="text"
                                                                v-model="candidate_record.name" placeholder="Your Name"
                                                                name="name" id="name-input" />
                                                            <small>
                                                                <span v-if="errors.name != null"
                                                                    class="text-danger float-left">
                                                                    {{errors.name[0]}}
                                                                </span>
                                                            </small>
                                                        </div>
                                                        <br />
                                                        <div class="form-group">
                                                            <input class="is-invali" type="email"
                                                                v-model="candidate_record.email" placeholder="Email"
                                                                name="email" id="email-input" />
                                                            <small>
                                                                <span v-if="errors.email != null"
                                                                    class="text-danger float-left">
                                                                    {{errors.email[0]}}
                                                                </span>
                                                            </small>
                                                        </div>
                                                        <br />
                                                        <div class="form-group">
                                                            <input class="is-invali" type="number"
                                                                v-model="candidate_record.phone"
                                                                placeholder="Phone Number" name="phone"
                                                                id="phone-no-input" />
                                                            <small>
                                                                <span v-if="errors.phone != null"
                                                                    class="text-danger float-left">
                                                                    {{errors.phone[0]}}
                                                                </span>
                                                            </small>
                                                        </div>
                                                        <br />
                                                        <div class="form-group">
                                                            <input class="is-invali" type="password"
                                                                v-model="candidate_record.password"
                                                                placeholder="Password" name="password"
                                                                id="password-input" />
                                                            <small>
                                                                <span v-if="errors.password != null"
                                                                    class="text-danger float-left">
                                                                    {{errors.password[0]}}
                                                                </span>
                                                            </small>
                                                        </div>
                                                        <br />
                                                        <div class="form-group">
                                                            <input class="is-invali" type="password"
                                                                v-model="candidate_record.confirm_password"
                                                                placeholder="Confirm Password"
                                                                name="password_confirmation"
                                                                id="confirm-password-input" />
                                                            <small>
                                                                <span v-if="errors.confirm_password != null"
                                                                    class="text-danger float-left">
                                                                    {{errors.confirm_password[0]}}
                                                                </span>
                                                            </small>
                                                        </div>
                                                        <br />
                                                    </div>
                                                    <div class="login-button">
                                                        <button>Sign Up</button>
                                                        <!-- <a href="#">or<br />
                                                            Sign up with</a> -->
                                                    </div>
                                                    <div class="direct-login">
                                                        <ul class="direct-login-icons">
                                                            <li>
                                                                <a href="auth/google"><img src="/website/assets/images/search.svg" alt="google" /></a>
                                                            </li>
                                                            <!-- <li>
                                                                <a ><img src="/website/assets/images/facebookLogin.svg" alt="facebook" /></a>
                                                            </li> -->
                                                            <li>
                                                                <a href="auth/linkedin"><img src="/website/assets/images/linkedin-round.svg" alt="linkedin" /></a>
                                                            </li>
                                                            <li>
                                                                <a href="auth/github"><img src="/website/assets/images/github-logo_icon.png" alt="github" /></a>
                                                            </li>
                                                        </ul>
                                                        <span>Already have an account?
                                                            <router-link data-toggle="collapse"
                                                                :to="{ name: 'Signin' }">Login</router-link>
                                                        </span>
                                                    </div>
                                                </div>
                                            </section>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div id="company-tab" class="tab-pane">
                                <br />
                                <form method="POST" @submit.prevent="registerCompany">
                                    <div class="row m-0">
                                        <div class="col-12 p-0">
                                            <section class="row m-0">
                                                <div class="col-12 register-tab">
                                                    <div class="login-feilds">
                                                        <div class="form-group">
                                                            <input class="is-invali" type="text"
                                                                v-model="company_record.name" placeholder="Your Name"
                                                                name="name" id="name-input" />
                                                            <small>
                                                                <span v-if="errors_company.name != null"
                                                                    class="text-danger float-left">
                                                                    {{errors_company.name[0]}}
                                                                </span>
                                                            </small>
                                                        </div>
                                                        <br />
                                                        <div class="form-group">
                                                            <input class="is-invali" type="text"
                                                                v-model="company_record.company_name"
                                                                placeholder="Company Name" name="company_name"
                                                                id="company-name-input" />
                                                            <small>
                                                                <span v-if="errors_company.company_name != null"
                                                                    class="text-danger float-left">
                                                                    {{errors_company.company_name[0]}}
                                                                </span>
                                                            </small>
                                                        </div>
                                                        <br />
                                                        <div class="form-group">
                                                            <input class="is-invali" type="email"
                                                                v-model="company_record.email" placeholder="Email"
                                                                name="email" id="email-input" />
                                                            <small>
                                                                <span v-if="errors_company.email != null"
                                                                    class="text-danger float-left">
                                                                    {{errors_company.email[0]}}
                                                                </span>
                                                            </small>
                                                        </div>
                                                        <br />
                                                        <div class="form-group">
                                                            <input class="is-invali" type="number" name="phone"
                                                                v-model="company_record.phone"
                                                                placeholder="Phone Number" id="phone-no-input" />
                                                            <small>
                                                                <span v-if="errors_company.phone != null"
                                                                    class="text-danger float-left">
                                                                    {{errors_company.phone[0]}}
                                                                </span>
                                                            </small>
                                                        </div>
                                                        <br />
                                                        <div class="form-group">
                                                            <input class="is-invali" type="password"
                                                                v-model="company_record.password" name="password"
                                                                placeholder="Password" id="password-input" />
                                                            <small>
                                                                <span v-if="errors_company.password != null"
                                                                    class="text-danger float-left">
                                                                    {{errors_company.password[0]}}
                                                                </span>
                                                            </small>
                                                        </div>
                                                        <br />
                                                        <div class="form-group">
                                                            <input class="is-invali" type="password"
                                                                v-model="company_record.confirm_password"
                                                                placeholder="Confirm Password"
                                                                name="password_confirmation"
                                                                id="confirm-password-input" />
                                                            <small>
                                                                <span v-if="errors_company.confirm_password != null"
                                                                    class="text-danger float-left">
                                                                    {{errors_company.confirm_password[0]}}
                                                                </span>
                                                            </small>
                                                        </div>
                                                        <br />
                                                    </div>
                                                    <div class="login-button">
                                                        <button>Sign Up</button>
                                                        <router-link data-toggle="collapse" :to="{ name: 'Signup' }">
                                                            or<br />
                                                            Sign up with</router-link>
                                                    </div>
                                                    <div class="direct-login">
                                                        <ul class="direct-login-icons">
                                                            <li>
                                                                <a href="/api/auth/google"><img src="/website/assets/images/search.svg" alt="google" /></a>
                                                            </li>
                                                            <!-- <li>
                                                                <a ><img src="/website/assets/images/facebookLogin.svg" alt="facebook" /></a>
                                                            </li> -->
                                                            <li>
                                                                <a href="/api/auth/linkedin"><img src="/website/assets/images/linkedin-round.svg" alt="linkedin" /></a>
                                                            </li>
                                                            <li>
                                                                <a href="/api/auth/github"><img src="/website/assets/images/github-logo_icon.png" alt="github" /></a>
                                                            </li>
                                                        </ul>
                                                        <span>Already have an account?
                                                            <router-link data-toggle="collapse"
                                                                :to="{ name: 'Signin' }">Login</router-link>
                                                        </span>
                                                    </div>
                                                </div>
                                            </section>
                                        </div>
                                    </div>
                                </form>
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
    export default {
        data() {
            return {
                candidate_record: {
                    name: '',
                    type: 'candidate',
                    email: '',
                    phone: '',
                    password: '',
                    confirm_password: '',
                },
                company_record: {
                    name: '',
                    company_name: '',
                    type: 'company',
                    email: '',
                    phone: '',
                    password: '',
                    confirm_password: '',
                },
                errors: [],
                errors_company: [],
            };
        },
        components: {
            WebsiteNavbar,
        },
        methods: {
            registerCandidate() {
                Swal.fire({
                    text: 'Please Wait We SettingUp Things for You! Be Patients',
                    didOpen: () => {
                        Swal.showLoading()
                    },
                })
                axios.post('/api/user-registration', this.candidate_record)
                    .then((response) => {
                        if (response.data.success == false) {
                            Swal.close()
                            this.errors = response.data.errors
                        } else {
                            Swal.close()
                            Swal.fire({
                                icon: 'success',
                                title: 'SignUp Successfully',
                                text: 'Please Verify your self and check you mail or spam box!Thanks',
                            });
                            this.$router.push({
                                name: 'Signin'
                            })
                        }
                    });
            },
            registerCompany() {
                Swal.fire({
                    text: 'Please Wait We SettingUp Things for You! Be Patients',
                    didOpen: () => {
                        Swal.showLoading()
                    },
                })
                axios.post('/api/user-registration', this.company_record)
                    .then((response) => {
                        if (response.data.success == false) {
                            Swal.close()
                            this.errors = response.data.errors_company
                        } else {
                            Swal.close()
                            Swal.fire({
                                icon: 'success',
                                title: 'SignUp Successfully',
                                text: 'Please Verify your self and check you mail or spam box!Thanks',
                            });
                            this.$router.push({
                                name: 'Signin'
                            })
                        }
                    });
            },
        },
    };

</script>
