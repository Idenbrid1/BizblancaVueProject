<template>
    <div>
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
                                                    <img src="/website/assets/images/i2c.jpeg" class="ProfileUserPic"
                                                        alt="profileImg">
                                                </li>
                                                <li class="profileInfo profileInfoBorder">
                                                    <div class="line-text-1">
                                                        <p>i2c</p>
                                                    </div>
                                                </li>
                                                <li class="profileInfo profileInfoBorder">
                                                    <div class="line-text-1">
                                                        <p>1995</p>
                                                    </div>
                                                </li>
                                                <li class="profileInfo profileInfoBorder">
                                                    <div class="line-text-1">
                                                        <p>Amir W Wain</p>
                                                    </div>
                                                </li>
                                                <li class="profileInfo profileInfoBorder">
                                                    <div class="line-text-1">
                                                        <p>Information Technology</p>
                                                    </div>
                                                </li>
                                                <li class="profileInfo profileInfoBorder rb0">
                                                    <div class="line-text-1">
                                                        <p>www.i2cinc.com</p>
                                                    </div>
                                                </li>
                                                <li class="profileInfo profileInfoBorder rb0 h150">
                                                    <div class="line-text-5">
                                                        <p>i2c Inc. is an experienced and trusted payments solution
                                                            provider that helps card issuers and program managers
                                                            deliver profitable prepaid programs. With MCP (My Card
                                                            Place), i2cs...</p>
                                                    </div>
                                                </li>
                                                <li class="profileInfo profileInfoBorder rb0">
                                                    <div class="line-text-1">
                                                        <p>250 - 1000</p>
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
                                                        <p>+92 300 123 4567</p>
                                                    </div>
                                                </li>
                                                <li class="profileInfo profileInfoBorder">
                                                    <div class="line-text-1">
                                                        <p class="pr-5">Info@i2c.com</p>
                                                    </div>
                                                </li>
                                                <li class="profileInfo profileLabelBorderTop">
                                                    <div class="line-text-1">
                                                        <p>Lahore</p>
                                                    </div>
                                                </li>
                                                <li class="profileInfo profileInfoBorder">
                                                    <div class="line-text-2">
                                                        <p>04, Old FCC Rd، Ferozepur Rd, Gulberg III, Lahore</p>
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
                                    <h1 class="tabsHeading">Education</h1>
                                    <div class="row no-gutters EducationInfoTab">
                                        <div class="col-12 col-md-6">
                                            <ul class="profileLables">
                                                <li class="profileLabel profileLabelBorder btr5"><img
                                                        src="/website/assets/images/whatsapp.svg" alt=""></li>
                                                <li class="profileLabel profileLabelBorder"><img
                                                        src="/website/assets/images/linkedin.svg" alt=""></li>
                                                <li class="profileLabel profileLabelBorder"><img
                                                        src="/website/assets/images/facebook.svg" alt=""></li>
                                                <li class="profileLabel profileLabelBorder"><img
                                                        src="/website/assets/images/facebook.svg" alt=""></li>
                                                <li class="profileLabel profileLabelBorder bbl5"><img
                                                        src="/website/assets/images/facebook.svg" alt=""></li>
                                            </ul>
                                            <ul class="profileInfoList">
                                                <li class="profileInfo profileInfoBorder rt0">
                                                    <div class="line-text-1">
                                                        <p>+92 300 123 4567</p>
                                                    </div>
                                                </li>
                                                <li class="profileInfo profileInfoBorder">
                                                    <div class="line-text-1">
                                                        <p>https://www.facebook.com/ i2cinc</p>
                                                    </div>
                                                </li>
                                                <li class="profileInfo profileInfoBorder">
                                                    <div class="line-text-1">
                                                        <p>https://www.linkedin.com/ i2cinc</p>
                                                    </div>
                                                </li>
                                                <li class="profileInfo profileInfoBorder">
                                                    <div class="line-text-1">
                                                        <p>https://www.twitter.com/ i2cinc</p>
                                                    </div>
                                                </li>
                                                <li class="profileInfo profileInfoBorder rb0">https://www.github.com/
                                                    i2cinc</li>
                                            </ul>
                                        </div>
                                        <div class="col-12 col-md-6">
                                            <ul class="profileLables">
                                                <li class="profileLabel profileLabelBorder rb0 btr5 h150"><span></span>
                                                </li>
                                                <li class="profileLabel profileLabelBorder"><span>Ending Date</span>
                                                </li>
                                                <li class="profileLabel profileLabelBorder rb0"><span></span></li>
                                                <li class="profileLabel bbl5"><span></span></li>
                                            </ul>
                                            <ul class="profileInfoList">
                                                <li class="profileInfo profileInfoBorder rt0 rb0 h150">
                                                    <img src="/website/assets/images/company-profile/i2c1.png" alt="">
                                                    <img src="/website/assets/images/company-profile/i2c1.png" alt="">
                                                    <img src="/website/assets/images/company-profile/i2c1.png" alt="">
                                                    <img src="/website/assets/images/company-profile/i2c1.png" alt="">
                                                </li>
                                                <li class="profileInfo profileInfoBorder rt0"></li>
                                                <li class="profileInfo profileInfoBorder">
                                                    <div class="line-text-1">
                                                        <p>end_date</p>
                                                    </div>
                                                </li>
                                                <li class="profileInfo profileInfoBorder rb0"></li>
                                            </ul>
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
                <form id="basicinformationForm" action="" method="POST" enctype="multipart/form-data">
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
                                                            <input type="file" value="" name="" class="form-control" />
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-md-6">
                                                        <div class="form-group">
                                                            <label for="" class="">No of Employees</label>
                                                            <select name="" id="" class="form-control">
                                                                <option value="" selected>Please Select</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-md-6">
                                                        <div class="form-group">
                                                            <label for="" class="">Founded</label>
                                                            <input type="text" placeholder="Enter Founded" name=""
                                                                class="form-control" />
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-md-6">
                                                        <div class="form-group">
                                                            <label for="" class="">CEO</label>
                                                            <input type="text" placeholder="Enter CEO" name=""
                                                                class="form-control" />
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-md-6">
                                                        <div class="form-group">
                                                            <label for="" class="">Industry</label>
                                                            <input type="text" placeholder="Enter Industry" name=""
                                                                class="form-control" />
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-md-6">
                                                        <div class="form-group">
                                                            <label for="" class="">City</label>
                                                            <input type="text" placeholder="Enter City" name=""
                                                                class="form-control" />
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-md-6">
                                                        <div class="form-group">
                                                            <label for="" class="">Address</label>
                                                            <input type="text" placeholder="Enter Address" name=""
                                                                class="form-control" />
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-md-6">
                                                        <div class="form-group">
                                                            <label for="" class="">Phone</label>
                                                            <input type="text" placeholder="Enter Phone" name=""
                                                                class="form-control" />
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-md-6">
                                                        <div class="form-group">
                                                            <label for="" class="">Email</label>
                                                            <input type="email" placeholder="Enter Phone" name=""
                                                                class="form-control" />
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-md-6">
                                                        <div class="form-group">
                                                            <label for="" class="">Weblink</label>
                                                            <input type="text" placeholder="Enter Phone" name=""
                                                                class="form-control" />
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="form-group">
                                                            <label for="" class="">Description</label>
                                                            <textarea style="height: 100px;"
                                                                placeholder="Enter Description" name=""
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
                                        <button class="positiveBtn modelBtn mr-1">Update</button>
                                        <button class="negativeBtn modelBtn ml-1" data-dismiss="modal">Cancel</button>
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
                <form id="" action="" method="POST">
                    <div class="modal-content p-0">
                        <div class="container editModel pb-5">
                            <h3 class="my-4">Update</h3>
                            <section class="modelForm">
                                <div class="row no-gutters" id="EducationFieldsContainer">
                                    <div class="col-12 EductionSection">
                                        <div class="subForm">
                                            <div class="modelTitle my-3">
                                                <div class="mr-2 titleEffect"></div>
                                                <h4 class="m-0 modelTitleText">Social Media</h4>
                                            </div>
                                            <div class="subFormFields">
                                                <div class="row">
                                                    <div class="col-12 col-md-6">
                                                        <div class="form-group">
                                                            <label for="" class="">Whatsapp</label>
                                                            <input type="text" value="" name=""
                                                                placeholder="Enter Whatsapp" class="form-control" />
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-md-6">
                                                        <div class="form-group">
                                                            <label for="" class="">Facebook</label>
                                                            <input type="text" value="" name=""
                                                                placeholder="Paste Facebook Link"
                                                                class="form-control" />
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-md-6">
                                                        <div class="form-group">
                                                            <label for="" class="">Linkedin</label>
                                                            <input type="text" placeholder="Paste LinkedIn Link" name=""
                                                                class="form-control" />
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-md-6">
                                                        <div class="form-group">
                                                            <label for="" class="">Twitter</label>
                                                            <input type="text" placeholder="Paste Twitter Link" name=""
                                                                class="form-control" />
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-md-6">
                                                        <div class="form-group">
                                                            <label for="" class="">Github</label>
                                                            <input type="text" placeholder="Paste GitHub Link" name=""
                                                                class="form-control" />
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-md-6">
                                                        <div class="form-group">
                                                            <label for="" class="">Company Pics <small>(Max upload
                                                                    4)</small></label>
                                                            <input type="file" value="" name="" class="form-control" />
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="form-group">
                                                            <label for="" class="">Video</label>
                                                            <input type="file" value="" name="" class="form-control" />
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mt-4">
                                    <div class="col-lg-12 modelBtnContainer">
                                        <button class="positiveBtn modelBtn mr-1">Update</button>
                                        <button class="negativeBtn modelBtn ml-1" data-dismiss="modal">Cancel</button>
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
    export default {
        data() {
            return {};
        },
        mounted() {
            this.openProfileTab();
            this.closeProfileTab();
        },
        methods: {
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
