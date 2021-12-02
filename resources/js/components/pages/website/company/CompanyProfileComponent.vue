<template>
    <div>
        <WebsiteNavbar />
        <CompanyNavbar />
        <div class="profile-wrapper mt-5">
            <div class="row m-0 container px-1">
                <div class="col-12 p-0">
                    <div v-if="this.profile.package_id == 0 && this.profile.package.title == 'Free'"
                        class="alert-message-resume resume-attention-alert col-12">
                        <h2>Please upgrade you plan for better experience</h2>
                        <p>
                            Since [personal information] such as name and contact information is
                            described in the registered work history, the examination is
                            suspended. Please check your registration information and update
                            your resume.
                            <router-link class="job-view-btn" data-toggle="collapse" :to="{ name: 'PackagePlans' }">
                                UPGRADE</router-link>
                        </p>
                    </div>
                    <div v-if="this.order_status == 'pending'"
                        class="alert-message-resume resume-attention-alert col-12">
                        <h2>Please Wait Untill Bizblanca team approve your request</h2>
                    </div>
                </div>
                <div class="col-12 tabs-section-container">
                    <div class="row no-gutters tabs-section-wrap">
                        <!-- tabs ankers -->
                        <div class="tabs-ankers col-md-3 col-2">
                            <ul class="nav nav-tabs" role="tablist" id="DesktopTabsIcons">
                                <li class="nav-item profile-icon-tab">
                                    <img class="profile-icon" src="/website/assets/images/dashboard-interface.svg"
                                        alt="img">
                                    <span class="profile-text">Profile</span>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link active" data-toggle="tab" href="#basic-information">Basic
                                        information</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#social-media">Social Media</a>
                                </li>
                            </ul>
                            <!-- mobile tabs start-->
                            <ul class="mobile-tabs-icons" style="display: none;">
                                <li><a @click="openProfileTab()"><img class="icons-tab"
                                            src="/website/assets/images/details.svg" alt="TabsIcon"></a></li>
                                <li><a @click="openProfileTab()"><img class="icons-tab"
                                            src="/website/assets/images/leader.svg" alt="TabsIcon"
                                            style="height: 26px;"></a></li>
                            </ul>

                            <!-- Modal Tab start -->
                            <div id="ProfileTabMobileNav" class="Profile-tab-mobile-nav" @click="closeProfileTab()">
                                <div class="row no-gutters modal-tab-conatiner">
                                    <div class="icons-modal">
                                        <ul class="mobile-modal-tabs-icons p-0">
                                            <li><img class="icons-tab" src="/website/assets/images/details.svg"
                                                    alt="TabsIcon"></li>
                                            <li><img class="icons-tab" src="/website/assets/images/leader.svg"
                                                    alt="TabsIcon" style="height: 26px;"></li>
                                        </ul>
                                    </div>
                                    <div class="icons-modal-tab-ankers">
                                        <ul class="nav nav-tabs" role="tablist">
                                            <li class="nav-item">
                                                <a class="nav-link active" data-toggle="tab"
                                                    href="#basic-information">Basic information</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" data-toggle="tab" href="#social-media">Social
                                                    Media</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!-- mobile tabs end  -->
                            <!-- Modal Tab End -->
                        </div>
                        <!-- tabs anker end -->
                        <div class="col-md-9 p-0 col-10 tabs-content-wrap">
                            <!--  -->
                            <div class="tab-content">
                                <div id="basic-information" class="tab-pane in active">
                                    <h1 class="tabs-heading">Basic information</h1>
                                    <div class="row no-gutters basic-info-tab">
                                        <div class="col-12 col-md-6">
                                            <ul class="profile-labels">
                                                <li class="profile-label h150 profile-label-border rt0 btr5">
                                                    <span>Logo</span></li>
                                                <li class="profile-label profile-label-border"><span>Name</span></li>
                                                <li class="profile-label profile-label-border"><span>Founded</span></li>
                                                <li class="profile-label profile-label-border"><span>Ceo</span></li>
                                                <li class="profile-label profile-label-border"><span>Industry</span></li>
                                                <li class="profile-label profile-label-border bbl5 rmo"><span>Weblink</span>
                                                </li>
                                                <li class="profile-label profile-label-border-top bbl5 h150">
                                                    <span>Description</span></li>
                                                <li class="profile-label profile-label-border-top bbl5 rmo"><span>No of
                                                        Employees</span></li>
                                            </ul>
                                            <ul class="profile-info-list">
                                                <li class="h150 profile-info profile-info-border-bottom"
                                                    style="height: 150px;">
                                                    <img :src="'/storage/images/companies/'+profile.logo"
                                                        class="ProfileUserPic" alt="profileImg">
                                                </li>
                                                <li class="profile-info profile-info-border">
                                                    <div class="line-text-1">
                                                        <p>{{profile.company_name}}</p>
                                                    </div>
                                                </li>
                                                <li class="profile-info profile-info-border">
                                                    <div class="line-text-1">
                                                        <p>{{profile.establish_at}}</p>
                                                    </div>
                                                </li>
                                                <li class="profile-info profile-info-border">
                                                    <div class="line-text-1">
                                                        <p>{{profile.ceo}}</p>
                                                    </div>
                                                </li>
                                                <li class="profile-info profile-info-border">
                                                    <div class="line-text-1">
                                                        <p>{{profile.industry}}</p>
                                                    </div>
                                                </li>
                                                <li class="profile-info profile-info-border rb0">
                                                    <div class="line-text-1">
                                                        <p>{{profile.web_link}}</p>
                                                    </div>
                                                </li>
                                                <li class="profile-info profile-info-border rb0 h150">
                                                    <div class="line-text-5">
                                                        <p>{{profile.description}}</p>
                                                    </div>
                                                </li>
                                                <li class="profile-info profile-info-border rb0 rm0">
                                                    <div class="line-text-1">
                                                        <p>{{profile.no_of_employees}}</p>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col-12 col-md-6">
                                            <ul class="profile-labels">
                                                <li><span
                                                        class="profile-label h150 profile-label-border rt0 btr5 rm0">Phone</span>
                                                </li>
                                                <li><span class="profile-label profile-label-border">Email</span></li>
                                                <li><span class="profile-label profile-label-border">City</span></li>
                                                <li><span class="profile-label profile-label-border">Address</span></li>
                                                <li><span class="profile-label v-on-d"></span></li>
                                                <li><span class="profile-label v-on-d"></span></li>
                                                <li><span class="profile-label h150 v-on-d"></span></li>
                                                <li><span class="profile-label bb5 v-on-d"></span></li>
                                                <!-- <li><span class="profile-label bbl5"></span></li> -->
                                            </ul>
                                            <ul class="profile-info-list">
                                                <li class="profile-info h150" style="height: 150px;">
                                                    <div class="line-text-5" style="height: 105px;">
                                                        <p>{{profile.phone}}</p>
                                                    </div>
                                                </li>
                                                <li class="profile-info profile-info-border">
                                                    <div class="line-text-1">
                                                        <p class="pr-5">{{profile.email}}</p>
                                                    </div>
                                                </li>
                                                <li class="profile-info profile-label-border-top">
                                                    <div class="line-text-1">
                                                        <p>{{profile.city}}</p>
                                                    </div>
                                                </li>
                                                <li class="profile-info profile-info-border">
                                                    <div class="line-text-2">
                                                        <p>{{profile.address}}</p>
                                                    </div>
                                                </li>
                                                <li class="profile-info profile-label-border-top v-on-d">
                                                    <div class="line-text-2">
                                                        <p></p>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <ul class="view-edit-anker-list">
                                        <!-- <li><a class="view-anker" href="#/">View</a></li> -->
                                        <li><a class="view-edit" href=".basicInfoModal" data-toggle="modal"
                                                data-target=".basicInfoModal">Edit</a></li>
                                    </ul>
                                </div>
                                <div id="social-media" class="tab-pane fade">
                                    <h1 class="tabs-heading">Social Media</h1>
                                    <div class="row no-gutters education-info-tab">
                                        <div class="col-12 col-md-6">
                                            <ul class="profile-labels">
                                                <li class="profile-label profile-label-border btr5"><img
                                                        src="/website/assets/images/whatsapp.svg" alt=""></li>
                                                <li class="profile-label profile-label-border"><img
                                                        src="/website/assets/images/facebook.svg" alt=""></li>
                                                <li class="profile-label profile-label-border"><img
                                                        src="/website/assets/images/linkedin.svg" alt=""></li>
                                                <li class="profile-label profile-label-border"><img
                                                        src="/website/assets/images/twitter.svg" alt=""></li>
                                                <li class="profile-label profile-label-border"><img
                                                        src="/website/assets/images/github.svg" alt=""></li>
                                            </ul>
                                            <ul class="profile-info-list">
                                                <li class="profile-info profile-info-border rt0">
                                                    <div class="line-text-1">
                                                        <p>{{profile.whatsapp}}</p>
                                                    </div>
                                                </li>
                                                <li class="profile-info profile-info-border">
                                                    <div class="line-text-1">
                                                        <p>{{profile.facebook}}</p>
                                                    </div>
                                                </li>
                                                <li class="profile-info profile-info-border">
                                                    <div class="line-text-1">
                                                        <p>{{profile.linkedin}}</p>
                                                    </div>
                                                </li>
                                                <li class="profile-info profile-info-border">
                                                    <div class="line-text-1">
                                                        <p>{{profile.twitter}}</p>
                                                    </div>
                                                </li>
                                                <li class="profile-info profile-info-border rb0">
                                                    <div class="line-text-1">
                                                        <p>{{profile.github}}</p>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col-12 col-md-6">
                                            <div class="CompanyContent">
                                                <div class="CompanyImages">
                                                    <div class="labelCompany btr5">Company Pics</div>
                                                    <div class="CompanyImage" v-if="profile.profile_gallery">
                                                        <img v-for="(item, index) in profile.profile_gallery.split(',')"
                                                            :key="index" :src="'/storage/images/companies/'+item"
                                                            alt="item">
                                                    </div>
                                                </div>
                                                <div class="video_upload_tab">
                                                    <div class="videoLabelCompany">Video</div>
                                                    <div class="videotag" v-if="profile.profile_video">
                                                        <video controls
                                                            :src="'/storage/images/companies/'+profile.profile_video"></video>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <ul class="view-edit-anker-list">
                                        <!-- <li><a class="view-anker" href="#/">View</a></li> -->
                                        <li><a class="view-edit" href=".SocialMediaModal" data-toggle="modal"
                                                data-target=".SocialMediaModal">Edit</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!--  -->
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal BasicInfo  -->
        <!-- Large modal -->
        <div class="modal fade basicInfoModal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg">
                <form id="basicinformationForm">
                    <div class="modal-content p-0">
                        <div class="container edit-modal pb-5">
                            <h3 class="my-4">Update</h3>
                            <section class="modal-form container p-0 p-md-2">
                                <div class="row no-gutters" id="sub-form-fields-container">
                                    <div class="col-12">
                                        <div id='subForm' class="sub-form">
                                            <div class="modal-title  my-3">
                                                <div class="mr-2 title-effect"></div>
                                                <h4 class="m-0 modal-title-text">Basic Information</h4>
                                            </div>
                                            <div class="subFormFields">
                                                <div class="row">
                                                    <div class="col-12 col-md-6">
                                                        <div class="form-group">
                                                            <label for="companyLogo">Logo</label>
                                                            <input type="file" id="companyLogo" name="companyLogo"
                                                                class="form-control" />
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-md-6">
                                                        <div class="form-group">
                                                            <label for="no_of_employees">No of Employees</label>
                                                            <input type="number" id="no_of_employees"
                                                                name="no_of_employees" class="form-control"
                                                                v-model="profile.no_of_employees" />
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-md-6">
                                                        <div class="form-group">
                                                            <label for="establish_at">Founded</label>
                                                            <input type="date" placeholder="Enter Founded"
                                                                id="establish_at" name="establish_at"
                                                                v-model="profile.establish_at" class="form-control" />
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-md-6">
                                                        <div class="form-group">
                                                            <label for="ceo">CEO</label>
                                                            <input type="text" placeholder="Enter CEO" id="ceo"
                                                                name="ceo" v-model="profile.ceo" class="form-control" />
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-md-6">
                                                        <div class="form-group">
                                                            <label for="industry">Industry</label>
                                                            <input type="text" placeholder="Enter Industry"
                                                                id="industry" name="industry" v-model="profile.industry"
                                                                class="form-control" />
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-md-6">
                                                        <div class="form-group">
                                                            <label for="city">City</label>
                                                            <input type="text" placeholder="Enter City" id="city"
                                                                name="city" v-model="profile.city"
                                                                class="form-control" />
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-md-6">
                                                        <div class="form-group">
                                                            <label for="address">Address</label>
                                                            <input type="text" placeholder="Enter Address"
                                                                name="address" v-model="profile.address"
                                                                class="form-control" />
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-md-6">
                                                        <div class="form-group">
                                                            <label for="phone">Phone</label>
                                                            <input type="number" placeholder="Enter Phone" id="phone"
                                                                name="phone" v-model="profile.phone"
                                                                class="form-control" />
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-md-6">
                                                        <div class="form-group">
                                                            <label for="email">Email</label>
                                                            <input type="email" placeholder="Enter Email" id="email"
                                                                name="email" v-model="profile.email" disabled
                                                                class="form-control" />
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-md-6">
                                                        <div class="form-group">
                                                            <label for="web_link">Weblink</label>
                                                            <input type="url" placeholder="Enter Weblink" id="web_link"
                                                                name="web_link" v-model="profile.web_link"
                                                                class="form-control" />
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="form-group">
                                                            <label for="description">Description</label>
                                                            <textarea style="height: 100px;"
                                                                placeholder="Enter Description" id="description"
                                                                maxlength="255" name="description"
                                                                v-model="profile.description"
                                                                class="form-control"></textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row mt-4 ">
                                    <div class="col-lg-12 modelBtnContainer ">
                                        <button class="positiveBtn modelBtn mr-1"
                                            @click.prevent="updateBasicInformation()">Update</button>
                                        <button class="negativeBtn modelBtn ml-1" data-dismiss="modal"
                                            @click.prevent="getCompanyProfileData()">Cancel</button>
                                    </div>
                                </div>
                            </section>
                        </div>
                    </div>
                </form>
            </div>
        </div>

        <div class="modal fade SocialMediaModal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg">
                <form id="socialmediaForm">
                    <div class="modal-content p-0">
                        <div class="container edit-modal pb-5">
                            <h3 class="my-4">Update</h3>
                            <section class="modal-form">
                                <div class="row no-gutters" id="EducationFieldsContainer">
                                    <div class="col-12 EductionSection">
                                        <div class="sub-form">
                                            <div class="modal-title  my-3">
                                                <div class="mr-2 title-effect"></div>
                                                <h4 class="m-0 modal-title-text">Social Media</h4>
                                            </div>
                                            <div class="subFormFields">
                                                <div class="row">
                                                    <div class="col-12 col-md-6">
                                                        <div class="form-group">
                                                            <label for="whatsapp_link">Whatsapp</label>
                                                            <input type="url" id="whatsapp_link" name="whatsapp"
                                                                v-model="profile.whatsapp" placeholder="Enter Whatsapp"
                                                                class="form-control" />
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-md-6">
                                                        <div class="form-group">
                                                            <label for="facebook_link">Facebook</label>
                                                            <input type="url" id="facebook_link" name="facebook"
                                                                v-model="profile.facebook"
                                                                placeholder="Paste Facebook Link"
                                                                class="form-control" />
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-md-6">
                                                        <div class="form-group">
                                                            <label for="linkedin_link">Linkedin</label>
                                                            <input type="url" id="linkedin_link"
                                                                placeholder="Paste LinkedIn Link" name="linkedin"
                                                                v-model="profile.linkedin" class="form-control" />
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-md-6">
                                                        <div class="form-group">
                                                            <label for="twitter_link">Twitter</label>
                                                            <input type="url" id="twitter_link"
                                                                placeholder="Paste Twitter Link" name="twitter"
                                                                v-model="profile.twitter" class="form-control" />
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-md-6">
                                                        <div class="form-group">
                                                            <label for="github_link">Github</label>
                                                            <input type="url" id="github_link"
                                                                placeholder="Paste GitHub Link" name="github"
                                                                v-model="profile.github" class="form-control" />
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-md-6">
                                                        <div class="form-group">
                                                            <label for="companyGallery">Company Pics <small>(Max
                                                                    upload4)</small></label>
                                                            <input name="companyGallery[]" type="file"
                                                                multiple="multiple" id="companyGallery"
                                                                class="form-control" />
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="form-group">
                                                            <label for="companyVideo">Video</label>
                                                            <input type="file" value="" id="companyVideo"
                                                                name="companyVideo" class="form-control" />
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mt-4 ">
                                    <div class="col-lg-12 modelBtnContainer ">
                                        <button class="positiveBtn modelBtn mr-1"
                                            @click.prevent="updateSocialMedia()">Update</button>
                                        <button class="negativeBtn modelBtn ml-1" data-dismiss="modal"
                                            @click.prevent="getCompanyProfileData()">Cancel</button>
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
    import CompanyNavbar from '../partials/CompanyNavbar.vue';
    export default {
        data() {
            return {
                profile: '',
                order_status: '',
            };
        },
        components: {
            WebsiteNavbar,
            CompanyNavbar,
        },
        mounted() {
            this.openProfileTab();
            this.closeProfileTab();
        },
        created() {
            this.getCompanyProfileData()
        },
        methods: {
            getCompanyProfileData() {
                axios.get('get-company-profile')
                    .then((response) => {
                        this.profile = response.data.company
                        this.order_status = response.data.response
                    });
            },
            updateBasicInformation() {
                Swal.fire({
                    text: 'Please Wait...',
                    didOpen: () => {
                        Swal.showLoading()
                    },
                })
                var $basicinformationForm = $('#basicinformationForm');
                var data = new FormData(basicinformationForm);
                axios.post('/update/company-basicinformation', data)
                    .then((res) => {
                        if (res.data.success == false) {
                            Swal.close()
                            this.errors = res.data.errors
                        } else {
                            Swal.close()
                            this.errors = []
                            this.getCompanyProfileData()
                            // $('#basicInfoModal').modal('hide')
                            Swal.fire({
                                icon: 'success',
                                title: 'Updated',
                                text: 'Company Updated Successfully',
                            })
                        }
                    })
            },
            updateSocialMedia() {
                Swal.fire({
                    text: 'Please Wait...',
                    didOpen: () => {
                        Swal.showLoading()
                    },
                })
                var $fileUpload = $('#companyGallery');
                if (parseInt($fileUpload.get(0).files.length) > 4) {
                    Swal.fire({
                        icon: 'error',
                        title: 'Oops...',
                        text: 'You Cannot Select More Then 4 images!',
                    })
                    Swal.close()
                    return false;
                }
                var $socialmediaForm = $('#socialmediaForm');
                var data = new FormData(socialmediaForm);
                axios.post('/update/socialmedia', data)
                    .then((res) => {
                        if (res.data.success == false) {
                            Swal.close()
                            this.errors = res.data.errors

                        } else {
                            this.errors = []
                            this.getCompanyProfileData()
                            Swal.close()
                            Swal.fire({
                                icon: 'success',
                                title: 'Updated',
                                text: 'Company Updated Successfully',
                            })
                        }
                    })
                    .catch((err) => {

                    })
            },
            openProfileTab() {
                document.getElementById("Profile-tab-mobile-nav").style.left = "0%";
            },
            closeProfileTab() {
                document.getElementById("Profile-tab-mobile-nav").style.left = "-100%";
            },
        },
    };

</script>
<style>
    @media (min-width: 1200px) {
        .container {
            max-width: 1100px !important;
        }

        .profileLabel,
        .profile-info-list>li {
            height: 54px;
        }

        .profile-label {
            width: 140px;
        }
    }

</style>
