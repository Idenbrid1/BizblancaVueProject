<template>
    <div >
        <WebsiteNavbar/>
        <div class="login-page-container container p-0">
            <form>
                <div class="row m-0">
                    <div class="col-12 p-0">
                        <section class="login-wrapper row m-0">
                            <div class="col-md-4 col-12 p-0 left-login">
                                <img src="/website/assets/images/login-profile.png" alt="img">
                                <span>Welcome Back</span>
                                <p>To keep connected with us please login with your personal info</p>
                            </div>
                            <div class="col-md-8 col-12 right-login">
                                <div class="loginText">
                                    <h1>Forget Password</h1>
                                </div>
                                <div class="loginFeilds">
                                    <div class="form-group">
                                        <input id="password" v-model="record.password" type="password" class="form-control" name="password" required autocomplete="new-password" placeholder="Please Enter New Password">
                                        <small>
                                            <span v-if="errors.password != null" class="text-danger float-left">
                                                {{errors.password[0]}}
                                            </span>
                                        </small>
                                    </div>
                                    <br>
                                    <div class="form-group">
                                        <input id="password-confirm" v-model="record.confirm_password" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" placeholder="Please Enter Confirm Password">
                                        <small>
                                            <span v-if="errors.confirm_password != null" class="text-danger float-left">
                                                {{errors.confirm_password[0]}}
                                            </span>
                                        </small>
                                    </div>
                                    <br>
                                </div>
                                <div class="loginButton">
                                    <button @click.prevent="resetPassword()">
                                        Reset Password
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
                    password: '',
                    confirm_password: '',
                    token: this.$route.params.token
                },
                errors: []
            };
        },
        components: {
            WebsiteNavbar,
        },
        methods: {
            resetPassword(){
                Swal.fire({
                    text:  'Please Wait We are Resting your Password',
                    didOpen: () => {
                        Swal.showLoading() 
                    },
                })
                axios.post('/complete-reset-password', this.record)
                .then((response) => {
                    if(response.data.success == false)
                    {
                        Swal.close()
                        this.errors = response.data.errors
                    }
                    else{
                        Swal.close()
                        Swal.fire({
                            icon:  'success',
                            title: 'Rest Successfully',
                            text:  'Now you can login again! Thanks',
                        })
                        this.$router.push({ name: 'signin' })
                    }
                });
            },
        }
    };

</script>
