<template>
    <div>
        <WebsiteNavbar />
        <span v-if="this.isRole == 'company'">
            <CompanyNavbar />
        </span>
        <span v-if="this.isRole == 'candidate'">
            <CandidateNavbar />
        </span>
        <div class="container companysetting py-5">
            <div class="companyTitle mb-3">
                <hr class="ml-0">
                <div class="companytitleText">Settings</div>
                <hr class="mr-0">
            </div>
            <div class="text-left  company-setting-p">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean
                commodo ligula eget dolor. Aenean masa. Cum sociis natoque penatibus et magnis dis parturient monten.
            </div>
            <div class="companyForm">
                <form>
                    <div class="form-field">
                        <label for="email" class="label--required companycustomLabel">Email:</label>
                        <input id="email" required="" type="email"
                            class="CompanycustomInput" placeholder="Enter Email">
                    </div>
                    <div class="form-field">
                        <label for="password" class="label--required companycustomLabel">Password:</label>
                        <input name="password" type="password"
                            class="CompanycustomInput" placeholder="Enter Password" />
                    </div>
                    <div class="form-field">
                        <label for="newpassword" class="label--required companycustomLabel">New Password:</label>
                        <input name="newpassword" type="password" class="CompanycustomInput"
                            placeholder="Enter new password" />
                    </div>
                    <div class="form-field">
                        <label for="confirmpassword" class="label--required companycustomLabel">Confirm
                            Password:</label>
                        <input name="confirmpassword" type="password"
                            class="CompanycustomInput" placeholder="Enter confirm password" />
                    </div>
                    <div class="form-field Companycustomtoggle">
                        <label for="account" class="label--required companycustomLabel">Activate Account:</label>
                        <input type="checkbox" checked data-toggle="toggle" class="customtoggle" data-style="ios"
                            data-on="Activate" data-off="Deactivate">
                    </div>
                    <div class="form-group text-center m-0">
                        <button class="actionUpdateBtn">Update</button>
                        <button class="actionBackBtn">Back</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</template>
<script>
    import axios from 'axios';
    import WebsiteNavbar from '../partials/navbar.vue';
    import CompanyNavbar from '../partials/CompanyNavbar.vue';
    import CandidateNavbar from '../partials/CandidateNavbar.vue';
    export default {
        components: {
            WebsiteNavbar,
            CompanyNavbar,
            CandidateNavbar,
        },
        data() {
            return {
                isRole: '',
            };
        },
        created() {
            this.checkRole()
        },
        methods: {
            checkRole() {
                axios.get('navbar-check-roles')
                    .then((response) => {
                        if (response.data.success) {
                            this.isRole = response.data.role
                        }
                    });
            },
        },

    }

</script>
<style>
    * {
        font-family: 'Red Hat Display', sans-serif;
    }

    .form-field {
        display: flex;
        flex-wrap: wrap;
        margin-bottom: 1.5em;
    }

    .companyForm {
        background-color: #fff;
        border-radius: 5px;
        border: 1px solid rgb(201, 201, 201);
        border-top: 5px solid #081351;
        padding: 25px;
    }

    .Companycustomtoggle .toggle-off,
    .Companycustomtoggle .toggle-on {
        padding-right: 0px;
        padding-left: 0px;
    }

    /*  */
    .companycustomLabel {
        font-size: 16px;
        font-weight: bold;
        align-self: center;
        flex-shrink: 0;
        flex-basis: 100%;
        width: 100%;
        text-align: right;
        margin-right: 20px;
    }

    @media (min-width: 768px) {
        .companycustomLabel {
            flex-basis: 150px;
            width: 150px;
        }
    }

    .CompanycustomInput {
        border: 1px solid #d9dbdd;
        flex-grow: 1;
        font-size: 1.1rem;
        font-weight: 300;
        border-radius: 5px;
        padding: 10px;
    }

    /*  */
    .actionUpdateBtn {
        background-color: #081351;
    }

    .actionBackBtn {
        background-color: #303030;
    }

    .actionUpdateBtn,
    .actionBackBtn {
        color: white;
        width: 22.5%;
        border: none;
        padding: 8.8px;
        border-radius: 5px;
    }

    .companyTitle {
        display: flex;
        align-items: center;
    }

    .companyTitle>hr {
        height: 2px;
        width: 100%;
        max-width: 36%;
        background-color: #081351;
    }

    .companytitleText {
        width: max-content;
        font-size: 30px;
        color: #081351;
        font-weight: bold;
    }

    .company-setting-p {
        font-size: 16px;
        color: #757575;
        margin-bottom: 1.5rem;
    }

    @media screen and (min-width: 786px) {
        .companysetting {
            max-width: 750px;
        }
    }

    @media screen and (max-width:786px) {
        .companycustomLabel {
            text-align: left;
            font-size: 14px;
            margin-bottom: 5px;
        }

        .actionUpdateBtn,
        .actionBackBtn {
            width: 42.5%;
        }

        .CompanycustomInput {
            font-size: 12px;
            padding: 5px 10px;
        }

        .comapnytitleText {
            font-size: 18px;
        }

        .companyTitle>hr {
            max-width: 28%;
        }
    }

    .toggle.ios,
    .toggle-on.ios,
    .toggle-off.ios {
        border-radius: 20px;
    }

    .toggle.ios .toggle-handle {
        border-radius: 20px;
    }

    .toggle.android {
        border-radius: 0px;
    }

    .toggle.android .toggle-handle {
        border-radius: 0px;
    }

</style>
