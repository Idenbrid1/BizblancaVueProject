<template>
    <div>
        <WebsiteNavbar />
        <div class="container py-2">
            <div class="login-page-container container p-0">
                <form method="POST" @submit.prevent="googleLogin">
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
                                                id="email" v-model="record.email" disabled/>
                                            <small>
                                                <span v-if="errors.email != null" class="text-danger float-left">
                                                    {{errors.email[0]}}
                                                </span>
                                            </small>
                                        </div>
                                        <br>
                                        <div class="form-group" v-if="record.role == 'company'">
                                            <input type="text" placeholder="Enter Company" required name="company_name"
                                                id="company_name" v-model="record.company_name"/>
                                            <small>
                                                <span v-if="errors.company_name != null" class="text-danger float-left">
                                                    {{errors.company_name[0]}}
                                                </span>
                                            </small>
                                        </div>
                                        <br />
                                        <ul class="AuthRadioButtons">
                                            <li>
                                                <input type="radio" v-model="record.role" value="candidate" hidden="hidden" name="category"
                                                    id="indiviualsFeild">
                                                     <label for="indiviualsFeild" class="indiviualsLabel ml-0">
                                                         <i class="fas fa-user" aria-hidden="true"></i>
                                                    As Candidate
                                                </label></li>
                                            <li>
                                                <input type="radio" v-model="record.role" value="company" hidden="hidden" name="category"
                                                    id="businessLabel"> 
                                                <label for="businessLabel" class="businessLabel">
                                                    <i class="fas fa-briefcase" aria-hidden="true"></i>
                                                    As Company
                                                </label>
                                            </li>
                                            <small>
                                                <span v-if="errors.role != null" class="text-danger float-left">
                                                    {{errors.role[0]}}
                                                </span>
                                            </small>
                                        </ul>
                                    </div>
                                    <div class="login-button">
                                        <button>Sign up</button>
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
                    id: this.$route.params.id,
                    role: '',
                    email: '',
                    name: '',
                    social_id: '',
                    social_name: '',
                },
                errors: [],
            };
        },
        components: {
            WebsiteNavbar,
        },
        created(){
            axios.get('api/get-social-user-data/'+this.$route.params.id)
            .then((response) => {
                this.record.social_name = response.data.social_name 
                this.record.social_id = response.data.social_id 
                this.record.email = response.data.email 
                this.record.name = response.data.name 
            });
        },
        methods: {
            googleLogin() {
                if(this.record.role == ''){
                    Swal.fire({
                        icon: 'error',
                        title: 'Please select role',
                    })
                }else{
                    Swal.fire({
                        text: 'Please Wait We SettingUp Things for You! Be Patients',
                        didOpen: () => {
                            Swal.showLoading()
                        },
                    })
                    axios.post('/api/user-google-registration', this.record)
                    .then((response) => {
                        if (response.data.success == false) {
                            Swal.close()
                            this.errors = response.data.errors
                        }else {
                            Swal.close()
                            if (response.data.type == 'candidate') {
                                this.$router.push({
                                    name: 'CandidateDashboard'
                                })
                            }
                            if (response.data.type == 'company') {
                                this.$router.push({
                                    name: 'CompanyDashboard'
                                })
                            }
                        }
                    });
                }
                
            },
        }
    };

</script>
<style scoped>
    .AuthRadioButtons {
    margin: 0;
    padding: 0;
    display: flex;
    align-items: center;
    box-sizing: border-box;
    justify-content: space-between;
}
.indiviualsLabel, .businessLabel {
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    height: 140px;
    width: 215px;
    margin: 10px;
    border-radius: 8px;
    background-color: #f1f1f1;
    box-sizing: border-box;
    font-size: 500!important;
    font-size: 22px;
}
.indiviualsLabel>i, .businessLabel>i {
    font-size: 40px;
    height: 82px;
    width: 82px;
    display: flex;
    margin: 10px 0;
    justify-content: center;
    align-items: center;
    box-shadow: 0 10px 20px #00000029;
    border-radius: 100px;
    color: #081251;
    background-color: rgba(243,146,0,.3);
}
input[type=radio]:checked+* {
    color: #081251;
}
#indiviualsFeild[type=radio]:checked+label, #businessLabel[type=radio]:checked+label {
    box-shadow: 0 0 10px 0 #7F7C79;
    border: 3px solid #081251;
}
.indiviualsLabel>i, .businessLabel>i {
    font-size: 40px;
    height: 82px;
    width: 82px;
    display: flex;
    margin: 10px 0;
    justify-content: center;
    align-items: center;
    box-shadow: 0 10px 20px #00000029;
    border-radius: 100px;
    color: #081251;
    background-color: rgba(243,146,0,.3);
}

</style>