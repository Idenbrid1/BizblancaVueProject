<template>
    <div>
        <WebsiteNavbar />
        <div class="profile-wrapper mt-5">
            <div class="row m-0 container p-0">
                <div class="col-12 tabs-section-container">
                    <div class="row no-gutters tabs-section-wrap">
                        <!-- tabs ankers -->
                        <div class="tabs-ankers col-md-3 col-2">
                            <ul class="nav nav-tabs" role="tablist" id="DesktopTabsIcons">
                                <li class="nav-item profileIconTab">
                                    <img class="profileIcon" src="/website/assets/images/dashboard-interface.svg"
                                        alt="img">
                                    <span class="profileText">Profile</span>
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
                            <ul class="mobileTabsIcons" style="display: none;">
                                <li><a @click="openProfileTab()"><img class="IconsTab"
                                            src="/website/assets/images/details.svg" alt="TabsIcon"></a></li>
                                <li><a @click="openProfileTab()"><img class="IconsTab"
                                            src="/website/assets/images/mortarboard.svg" alt="TabsIcon"
                                            style="height: 30px;"></a></li>
                                <li><a @click="openProfileTab()"><img class="IconsTab"
                                            src="/website/assets/images/score.svg" alt="TabsIcon"
                                            style="height: 26px;"></a></li>
                                <li><a @click="openProfileTab()"><img class="IconsTab IconsTabActive"
                                            src="/website/assets/images/language.svg" alt="TabsIcon"
                                            style="height: 26px;"></a></li>
                                <li><a @click="openProfileTab()"><img class="IconsTab"
                                            src="/website/assets/images/trophy.svg" alt="TabsIcon"
                                            style="height: 26px;"></a></li>
                                <li><a @click="openProfileTab()"><img class="IconsTab"
                                            src="/website/assets/images/leader.svg" alt="TabsIcon"
                                            style="height: 26px;"></a></li>
                                <li><a @click="openProfileTab()"><img class="IconsTab"
                                            src="/website/assets/images/work.svg" alt="TabsIcon"
                                            style="height: 26px;"></a></li>
                                <li><a @click="openProfileTab()"><img class="IconsTab"
                                            src="/website/assets/images/overtime.svg" alt="TabsIcon"
                                            style="height: 26px;"></a></li>
                                <li><a @click="openProfileTab()"><img class="IconsTab"
                                            src="/website/assets/images/settings.svg" alt="TabsIcon"
                                            style="height: 26px;"></a></li>
                                <li><a @click="openProfileTab()"><img class="IconsTab"
                                            src="/website/assets/images/google-docs.svg" alt="TabsIcon"
                                            style="height: 26px;"></a></li>
                                <li><a @click="openProfileTab()"><img class="IconsTab"
                                            src="/website/assets/images/overtime.svg" alt="TabsIcon"
                                            style="height: 27px;"></a></li>
                                <li><a @click="openProfileTab()"><img class="IconsTab"
                                            src="/website/assets/images/overtime.svg" alt="TabsIcon"
                                            style="height: 27px;"></a></li>
                            </ul>

                            <!-- Modal Tab start -->
                            <div id="ProfileTabMobileNav" class="ProfileTabMobileNav" @click="closeProfileTab()">
                                <div class="row no-gutters modalTabConatiner">
                                    <div class="IconsModal">
                                        <ul class="mobileModalTabsIcons p-0">
                                            <li><img class="IconsTab" src="/website/assets/images/details.svg"
                                                    alt="TabsIcon"></li>
                                            <li><img class="IconsTab" src="/website/assets/images/mortarboard.svg"
                                                    alt="TabsIcon" style="height: 30px;"></li>
                                            <li><img class="IconsTab" src="/website/assets/images/score.svg"
                                                    alt="TabsIcon" style="height: 26px;"></li>
                                            <li><img class="IconsTab" src="/website/assets/images/language.svg"
                                                    alt="TabsIcon" style="height: 26px;"></li>
                                            <li><img class="IconsTab" src="/website/assets/images/trophy.svg"
                                                    alt="TabsIcon" style="height: 26px;"></li>
                                            <li><img class="IconsTab" src="/website/assets/images/leader.svg"
                                                    alt="TabsIcon" style="height: 26px;"></li>
                                            <li><img class="IconsTab" src="/website/assets/images/work.svg"
                                                    alt="TabsIcon" style="height: 26px;"></li>
                                            <li><img class="IconsTab" src="/website/assets/images/overtime.svg"
                                                    alt="TabsIcon" style="height: 26px;"></li>
                                            <li><img class="IconsTab" src="/website/assets/images/settings.svg"
                                                    alt="TabsIcon" style="height: 26px;"></li>
                                            <li><img class="IconsTab" src="/website/assets/images/google-docs.svg"
                                                    alt="TabsIcon" style="height: 26px;"></li>
                                            <li><img class="IconsTab" src="/website/assets/images/overtime.svg"
                                                    alt="TabsIcon" style="height: 27px;"></li>
                                            <li><img class="IconsTab" src="/website/assets/images/overtime.svg"
                                                    alt="TabsIcon" style="height: 27px;"></li>
                                        </ul>
                                    </div>
                                    <div class="IconsModalTabAnkers">
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
                                    <h1 class="tabsHeading">Basic information</h1>
                                    <div class="row no-gutters BasicInfoTab">
                                        <div class="col-12 col-md-6">
                                            <ul class="profileLables">
                                                <li class="profileLabel h150 profileLabelBorder rt0 btr5">
                                                    <span>Logo</span></li>
                                                <li class="profileLabel profileLabelBorder"><span>Name</span></li>
                                                <li class="profileLabel profileLabelBorder"><span>Founded</span></li>
                                                <li class="profileLabel profileLabelBorder"><span>Ceo</span></li>
                                                <li class="profileLabel profileLabelBorder"><span>Industry</span></li>
                                                <li class="profileLabel profileLabelBorder bbl5"><span>Weblink</span>
                                                </li>
                                                <li class="profileLabel profileLabelBorderTop bbl5 h150">
                                                    <span>Description</span></li>
                                                <li class="profileLabel profileLabelBorderTop bbl5"><span>No of
                                                        Employees</span></li>
                                            </ul>
                                            <ul class="profileInfoList">
                                                <li class="h150 profileInfo profileInfoBorderBottom"
                                                    style="height: 150px;">
                                                    <img :src="'/storage/images/companies/'+profile.logo" class="ProfileUserPic"
                                                        alt="profileImg">
                                                </li>
                                                <li class="profileInfo profileInfoBorder">
                                                    <div class="line-text-1">
                                                        <p>{{profile.company_name}}</p>
                                                    </div>
                                                </li>
                                                <li class="profileInfo profileInfoBorder">
                                                    <div class="line-text-1">
                                                        <p>{{profile.establish_at}}</p>
                                                    </div>
                                                </li>
                                                <li class="profileInfo profileInfoBorder">
                                                    <div class="line-text-1">
                                                        <p>{{profile.ceo}}</p>
                                                    </div>
                                                </li>
                                                <li class="profileInfo profileInfoBorder">
                                                    <div class="line-text-1">
                                                        <p>{{profile.industry}}</p>
                                                    </div>
                                                </li>
                                                <li class="profileInfo profileInfoBorder rb0">
                                                    <div class="line-text-1">
                                                        <p>{{profile.web_link}}</p>
                                                    </div>
                                                </li>
                                                <li class="profileInfo profileInfoBorder rb0 h150">
                                                    <div class="line-text-5">
                                                        <p>{{profile.description}}</p>
                                                    </div>
                                                </li>
                                                <li class="profileInfo profileInfoBorder rb0">
                                                    <div class="line-text-1">
                                                        <p>{{profile.no_of_employees}}</p>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col-12 col-md-6">
                                            <ul class="profileLables">
                                                <li><span
                                                        class="profileLabel h150 profileLabelBorder rt0 btr5">Phone</span>
                                                </li>
                                                <li><span class="profileLabel profileLabelBorder">Email</span></li>
                                                <li><span class="profileLabel profileLabelBorder">City</span></li>
                                                <li><span class="profileLabel profileLabelBorder">Address</span></li>
                                                <li><span class="profileLabel"></span></li>
                                                <li><span class="profileLabel"></span></li>
                                                <li><span class="profileLabel h150"></span></li>
                                                <li><span class="profileLabel bb5"></span></li>
                                                <!-- <li><span class="profileLabel bbl5"></span></li> -->
                                            </ul>
                                            <ul class="profileInfoList">
                                                <li class="profileInfo h150" style="height: 150px;">
                                                    <div class="line-text-5" style="height: 105px;">
                                                        <p>{{profile.phone}}</p>
                                                    </div>
                                                </li>
                                                <li class="profileInfo profileInfoBorder">
                                                    <div class="line-text-1">
                                                        <p class="pr-5">{{profile.email}}</p>
                                                    </div>
                                                </li>
                                                <li class="profileInfo profileLabelBorderTop">
                                                    <div class="line-text-1">
                                                        <p>{{profile.city}}</p>
                                                    </div>
                                                </li>
                                                <li class="profileInfo profileInfoBorder">
                                                    <div class="line-text-2">
                                                        <p>{{profile.address}}</p>
                                                    </div>
                                                </li>
                                                <li class="profileInfo profileLabelBorderTop">
                                                    <div class="line-text-2">
                                                        <p></p>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <ul class="viewEditAnkerList">
                                        <!-- <li><a class="ViewAnker" href="#/">View</a></li> -->
                                        <li><a class="ViewEdit" href=".basicInfoModal" data-toggle="modal"
                                                data-target=".basicInfoModal">Edit</a></li>
                                    </ul>
                                </div>
                                <div id="social-media" class="tab-pane fade">
                                    <h1 class="tabsHeading">Social Media</h1>
                                    <div class="row no-gutters EducationInfoTab">
                                        <div class="col-12 col-md-6">
                                            <ul class="profileLables">
                                                <li class="profileLabel profileLabelBorder btr5"><img src="/website/assets/images/whatsapp.svg" alt=""></li>
                                                <li class="profileLabel profileLabelBorder"><img src="/website/assets/images/facebook.svg" alt=""></li>
                                                <li class="profileLabel profileLabelBorder"><img src="/website/assets/images/linkedin.svg" alt=""></li>
                                                <li class="profileLabel profileLabelBorder"><img src="/website/assets/images/twitter.svg" alt=""></li>
                                                <li class="profileLabel profileLabelBorder"><img src="/website/assets/images/github.svg" alt=""></li>
                                            </ul>
                                            <ul class="profileInfoList">
                                                <li class="profileInfo profileInfoBorder rt0">
                                                    <div class="line-text-1">
                                                        <p>{{profile.whatsapp}}</p>
                                                    </div>
                                                </li>
                                                <li class="profileInfo profileInfoBorder">
                                                    <div class="line-text-1">
                                                        <p>{{profile.facebook}}</p>
                                                    </div>
                                                </li>
                                                <li class="profileInfo profileInfoBorder">
                                                    <div class="line-text-1">
                                                        <p>{{profile.linkedin}}</p>
                                                    </div>
                                                </li>
                                                <li class="profileInfo profileInfoBorder">
                                                    <div class="line-text-1">
                                                        <p>{{profile.twitter}}</p>
                                                    </div>
                                                </li>
                                                <li class="profileInfo profileInfoBorder rb0">
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
                                                        <img v-for="(item, index) in profile.profile_gallery.split(',')" :key="index" :src="'/storage/images/companies/'+item" alt="item">
                                                    </div>
                                                </div>
                                                <div class="video_upload_tab">
                                                    <div class="videoLabelCompany">Video</div>
                                                    <div class="videotag" v-if="profile.profile_video">
                                                        <video controls :src="'/storage/images/companies/'+profile.profile_video"></video>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <ul class="viewEditAnkerList">
                                        <!-- <li><a class="ViewAnker" href="#/">View</a></li> -->
                                        <li><a class="ViewEdit" href=".SocialMediaModal" data-toggle="modal"
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
                        <div class="container editModel pb-5">
                            <h3 class="my-4">Update</h3>
                            <section class="modelForm container p-0 p-md-2">
                                <div class="row no-gutters" id="subFormFieldsContainer">
                                    <div class="col-12">
                                        <div id='subForm' class="subForm">
                                            <div class="modelTitle my-3">
                                                <div class="mr-2 titleEffect"></div>
                                                <h4 class="m-0 modelTitleText">Basic Information</h4>
                                            </div>
                                            <div class="subFormFields">
                                                <div class="row">
                                                    <div class="col-12 col-md-6">
                                                        <div class="form-group">
                                                            <label for="" class="">Logo</label>
                                                            <input type="file" name="companyLogo" class="form-control" />
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-md-6">
                                                        <div class="form-group">
                                                            <label for="" class="">No of Employees</label>
                                                            <input type="text" name="no_of_employees" class="form-control" v-model="profile.no_of_employees"/>
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-md-6">
                                                        <div class="form-group">
                                                            <label for="" class="">Founded</label>
                                                            <input type="date" placeholder="Enter Founded" name="establish_at" v-model="profile.establish_at"
                                                                class="form-control" />
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-md-6">
                                                        <div class="form-group">
                                                            <label for="" class="">CEO</label>
                                                            <input type="text" placeholder="Enter CEO" name="ceo" v-model="profile.ceo"
                                                                class="form-control" />
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-md-6">
                                                        <div class="form-group">
                                                            <label for="" class="">Industry</label>
                                                            <input type="text" placeholder="Enter Industry" name="industry" v-model="profile.industry"
                                                                class="form-control" />
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-md-6">
                                                        <div class="form-group">
                                                            <label for="" class="">City</label>
                                                            <input type="text" placeholder="Enter City" name="city" v-model="profile.city"
                                                                class="form-control" />
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-md-6">
                                                        <div class="form-group">
                                                            <label for="" class="">Address</label>
                                                            <input type="text" placeholder="Enter Address" name="address" v-model="profile.address"
                                                                class="form-control" />
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-md-6">
                                                        <div class="form-group">
                                                            <label for="" class="">Phone</label>
                                                            <input type="number" placeholder="Enter Phone" name="phone" v-model="profile.phone"
                                                                class="form-control" />
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-md-6">
                                                        <div class="form-group">
                                                            <label for="" class="">Email</label>
                                                            <input type="email" placeholder="Enter Phone" name="email" v-model="profile.email" disabled
                                                                class="form-control" />
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-md-6">
                                                        <div class="form-group">
                                                            <label for="" class="">Weblink</label>
                                                            <input type="text" placeholder="Enter Phone" name="web_link" v-model="profile.web_link"
                                                                class="form-control" />
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="form-group">
                                                            <label for="" class="">Description</label>
                                                            <textarea style="height: 100px;"
                                                                placeholder="Enter Description" name="description" v-model="profile.description"
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
                                        <button class="positiveBtn modelBtn mr-1" @click.prevent="updateBasicInformation()">Update</button>
                                        <button class="negativeBtn modelBtn ml-1" data-dismiss="modal" @click.prevent="getCompanyProfileData()">Cancel</button>
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
                        <div class="container editModel pb-5">
                            <h3 class="my-4">Update</h3>
                            <section class="modelForm">
                                <div class="row no-gutters" id="EducationFieldsContainer">
                                    <div class="col-12 EductionSection">
                                        <div class="subForm">
                                            <div class="modelTitle my-3">
                                                <div class="mr-2 titleEffect"></div>
                                                <h4 class="m-0 modelTitleText"  >Social Media</h4>
                                            </div>
                                            <div class="subFormFields">
                                                <div class="row">
                                                    <div class="col-12 col-md-6">
                                                        <div class="form-group">
                                                            <label for="" class="">Whatsapp</label>
                                                            <input type="text" name="whatsapp" v-model="profile.whatsapp"
                                                                placeholder="Enter Whatsapp" class="form-control" />
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-md-6">
                                                        <div class="form-group">
                                                            <label for="" class="">Facebook</label>
                                                            <input type="text" name="facebook" v-model="profile.facebook"
                                                                placeholder="Paste Facebook Link"
                                                                class="form-control" />
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-md-6">
                                                        <div class="form-group">
                                                            <label for="" class="">Linkedin</label>
                                                            <input type="text" placeholder="Paste LinkedIn Link" name="linkedin" v-model="profile.linkedin"
                                                                class="form-control" /> 
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-md-6">
                                                        <div class="form-group">
                                                            <label for="" class="">Twitter</label>
                                                            <input type="text" placeholder="Paste Twitter Link" name="twitter" v-model="profile.twitter"
                                                                class="form-control" />
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-md-6">
                                                        <div class="form-group">
                                                            <label for="" class="">Github</label>
                                                            <input type="text" placeholder="Paste GitHub Link" name="github"  v-model="profile.github"
                                                                class="form-control" />
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-md-6">
                                                        <div class="form-group">
                                                            <label for="" class="">Company Pics <small>(Max upload4)</small></label>
                                                            <input name="companyGallery[]" type="file" multiple="multiple" id="companyGallery" class="form-control" />
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="form-group">
                                                            <label for="" class="">Video</label>
                                                            <input type="file" value="" name="companyVideo" class="form-control" />
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mt-4 ">
                                    <div class="col-lg-12 modelBtnContainer ">
                                        <button class="positiveBtn modelBtn mr-1" @click.prevent="updateSocialMedia()">Update</button>
                                        <button class="negativeBtn modelBtn ml-1" data-dismiss="modal" @click.prevent="getCompanyProfileData()">Cancel</button>
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
                profile: '',
            };
        },
        components: {
            WebsiteNavbar,
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
                    });
            },
            updateBasicInformation() {
                var $basicinformationForm = $('#basicinformationForm');
                var data = new FormData(basicinformationForm);
                axios.post('/update/company-basicinformation', data)
                    .then((res) => {
                        if (res.data.success == false) {
                            this.errors = res.data.errors
                        } else {
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
                    .catch((err) => {

                    })
            },
            updateSocialMedia() {
                var $fileUpload = $('#companyGallery');
                if (parseInt($fileUpload.get(0).files.length) > 4){
                    Swal.fire({
                        icon: 'error',
                        title: 'Oops...',
                        text: 'You Cannot Select More Then 4 images!',
                    })
                    return false;
                }
                var $socialmediaForm = $('#socialmediaForm');
                var data = new FormData(socialmediaForm);
                axios.post('/update/socialmedia', data)
                    .then((res) => {
                        if (res.data.success == false) {
                            this.errors = res.data.errors
                        } else {
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
                    .catch((err) => {

                    })
            },
            openProfileTab() {
                document.getElementById("ProfileTabMobileNav").style.left = "0%";
            },
            closeProfileTab() {
                document.getElementById("ProfileTabMobileNav").style.left = "-100%";
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
        .profileInfoList>li {
            height: 54px;
        }

        .profileLabel {
            width: 140px;
        }
    }

</style>
