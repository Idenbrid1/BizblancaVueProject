<template>
    <div>
        <div class="profile-wrapper mt-5">
            <div class="row m-0 container p-0">
                <div class="col-12 tabs-section-container">
                    <div class="row no-gutters tabs-section-wrap">
                        <!-- tabs ankers -->
                        <div class="tabs-ankers col-md-3 col-2">
                            <!-- <a href="#">Download CV</a> -->
                            <ul class="nav nav-tabs" role="tablist" id="DesktopTabsIcons">
                                <li class="nav-item profileIconTab">
                                    <img class="profileIcon" src="/website/assets/images/dashboard-interface.svg"
                                        alt="img">
                                    <span class="profileText">Profile</span>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link active" data-toggle="tab" href="#basic-information">Basic information</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#education">Education</a>
                                </li>
                                <!-- <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#qualification">Qualification</a>
                        </li> -->
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#languages">Languages</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#awards">Awards</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#current-job">Current Job</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#desire-job">Desire job</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#work-experience">Work Experience</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#skills">Skills</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#documents">Documents</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#projects">Projects</a>
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
                                           Î style="height: 26px;"></a></li>
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
                                            <li><img class="IconsTab" src="/website/assets/img/details.svg"
                                                    alt="TabsIcon"></li>
                                            <li><img class="IconsTab" src="/website/assets/img/mortarboard.svg"
                                                    alt="TabsIcon" style="height: 30px;"></li>
                                            <li><img class="IconsTab" src="/website/assets/img/score.svg" alt="TabsIcon"
                                                    style="height: 26px;"></li>
                                            <li><img class="IconsTab" src="/website/assets/img/language.svg"
                                                    alt="TabsIcon" style="height: 26px;"></li>
                                            <li><img class="IconsTab" src="/website/assets/img/trophy.svg"
                                                    alt="TabsIcon" style="height: 26px;"></li>
                                            <li><img class="IconsTab" src="/website/assets/img/leader.svg"
                                                    alt="TabsIcon" style="height: 26px;"></li>
                                            <li><img class="IconsTab" src="/website/assets/img/work.svg" alt="TabsIcon"
                                                    style="height: 26px;"></li>
                                            <li><img class="IconsTab" src="/website/assets/img/overtime.svg"
                                                    alt="TabsIcon" style="height: 26px;"></li>
                                            <li><img class="IconsTab" src="/website/assets/img/settings.svg"
                                                    alt="TabsIcon" style="height: 26px;"></li>
                                            <li><img class="IconsTab" src="/website/assets/img/google-docs.svg"
                                                    alt="TabsIcon" style="height: 26px;"></li>
                                            <li><img class="IconsTab" src="/website/assets/img/overtime.svg"
                                                    alt="TabsIcon" style="height: 27px;"></li>
                                            <li><img class="IconsTab" src="/website/assets/img/overtime.svg"
                                                    alt="TabsIcon" style="height: 27px;"></li>
                                        </ul>
                                    </div>
                                    <div class="IconsModalTabAnkers">
                                        <ul class="nav nav-tabs" role="tablist">
                                            <li class="nav-item">
                                                <a class="nav-link nav-link active" data-toggle="tab"
                                                    href="#basic-information">Basic information</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link nav-link" data-toggle="tab"
                                                    href="#education">Education</a>
                                            </li>
                                            <!-- <li class="nav-item">
                                        <a class="nav-link nav-link @if(Session::get('active-tab') == 'projects') active @endif" data-toggle="tab" href="#qualification">Qualification</a>
                                    </li> -->
                                            <li class="nav-item">
                                                <a class="nav-link nav-link" data-toggle="tab"
                                                    href="#languages">Languages</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link nav-link" data-toggle="tab" href="#awards">Awards</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link nav-link" data-toggle="tab"
                                                    href="#current-job">Current Job</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link nav-link" data-toggle="tab" href="#desire-job">Desire
                                                    job</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link nav-link" data-toggle="tab"
                                                    href="#work-experience">Work Experience</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link nav-link" data-toggle="tab" href="#skills">Skills</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link nav-link" data-toggle="tab"
                                                    href="#documents">Documents</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link nav-link" data-toggle="tab"
                                                    href="#projects">Projects</a>
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
                                <div id="basic-information" class="tab-pane in active show">
                                    <h1 class="tabsHeading">Basic information</h1>
                                    <div class="row no-gutters BasicInfoTab">
                                        <div class="col-12 col-md-6">
                                            <ul class="profileLables">
                                                <li class="profileLabel h150 profileLabelBorder rt0 btr5"><span>Profile
                                                        Pic</span></li>
                                                <li class="profileLabel profileLabelBorder"><span>Full Name</span></li>
                                                <li class="profileLabel profileLabelBorder"><span>Gender</span></li>
                                                <li class="profileLabel profileLabelBorder"><span>City</span></li>
                                                <li class="profileLabel profileLabelBorder"><span>Address</span></li>
                                                <li class="profileLabel profileLabelBorder bbl5"><span>Phone</span></li>
                                                <!-- <li class="profileLabel profileLabelBorderTop bbl5"><span>Date of Birth</span></li> -->
                                            </ul>
                                            <ul class="profileInfoList">
                                                <li class="h150 profileInfo profileInfoBorderBottom"
                                                    style="height: 150px;">
                                                    <img src="/website/assets/images/avatart.jpeg"
                                                        class="ProfileUserPic" alt="profileImg">
                                                </li>
                                                <li class="profileInfo profileInfoBorder">
                                                    <div class="line-text-1">
                                                        <p>Full Name</p>
                                                    </div>
                                                </li>
                                                <li class="profileInfo profileInfoBorder">
                                                    <div class="line-text-1">
                                                        <p>Gender</p>
                                                    </div>
                                                </li>
                                                <li class="profileInfo profileInfoBorder">
                                                    <div class="line-text-1">
                                                        <p>City</p>
                                                    </div>
                                                </li>
                                                <li class="profileInfo profileInfoBorder">
                                                    <div class="line-text-1">
                                                        <p>Address</p>
                                                    </div>
                                                </li>
                                                <li class="profileInfo profileInfoBorder rb0">
                                                    <div class="line-text-1">
                                                        <p>Phone</p>
                                                    </div>
                                                </li>
                                                <!-- <li class="profileInfo profileInfoBorder rb0">
                                            <div class="line-text-1">
                                                <p>{{$candidate->date}}</p>
                                            </div>
                                        </li> -->
                                            </ul>
                                        </div>
                                        <div class="col-12 col-md-6">
                                            <ul class="profileLables">
                                                <li><span
                                                        class="profileLabel h150 profileLabelBorder rt0 btr5">Bio</span>
                                                </li>
                                                <li><span class="profileLabel profileLabelBorder">Date of Birth</span>
                                                </li>
                                                <li><span class="profileLabel profileLabelBorder">Zip Code</span></li>
                                                <li><span class="profileLabel"></span></li>
                                                <li><span class="profileLabel"></span></li>
                                                <li><span class="profileLabel bb5"></span></li>
                                                <!-- <li><span class="profileLabel bbl5"></span></li> -->
                                            </ul>
                                            <ul class="profileInfoList">
                                                <li class="profileInfo h150" style="height: 150px;">
                                                    <div class="line-text-5" style="height: 105px;">
                                                        <p>Bio</p>
                                                    </div>
                                                </li>
                                                <li class="profileInfo profileInfoBorder">
                                                    <div class="line-text-1">
                                                        <p class="pr-5">Date of Birth</p>
                                                    </div>
                                                </li>
                                                <li class="profileInfo profileLabelBorderTop">
                                                    <div class="line-text-1">
                                                        <p>Zipcode</p>
                                                    </div>
                                                </li>
                                                <li class="profileInfo">
                                                    <div class="line-text-1">
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
                                <div id="education" class="tab-pane fade">
                                    <h1 class="tabsHeading">Education</h1>
                                    <div class="row no-gutters EducationInfoTab">
                                        <div class="col-12 col-md-6">
                                            <ul class="profileLables">
                                                <li class="profileLabel profileLabelBorder btr5"><span>Institute
                                                        Type</span></li>
                                                <li class="profileLabel profileLabelBorder"><span>Institute Name</span>
                                                </li>
                                                <li class="profileLabel profileLabelBorder"><span>Starting Date</span>
                                                </li>
                                                <li class="profileLabel profileLabelBorder"><span>Department</span></li>
                                                <li class="profileLabel profileLabelBorder bbl5"><span></span></li>
                                            </ul>
                                            <ul class="profileInfoList">
                                                <li class="profileInfo profileInfoBorder rt0">
                                                    <div class="line-text-1">
                                                        <p>Institute type</p>
                                                    </div>
                                                </li>
                                                <li class="profileInfo profileInfoBorder">
                                                    <div class="line-text-1">
                                                        <p>Institute Name</p>
                                                    </div>
                                                </li>
                                                <li class="profileInfo profileInfoBorder">
                                                    <div class="line-text-1">
                                                        <p>Starting Date</p>
                                                    </div>
                                                </li>
                                                <li class="profileInfo profileInfoBorder">
                                                    <div class="line-text-1">
                                                        <p>Department</p>
                                                    </div>
                                                </li>
                                                <li class="profileInfo profileInfoBorder rb0"></li>
                                            </ul>
                                        </div>
                                        <div class="col-12 col-md-6">
                                            <ul class="profileLables">
                                                <li class="profileLabel profileLabelBorder rb0 btr5"><span></span></li>
                                                <li class="profileLabel profileLabelBorder rt0"><span></span></li>
                                                <li class="profileLabel profileLabelBorder"><span>Ending Date</span>
                                                </li>
                                                <li class="profileLabel profileLabelBorder rb0"><span></span></li>
                                                <li class="profileLabel bbl5"><span></span></li>
                                            </ul>
                                            <ul class="profileInfoList">
                                                <li class="profileInfo profileInfoBorder rt0 rb0"></li>
                                                <li class="profileInfo profileInfoBorder rt0"></li>
                                                <li class="profileInfo profileInfoBorder">
                                                    <div class="line-text-1">
                                                        <p>End Date</p>
                                                    </div>
                                                </li>
                                                <li class="profileInfo profileInfoBorder rb0"></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <ul class="viewEditAnkerList">
                                        <!-- <li><a class="ViewAnker" href="#/">View</a></li> -->
                                        <li><a class="ViewEdit" href=".EducationModal" data-toggle="modal"
                                                data-target=".EducationModal">Edit</a></li>
                                    </ul>
                                </div>
                                <div id="qualification" class="tab-pane fade">
                                    <h1 class="tabsHeading">Qualification</h1>
                                    <div class="row no-gutters QualificationInfoTab">
                                        <div class="col-12 col-md-6">
                                            <ul class="profileLables">
                                                <li class="profileLabel profileLabelBorder rt0 btr5"><span>Institute
                                                        Type</span></li>
                                                <li class="profileLabel profileLabelBorder"><span>Institute Name</span>
                                                </li>
                                                <li class="profileLabel profileLabelBorder"><span>Starting Date</span>
                                                </li>
                                                <li class="profileLabel profileLabelBorder"><span>Department</span></li>
                                                <li class="profileLabel profileLabelBorder bbl5"><span></span></li>
                                            </ul>
                                            <ul class="profileInfoList">
                                                <li class="profileInfo profileInfoBorder rt0">
                                                    <div class="line-text-1">
                                                        <p>University</p>
                                                    </div>
                                                </li>
                                                <li class="profileInfo profileInfoBorder">
                                                    <div class="line-text-1">
                                                        <p>Superior University</p>
                                                    </div>
                                                </li>
                                                <li class="profileInfo profileInfoBorder">
                                                    <div class="line-text-1">
                                                        <p>09/09/2016</p>
                                                    </div>
                                                </li>
                                                <li class="profileInfo profileInfoBorder">
                                                    <div class="line-text-1">
                                                        <p>Computer Science</p>
                                                    </div>
                                                </li>
                                                <li class="profileInfo profileInfoBorder rb0"></li>
                                            </ul>
                                        </div>
                                        <div class="col-12 col-md-6">
                                            <ul class="profileLables">
                                                <li class="profileLabel profileLabelBorder rt0 rb0 btr5"><span></span>
                                                </li>
                                                <li class="profileLabel profileLabelBorder rt0"><span></span></li>
                                                <li class="profileLabel profileLabelBorder"><span>Ending Date</span>
                                                </li>
                                                <li class="profileLabel profileLabelBorder rb0"><span></span></li>
                                                <li class="profileLabel bbl5"><span></span></li>
                                            </ul>
                                            <ul class="profileInfoList">
                                                <li class="profileInfo"></li>
                                                <li class="profileInfo profileInfoBorder rt0"></li>
                                                <li class="profileInfo profileInfoBorder">
                                                    <div class="line-text-1">
                                                        <p>20/08/2020</p>
                                                    </div>
                                                </li>
                                                <li class="profileInfo profileInfoBorder rb0"></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <ul class="viewEditAnkerList">
                                        <!-- <li><a class="ViewAnker" href="#/">View</a></li> -->
                                        <li><a class="ViewEdit" href=".QualificationModal" data-toggle="modal"
                                                data-target=".QualificationModal">Edit</a></li>
                                    </ul>
                                </div>
                                <div id="languages" class="tab-pane fade">
                                    <h1 class="tabsHeading">Languages</h1>
                                    <div class="row no-gutters DocumentsInfoTab">
                                        <div class="col-4 col-md-6 br1">
                                            <ul class="profileLables w-100">
                                                <li class="profileLabel w-100 bl5"><span>Language Name</span></li>
                                                <li>
                                                    <ul class="profileInfoList">
                                                        <li class="profileInfo profileInfoBorder rt0">
                                                            <div class="line-text-1">
                                                                <p class="SkillsTitle">Language Name</p>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col-8 col-md-6 bl1">
                                            <ul class="profileLables w-100">
                                                <li class="profileLabel w-100 br5"><span>Language Level</span></li>
                                                <li>
                                                    <ul class="profileInfoList">
                                                        <li class="profileInfo profileInfoBorder rt0">
                                                            <ul class="uploadViewAnkerList">
                                                                <li>
                                                                    <!-- <progress id="file" max="100" value="80"> 80% </progress> -->
                                                                    <p>Language Level</p>
                                                                </li>
                                                            </ul>
                                                        </li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <ul class="viewEditAnkerList">
                                        <!-- <li><a class="ViewAnker" href="#/">View</a></li> -->
                                        <li><a class="ViewEdit" href=".LanguagesModal" data-toggle="modal"
                                                data-target=".LanguagesModal">Edit</a></li>
                                    </ul>
                                </div>
                                <div id="awards" class="tab-pane fade">
                                    <h1 class="tabsHeading">Awards</h1>
                                    <div class="row no-gutters AwardsInfoTab">
                                        <div class="col-8 col-md-6 br1">
                                            <ul class="profileLables w-100">
                                                <li class="profileLabel w-100 bl5"><span>Award Name</span></li>
                                                <li>
                                                    <ul class="profileInfoList">
                                                        <li class="profileInfo profileInfoBorder rt0">
                                                            <div class="line-text-1">
                                                                <p class="awardsTitle">Award Name</p>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col-4 col-md-6 bl1">
                                            <ul class="profileLables w-100">
                                                <li class="profileLabel w-100 br5"><span>Year</span></li>
                                                <li>
                                                    <ul class="profileInfoList">
                                                        <li class="profileInfo profileInfoBorder rt0">
                                                            <div class="line-text-1">
                                                                <p class="awardsYear">Year</p>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <ul class="viewEditAnkerList">
                                        <!-- <li><a class="ViewAnker" href="#/">View</a></li> -->
                                        <li><a class="ViewEdit" href=".AwardModal" data-toggle="modal"
                                                data-target=".AwardModal">Edit</a></li>
                                    </ul>
                                </div>
                                <div id="current-job" class="tab-pane fade">
                                    <h1 class="tabsHeading">Current job</h1>
                                    <div class="row no-gutters CurrentJobTab">
                                        <div class="col-12 col-md-6">
                                            <ul class="profileLables">
                                                <li class="profileLabel profileLabelBorder rt0 btr5"><span>Currently
                                                        Working</span></li>
                                                <li class="profileLabel profileLabelBorder"><span>Starting Date</span>
                                                </li>
                                                <li class="profileLabel profileLabelBorder"><span>Ending Date</span>
                                                </li>
                                                <li class="profileLabel profileLabelBorder"><span>Current
                                                        Position</span></li>
                                                <li class="profileLabel profileLabelBorder"><span>Current Status</span>
                                                </li>
                                                <li class="profileLabel profileLabelBorder"><span>No of Persons
                                                        Managed</span></li>
                                                <!-- <li class="profileLabel profileLabelBorder rb0 bbl5"><span>Skills</span></li> -->
                                            </ul>
                                            <ul class="profileInfoList">
                                                <li class="profileInfo profileInfoBorder rt0">
                                                    <div class="line-text-1">
                                                        <p>Is working currently</p>
                                                    </div>
                                                </li>
                                                <li class="profileInfo profileInfoBorder">
                                                    <div class="line-text-1">
                                                        <p>Job start date</p>
                                                    </div>
                                                </li>
                                                <li class="profileInfo profileInfoBorder">
                                                    <div class="line-text-1">
                                                        <p>Job end date</p>
                                                    </div>
                                                </li>
                                                <li class="profileInfo profileInfoBorder">
                                                    <div class="line-text-1">
                                                        <p>Current Position</p>
                                                    </div>
                                                </li>
                                                <li class="profileInfo profileInfoBorder">
                                                    <div class="line-text-1">
                                                        <p>Current Status</p>
                                                    </div>
                                                </li>
                                                <li class="profileInfo profileInfoBorder">
                                                    <div class="line-text-1">
                                                        <p>No of persons managed</p>
                                                    </div>
                                                </li>
                                                <!-- <li class="profileInfo profileInfoBorder rb0">
                                            <div class="line-text-2">
                                                <p>{{$candidate->skills}}</p>
                                            </div>
                                        </li> -->
                                            </ul>
                                        </div>
                                        <div class="col-12 col-md-6">
                                            <ul class="profileLables">
                                                <li class="profileLabel profileLabelBorder rt0 rb0 btr5"><span></span>
                                                </li>
                                                <li class="profileLabel profileLabelBorder rt0 rb0"><span></span></li>
                                                <li class="profileLabel profileLabelBorder rt0"><span></span></li>
                                                <li class="profileLabel profileLabelBorder"><span>Current Company</span>
                                                </li>
                                                <li class="profileLabel profileLabelBorder profileLabelBorderBottom">
                                                    <span>Current Salary</span></li>
                                                <li class="profileLabel profileLabelBorder rb0 rt0"><span></span></li>
                                                <!-- <li class="profileLabel bbl5"><span></span></li> -->
                                            </ul>
                                            <ul class="profileInfoList">
                                                <li class="profileInfo"></li>
                                                <li class="profileInfo"></li>
                                                <li class="profileInfo profileInfoBorderBottom"></li>
                                                <li class="profileInfo profileInfoBorder">
                                                    <div class="line-text-1">
                                                        <p>Current working company</p>
                                                    </div>
                                                </li>
                                                <li class="profileInfo profileInfoBorder">
                                                    <div class="line-text-1">
                                                        <p>Current salary</p>
                                                    </div>
                                                </li>
                                                <li class="profileInfo profileInfoBorderTop"></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <ul class="viewEditAnkerList">
                                        <!-- <li><a class="ViewAnker" href="#/">View</a></li> -->
                                        <li><a class="ViewEdit" href=".CurrentJobModal" data-toggle="modal"
                                                data-target=".CurrentJobModal">Edit</a></li>
                                    </ul>
                                </div>
                                <div id="desire-job" class="tab-pane fade">
                                    <h1 class="tabsHeading">Desire job</h1>
                                    <div class="row no-gutters DesireJobTab">
                                        <div class="col-12">
                                            <ul class="profileLables">
                                                <li class="profileLabel profileLabelBorder rt0 btr5"><span>Looking for
                                                        Job</span></li>
                                                <li class="profileLabel profileLabelBorder"><span>Location</span></li>
                                                <li class="profileLabel profileLabelBorder"><span>Area</span></li>
                                                <li class="profileLabel profileLabelBorder"><span>Expected Salary</span>
                                                </li>
                                                <li class="profileLabel profileLabelBorder"><span>Joining From</span>
                                                </li>
                                                <li class="profileLabel profileLabelBorder"><span>Position</span></li>
                                                <li class="profileLabel profileLabelBorder rb0 bbl5"><span>Shift</span>
                                                </li>
                                            </ul>
                                            <ul class="profileInfoList">
                                                <li class="profileInfo profileInfoBorder rt0 justify-content-start">
                                                    <div class="line-text-1">
                                                        <p>is_looking_for_job</p>
                                                    </div>
                                                </li>
                                                <li class="profileInfo profileInfoBorder justify-content-start">
                                                    <div class="line-text-1">
                                                        <p>looking_for_job_location</p>
                                                    </div>
                                                </li>
                                                <li class="profileInfo profileInfoBorder justify-content-start">
                                                    <div class="line-text-1">
                                                        <p>looking_for_job_location</p>
                                                    </div>
                                                </li>
                                                <li class="profileInfo profileInfoBorder justify-content-start">
                                                    <div class="line-text-1">
                                                        <p>looking_for_job_expected_salary</p>
                                                    </div>
                                                </li>
                                                <li class="profileInfo profileInfoBorder justify-content-start">
                                                    <div class="line-text-1">
                                                        <p>-</p>
                                                    </div>
                                                </li>
                                                <li class="profileInfo profileInfoBorder justify-content-start">
                                                    <div class="line-text-1">
                                                        <p>looking_for_job_position</p>
                                                    </div>
                                                </li>
                                                <li class="profileInfo profileInfoBorder rb0 justify-content-start">
                                                    <div class="line-text-1">
                                                        <p>-</p>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <ul class="viewEditAnkerList">
                                        <!-- <li><a class="ViewAnker" href="#/">View</a></li> -->
                                        <li><a class="ViewEdit" href=".DesireJobModal" data-toggle="modal"
                                                data-target=".DesireJobModal">Edit</a></li>
                                    </ul>
                                </div>
                                <div id="work-experience" class="tab-pane fade">
                                    <h1 class="tabsHeading">Work Experience</h1>
                                    <div class="row no-gutters ExperienceInfoTab">
                                        <div class="col-12 col-md-6">
                                            <ul class="profileLables">
                                                <li class="profileLabel profileLabelBorder rt0 btr5">
                                                    <span>Company</span></li>
                                                <li class="profileLabel profileLabelBorder"><span>Position</span></li>
                                                <li class="profileLabel profileLabelBorder"><span>Starting Date</span>
                                                </li>
                                                <li class="profileLabel profileLabelBorder"><span>Current Status</span>
                                                </li>
                                                <li class="profileLabel profileLabelBorder rb0"><span></span></li>
                                                <li class="profileLabel profileLabelBorder rt0 rb0 bbl5"><span></span>
                                                </li>
                                            </ul>
                                            <ul class="profileInfoList">
                                                <li class="profileInfo profileInfoBorder rt0">
                                                    <div class="line-text-1">
                                                        <p>company_name</p>
                                                    </div>
                                                </li>
                                                <li class="profileInfo profileInfoBorder">
                                                    <div class="line-text-1">
                                                        <p>designation</p>
                                                    </div>
                                                </li>
                                                <li class="profileInfo profileInfoBorder">
                                                    <div class="line-text-1">
                                                        <p>Date</p>
                                                    </div>
                                                </li>
                                                <li class="profileInfo profileInfoBorder">
                                                    <div class="line-text-1">
                                                        <p>Yes</p>
                                                        <p>No</p>
                                                    </div>
                                                </li>
                                                <li class="profileInfo profileInfoBorder rb0"></li>
                                            </ul>
                                        </div>
                                        <div class="col-12 col-md-6">
                                            <ul class="profileLables">
                                                <li class="profileLabel profileLabelBorder rb0 rt0 btr5"><span></span>
                                                </li>
                                                <li class="profileLabel profileLabelBorder rt0"><span></span></li>
                                                <li class="profileLabel profileLabelBorder"><span>Ending Date</span>
                                                </li>
                                                <li class="profileLabel profileLabelBorder rb0"><span></span></li>
                                                <li class="profileLabel"><span></span></li>
                                                <li class="profileLabel bbl5"><span></span></li>
                                            </ul>
                                            <ul class="profileInfoList">
                                                <li class="profileInfo"></li>
                                                <li class="profileInfo profileInfoBorder rt0"></li>
                                                <li class="profileInfo profileInfoBorder">
                                                    <div class="line-text-1">
                                                        <p>Date</p>
                                                    </div>
                                                </li>
                                                <li class="profileInfo profileInfoBorder rb0"></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <ul class="viewEditAnkerList">
                                        <!-- <li><a class="ViewAnker" href="#/">View</a></li> -->
                                        <li><a class="ViewEdit" href=".WorkExperienceModal" data-toggle="modal"
                                                data-target=".WorkExperienceModal">Edit</a></li>
                                    </ul>
                                </div>
                                <div id="skills" class="tab-pane fade">
                                    <h1 class="tabsHeading">Skills</h1>
                                    <div class="row no-gutters DocumentsInfoTab">
                                        <div class="col-4 col-md-6 br1">
                                            <ul class="profileLables w-100">
                                                <li class="profileLabel w-100 bl5"><span>Skills</span></li>
                                                <li>
                                                    <ul class="profileInfoList">
                                                        <li class="profileInfo profileInfoBorder rt0">
                                                            <div class="line-text-1">
                                                                <p class="SkillsTitle">skill name</p>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col-8 col-md-6 bl1">
                                            <ul class="profileLables w-100">
                                                <li class="profileLabel w-100 br5"><span>Skill Level</span></li>
                                                <li>
                                                    <ul class="profileInfoList">
                                                        <li class="profileInfo profileInfoBorder rt0">
                                                            <!-- <ul class="uploadViewAnkerList">
                                                        <li>
                                                            <progress id="file" max="100" value="95"> 95% </progress>
                                                        </li>
                                                    </ul> -->
                                                            <div class="line-text-1">
                                                                <p class="SkillsTitle">Skill Level</p>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <ul class="viewEditAnkerList">
                                        <!-- <li><a class="ViewAnker" href="#/">View</a></li> -->
                                        <li><a class="ViewEdit" href=".SkillsModal" data-toggle="modal"
                                                data-target=".SkillsModal">Edit</a></li>
                                    </ul>
                                </div>
                                <div id="documents" class="tab-pane fade">
                                    <h1 class="tabsHeading">Documents</h1>
                                    <div class="row no-gutters DocumentsInfoTab">
                                        <div class="col-12 col-md-6 br1">
                                            <ul class="profileLables w-100">
                                                <li class="profileLabel w-100 bl5"><span>Type</span></li>
                                                <li>
                                                    <ul class="profileInfoList">
                                                        <li class="profileInfo profileInfoBorder rt0">
                                                            <div class="line-text-1">
                                                                <p class="documentsTitle">Resume</p>
                                                            </div>
                                                        </li>
                                                        <li class="profileInfo profileInfoBorder rt0">
                                                            <div class="line-text-1">
                                                                <p class="documentsTitle">CNIC (Front, Back)</p>
                                                            </div>
                                                        </li>
                                                        <li class="profileInfo profileInfoBorder rt0 rb0">
                                                            <div class="line-text-1">
                                                                <p class="documentsTitle">Latest Experience Letter,
                                                                    Certificates</p>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col-12 col-md-6 bl1">
                                            <ul class="profileLables w-100">
                                                <li class="profileLabel w-100 br5"><span>View</span></li>
                                                <li>
                                                    <ul class="profileInfoList">
                                                        <li class="profileInfo profileInfoBorder rt0">
                                                            <form enctype="multipart/form-data" id="uploadresume">
                                                                <ul class="uploadViewAnkerList">
                                                                    <li>
                                                                        <input type="file" hidden name="resume"
                                                                            id="resume-pdf-file">
                                                                        <label class="UploadAnker"
                                                                            for="resume-pdf-file">Upload</label>
                                                                    </li>
                                                                    <li><a class="ViewAnker" href="#/">View</a></li>
                                                                    <div class="alert displaynone" id="responseMsg">
                                                                    </div>
                                                                    <div class='alert alert-danger mt-2 d-none text-danger'
                                                                        id="err_file"></div>
                                                                </ul>
                                                            </form>
                                                        </li>
                                                        <li class="profileInfo profileInfoBorder rt0">
                                                            <ul class="uploadViewAnkerList">
                                                                <li>
                                                                    <input type="file" hidden name="uploadcnicfrontback"
                                                                        id="uploadcnicfrontback">
                                                                    <label class="UploadAnker"
                                                                        for="uploadcnicfrontback">Upload</label>
                                                                </li>
                                                                <li><a class="ViewAnker" href="#/">View</a></li>
                                                            </ul>
                                                        </li>
                                                        <li class="profileInfo profileInfoBorder rt0 rb0">
                                                            <ul class="uploadViewAnkerList">
                                                                <li>
                                                                    <input type="file" hidden name="experiencelatter"
                                                                        id="experiencelatter">
                                                                    <label class="UploadAnker"
                                                                        for="experiencelatter">Upload</label>
                                                                </li>
                                                                <li><a class="ViewAnker" href="#/">View</a></li>
                                                            </ul>
                                                        </li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <!-- <ul class="viewEditAnkerList">
                                <li><a class="ViewAnker" href="#/">View</a></li>
                                <li><a class="ViewEdit" href="#/">Edit</a></li>
                            </ul> -->
                                </div>
                                <div id="projects" class="tab-pane fade">
                                    <h1 class="tabsHeading">Projects</h1>
                                    <div class="row no-gutters DesireJobTab">
                                        <div class="col-12">
                                            <ul class="profileLables">
                                                <li class="profileLabel profileLabelBorder rt0 btr5"><span>Name</span>
                                                </li>
                                                <li class="profileLabel profileLabelBorder"><span>Starting Date</span>
                                                </li>
                                                <li class="profileLabel profileLabelBorder"><span>Ending Date</span>
                                                </li>
                                                <li class="profileLabel profileLabelBorder"><span>Description</span>
                                                </li>
                                                <li class="profileLabel profileLabelBorder"><span>Link</span></li>
                                            </ul>
                                            <ul class="profileInfoList">
                                                <li class="profileInfo profileInfoBorder rt0 justify-content-start">
                                                    <div class="line-text-1">
                                                        <p>Project Name</p>
                                                    </div>
                                                </li>
                                                <li class="profileInfo profileInfoBorder justify-content-start">
                                                    <div class="line-text-1">
                                                        <p>Start Date</p>
                                                    </div>
                                                </li>
                                                <li class="profileInfo profileInfoBorder justify-content-start">
                                                    <div class="line-text-1">
                                                        <p>End Date</p>
                                                    </div>
                                                </li>
                                                <li class="profileInfo profileInfoBorder justify-content-start">
                                                    <div class="line-text-3">
                                                        <p>Description</p>
                                                    </div>
                                                </li>
                                                <li class="profileInfo profileInfoBorder justify-content-start">
                                                    <div class="line-text-1 pl-2">
                                                        <a class="" href="">project link</a>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <ul class="viewEditAnkerList">
                                        <!-- <li><a class="ViewAnker" href="#/">View</a></li> -->
                                        <li><a class="ViewEdit" href=".ProjectsModal" data-toggle="modal"
                                                data-target=".ProjectsModal">Edit</a></li>
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
                <form id="basicinformationForm" action="#" method="POST" enctype="multipart/form-data">
                    <div class="modal-content p-0">
                        <div class="container editModel pb-5">
                            <h3 class="my-4">Update</h3>
                            <section class="modelForm">
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
                                                            <label for="profilePhoto">Profile Photo</label>
                                                            <input name="companyLogo" id="profilePhoto"
                                                                class="form-control" type="file" />
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-md-6">
                                                        <div class="form-group">
                                                            <label for="candidateFullName">Full Name</label>
                                                            <input type="text" placeholder="Enter Full Name"
                                                                name="full_name" class="form-control" value="" />
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-md-6">
                                                        <label for="currentStatus">Gender</label>
                                                        <div class="form-group m-0">
                                                            <label for="male">Male</label>
                                                            <input class="mx-1" id="male" name="gender" value="Male"
                                                                type="radio" />
                                                            <label for="female">Female</label>
                                                            <input class="mx-1" id="female" name="gender" value="Female"
                                                                type="radio" />
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-md-6">
                                                        <div class="form-group">
                                                            <label for="city">City</label>
                                                            <input name="city" type="text" class="form-control"
                                                                placeholder="Please City" value="" />
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="form-group">
                                                            <label for="address">Address</label>
                                                            <input name="address" id="address" type="text"
                                                                class="form-control" value=""
                                                                placeholder="Enter Address" />
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-md-6">
                                                        <div class="form-group">
                                                            <label for="cinic">CNIC</label>
                                                            <input name="cnic" class="form-control"
                                                                placeholder="Enter Cnic" value="">
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-md-6">
                                                        <div class="form-group">
                                                            <label for="Birthday">Date of Birth</label>
                                                            <input name="date_of_birth" id="Birthday" type="date"
                                                                class="form-control" placeholder="Enter Date of Birth"
                                                                value="">
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-md-6">
                                                        <div class="form-group">
                                                            <label for="address">ZIP code</label>
                                                            <input name="zipcode" type="text" class="form-control"
                                                                value=""
                                                                placeholder="Enter ZIP code" />
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-md-6">
                                                        <div class="form-group">
                                                            <label for="phone">Phone</label>
                                                            <input name="phone_no" id="phone" class="form-control"
                                                                placeholder="Enter Phone" type="tel" value="" />
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-md-6">
                                                        <div class="form-group">
                                                            <label for="email">Email</label>
                                                            <input name="email" id="email" disabled class="form-control"
                                                                placeholder="Enter Email" type="email" value="" />
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-md-6">
                                                        <div class="form-group">
                                                            <label for="country">Country</label>
                                                            <select name="country" id="country" class="form-control">
                                                                <option value="">Lahore</option>
                                                                <option value="">Islamabad</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="form-group">
                                                            <label for="companyDescription">Bio</label>
                                                            <textarea style="height:100px;" name="bio"
                                                                class="form-control"
                                                                placeholder="Description">Candidate bio</textarea>
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
        <!-- Modal BasicInfo  -->
        <!-- AwardModal modal -->
        <div class="modal fade AwardModal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg">
                <form id="awardForm" class="w-100" action="#" method="POST">
                    <div class="modal-content p-0">
                        <div class="container editModel pb-5">
                            <h3 class="my-4">Update</h3>
                            <section class="modelForm">
                                <div class="row no-gutters">
                                    <div class="col-12">
                                        <div class="subForm">
                                            <div class="modelTitle my-3">
                                                <div class="mr-2 titleEffect"></div>
                                                <h4 class="m-0 modelTitleText">Award</h4>
                                            </div>
                                            <div class="subFormFields" id="AwardFieldsContainer">
                                                <div class="row AwardSection">
                                                    <div class="col-12 col-md-6">
                                                        <div class="form-group">
                                                            <label for="award">Award Name</label>
                                                            <input name="award_name[]" class="form-control" type="text"
                                                                placeholder="Award Name" value="award name" />
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-md-6">
                                                        <div class="form-group">
                                                            <label class="d-flex justify-content-between"
                                                                for="awardYear">
                                                                Year<a href="#">
                                                                    <i class="fas fa-times"></i></a>
                                                            </label>
                                                            <input id="awardYear" name="award_date[]"
                                                                class="form-control" type="date"
                                                                placeholder="Looking for job location"
                                                                value="award date">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <div id='addAwardBtn' class="col-lg-12 btn addNewButton">
                                        <i class="fas fa-plus mr-1"></i> Add Another Award
                                    </div>
                                </div>
                                <div class="row mt-4">
                                    <div class="col-lg-12 modelBtnContainer">
                                        <button class="positiveBtn modelBtn mr-1"
                                            onclick="UpdateCandidateAward()">Update</button>
                                        <button class="negativeBtn modelBtn ml-1" data-dismiss="modal">Cancel</button>
                                    </div>
                                </div>
                            </section>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <!-- Modal AwardModal  -->
        <!-- CurrentJobModal -->
        <div class="modal fade CurrentJobModal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg">
                <form id="currentJobForm" action="#" method="POST">
                    <div class="modal-content p-0">
                        <div class="container editModel pb-5">
                            <h3 class="my-4">Update</h3>
                            <section class="modelForm">
                                <div class="row no-gutters" id="CurrentJobFieldsContainer">
                                    <div class="col-12 CurrentJobSection">
                                        <div id='subForm' class="subForm">
                                            <div class="modelTitle my-3">
                                                <div class="mr-2 titleEffect"></div>
                                                <h4 class="m-0 modelTitleText">Current Job</h4>
                                            </div>
                                            <div class="subFormFields">
                                                <div class="row">
                                                    <div class="col-12 col-md-6 form-group">
                                                        <label for="currentStatus">Current Working</label>
                                                        <div class="form-group m-0">
                                                            <label for="currentStatus">Yes</label>
                                                            <input class="my-1" name="is_working_currently" value="1"
                                                                type="radio">
                                                            <label for="currentStatus">No</label>
                                                            <input type="radio" onclick="ChangeCurrentJobFields(0)"
                                                                class="my-1" value="0" name="is_working_currently" />
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-md-6">
                                                        <div class="form-group">
                                                            <label for="startingDate">Starting Date</label>
                                                            <input name="job_start_date" value="" class="form-control"
                                                                placeholder="Please Select Starting Date" type="date" />
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-md-6">
                                                        <div class="form-group">
                                                            <label for="endingDate">Ending Date</label>
                                                            <input name="job_end_date" value="" class="form-control"
                                                                placeholder="Please Select Ending Date" type="date" />
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-md-6">
                                                        <div class="form-group">
                                                            <label for="currentPosition">Current Position</label>
                                                            <input name="currentPosition" class="form-control"
                                                                placeholder="Enter current position" type="text"
                                                                value="" />
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-md-6">
                                                        <div class="form-group">
                                                            <label for="currentPositionStatus">Current Status</label>
                                                            <input name="currentPositionStatus" class="form-control"
                                                                placeholder="Enter Current Status" type="text"
                                                                value="" />
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-md-6">
                                                        <div class="form-group">
                                                            <label for="personsManaged">No of Persons Managed</label>
                                                            <input name="personsManaged" class="form-control"
                                                                placeholder="Enter No of Persons Managed" type="text"
                                                                value="" />
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-md-6">
                                                        <div class="form-group">
                                                            <label for="personsManaged">Current Company</label>
                                                            <input name="currentCompany" class="form-control"
                                                                placeholder="Enter Current Company" type="text"
                                                                value="" />
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-md-6">
                                                        <div class="form-group">
                                                            <label for="skills">Current Salary</label>
                                                            <input name="currentSalary" class="form-control"
                                                                placeholder="Enter Current Salary" type="text" value="">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- <div class="row mt-3">
                            <div id='addAnOtherJobBtn' class="col-lg-12 btn addNewButton">
                                <i class="fas fa-plus mr-1"></i> Add Another Job
                            </div>
                        </div> -->
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
        <!-- Modal CurrentJobModal  -->
        <!-- EducationModal modal -->
        <div class="modal fade EducationModal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg">
                <form id="educationform" action="#" method="POST">
                    <div class="modal-content p-0">
                        <div class="container editModel pb-5">
                            <h3 class="my-4">Update</h3>
                            <section class="modelForm">
                                <div class="row no-gutters" id="EducationFieldsContainer">
                                    <div class="col-12 EductionSection">
                                        <div class="subForm">
                                            <div class="modelTitle my-3">
                                                <div class="mr-2 titleEffect"></div>
                                                <h4 class="m-0 modelTitleText">Education</h4>
                                            </div>
                                            <div class="subFormFields">
                                                <div class="float-right">
                                                    <a href="#">
                                                        <i class="fas fa-times"></i>
                                                    </a>
                                                </div>
                                                <div class="row">
                                                    <div class="col-12 col-md-6">
                                                        <div class="form-group">
                                                            <label for="institute">Institute Type</label>
                                                            <select name="school_type[]" class="form-control"
                                                                placeholder="Please Select">
                                                                <option value="Metric">Metric</option>
                                                                <option value="Intermediate">Intermediate</option>
                                                                <option value="Bachelor">Bachelor</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-md-6">
                                                        <div class="form-group">
                                                            <label for="school_name">Institute name</label>
                                                            <select name="school_name[]" class="form-control"
                                                                placeholder="Enter Institute Name" id="school_name">
                                                                <option value="$university">university</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-md-6">
                                                        <div class="form-group">
                                                            <label for="startingDate">Starting Date</label>
                                                            <input id="startingDate" name="start_date[]"
                                                                class="form-control" type="date"
                                                                placeholder="Please Select" value="" />
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-md-6">
                                                        <div class="form-group">
                                                            <label for="endingDate">Ending Date</label>
                                                            <input name="end_date[]" id="endingDate"
                                                                class="form-control" type="date"
                                                                placeholder="Please Select" value="" />
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="form-group">
                                                            <label for="department">Department</label>
                                                            <input name="department[]" id="department"
                                                                class="form-control" type="text" placeholder="Faculty"
                                                                value="" />
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <div id='addEducationBtn' class="col-lg-12 btn addNewButton">
                                        <i class="fas fa-plus mr-1"></i> Add another education
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
        <!-- Modal EducationModal  -->
        <!-- WorkExperienceModal modal -->
        <div class="modal fade WorkExperienceModal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg">
                <form id="workExperienceForm" class="w-100" action="#" method="POST">
                    <div class="modal-content p-0">
                        <div class="container editModel pb-5">
                            <h3 class="my-4">Update</h3>
                            <section class="modelForm">
                                <div class="row no-gutters" id="WorkExperienceContainer">
                                    <div class="col-12 WorkExperienceSection">
                                        <div id='subForm' class="subForm">
                                            <div class="modelTitle my-3">
                                                <div class="mr-2 titleEffect"></div>
                                                <h4 class="m-0">Work Experience</h4>
                                            </div>
                                            <div class="subFormFields">
                                                <div class="float-right">
                                                    <a href="#">
                                                        <i class="fas fa-times"></i>
                                                    </a>
                                                </div>
                                                <div class="row">
                                                    <div class="col-12 col-md-6">
                                                        <div class="form-group">
                                                            <label for="company">Company</label>
                                                            <input name="company_name[]" id="company" type="text"
                                                                class="form-control" placeholder="Enter Company"
                                                                value="#" />
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-md-6">
                                                        <div class="form-group">
                                                            <label for="position">Position</label>
                                                            <input name="company_designation[]" type="text"
                                                                class="form-control" placeholder="Enter Position"
                                                                value="#" />
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-md-6">
                                                        <div class="form-group">
                                                            <label for="startingDate">Starting Date</label>
                                                            <input name="company_start_date[]" id="startingDate"
                                                                class="form-control" type="date"
                                                                placeholder="Please Select" value="#" />
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-md-6">
                                                        <div class="row no-gutters align-items-center">
                                                            <div class="col-6">
                                                                <div class="form-group">
                                                                    <label
                                                                        for="experience_end_date">Ending
                                                                        Date</label>
                                                                    <input name="company_end_date[]"
                                                                        id="experience_end_date"
                                                                        class="form-control" type="date"
                                                                        placeholder="Please Select" value="#">
                                                                </div>
                                                            </div>
                                                            <div class="col-6">
                                                                <div
                                                                    class="form-group d-flex align-items-center justify-content-center m-0">
                                                                    <input class="mr-1" name="currentWorking"
                                                                        id="experience_checkbox_end_date"
                                                                        type="checkbox">
                                                                    <label class="m-0"
                                                                        for="experience_checkbox_end_date">Currently
                                                                        Working</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-md-6">
                                                        <span>Current Status</span>
                                                        <div class="form-group">
                                                            <!-- <label for="currentStatus">Active</label> -->
                                                            <select class="form-control"
                                                                name="company_is_working_currently[]"
                                                                id="company_is_working_currently">
                                                                <option value="1">Active</option>
                                                                <option value="0">Inactive</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <div id='addExperiencesBtn' class="col-lg-12 btn addNewButton">
                                        <i class="fas fa-plus mr-1"></i> Add another experience
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
        <!-- Modal WorkExperienceModal  -->
        <!-- LanguagesModal modal -->
        <div class="modal fade LanguagesModal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg">
                <form id="languageForm" class="w-100" action="#" method="POST">
                    <div class="modal-content p-0">
                        <div class="container editModel pb-5">
                            <h3 class="my-4">Update</h3>
                            <section class="modelForm">
                                <div class="row no-gutters">
                                    <div class="col-12">
                                        <div id='subForm' class="subForm">
                                            <div class="modelTitle my-3">
                                                <div class="mr-2 titleEffect"></div>
                                                <h4 class="m-0 modelTitleText">Languages</h4>
                                            </div>
                                            <div id='LanguagesFields' class="subFormFields row">
                                                <div class="col-md-4 LanguagesSection">
                                                    <div class="form-group">
                                                        <div class="float-right">
                                                            <a href="#">
                                                                <i class="fas fa-times"></i>
                                                            </a>
                                                        </div>
                                                        <input name="language_name[]" class="form-control" value="#"
                                                            for="english" style="margin-bottom: 10px;">
                                                        <select name="language_level[]" class="form-control"
                                                            id="language">
                                                            <option value="Beginner">Beginner</option>
                                                            <option value="Native">Native</option>
                                                            <option value="Intermediate">Intermediate</option>
                                                            <option value="Expert">Expert</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <div id='addLanguageBtn' class="col-lg-12 btn addNewButton">
                                        <i class="fas fa-plus mr-1"></i> Add Another Language
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
        <!-- Modal LanguagesModal  -->
        <!-- SkillsModal modal -->
        <div class="modal fade SkillsModal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg">
                <form id="skillForm" action="#" method="POST">
                    <div class="modal-content p-0">
                        <div class="container editModel pb-5">
                            <h3 class="my-4">Update</h3>
                            <section class="modelForm">
                                <div class="row no-gutters">
                                    <div class="col-12">
                                        <div id="SkillsModal" class="subForm">
                                            <div class="modelTitle my-3">
                                                <div class="mr-2 titleEffect"></div>
                                                <h4 class="m-0 modelTitleText">Languages</h4>
                                            </div>
                                            <div id='SkillsFields' class="subFormFields row">
                                                <div class="col-12 col-md-4 SkillsSection">
                                                    <div class="form-group">
                                                        <a class="float-right" href="#"><i class="fas fa-times"></i></a>
                                                        <input name="skill_name[]" value=""
                                                            for="english" class="form-control">
                                                        <select name="skill_level[]" id="language" class="form-control">
                                                            <option value="Beginner">Beginner</option>
                                                            <option value="Native">Native</option>
                                                            <option value="Intermediate">Intermediate</option>
                                                            <option value="Expert">Expert</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <div id='addSkillsBtn' class="col-lg-12 btn addNewButton">
                                        <i class="fas fa-plus mr-1"></i> Add Another Language
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
        <!-- Modal SkillsModal  -->
        <!-- ProjectsModal modal -->
        <div class="modal fade ProjectsModal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg">
                <form id="projectForm" action="#" method="POST">
                    <div class="modal-content p-0">
                        <div class="container editModel pb-5">
                            <h3 class="my-4">Update</h3>
                            <section class="modelForm">
                                <div class="row no-gutters" id="ProjectFieldsContainer">
                                    <div class="col-12 ProjectSection">
                                        <div id='subForm' class="subForm">
                                            <div class="float-right">
                                                <a href="#">
                                                    <i class="fas fa-times"></i>
                                                </a>
                                            </div>
                                            <div class="modelTitle my-3">
                                                <div class="mr-2 titleEffect"></div>
                                                <h4 class="m-0 modelTitleText">Projects</h4>
                                            </div>
                                            <div class="subFormFields">
                                                <div class="row">
                                                    <div class="col-12 col-md-6">
                                                        <div class="form-group">
                                                            <label for="projectName">Project Name</label>
                                                            <input name="projectName[]" class="form-control" value=""
                                                                placeholder="Enter Project Name" type="text" />
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-md-6">
                                                        <div class="form-group">
                                                            <label for="projectLink">Link</label>
                                                            <input name="projectLink[]" class="form-control" value=""
                                                                placeholder="Enter Link" type="text" />
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-md-6">
                                                        <div class="form-group">
                                                            <label for="startingDate">Starting Date</label>
                                                            <input name="startingDate[]" class="form-control" value=""
                                                                placeholder="Please Select Starting Date" type="date" />
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-md-6">
                                                        <div class="form-group">
                                                            <label for="endingDate">Ending Date</label>
                                                            <input name="endingDate[]" class="form-control" value=""
                                                                placeholder="Please Select Ending Date" type="date" />
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-md-6">
                                                        <div class="form-group">
                                                            <label for="endingDate">Ending Date</label>
                                                            <input name="endingDate[]" class="form-control" value=""
                                                                placeholder="Please Select Ending Date" type="date" />
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="form-group">
                                                            <label for="description">Description</label>
                                                            <textarea cols="30" rows="10" name="description[]"
                                                                class="form-control"
                                                                placeholder="Description"></textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <div id='addProjectBtn' class="col-lg-12 btn addNewButton">
                                        <i class="fas fa-plus mr-1"></i> Add Another Project
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
        <!-- Modal ProjectsModal  -->
        <!-- QualificationModal modal -->
        <div class="modal fade QualificationModal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg">
                <div class="modal-content p-0">
                    <div class="container editModel pb-5">
                        <h3 class="my-4">Update</h3>
                        <section class="modelForm">

                            <div class="row no-gutters" id="QualificationFieldsContainer">
                                <div class="col-12 QualificationSection">
                                    <div class="subForm">
                                        <div class="modelTitle my-3">
                                            <div class="mr-2 titleEffect"></div>
                                            <h4 class="m-0 modelTitleText">Qualification</h4>
                                        </div>
                                        <div class="subFormFields">

                                            <div class="row">
                                                <div class="col-lg-6 mb-2">
                                                    <label class="modelLabel" for="institute">Institute Type</label>
                                                    <input name="institute" class="modelInput"
                                                        placeholder="Please Select">
                                                </div>
                                                <div class="col-lg-6">
                                                    <label class="modelLabel" for="instituteName">Institute name</label>
                                                    <input name="instituteName" class="modelInput"
                                                        placeholder="Enter Institute Name" type="text">
                                                </div>
                                            </div>
                                            <div class="row mt-3">
                                                <div class="col-lg-6 mb-2">
                                                    <label class="modelLabel" for="startingDate">Starting Date</label>
                                                    <input name="startingDate" class="modelInput"
                                                        placeholder="Please Select Starting Date" type="date">
                                                </div>
                                                <div class="col-lg-6 row no-gutters">
                                                    <div class="col-lg-6">
                                                        <label class="modelLabel" for="endingDate">Ending Date</label>
                                                        <input name="endingDate" class="modelInput"
                                                            placeholder="Please Select Ending Date" type="date">
                                                    </div>
                                                    <div
                                                        class="col-lg-6 d-flex align-items-center justify-content-center pt-4">
                                                        <input class="mr-1" name="studyingStatus" type="checkbox">
                                                        <label class="modelLabel m-0" for="endingDate">Currently
                                                            Studying</label>
                                                    </div>

                                                </div>
                                            </div>

                                            <div class="row mt-3">
                                                <div class="col-lg-12">
                                                    <label class="modelLabel" for="department">Department</label>
                                                    <input name="Department" class="modelInput"
                                                        placeholder="Enter Department" type="text">
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>

                            <div class="row mt-3">
                                <div id='addQualificationBtn' class="col-lg-12 btn addNewButton">
                                    <i class="fas fa-plus mr-1"></i> Add another experience
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
            </div>
        </div>
        <!-- Modal QualificationModal  -->
        <!-- DesireJobModal modal -->
        <div class="modal fade DesireJobModal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg">
                <div class="modal-content p-0">
                    <div class="container editModel pb-5">
                        <h3 class="my-4">Update</h3>
                        <section class="modelForm">
                            <div class="row no-gutters">
                                <div class="col-12">
                                    <div class="subForm">
                                        <div class="modelTitle my-3">
                                            <div class="mr-2 titleEffect"></div>
                                            <h4 class="m-0">Social Media</h4>
                                        </div>
                                        <div class="subFormFields">
                                            <div class="row">
                                                <div class="col-12 col-md-6">
                                                    <div class="form-group">
                                                        <label for="whatsapp">Whatsapp</label>
                                                        <input name="whatsapp" class="form-control"
                                                            placeholder="Please Enter Whatsapp" />
                                                    </div>
                                                </div>
                                                <div class="col-12 col-md-6">
                                                    <div class="form-group">
                                                        <label for="facebook">Facebook</label>
                                                        <input name="facebook" class="form-control"
                                                            placeholder="Paste Facebook link" type="text" />
                                                    </div>
                                                </div>
                                                <div class="col-12 col-md-6">
                                                    <div class="form-group">
                                                        <label for="linkedin">Linkedin</label>
                                                        <input name="linkedin" class="form-control"
                                                            placeholder="Paste Linkedin link" type="text" />
                                                    </div>
                                                </div>
                                                <div class="col-12 col-md-6">
                                                    <div class="form-group">
                                                        <label for="twitter">Twitter</label>
                                                        <input name="twitter" class="form-control"
                                                            placeholder="Paste Twitter link" type="text" />
                                                    </div>
                                                </div>
                                                <div class="col-12 col-md-6">
                                                    <div class="form-group">
                                                        <label for="github">Github</label>
                                                        <input name="github" class="form-control"
                                                            placeholder="Paste Github link" type="text" />
                                                    </div>
                                                </div>
                                                <div class="col-12 col-md-6">
                                                    <div class="form-group">
                                                        <label for="companyPics">Company Pics</label>
                                                        <input name="companyPics" class="form-control fileInput"
                                                            type="file" />
                                                    </div>
                                                </div>
                                                <div class="col-12 col-md-6">
                                                    <div class="form-group">
                                                        <label class="modelLabel" for="video">Video</label>
                                                        <input name="video" class="form-control fileInput"
                                                            type="file" />
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
            </div>
        </div>
        <!-- Modal DesireJobModal  -->
    </div>
</template>
<script>
    export default {
        data() {
            return {

            }
        },
        mounted() {
            this.openProfileTab()
            this.closeProfileTab()
        },
        methods: {
            openProfileTab(){
                document.getElementById("ProfileTabMobileNav").style.left = "0%"
            },
            closeProfileTab(){
                document.getElementById("ProfileTabMobileNav").style.left = "-100%"
            }
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
