<template>
    <div>
        <WebsiteNavbar />
        <div class="login-page-container container p-0">
            <form method="POST" @submit.prevent="Reset">
                <div class="row m-0">
                    <div class="col-12 p-0">
                        <section class="login-wrapper row m-0">
                            <div class="col-md-4 col-12 p-0 left-login">
                                <img src="/website/assets/images/login-profile.png" alt="img">
                                <span>Welcome Back</span>
                                <p>To keep connected with us please login with your personal info</p>
                            </div>
                            <div class="col-md-8 col-12 right-login">
                                <div class="login-text">
                                    <h1>Forget Password</h1>
                                </div>
                                <div class="login-feilds">
                                    <div class="form-group">
                                        <input id="email" v-model="record.email" type="email" class="form-control"
                                            name="email" required autocomplete="email" autofocus
                                            placeholder="Please Enter Your Email">
                                        <label>{{ $message }}</label>
                                    </div>
                                    <br>
                                </div>
                                <div class="login-button">
                                    <button type="submit" class="w-auto">
                                        Send Password Reset Link
                                    </button>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
            </form>
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
                },
                errors: [],
            };
        },
        components: {
            WebsiteNavbar,
        },
        methods: {
            Reset() {
                Swal.fire({
                    text: 'Sending Mail',
                    didOpen: () => {
                        Swal.showLoading()
                    },
                })
                axios.post('/api/reset-password', this.record)
                    .then((response) => {
                        if (response.data.success == false) {
                            Swal.close()
                            this.errors = response.data.errors
                        } else if (response.data.success == 'sent') {
                            Swal.close()
                            Swal.fire({
                                icon: 'info',
                                title: 'Already Sent',
                                text: 'Please check your mail',
                            })
                        } else if (response.data.success == 'notfount') {
                            Swal.close()
                            Swal.fire({
                                icon: 'info',
                                title: 'Not Found',
                                text: 'Enter Email Not Found',
                            })
                        } else {
                            Swal.close()
                            Swal.fire({
                                icon: 'success',
                                title: 'Send Successfully',
                                text: 'Please Check your email',
                            })
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
