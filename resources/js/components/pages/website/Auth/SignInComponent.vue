<template>
    <div>
        <WebsiteNavbar />
        <div class="container py-2">
            <div class="login-page-container container p-0">
                <form method="POST" @submit.prevent="Login">
                    <div class="row m-0">
                        <div class="col-12 p-0">
                            <section class="login-wrapper row m-0">
                                <div class="col-md-4 col-12 p-0 v-on-d">
                                    <div class="left-login">
                                        <img src="/website/assets/images/login-profile.png" alt="img" />
                                        <span>Welcome Back</span>
                                        <p>
                                            To keep connected with us please login with your personal
                                            info
                                        </p>
                                    </div>
                                </div>
                                <div class="col-md-8 col-12 right-login">
                                    <div class="login-text">
                                        <h1>Login Account</h1>
                                        <p>
                                            If you are already a member, please login using the form
                                            below
                                        </p>
                                    </div>
                                    <div class="login-feilds">
                                        <div class="form-group">
                                            <input type="email" placeholder="Enter Username" required name="email"
                                                id="email" v-model="record.email" />
                                            <small>
                                                <span v-if="errors.email != null" class="text-danger float-left">
                                                    {{errors.email[0]}}
                                                </span>
                                            </small>
                                        </div>
                                        <br />
                                        <div class="form-group">
                                            <input type="password" placeholder="Enter Password" required name="password"
                                                id="password" v-model="record.password" />
                                            <small>
                                                <span v-if="errors.password != null" class="text-danger float-left">
                                                    {{errors.password[0]}}
                                                </span>
                                            </small>
                                        </div>
                                    </div>
                                    <div class="remember-forgot">
                                        <div>
                                            <input type="checkbox" class="" name="" v-model="record.remember_me"
                                                id="RememberPassword" />
                                            <label for="RememberPassword">Remember me</label>
                                        </div>
                                        <router-link :to="{name: 'CandidateResetPassword'}">Forgot Password?
                                        </router-link>
                                    </div>
                                    <div class="login-button">
                                        <button>Login</button>
                                        <!-- <router-link data-toggle="collapse" :to="{ name: 'Signin' }">or<br />
                                            Sign in with</router-link> -->
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
                                        <span>Don't have an account?
                                            <router-link data-toggle="collapse" :to="{ name: 'Signup' }">
                                                Sign Up</router-link>
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
</template>
<script>
    import axios from 'axios';
    import WebsiteNavbar from '../partials/navbar.vue';
    export default {
        data() {
            return {
                record: {
                    email: '',
                    password: '',
                    remember_me: false
                },
                errors: [],
            };
        },
        components: {
            WebsiteNavbar,
        },
        methods: {
            socialLogin(){
                Swal.fire({
                    icon: 'info',
                    title: 'Login',
                    text: 'Credentials Not Match',
                })
            },
            Login() {
                Swal.fire({
                    text: 'Please Wait We SettingUp Your Dashboard',
                    didOpen: () => {
                        Swal.showLoading()
                    },
                })
                axios.post('api/user-login', this.record)
                .then((response) => {
                    if (response.data.success == false) {
                        Swal.close()
                        this.errors = response.data.errors
                    } else if (response.data.success == 'credentials') {
                        Swal.close()
                        Swal.fire({
                            icon: 'error',
                            title: 'Try Again',
                            text: 'Credentials Not Match',
                        })
                    } else if (response.data.status == 'activation') {
                        Swal.close()
                        Swal.fire({
                            icon: 'error',
                            title: 'Account Not Verified',
                            text: 'Please Verify your Account! Check Your Mail Box',
                        })
                    } else {
                        Swal.close()
                        if (response.data.user.type == 'candidate') {
                            this.$router.push({
                                name: 'CandidateDashboard'
                            })
                        }
                        if (response.data.user.type == 'company') {
                            this.$router.push({
                                name: 'CompanyDashboard'
                            })
                        }
                    }
                });
            },
        }
    };

</script>
