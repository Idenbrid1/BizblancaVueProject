<template>
    <div>
        <WebsiteNavbar />
        <span v-if="this.isRole == 'company'">
            <CompanyNavbar />
        </span>
        <span v-if="this.isRole == 'candidate'">
            <CandidateNavbar />
        </span>
        <div class="container company-setting py-5">
            <div class="company-title mb-3">
                <hr class="ml-0">
                <div class="company-title-text">Settings</div>
                <hr class="mr-0">
            </div>
            <div class="text-left  company-setting-p">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean
                commodo ligula eget dolor. Aenean masa. Cum sociis natoque penatibus et magnis dis parturient monten.
            </div>
            <div class="company-form">
                <form>
                    <div class="form-field">
                        <label for="email" class="label--required company-custom-label">Email:</label>
                        <input id="email" required="" type="email"
                            class="company-custom-input" placeholder="Enter Email">
                    </div>
                    <div class="form-field">
                        <label for="password" class="label--required company-custom-label">Password:</label>
                        <input name="password" type="password"
                            class="company-custom-input" placeholder="Enter Password" />
                    </div>
                    <div class="form-field">
                        <label for="newpassword" class="label--required company-custom-label">New Password:</label>
                        <input name="newpassword" type="password" class="company-custom-input"
                            placeholder="Enter new password" />
                    </div>
                    <div class="form-field">
                        <label for="confirmpassword" class="label--required company-custom-label">Confirm
                            Password:</label>
                        <input name="confirmpassword" type="password"
                            class="company-custom-input" placeholder="Enter confirm password" />
                    </div>
                    <div class="form-field company-custom-toggle">
                        <label for="account" class="label--required company-custom-label">Activate Account:</label>
                        <input type="checkbox" checked data-toggle="toggle" class="customtoggle" data-style="ios"
                            data-on="Activate" data-off="Deactivate">
                    </div>
                    <div class="form-group text-center m-0">
                        <button class="action-update-btn">Update</button>
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

    .company-form {
        background-color: #fff;
        border-radius: 5px;
        border: 1px solid rgb(201, 201, 201);
        border-top: 5px solid #081351;
        padding: 25px;
    }

    .company-custom-toggle .toggle-off,
    .company-custom-toggle .toggle-on {
        padding-right: 0px;
        padding-left: 0px;
    }

    /*  */
    .company-custom-label {
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
        .company-custom-label {
            flex-basis: 150px;
            width: 150px;
        }
    }

    .company-custom-input {
        border: 1px solid #d9dbdd;
        flex-grow: 1;
        font-size: 1.1rem;
        font-weight: 300;
        border-radius: 5px;
        padding: 10px;
    }

    /*  */
    .action-update-btn {
        background-color: #081351;
    }

    .actionBackBtn {
        background-color: #303030;
    }

    .action-update-btn,
    .actionBackBtn {
        color: white;
        width: 22.5%;
        border: none;
        padding: 8.8px;
        border-radius: 5px;
    }

    .company-title {
        display: flex;
        align-items: center;
    }

    .company-title>hr {
        height: 2px;
        width: 100%;
        max-width: 36%;
        background-color: #081351;
    }

    .company-title-text {
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
        .company-setting {
            max-width: 750px;
        }
    }

    @media screen and (max-width:786px) {
        .company-custom-label {
            text-align: left;
            font-size: 14px;
            margin-bottom: 5px;
        }

        .action-update-btn,
        .actionBackBtn {
            width: 42.5%;
        }

        .company-custom-input {
            font-size: 12px;
            padding: 10px 10px;
        }

        .comapnytitleText {
            font-size: 18px;
        }

        .company-title>hr {
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
