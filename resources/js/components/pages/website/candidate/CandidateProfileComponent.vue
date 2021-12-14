<template>
    <div>
        <WebsiteNavbar />
        <CandidateNavbar />
        <div class="profile-wrapper">
            <div class="row m-0 container p-0">
                <div class="col-12 p-0">
                    <div v-if="this.skills_exist == false"
                        class="alert-message-resume resume-attention-alert col-12 mt-5">
                        <h2>Please correct any deficiencies in your profile</h2>
                        <p>
                            Since [personal information] such as name and contact information is
                            described in the registered work history, the examination is
                            suspended. Please check your registration information and update
                            your resume.
                        </p>
                    </div>
                </div>
                <div class="col-12 tabs-section-container">
                    <div class="row no-gutters tabs-section-wrap">
                        <!-- tabs ankers -->
                        <div class="tabs-ankers col-md-3 col-2">
                            <!-- <a href="#">Download CV</a> -->
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
                                <!-- <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#desire-job">Desire job</a>
                                </li> -->
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
                            <ul class="mobile-tabs-icons" style="display: none;">
                                <li><a @click="openProfileTab()"><img class="icons-tab icons-tab-active"
                                            src="/website/assets/images/details.svg" alt="TabsIcon"></a></li>
                                <li><a @click="openProfileTab()"><img class="icons-tab"
                                            src="/website/assets/images/mortarboard.svg" alt="TabsIcon"
                                            style="height: 30px;"></a></li>
                                <li><a @click="openProfileTab()"><img class="icons-tab"
                                            src="/website/assets/images/score.svg" alt="TabsIcon"
                                            style="height: 26px;"></a></li>
                                <li><a @click="openProfileTab()"><img class="icons-tab"
                                            src="/website/assets/images/language.svg" alt="TabsIcon"
                                            style="height: 26px;"></a></li>
                                <li><a @click="openProfileTab()"><img class="icons-tab"
                                            src="/website/assets/images/trophy.svg" alt="TabsIcon"
                                            style="height: 26px;"></a></li>
                                <li><a @click="openProfileTab()"><img class="icons-tab"
                                            src="/website/assets/images/leader.svg" alt="TabsIcon" Î
                                            style="height: 26px;"></a></li>
                                <li><a @click="openProfileTab()"><img class="icons-tab"
                                            src="/website/assets/images/work.svg" alt="TabsIcon"
                                            style="height: 26px;"></a></li>
                                <li><a @click="openProfileTab()"><img class="icons-tab"
                                            src="/website/assets/images/overtime.svg" alt="TabsIcon"
                                            style="height: 26px;"></a></li>
                                <li><a @click="openProfileTab()"><img class="icons-tab"
                                            src="/website/assets/images/settings.svg" alt="TabsIcon"
                                            style="height: 26px;"></a></li>
                                <!-- <li><a @click="openProfileTab()"><img class="icons-tab"
                                            src="/website/assets/images/google-docs.svg" alt="TabsIcon"
                                            style="height: 26px;"></a></li> -->
                            </ul>

                            <!-- Modal Tab start -->
                            <div id="Profile-tab-mobile-nav" class="Profile-tab-mobile-nav" @click="closeProfileTab()">
                                <div class="row no-gutters modal-tab-conatiner">
                                    <div class="icons-modal">
                                        <ul class="mobile-modal-tabs-icons p-0">
                                            <li><img class="icons-tab" src="/website/assets/images/details.svg"
                                                    alt="TabsIcon"></li>
                                            <li><img class="icons-tab" src="/website/assets/images/mortarboard.svg"
                                                    alt="TabsIcon" style="height: 30px;"></li>
                                            <li><img class="icons-tab" src="/website/assets/images/score.svg"
                                                    alt="TabsIcon" style="height: 26px;"></li>
                                            <li><img class="icons-tab" src="/website/assets/images/language.svg"
                                                    alt="TabsIcon" style="height: 26px;"></li>
                                            <li><img class="icons-tab" src="/website/assets/images/trophy.svg"
                                                    alt="TabsIcon" style="height: 26px;"></li>
                                            <li><img class="icons-tab" src="/website/assets/images/leader.svg"
                                                    alt="TabsIcon" style="height: 26px;"></li>
                                            <li><img class="icons-tab" src="/website/assets/images/work.svg"
                                                    alt="TabsIcon" style="height: 26px;"></li>
                                            <li><img class="icons-tab" src="/website/assets/images/overtime.svg"
                                                    alt="TabsIcon" style="height: 26px;"></li>
                                            <li><img class="icons-tab" src="/website/assets/images/settings.svg"
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
                                            <!-- <li class="nav-item">
                                                <a class="nav-link nav-link" data-toggle="tab" href="#desire-job">Desire
                                                    job</a>
                                            </li> -->
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
                                    <h1 class="tabs-heading">Basic information</h1>
                                    <div class="row no-gutters basic-info-tab">
                                        <div class="col-12 col-md-6">
                                            <ul class="profile-labels">
                                                <li class="profile-label h150 profile-label-border rt0 btr5"><span>Profile
                                                        Pic</span></li>
                                                <li class="profile-label profile-label-border"><span>Full Name</span></li>
                                                <li class="profile-label profile-label-border"><span>Gender</span></li>
                                                <li class="profile-label profile-label-border"><span>City</span></li>
                                                <li class="profile-label profile-label-border"><span>Address</span></li>
                                                <li class="profile-label profile-label-border bbl5"><span>Phone</span></li>
                                                <!-- <li class="profile-label profile-label-border-top bbl5"><span>Date of Birth</span></li> -->
                                            </ul>
                                            <ul class="profile-info-list">
                                                <li class="h150 profile-info profile-info-border-bottom"
                                                    style="height: 150px;">
                                                    <img :src="'/storage/images/candidates/profile/'+this.profile.profile_image"
                                                        class="ProfileUserPic" alt="profileImg">
                                                </li>
                                                <li class="profile-info profile-info-border">
                                                    <div class="line-text-1">
                                                        <p>{{this.profile.full_name}}</p>
                                                    </div>
                                                </li>
                                                <li class="profile-info profile-info-border">
                                                    <div class="line-text-1">
                                                        <p>{{this.profile.gender}}</p>
                                                    </div>
                                                </li>
                                                <li class="profile-info profile-info-border">
                                                    <div>
                                                        <p class="line-text-2">{{this.profile.city}}</p>
                                                    </div>
                                                </li>
                                                <li class="profile-info profile-info-border">
                                                    <div>
                                                        <p class="line-text-2">{{this.profile.address}}</p>
                                                    </div>
                                                </li>
                                                <li class="profile-info profile-info-border rb0">
                                                    <div class="line-text-1">
                                                        <p>{{this.profile.phone}}</p>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col-12 col-md-6">
                                            <ul class="profile-labels">
                                                <li><span
                                                        class="profile-label h150 profile-label-border rt0 btr5">Bio</span>
                                                </li>
                                                <li><span class="profile-label profile-label-border">Date of Birth</span>
                                                </li>
                                                <li><span class="profile-label profile-label-border">Zip Code</span></li>
                                                <li><span class="profile-label v-on-d"></span></li>
                                                <li><span class="profile-label v-on-d"></span></li>
                                                <li><span class="profile-label bb5 v-on-d"></span></li>
                                                <!-- <li><span class="profile-label bbl5"></span></li> -->
                                            </ul>
                                            <ul class="profile-info-list">
                                                <li class="profile-info h150" style="height: 150px;">
                                                    <div class="line-text-5" style="height: 105px;">
                                                        <p>{{this.profile.bio}}</p>
                                                    </div>
                                                </li>
                                                <li class="profile-info profile-info-border">
                                                    <div class="line-text-1">
                                                        <p class="pr-5">{{this.profile.date_of_birth}}</p>
                                                    </div>
                                                </li>
                                                <li class="profile-info profile-label-border-top">
                                                    <div class="line-text-1">
                                                        <p>{{this.profile.zipcode}}</p>
                                                    </div>
                                                </li>
                                                <li class="profile-info">
                                                    <div class="line-text-1">
                                                        <p></p>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <ul class="view-edit-anker-list">
                                        <li><router-link class="view-anker" data-toggle="collapse" :to="{ name: 'CandidateDetail', params: { id: profile.id } }">View Profile</router-link></li>
                                        <li><a class="view-edit" @click="openBasicModal()">Edit</a></li>
                                    </ul>
                                </div>
                                <div id="education" class="tab-pane fade">
                                    <h1 class="tabs-heading">Education</h1>
                                    <div class="row no-gutters education-info-tab"
                                        v-for="(item, index) in this.profile.candidate_education" :key="index">
                                        <div class="col-12 col-md-6">
                                            <ul class="profile-labels">
                                                <!-- <li class="profile-label profile-label-border btr5"><span>Institute Type</span></li> -->
                                                <li class="profile-label profile-label-border"><span>Institute Name</span>
                                                </li>
                                                <li class="profile-label profile-label-border"><span>Starting Date</span>
                                                </li>
                                                <li class="profile-label profile-label-border"><span>Department</span></li>
                                                <li class="profile-label profile-label-border bbl5 v-on-d"><span></span>
                                                </li>
                                            </ul>
                                            <ul class="profile-info-list">
                                                <!-- <li class="profile-info profile-info-border rt0">
                                                    <div class="line-text-1">
                                                        <p>{{item.school_type}}</p>
                                                    </div>
                                                </li> -->
                                                <li class="profile-info profile-info-border">
                                                    <div class="line-text-1">
                                                        <p>{{item.school_name}}</p>
                                                    </div>
                                                </li>
                                                <li class="profile-info profile-info-border">
                                                    <div class="line-text-1">
                                                        <p>{{item.start_date}}</p>
                                                    </div>
                                                </li>
                                                <li class="profile-info profile-info-border">
                                                    <div class="line-text-1">
                                                        <p>{{item.department}}</p>
                                                    </div>
                                                </li>
                                                <li class="profile-info profile-info-border rb0 v-on-d"></li>
                                            </ul>
                                        </div>
                                        <div class="col-12 col-md-6">
                                            <ul class="profile-labels">
                                                <li class="profile-label profile-label-border rb0 btr5 v-on-d">
                                                    <span></span></li>
                                                <li class="profile-label profile-label-border rt0 v-on-d"><span></span>
                                                </li>
                                                <li class="profile-label profile-label-border"><span>Ending Date</span>
                                                </li>
                                                <li class="profile-label profile-label-border rb0 v-on-d"><span></span>
                                                </li>
                                                <li class="profile-label bbl5 v-on-d"><span></span></li>
                                            </ul>
                                            <ul class="profile-info-list">
                                                <li class="profile-info profile-info-border rt0 rb0 v-on-d"></li>
                                                <li class="profile-info profile-info-border rt0 v-on-d"></li>
                                                <li class="profile-info profile-info-border v-on-d">
                                                    <div class="line-text-1">
                                                        <p>{{item.end_date}}</p>
                                                    </div>
                                                </li>
                                                <li class="profile-info profile-info-border rb0 v-ond"></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <ul class="view-edit-anker-list">
                                        <li><router-link class="view-anker" data-toggle="collapse" :to="{ name: 'CandidateDetail', params: { id: profile.id } }">View Profile</router-link></li>
                                        <li><a class="view-edit" @click="openEducationModal()">Edit</a></li>
                                    </ul>
                                </div>
                                <div id="qualification" class="tab-pane fade">
                                    <h1 class="tabs-heading">Qualification</h1>
                                    <div class="row no-gutters qualification-info-tab">
                                        <div class="col-12 col-md-6">
                                            <ul class="profile-labels">
                                                <li class="profile-label profile-label-border rt0 btr5"><span>Institute
                                                        Type</span></li>
                                                <li class="profile-label profile-label-border"><span>Institute Name</span>
                                                </li>
                                                <li class="profile-label profile-label-border"><span>Starting Date</span>
                                                </li>
                                                <li class="profile-label profile-label-border"><span>Department</span></li>
                                                <li class="profile-label profile-label-border bbl5 v-on-d"><span></span>
                                                </li>
                                            </ul>
                                            <ul class="profile-info-list">
                                                <li class="profile-info profile-info-border rt0">
                                                    <div class="line-text-1">
                                                        <p>University</p>
                                                    </div>
                                                </li>
                                                <li class="profile-info profile-info-border">
                                                    <div class="line-text-1">
                                                        <p>Superior University</p>
                                                    </div>
                                                </li>
                                                <li class="profile-info profile-info-border">
                                                    <div class="line-text-1">
                                                        <p>09/09/2016</p>
                                                    </div>
                                                </li>
                                                <li class="profile-info profile-info-border">
                                                    <div class="line-text-1">
                                                        <p>Computer Science</p>
                                                    </div>
                                                </li>
                                                <li class="profile-info profile-info-border rb0 v-on-d"></li>
                                            </ul>
                                        </div>
                                        <div class="col-12 col-md-6">
                                            <ul class="profile-labels">
                                                <li class="profile-label profile-label-border rt0 rb0 btr5 v-on-d">
                                                    <span></span>
                                                </li>
                                                <li class="profile-label profile-label-border rt0 v-on-d"><span></span>
                                                </li>
                                                <li class="profile-label profile-label-border"><span>Ending Date</span>
                                                </li>
                                                <li class="profile-label profile-label-border rb0 v-on-d"><span></span>
                                                </li>
                                                <li class="profile-label bbl5 v-on-d"><span></span></li>
                                            </ul>
                                            <ul class="profile-info-list">
                                                <li class="profile-info v-on-d"></li>
                                                <li class="profile-info profile-info-border rt0 v-on-d"></li>
                                                <li class="profile-info profile-info-border">
                                                    <div class="line-text-1">
                                                        <p>20/08/2020</p>
                                                    </div>
                                                </li>
                                                <li class="profile-info profile-info-border rb0 v-on-d"></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <ul class="view-edit-anker-list">
                                        <li><router-link class="view-anker" data-toggle="collapse" :to="{ name: 'CandidateDetail', params: { id: profile.id } }">View Profile</router-link></li>
                                        <li><a class="view-edit" @click="OpenWorkQualificationModal()">Edit</a></li>
                                    </ul>
                                </div>
                                <div id="languages" class="tab-pane fade">
                                    <h1 class="tabs-heading">Languages</h1>
                                    <div class="row no-gutters documents-info-tab">
                                        <div class="col-6 col-md-6 br1">
                                            <ul class="profile-labels w-100">
                                                <li class="profile-label w-100 bl5"><span>Language Name</span></li>
                                                <li>
                                                    <ul class="profile-info-list"
                                                        v-for="(language, index) in this.profile.candidate_language"
                                                        :key="index">
                                                        <li class="profile-info profile-info-border rt0">
                                                            <div class="line-text-1">
                                                                <p class="skills-title">{{language.name}}</p>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col-6 col-md-6 bl1">
                                            <ul class="profile-labels w-100">
                                                <li class="profile-label w-100 br5"><span>Language Level</span></li>
                                                <li>
                                                    <ul class="profile-info-list"
                                                        v-for="(language, index) in this.profile.candidate_language"
                                                        :key="index">
                                                        <li class="profile-info profile-info-border rt0">
                                                            <ul class="upload-view-anker-list">
                                                                <li>
                                                                    <p>{{language.level}}</p>
                                                                </li>
                                                            </ul>
                                                        </li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <ul class="view-edit-anker-list">
                                        <li><router-link class="view-anker" data-toggle="collapse" :to="{ name: 'CandidateDetail', params: { id: profile.id } }">View Profile</router-link></li>
                                        <li><a class="view-edit" @click="openLanguagesModal()">Edit</a></li>
                                    </ul>
                                </div>
                                <div id="awards" class="tab-pane fade">
                                    <h1 class="tabs-heading">Awards</h1>
                                    <div class="row no-gutters awards-info-tab">
                                        <div class="col-8 col-md-6 br1">
                                            <ul class="profile-labels w-100">
                                                <li class="profile-label w-100 bl5"><span>Award Name</span></li>
                                                <li>
                                                    <ul class="profile-info-list"
                                                        v-for="(awardN, index) in this.profile.candidate_awards"
                                                        :key="index">
                                                        <li class="profile-info profile-info-border rt0">
                                                            <div class="line-text-1">
                                                                <p class="awardsTitle">{{awardN.name}}</p>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col-4 col-md-6 bl1">
                                            <ul class="profile-labels w-100">
                                                <li class="profile-label w-100 br5"><span>Year</span></li>
                                                <li>
                                                    <ul class="profile-info-list"
                                                        v-for="(awardD, index) in this.profile.candidate_awards"
                                                        :key="index">
                                                        <li class="profile-info profile-info-border rt0">
                                                            <div class="line-text-1">
                                                                <p class="awardsYear">{{awardD.date}}</p>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <ul class="view-edit-anker-list">
                                        <li><router-link class="view-anker" data-toggle="collapse" :to="{ name: 'CandidateDetail', params: { id: profile.id } }">View Profile</router-link></li>
                                        <li><a class="view-edit" @click="openAwardModal()">Edit</a></li>
                                    </ul>
                                </div>
                                <div id="current-job" class="tab-pane fade">
                                    <h1 class="tabs-heading">Current job</h1>
                                    <div class="row no-gutters current-info-tab">
                                        <div class="col-12 col-md-6">
                                            <ul class="profile-labels">
                                                <li class="profile-label profile-label-border rt0 btr5"><span>Currently
                                                        Working</span></li>
                                                <li class="profile-label profile-label-border"><span>Starting Date</span>
                                                </li>
                                                <li class="profile-label profile-label-border"><span>Ending Date</span>
                                                </li>
                                                <li class="profile-label profile-label-border"><span>Current
                                                        Position</span></li>
                                                <li class="profile-label profile-label-border"><span>Current Status</span>
                                                </li>
                                                <li class="profile-label profile-label-border">
                                                    <span>No of Persons Managed</span>
                                                </li>
                                                <!-- <li class="profile-label profile-label-border rb0 bbl5"><span>Skills</span></li> -->
                                            </ul>
                                            <ul class="profile-info-list">
                                                <li class="profile-info profile-info-border rt0">
                                                    <div class="line-text-1">
                                                        <p>{{this.profile.is_working_currently}}</p>
                                                    </div>
                                                </li>
                                                <li class="profile-info profile-info-border">
                                                    <div class="line-text-1">
                                                        <p>{{this.profile.job_start_date}}</p>
                                                    </div>
                                                </li>
                                                <li class="profile-info profile-info-border">
                                                    <div class="line-text-1">
                                                        <p>{{this.profile.job_end_date}}</p>
                                                    </div>
                                                </li>
                                                <li class="profile-info profile-info-border">
                                                    <div class="line-text-1">
                                                        <p>{{this.profile.current_position}}</p>
                                                    </div>
                                                </li>
                                                <li class="profile-info profile-info-border">
                                                    <div class="line-text-1">
                                                        <p>{{this.profile.current_status}}</p>
                                                    </div>
                                                </li>
                                                <li class="profile-info profile-info-border">
                                                    <div class="line-text-1">
                                                        <p>{{this.profile.no_of_persons_managed}}</p>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col-12 col-md-6">
                                            <ul class="profile-labels">
                                                <li class="profile-label profile-label-border rt0 rb0 btr5 v-on-d">
                                                    <span></span>
                                                </li>
                                                <li class="profile-label profile-label-border rt0 rb0 v-on-d"><span></span>
                                                </li>
                                                <li class="profile-label profile-label-border rt0 v-on-d"><span></span>
                                                </li>
                                                <li class="profile-label profile-label-border"><span>Current Company</span>
                                                </li>
                                                <li class="profile-label profile-label-border profile-label-border-bottom">
                                                    <span>Current Salary</span></li>
                                                <li class="profile-label profile-label-border rb0 rt0 v-on-d"><span></span>
                                                </li>
                                                <!-- <li class="profile-label bbl5"><span></span></li> -->
                                            </ul>
                                            <ul class="profile-info-list">
                                                <li class="profile-info v-on-d"></li>
                                                <li class="profile-info v-on-d"></li>
                                                <li class="profile-info profile-info-border-bottom v-on-d"></li>
                                                <li class="profile-info profile-info-border">
                                                    <div class="line-text-1">
                                                        <p>{{this.profile.current_working_company}}</p>
                                                    </div>
                                                </li>
                                                <li class="profile-info profile-info-border">
                                                    <div class="line-text-1">
                                                        <p>{{this.profile.current_salary}}</p>
                                                    </div>
                                                </li>
                                                <li class="profile-info profile-info-border-top v-on-d"></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <ul class="view-edit-anker-list">
                                        <li><router-link class="view-anker" data-toggle="collapse" :to="{ name: 'CandidateDetail', params: { id: profile.id } }">View Profile</router-link></li>
                                        <li><a class="view-edit" @click="openCurrentJobModal()">Edit</a></li>
                                    </ul>
                                </div>
                                <!-- <div id="desire-job" class="tab-pane fade">
                                    <h1 class="tabs-heading">Desire job</h1>
                                    <div class="row no-gutters desire-job-tab">
                                        <div class="col-12">
                                            <ul class="profile-labels">
                                                <li class="profile-label profile-label-border rt0 btr5"><span>Looking for
                                                        Job</span></li>
                                                <li class="profile-label profile-label-border"><span>Location</span></li>
                                                <li class="profile-label profile-label-border"><span>Area</span></li>
                                                <li class="profile-label profile-label-border"><span>Expected Salary</span>
                                                </li>
                                                <li class="profile-label profile-label-border"><span>Joining From</span>
                                                </li>
                                                <li class="profile-label profile-label-border"><span>Position</span></li>
                                                <li class="profile-label profile-label-border rb0 bbl5"><span>Shift</span>
                                                </li>
                                            </ul>
                                            <ul class="profile-info-list">
                                                <li class="profile-info profile-info-border rt0 justify-content-start">
                                                    <div class="line-text-1">
                                                        <p>{{this.profile.is_looking_for_job}}</p>
                                                    </div>
                                                </li>
                                                <li class="profile-info profile-info-border justify-content-start">
                                                    <div class="line-text-1">
                                                        <p>{{this.profile.looking_for_job_location}}</p>
                                                    </div>
                                                </li>
                                                <li class="profile-info profile-info-border justify-content-start">
                                                    <div class="line-text-1">
                                                        <p>{{this.profile.looking_for_job_location}}</p>
                                                    </div>
                                                </li>
                                                <li class="profile-info profile-info-border justify-content-start">
                                                    <div class="line-text-1">
                                                        <p>{{this.profile.looking_for_job_expected_salary}}</p>
                                                    </div>
                                                </li>
                                                <li class="profile-info profile-info-border justify-content-start">
                                                    <div class="line-text-1">
                                                        <p>-</p>
                                                    </div>
                                                </li>
                                                <li class="profile-info profile-info-border justify-content-start">
                                                    <div class="line-text-1">
                                                        <p>{{this.profile.looking_for_job_position}}</p>
                                                    </div>
                                                </li>
                                                <li class="profile-info profile-info-border rb0 justify-content-start">
                                                    <div class="line-text-1">
                                                        <p>-</p>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <ul class="view-edit-anker-list">
                                        <li><router-link class="view-anker" data-toggle="collapse" :to="{ name: 'CandidateDetail', params: { id: profile.id } }">View Profile</router-link></li>
                                        <li><a class="view-edit" @click="OpenDesireJobModal()">Edit</a></li>
                                    </ul>
                                </div> -->
                                <div id="work-experience" class="tab-pane fade">
                                    <h1 class="tabs-heading">Work Experience</h1>
                                    <div class="row no-gutters experience-info-tab"
                                        v-for="(experience, index) in this.profile.candidate_experience" :key="index">
                                        <div class="col-12 col-md-6">
                                            <ul class="profile-labels">
                                                <li class="profile-label profile-label-border rt0 btr5">
                                                    <span>Company</span></li>
                                                <li class="profile-label profile-label-border"><span>Position</span></li>
                                                <li class="profile-label profile-label-border"><span>Starting Date</span>
                                                </li>
                                                <li class="profile-label profile-label-border"><span>Current Status</span>
                                                </li>
                                                <li class="profile-label profile-label-border rb0 v-on-d"><span></span>
                                                </li>
                                                <li class="profile-label profile-label-border rt0 rb0 bbl5 v-on-d">
                                                    <span></span>
                                                </li>
                                            </ul>
                                            <ul class="profile-info-list">
                                                <li class="profile-info profile-info-border rt0">
                                                    <div class="line-text-1">
                                                        <p>{{experience.company_name}}</p>
                                                    </div>
                                                </li>
                                                <li class="profile-info profile-info-border">
                                                    <div class="line-text-1">
                                                        <p>{{experience.designation}}</p>
                                                    </div>
                                                </li>
                                                <li class="profile-info profile-info-border">
                                                    <div class="line-text-1">
                                                        <p>{{experience.start_date}}</p>
                                                    </div>
                                                </li>
                                                <li class="profile-info profile-info-border">
                                                    <div class="line-text-1">
                                                        <p v-if="experience.is_working_currently == 1">Yes</p>
                                                        <p v-if="experience.is_working_currently == 0">No</p>
                                                    </div>
                                                </li>
                                                <li class="profile-info profile-info-border rb0 v-on-d"></li>
                                            </ul>
                                        </div>
                                        <div class="col-12 col-md-6">
                                            <ul class="profile-labels">
                                                <li class="profile-label profile-label-border rb0 rt0 btr5 v-on-d">
                                                    <span></span>
                                                </li>
                                                <li class="profile-label profile-label-border rt0 v-on-d"><span></span>
                                                </li>
                                                <li class="profile-label profile-label-border"><span>Ending Date</span>
                                                </li>
                                                <li class="profile-label profile-label-border rb0 v-on-d"><span></span>
                                                </li>
                                                <li class="profile-label v-on-d"><span></span></li>
                                                <li class="profile-label bbl5 v-on-d"><span></span></li>
                                            </ul>
                                            <ul class="profile-info-list">
                                                <li class="profile-info v-on-d"></li>
                                                <li class="profile-info profile-info-border rt0 v-on-d"></li>
                                                <li class="profile-info profile-info-border">
                                                    <div class="line-text-1">
                                                        <p>{{experience.end_date}}</p>
                                                    </div>
                                                </li>
                                                <li class="profile-info profile-info-border rb0 v-on-d"></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <ul class="view-edit-anker-list">
                                        <li><router-link class="view-anker" data-toggle="collapse" :to="{ name: 'CandidateDetail', params: { id: profile.id } }">View Profile</router-link></li>
                                        <li><a class="view-edit" @click="openWorkExperienceModal()">Edit</a></li>
                                    </ul>
                                </div>
                                <div id="skills" class="tab-pane fade">
                                    <h1 class="tabs-heading">Skills</h1>
                                    <div class="row no-gutters documents-info-tab">
                                        <div class="col-5 col-md-6 br1">
                                            <ul class="profile-labels w-100">
                                                <li class="profile-label w-100 bl5"><span>Skills</span></li>
                                                <li>
                                                    <ul class="profile-info-list"
                                                        v-for="(skillN, index) in this.profile.candidate_skills"
                                                        :key="index">
                                                        <li class="profile-info profile-info-border rt0">
                                                            <div class="line-text-1">
                                                                <p class="skills-title">{{skillN.name}}</p>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col-7 col-md-6 bl1">
                                            <ul class="profile-labels w-100">
                                                <li class="profile-label w-100 br5"><span>Skill Level</span></li>
                                                <li>
                                                    <ul class="profile-info-list"
                                                        v-for="(skillL, index) in this.profile.candidate_skills"
                                                        :key="index">
                                                        <li class="profile-info profile-info-border rt0">
                                                            <div class="line-text-1">
                                                                <p class="skills-title">{{skillL.level}}</p>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <ul class="view-edit-anker-list">
                                        <li><router-link class="view-anker" data-toggle="collapse" :to="{ name: 'CandidateDetail', params: { id: profile.id } }">View Profile</router-link></li>
                                        <li><a class="view-edit" @click="openSkillsModal()">Edit</a></li>
                                    </ul>
                                </div>
                                <div id="documents" class="tab-pane fade">
                                    <h1 class="tabs-heading">Documents</h1>
                                    <div class="row no-gutters documents-info-tab">
                                        <div class="col-12 col-md-6 br1">
                                            <ul class="profile-labels w-100">
                                                <li class="profile-label w-100 bl5"><span>Type</span></li>
                                                <li>
                                                    <ul class="profile-info-list">
                                                        <li class="profile-info profile-info-border rt0">
                                                            <div class="line-text-1">
                                                                <p class="documentsTitle">Resume</p>
                                                            </div>
                                                        </li>
                                                        <li class="profile-info profile-info-border rt0">
                                                            <div class="line-text-1">
                                                                <p class="documentsTitle">CNIC (Front, Back)</p>
                                                            </div>
                                                        </li>
                                                        <li class="profile-info profile-info-border rt0 rb0">
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
                                            <ul class="profile-labels w-100">
                                                <li class="profile-label w-100 br5"><span>View</span></li>
                                                <li>
                                                    <ul class="profile-info-list">
                                                        <li class="profile-info profile-info-border rt0">
                                                            <form id="uploadresume">
                                                                <ul class="upload-view-anker-list">
                                                                    <li>
                                                                        <input type="file" hidden name="resume"
                                                                            @change="saveResume()" id="resume-pdf-file">
                                                                        <label class="UploadAnker"
                                                                            for="resume-pdf-file">Upload</label>
                                                                    </li>
                                                                    <li><a v-if="this.profile.cv_file" class="view-anker"
                                                                            :href="'/storage/images/candidates/resume/'+this.profile.cv_file"
                                                                            target="_blank">View</a></li>
                                                                    <div class="alert d-none" id="responseMsg">
                                                                    </div>
                                                                    <div class='alert alert-danger mt-2 d-none text-danger'
                                                                        id="err_file"></div>
                                                                </ul>
                                                            </form>
                                                        </li>
                                                        <li class="profile-info profile-info-border rt0">
                                                            <form id="uploadcnic">
                                                                <ul class="upload-view-anker-list">
                                                                    <li>
                                                                        <input type="file" hidden
                                                                            name="uploadcnicfrontback"
                                                                            @change="saveCNIC()"
                                                                            id="uploadcnicfrontback">
                                                                        <label class="UploadAnker"
                                                                            for="uploadcnicfrontback">Upload</label>
                                                                    </li>
                                                                    <li><a class="view-anker" v-if="profile.cnic_image"
                                                                            :href="'/storage/images/candidates/cnic/'+this.profile.cnic_image"
                                                                            target="_blank">View</a></li>
                                                                </ul>
                                                            </form>
                                                        </li>
                                                        <li class="profile-info profile-info-border rt0 rb0">
                                                            <form id="uploadexperienceletter">
                                                                <ul class="upload-view-anker-list">
                                                                    <li>
                                                                        <input type="file" hidden
                                                                            name="uploadexperienceletter"
                                                                            @change="saveExperienceLetter()"
                                                                            id="experiencelatter">
                                                                        <label class="UploadAnker"
                                                                            for="experiencelatter">Upload</label>
                                                                    </li>
                                                                    <li><a class="view-anker" v-if="profile.experience_letter"
                                                                            :href="'/storage/images/candidates/experience-letter/'+this.profile.experience_letter"
                                                                            target="_blank">View</a></li>
                                                                </ul>
                                                            </form>
                                                        </li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div id="projects" class="tab-pane fade">
                                    <h1 class="tabs-heading">Projects</h1>
                                    <div class="row no-gutters desire-job-tab"
                                        v-for="(project, index) in this.profile.candidate_projects" :key="index">
                                        <div class="col-12">
                                            <ul class="profile-labels">
                                                <li class="profile-label profile-label-border rt0 btr5"><span>Name</span>
                                                </li>
                                                <li class="profile-label profile-label-border"><span>Starting Date</span>
                                                </li>
                                                <li class="profile-label profile-label-border"><span>Ending Date</span>
                                                </li>
                                                <li class="profile-label profile-label-border"><span>Description</span>
                                                </li>
                                                <li class="profile-label profile-label-border"><span>Link</span></li>
                                            </ul>
                                            <ul class="profile-info-list">
                                                <li class="profile-info profile-info-border rt0 justify-content-start">
                                                    <div class="line-text-1">
                                                        <p>{{project.name}}</p>
                                                    </div>
                                                </li>
                                                <li class="profile-info profile-info-border justify-content-start">
                                                    <div class="line-text-1">
                                                        <p>{{project.start_date}}</p>
                                                    </div>
                                                </li>
                                                <li class="profile-info profile-info-border justify-content-start">
                                                    <div class="line-text-1">
                                                        <p>{{project.end_date}}</p>
                                                    </div>
                                                </li>
                                                <li class="profile-info profile-info-border justify-content-start">
                                                    <div class="line-text-3">
                                                        <p>{{project.description}}</p>
                                                    </div>
                                                </li>
                                                <li class="profile-info profile-info-border justify-content-start">
                                                    <div class="line-text-1 pl-2">
                                                        <a :href="project.link" target="_blank">{{project.link}}</a>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <ul class="view-edit-anker-list">
                                        <li><router-link class="view-anker" data-toggle="collapse" :to="{ name: 'CandidateDetail', params: { id: profile.id } }">View Profile</router-link></li>
                                        <li><a class="view-edit" @click="openProjectModals()">Edit</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal BasicInfo  -->
        <!-- Large modal -->
        <div class="modal fade basicInfoModal" id="basicInfoModal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg">
                <form id="basicinformationForm" enctype="multipart/form-data">
                    <div class="modal-content p-0">
                        <div class="container edit-modal pb-5">
                            <h3 class="my-4">Update</h3>
                            <section class="modal-form">
                                <div class="row no-gutters" id="subFormFieldsContainer">
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
                                                            <label for="profilePhoto">Profile Photo</label>
                                                            <input name="profilePhoto" id="profilePhoto"
                                                                class="form-control" type="file" />
                                                            <small>
                                                                <span
                                                                    v-if="errors_basic_information.profilePhoto != null"
                                                                    class="text-danger">
                                                                    {{errors_basic_information.profilePhoto[0]}}
                                                                </span>
                                                            </small>
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-md-6">
                                                        <div class="form-group">
                                                            <label for="candidateFullName">Full Name</label>
                                                            <input type="text" placeholder="Enter Full Name"
                                                                name="full_name" class="form-control"
                                                                v-model="basic_information_record.full_name" />
                                                            <small>
                                                                <span v-if="errors_basic_information.full_name != null"
                                                                    class="text-danger">
                                                                    {{errors_basic_information.full_name[0]}}
                                                                </span>
                                                            </small>
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-md-6">
                                                        <label for="currentStatus">Gender</label>
                                                        <div class="form-group m-0">
                                                            <label for="male">Male</label>
                                                            <input class="mx-1" id="male" name="gender" value="Male"
                                                                type="radio"
                                                                v-model="basic_information_record.gender" />
                                                            <label for="female">Female</label>
                                                            <input class="mx-1" id="female" name="gender" value="Female"
                                                                type="radio"
                                                                v-model="basic_information_record.gender" />
                                                            <small>
                                                                <span v-if="errors_basic_information.gender != null"
                                                                    class="text-danger">
                                                                    {{errors_basic_information.gender[0]}}
                                                                </span>
                                                            </small>
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-md-6">
                                                        <div class="form-group">
                                                            <label for="city">City</label>
                                                            <input name="city" type="text" class="form-control"
                                                                placeholder="Please City"
                                                                v-model="basic_information_record.city" />
                                                            <small>
                                                                <span v-if="errors_basic_information.city != null"
                                                                    class="text-danger">
                                                                    {{errors_basic_information.city[0]}}
                                                                </span>
                                                            </small>
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="form-group">
                                                            <label for="address">Address</label>
                                                            <input name="address" id="address" type="text"
                                                                class="form-control" value=""
                                                                placeholder="Enter Address"
                                                                v-model="basic_information_record.address" />
                                                            <small>
                                                                <span v-if="errors_basic_information.address != null"
                                                                    class="text-danger">
                                                                    {{errors_basic_information.address[0]}}
                                                                </span>
                                                            </small>
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-md-6">
                                                        <div class="form-group">
                                                            <label for="cinic">CNIC <small><b>Without dashes</b></small></label>
                                                            <input name="cnic" type="number" class="form-control"
                                                                placeholder="Enter Cnic" value="" :max="13"
                                                                v-model="basic_information_record.cnic" />
                                                            <small>
                                                                <span v-if="errors_basic_information.cnic != null"
                                                                    class="text-danger">
                                                                    {{errors_basic_information.cnic[0]}}
                                                                </span>
                                                            </small>
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-md-6">
                                                        <div class="form-group">
                                                            <label for="Birthday">Date of Birth</label>
                                                            <input name="date_of_birth" id="Birthday" type="date"
                                                                class="form-control" placeholder="Enter Date of Birth"
                                                                v-model="basic_information_record.date_of_birth"
                                                                value="">
                                                            <small>
                                                                <span
                                                                    v-if="errors_basic_information.date_of_birth != null"
                                                                    class="text-danger">
                                                                    {{errors_basic_information.date_of_birth[0]}}
                                                                </span>
                                                            </small>
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-md-6">
                                                        <div class="form-group">
                                                            <label for="address">ZIP code</label>
                                                            <input name="zipcode" type="number" class="form-control"
                                                                value="" placeholder="Enter ZIP code"
                                                                v-model="basic_information_record.zipcode" />
                                                            <small>
                                                                <span v-if="errors_basic_information.zipcode != null"
                                                                    class="text-danger">
                                                                    {{errors_basic_information.zipcode[0]}}
                                                                </span>
                                                            </small>

                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-md-6">
                                                        <div class="form-group">
                                                            <label for="phone">Phone</label>
                                                            <input name="phone_no" id="phone" class="form-control"
                                                                placeholder="Enter Phone" type="tel" value=""
                                                                v-model="basic_information_record.phone" />
                                                            <small>
                                                                <span v-if="errors_basic_information.phone != null"
                                                                    class="text-danger">
                                                                    {{errors_basic_information.phone[0]}}
                                                                </span>
                                                            </small>
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-md-6">
                                                        <div class="form-group">
                                                            <label for="email">Email</label>
                                                            <input name="email" id="email" disabled class="form-control"
                                                                placeholder="Enter Email" type="email" value=""
                                                                v-model="basic_information_record.email" />
                                                        </div>
                                                    </div>
                                                    <!-- <div class="col-12 col-md-6">
                                                        <div class="form-group">
                                                            <label for="country">Country</label>
                                                            <input name="country" disabled class="form-control" type="country" value="Pakistan" />
                                                        </div>
                                                    </div> -->
                                                    <div class="col-12">
                                                        <div class="form-group">
                                                            <label for="companyDescription">Bio</label>
                                                            <textarea style="height:100px;" name="bio"
                                                                class="form-control" placeholder="Description"
                                                                v-model="basic_information_record.bio"></textarea>
                                                            <small>
                                                                <span v-if="errors_basic_information.bio != null"
                                                                    class="text-danger">
                                                                    {{errors_basic_information.bio[0]}}
                                                                </span>
                                                            </small>
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
        <div class="modal fade AwardModal" id="AwardModal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg">
                <form id="awardForm" class="w-100" action="#" method="POST">
                    <div class="modal-content p-0">
                        <div class="container edit-modal pb-5">
                            <h3 class="my-4">Update</h3>
                            <section class="modal-form">
                                <div class="row no-gutters">
                                    <div class="col-12">
                                        <div class="sub-form">
                                            <div class="modal-title  my-3">
                                                <div class="mr-2 title-effect"></div>
                                                <h4 class="m-0 modal-title-text">Award</h4>
                                            </div>
                                            <div class="subFormFields" id="AwardFieldsContainer"
                                                v-for="(awardUpdate, index) in this.profile.candidate_awards"
                                                :key="index">
                                                <div class="row AwardSection">
                                                    <div class="col-12 col-md-6">
                                                        <div class="form-group">
                                                            <label for="award">Award Name</label>
                                                            <input name="award_name[]" class="form-control" type="text"
                                                                v-model="awardUpdate.name" placeholder="Award Name"
                                                                value="award name" />
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-md-6">
                                                        <div class="form-group">
                                                            <label class="d-flex justify-content-between"
                                                                for="awardYear">
                                                                Year<a @click="deleteAwardArray(index)">
                                                                    <i class="fas fa-times"></i></a>
                                                            </label>
                                                            <input id="awardYear" name="award_date[]"
                                                                v-model="awardUpdate.date" class="form-control"
                                                                type="date" placeholder="Looking for job location"
                                                                value="award date">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="subFormFields" id="AwardFieldsContainer"
                                                v-if="this.addMoreDBAward == true">
                                                <div class="row AwardSection">
                                                    <div class="col-12 col-md-6">
                                                        <div class="form-group">
                                                            <label for="award">Award Name</label>
                                                            <input name="award_name[]" class="form-control" type="text"
                                                                v-model="award_push_array.name" placeholder="Award Name"
                                                                value="award name" />
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-md-6">
                                                        <div class="form-group">
                                                            <label class="d-flex justify-content-between"
                                                                for="awardYear">
                                                                Year<a @click="removeAddMoreArrayAward(index)">
                                                                    <i class="fas fa-times"></i></a>
                                                            </label>
                                                            <input id="awardYear" name="award_date[]"
                                                                v-model="award_push_array.date" class="form-control"
                                                                type="date" placeholder="Looking for job location"
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
                                        <a v-if="this.addMoreDBAward" @click="addToAwardRecord()">
                                            <i class="fas fa-plus mr-1"></i> Add another Award
                                        </a>
                                        <a v-else @click="addMoreAward()">
                                            <i class="fas fa-plus mr-1"></i> Add another Award
                                        </a>
                                    </div>
                                </div>
                                <div class="row mt-4">
                                    <div class="col-lg-12 modelBtnContainer">
                                        <button class="positiveBtn modelBtn mr-1"
                                            @click.prevent="updateAward()">Update</button>
                                        <button class="negativeBtn modelBtn ml-1" data-dismiss="modal"
                                            @click.prevent="clearAwardArray()">Cancel</button>
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
        <div class="modal fade CurrentJobModal" id="CurrentJobModal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg">
                <form id="currentJobForm" class="w-100">
                    <div class="modal-content p-0">
                        <div class="container edit-modal pb-5">
                            <h3 class="my-4">Update</h3>
                            <section class="modal-form">
                                <div class="row no-gutters" id="CurrentJobFieldsContainer">
                                    <div class="col-12 CurrentJobSection">
                                        <div id='subForm' class="sub-form">
                                            <div class="modal-title  my-3">
                                                <div class="mr-2 title-effect"></div>
                                                <h4 class="m-0 modal-title-text">Current Job</h4>
                                            </div>
                                            <div class="subFormFields">
                                                <div class="row">
                                                    <div class="col-12 col-md-6 form-group">
                                                        <label for="currentStatus">Current Working</label>
                                                        <div class="form-group m-0">
                                                            <label for="currentStatus">Yes</label>
                                                            <input class="my-1" @change="workingCurrentlyYes()"
                                                                name="is_working_currently" value="1"
                                                                v-model="profile.is_working_currently" type="radio" />
                                                            <label for="currentStatus">No</label>
                                                            <input type="radio" @change="workingCurrentlyNo()"
                                                                v-model="profile.is_working_currently" class="my-1"
                                                                value="0" name="is_working_currently" />
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-md-6" v-if="this.isWorkingCurrently">
                                                        <div class="form-group">
                                                            <label for="startingDate">Starting Date</label>
                                                            <input name="job_start_date" value="" class="form-control"
                                                                v-model="profile.job_start_date"
                                                                placeholder="Please Select Starting Date" type="date" />
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-md-6" v-if="this.isWorkingCurrently">
                                                        <div class="form-group">
                                                            <label for="endingDate">Ending Date</label>
                                                            <input name="job_end_date" value="" class="form-control"
                                                                v-model="profile.job_end_date"
                                                                placeholder="Please Select Ending Date" type="date" />
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-md-6" v-if="this.isWorkingCurrently">
                                                        <div class="form-group">
                                                            <label for="currentPosition">Current Position</label>
                                                            <input name="currentPosition" class="form-control"
                                                                v-model="profile.current_position"
                                                                placeholder="Enter current position" type="text"
                                                                value="" />
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-md-6" v-if="this.isWorkingCurrently">
                                                        <div class="form-group">
                                                            <label for="currentPositionStatus">Current Status</label>
                                                            <input name="currentPositionStatus" class="form-control"
                                                                v-model="profile.current_status"
                                                                placeholder="Enter Current Status" type="text"
                                                                value="" />
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-md-6" v-if="this.isWorkingCurrently">
                                                        <div class="form-group">
                                                            <label for="personsManaged">No of Persons Managed</label>
                                                            <input name="personsManaged" class="form-control"
                                                                v-model="profile.no_of_persons_managed"
                                                                placeholder="Enter No of Persons Managed" type="number"
                                                                value="" />
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-md-6" v-if="this.isWorkingCurrently">
                                                        <div class="form-group">
                                                            <label for="personsManaged">Current Company</label>
                                                            <input name="currentCompany" class="form-control"
                                                                v-model="profile.current_working_company"
                                                                placeholder="Enter Current Company" type="text"
                                                                value="" />
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-md-6" v-if="this.isWorkingCurrently">
                                                        <div class="form-group">
                                                            <label for="skills">Current Salary</label>
                                                            <input name="currentSalary" class="form-control"
                                                                v-model="profile.current_salary"
                                                                placeholder="Enter Current Salary" type="number"
                                                                value="">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mt-4">
                                    <div class="col-lg-12 modelBtnContainer">
                                        <button @click.prevent="updateCurrentJob()"
                                            class="positiveBtn modelBtn mr-1">Update</button>
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
        <div class="modal fade EducationModal" id="EducationModal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg">
                <form id="educationform" class="w-100">
                    <div class="modal-content p-0">
                        <div class="container edit-modal pb-5">
                            <h3 class="my-4">Update</h3>
                            <section class="modal-form">
                                <div class="row no-gutters" id="EducationFieldsContainer">
                                    <div class="col-12 EductionSection">
                                        <div class="sub-form">
                                            <div class="modal-title  my-3">
                                                <div class="mr-2 title-effect"></div>
                                                <h4 class="m-0 modal-title-text">Education</h4>
                                            </div>
                                            <div class="subFormFields"
                                                v-for="(educationUpdate, index) in this.profile.candidate_education"
                                                :key="index">
                                                <div class="text-right w-100 px-3">
                                                    <a @click="deleteEducationArray(index)">
                                                        <i class="fas fa-times"></i>
                                                    </a>
                                                </div>
                                                <div class="row">
                                                    <!-- <div class="col-12 col-md-6">
                                                        <div class="form-group">
                                                            <label for="institute">Institute Type</label>
                                                            <select name="school_type[]" class="form-control"
                                                                v-model="educationUpdate.school_type"
                                                                placeholder="Please Select">
                                                                <option value="Metric">Metric</option>
                                                                <option value="Intermediate">Intermediate</option>
                                                                <option value="Bachelor">Bachelor</option>
                                                            </select>
                                                        </div>
                                                    </div> -->
                                                    <div class="col-12 col-md-6">
                                                        <div class="form-group">
                                                            <label for="school_name">Institute name</label>
                                                            <input name="school_name[]"
                                                                v-model="educationUpdate.school_name"
                                                                class="form-control" type="text"
                                                                placeholder="Please Select" value="" />
                                                            <!-- <select name="school_name[]" class="form-control" v-model="educationUpdate.school_name"
                                                                placeholder="Enter Institute Name" id="school_name">
                                                                <option value="$university">university</option>
                                                            </select> -->
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-md-6">
                                                        <div class="form-group">
                                                            <label for="startingDate">Starting Date</label>
                                                            <input name="start_date[]"
                                                                v-model="educationUpdate.start_date"
                                                                class="form-control" type="date"
                                                                placeholder="Please Select" value="" />
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-md-6">
                                                        <div class="form-group">
                                                            <label for="endingDate">Ending Date</label>
                                                            <input name="end_date[]" id="endingDate"
                                                                v-model="educationUpdate.end_date" class="form-control"
                                                                type="date" placeholder="Please Select" value="" />
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-md-6">
                                                        <div class="form-group">
                                                            <label for="department">Department</label>
                                                            <input name="department[]" id="department"
                                                                v-model="educationUpdate.department"
                                                                class="form-control" type="text" placeholder="Faculty"
                                                                value="" />
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="subFormFields">
                                                <div class="row" v-if="this.addMoreDBEducation == true">
                                                    <div class="text-right w-100 px-3">
                                                        <a @click="removeAddMoreArrayEducation()">
                                                            <i class="fas fa-times"></i>
                                                        </a>
                                                    </div>
                                                    <div class="row m-0">
                                                        <!-- <div class="col-12 col-md-6">
                                                            <div class="form-group">
                                                                <label for="institute">Institute Type</label>
                                                                <select name="school_type" class="form-control"
                                                                    v-model="education_push_array.school_type"
                                                                    placeholder="Please Select">
                                                                    <option value="Metric">Metric</option>
                                                                    <option value="Intermediate">Intermediate</option>
                                                                    <option value="Bachelor">Bachelor</option>
                                                                </select>
                                                            </div>
                                                        </div> -->
                                                        <div class="col-12 col-md-6">
                                                            <div class="form-group">
                                                                <label for="school_name">Institute name</label>
                                                                <input name="school_name"
                                                                    v-model="education_push_array.school_name"
                                                                    class="form-control" type="text"
                                                                    placeholder="Please Select" value="" />
                                                                <!-- <select name="school_name" class="form-control" v-model="educationUpdate.school_name"
                                                                    placeholder="Enter Institute Name" id="school_name">
                                                                    <option value="$university">university</option>
                                                                </select> -->
                                                            </div>
                                                        </div>
                                                        <div class="col-12 col-md-6">
                                                            <div class="form-group">
                                                                <label for="startingDate">Starting Date</label>
                                                                <input name="start_date"
                                                                    v-model="education_push_array.start_date"
                                                                    class="form-control" type="date"
                                                                    placeholder="Please Select" value="" />
                                                            </div>
                                                        </div>
                                                        <div class="col-12 col-md-6">
                                                            <div class="form-group">
                                                                <label for="endingDate">Ending Date</label>
                                                                <input name="end_date" id="endingDate"
                                                                    v-model="education_push_array.end_date"
                                                                    class="form-control" type="date"
                                                                    placeholder="Please Select" value="" />
                                                            </div>
                                                        </div>
                                                        <div class="col-12 col-md-6">
                                                            <div class="form-group">
                                                                <label for="department">Department</label>
                                                                <input name="department" id="department"
                                                                    v-model="education_push_array.department"
                                                                    class="form-control" type="text"
                                                                    placeholder="Faculty" value="" />
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <div id='addEducationBtn' class="col-lg-12 btn addNewButton">
                                        <a v-if="this.addMoreDBEducation" @click="addToEducationRecord()">
                                            <i class="fas fa-plus mr-1"></i> Add another education
                                        </a>
                                        <a v-else @click="addMoreEducation()">
                                            <i class="fas fa-plus mr-1"></i> Add another education
                                        </a>
                                    </div>
                                </div>
                                <div class="row mt-4">
                                    <div class="col-lg-12 modelBtnContainer">
                                        <button class="positiveBtn modelBtn mr-1"
                                            @click.prevent="updateEducation()">Update</button>
                                        <button class="negativeBtn modelBtn ml-1" data-dismiss="modal"
                                            @click.prevent="clearEducationArray()">Cancel</button>
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
        <div class="modal fade WorkExperienceModal" id="WorkExperienceModal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg">
                <form id="workExperienceForm" class="w-100" action="#" method="POST">
                    <div class="modal-content p-0">
                        <div class="container edit-modal pb-5">
                            <h3 class="my-4">Update</h3>
                            <section class="modal-form">
                                <div class="row no-gutters" id="WorkExperienceContainer"
                                    v-for="(experienceUpdate, index) in this.profile.candidate_experience" :key="index">
                                    <div class="col-12 WorkExperienceSection">
                                        <div id='subForm' class="sub-form">
                                            <div class="modal-title  my-3">
                                                <div class="mr-2 title-effect"></div>
                                                <h4 class="m-0">Work Experience</h4>
                                            </div>
                                            <div class="subFormFields">
                                                <div class="text-right w-100 px-2">
                                                    <a @click="deleteWorkExperienceArray(index)">
                                                        <i class="fas fa-times"></i>
                                                    </a>
                                                </div>
                                                <div class="row">
                                                    <div class="col-12 col-md-6">
                                                        <div class="form-group">
                                                            <label for="company">Company</label>
                                                            <input name="company_name[]" id="company" type="text"
                                                                v-model="experienceUpdate.company_name"
                                                                class="form-control" placeholder="Enter Company"
                                                                value="#" />
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-md-6">
                                                        <div class="form-group">
                                                            <label for="position">Position</label>
                                                            <input name="designation[]" type="text"
                                                                v-model="experienceUpdate.designation"
                                                                class="form-control" placeholder="Enter Position"
                                                                value="#" />
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-md-6">
                                                        <div class="form-group">
                                                            <label for="startingDate">Starting Date</label>
                                                            <input name="company_start_date[]" id="startingDate"
                                                                v-model="experienceUpdate.start_date"
                                                                class="form-control" type="date"
                                                                placeholder="Please Select" value="#" />
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-md-6">
                                                        <div class="row no-gutters align-items-center">
                                                            <div class="col-6">
                                                                <div class="form-group">
                                                                    <label for="experience_end_date">Ending
                                                                        Date</label>
                                                                    <input name="company_end_date[]" :disabled="experienceUpdate.is_working_currently == true"
                                                                        v-model="experienceUpdate.end_date"
                                                                        id="experience_end_date" class="form-control"
                                                                        type="date" placeholder="Please Select">
                                                                </div>
                                                            </div>
                                                            <div class="col-6">
                                                                <div
                                                                    class="form-group d-flex align-items-center justify-content-center m-0">
                                                                    <input class="mr-1" name="currentWorking" @click="experienceUpdate.end_date = ''"
                                                                        id="experience_checkbox_end_date"
                                                                        v-model="experienceUpdate.is_working_currently"
                                                                        type="checkbox">
                                                                    <label class="m-0"
                                                                        for="experience_checkbox_end_date">Currently Working</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row no-gutters" id="WorkExperienceContainer"
                                    v-if="this.addMoreDBWorkExperience == true">
                                    <div class="col-12 WorkExperienceSection">
                                        <div id='subForm' class="sub-form">
                                            <div class="modal-title  my-3">
                                                <div class="mr-2 title-effect"></div>
                                                <h4 class="m-0">Work Experience</h4>
                                            </div>
                                            <div class="subFormFields">
                                                <div class="text-right w-100 px-2">
                                                    <a @click="removeAddMoreArrayWorkExperience()">
                                                        <i class="fas fa-times"></i>
                                                    </a>
                                                </div>
                                                <div class="row">
                                                    <div class="col-12 col-md-6">
                                                        <div class="form-group">
                                                            <label for="company">Company</label>
                                                            <input name="company_name[]" id="company" type="text"
                                                                v-model="work_experience_push_array.company_name"
                                                                class="form-control" placeholder="Enter Company"
                                                                value="#" />
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-md-6">
                                                        <div class="form-group">
                                                            <label for="position">Position</label>
                                                            <input name="designation[]" type="text"
                                                                v-model="work_experience_push_array.designation"
                                                                class="form-control" placeholder="Enter Position"
                                                                value="#" />
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-md-6">
                                                        <div class="form-group">
                                                            <label for="startingDate">Starting Date</label>
                                                            <input name="company_start_date[]" id="startingDate"
                                                                v-model="work_experience_push_array.start_date"
                                                                class="form-control" type="date"
                                                                placeholder="Please Select" value="#" />
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-md-6">
                                                        <div class="row no-gutters align-items-center">
                                                            <div class="col-6">
                                                                <div class="form-group">
                                                                    <label for="experience_end_date">Ending
                                                                        Date</label>
                                                                    <input name="company_end_date[]" :disabled="work_experience_push_array.is_working_currently == true"
                                                                        v-model="work_experience_push_array.end_date"
                                                                        id="experience_end_date" class="form-control"
                                                                        type="date" placeholder="Please Select"
                                                                        value="#">
                                                                </div>
                                                            </div>
                                                            <div class="col-6">
                                                                <div
                                                                    class="form-group d-flex align-items-center justify-content-center m-0">
                                                                    <input class="mr-1" name="currentWorking"
                                                                        id="experience_checkbox_end_date"
                                                                        v-model="work_experience_push_array.is_working_currently"
                                                                        type="checkbox" @click="work_experience_push_array.end_date = ''">
                                                                    <label class="m-0"
                                                                        for="experience_checkbox_end_date">Currently
                                                                        Working</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <div id='addExperiencesBtn' class="col-lg-12 btn addNewButton">
                                        <a v-if="this.addMoreDBWorkExperience" @click="addToWorkExperienceRecord()">
                                            <i class="fas fa-plus mr-1"></i> Add another Experience
                                        </a>
                                        <a v-else @click="addMoreWorkExperience()">
                                            <i class="fas fa-plus mr-1"></i> Add another Experience
                                        </a>
                                    </div>
                                </div>
                                <div class="row mt-4">
                                    <div class="col-lg-12 modelBtnContainer">
                                        <button class="positiveBtn modelBtn mr-1"
                                            @click.prevent="updateWorkExperience()">Update</button>
                                        <button class="negativeBtn modelBtn ml-1" data-dismiss="modal"
                                            @click.prevent="clearWorkExperienceArray()">Cancel</button>
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
        <div class="modal fade LanguagesModal" id="LanguagesModal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg">
                <form id="languageForm" class="w-100" action="#" method="POST">
                    <div class="modal-content p-0">
                        <div class="container edit-modal pb-5">
                            <h3 class="my-4">Update</h3>
                            <section class="modal-form">
                                <div class="row no-gutters">
                                    <div class="col-12">
                                        <div id='subForm' class="subForm">
                                            <div class="modal-title  my-3">
                                                <div class="mr-2 title-effect"></div>
                                                <h4 class="m-0 modal-title-text">Languages</h4>
                                            </div>
                                            <div id="LanguagesFields" class="subFormFields row">
                                                <div class="col-md-6 LanguagesSection"
                                                    v-for="(languageUpdate, index) in this.profile.candidate_language"
                                                    :key="index">
                                                    <div class="form-group">
                                                        <div class="text-right w-100">
                                                            <a @click="deleteLanguageArray(index)">
                                                                <i class="fas fa-times"></i>
                                                            </a>
                                                        </div>
                                                        <input name="language_name[]" class="form-control"
                                                            v-model="languageUpdate.name" for="english"
                                                            style="margin-bottom: 10px;">
                                                        <select name="language_level[]" class="form-control"
                                                            v-model="languageUpdate.level" id="language">
                                                            <option value="Beginner">Beginner</option>
                                                            <option value="Native">Native</option>
                                                            <option value="Intermediate">Intermediate</option>
                                                            <option value="Expert">Expert</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 LanguagesSection"
                                                    v-if="this.addMoreDBLanguage == true">
                                                    <div class="form-group">
                                                        <div class="text-right w-100">
                                                            <a @click="removeAddMoreArrayLanguage()">
                                                                <i class="fas fa-times"></i>
                                                            </a>
                                                        </div>
                                                        <input name="language_name[]" class="form-control"
                                                            v-model="language_push_array.name" for="english"
                                                            style="margin-bottom: 10px;">
                                                        <select name="language_level[]" class="form-control"
                                                            v-model="language_push_array.level" id="language">
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
                                        <a v-if="this.addMoreDBLanguage" @click="addToLanguageRecord()">
                                            <i class="fas fa-plus mr-1"></i> Add another language
                                        </a>
                                        <a v-else @click="addMoreLanguage()">
                                            <i class="fas fa-plus mr-1"></i> Add another language
                                        </a>
                                    </div>
                                </div>
                                <div class="row mt-4">
                                    <div class="col-lg-12 modelBtnContainer">
                                        <button class="positiveBtn modelBtn mr-1"
                                            @click.prevent="updateLanguage()">Update</button>
                                        <button class="negativeBtn modelBtn ml-1" data-dismiss="modal"
                                            @click.prevent="clearLanguageArray()">Cancel</button>
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
        <div class="modal fade SkillsModal" id="SkillsModal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg">
                <form id="skillForm" class="w-100">
                    <div class="modal-content p-0">
                        <div class="container edit-modal pb-5">
                            <h3 class="my-4">Update</h3>
                            <section class="modal-form">
                                <div class="row no-gutters">
                                    <div class="col-12">
                                        <div id="SkillsModal" class="subForm">
                                            <div class="modal-title  my-3">
                                                <div class="mr-2 title-effect"></div>
                                                <h4 class="m-0 modal-title-text">Skills</h4>
                                            </div>
                                            <div id="SkillsFields" class="subFormFields row">
                                                <div class="col-12 col-md-6 SkillsSection"
                                                    v-for="(skillUpdate, index) in this.profile.candidate_skills"
                                                    :key="index">
                                                    <div class="form-group">
                                                        <a class="text-right d-block" @click="deleteSkillArray(index)">
                                                            <i class="fas fa-times"></i>
                                                        </a>
                                                        <input name="skill_name[]" value="" v-model="skillUpdate.name"
                                                            for="english" class="form-control"
                                                            style="margin-bottom:10px;">
                                                        <select name="skill_level[]" id="language" class="form-control"
                                                            v-model="skillUpdate.level">
                                                            <option value="Beginner">Beginner</option>
                                                            <option value="Intermediate">Intermediate</option>
                                                            <option value="Expert">Expert</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-12 col-md-6 SkillsSection"
                                                    v-if="this.addMoreDBSkill == true">
                                                    <div class="form-group">
                                                        <a class="text-right d-block"
                                                            @click="removeAddMoreArraySkill(index)"><i
                                                                class="fas fa-times"></i></a>
                                                        <input name="skill_name[]" value=""
                                                            v-model="skill_push_array.name" for="english"
                                                            class="form-control" style="margin-bottom:10px;">
                                                        <select name="skill_level[]" id="language" class="form-control"
                                                            v-model="skill_push_array.level">
                                                            <option value="Beginner">Beginner</option>
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
                                        <a v-if="this.addMoreDBSkill" @click="addToSkillRecord()">
                                            <i class="fas fa-plus mr-1"></i> Add another Skill
                                        </a>
                                        <a v-else @click="addMoreSkill()">
                                            <i class="fas fa-plus mr-1"></i> Add another Skill
                                        </a>
                                    </div>
                                </div>
                                <div class="row mt-4">
                                    <div class="col-lg-12 modelBtnContainer">
                                        <button class="positiveBtn modelBtn mr-1"
                                            @click.prevent="updateSkill()">Update</button>
                                        <button class="negativeBtn modelBtn ml-1" data-dismiss="modal"
                                            @click.prevent="clearSkillArray()">Cancel</button>
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
        <div class="modal fade ProjectsModal" id="ProjectsModal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg">
                <form id="projectForm" class="w-100">
                    <div class="modal-content p-0">
                        <div class="container edit-modal pb-5">
                            <h3 class="my-4">Update</h3>
                            <section class="modal-form">
                                <div class="row no-gutters" id="ProjectFieldsContainer"
                                    v-for="(projectUpdate, index) in this.profile.candidate_projects" :key="index">
                                    <div class="col-12 ProjectSection">
                                        <div id='subForm' class="subForm">
                                            <div class="text-right">
                                                <a @click="deleteProjectArray(index)">
                                                    <i class="fas fa-times"></i>
                                                </a>
                                            </div>
                                            <div class="modal-title  my-3">
                                                <div class="mr-2 title-effect"></div>
                                                <h4 class="m-0 modal-title-text">Projects {{projectUpdate.name}}</h4>
                                            </div>
                                            <div class="subFormFields">
                                                <div class="row">
                                                    <div class="col-12 col-md-6">
                                                        <div class="form-group">
                                                            <label for="projectName">Project Name</label>
                                                            <input name="projectName[]" class="form-control" value=""
                                                                v-model="projectUpdate.name"
                                                                placeholder="Enter Project Name" type="text" />
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-md-6">
                                                        <div class="form-group">
                                                            <label for="projectLink">Link</label>
                                                            <input name="projectLink[]" class="form-control" value=""
                                                                v-model="projectUpdate.link" placeholder="Enter Link"
                                                                type="url" />
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-md-6">
                                                        <div class="form-group">
                                                            <label for="startingDate">Starting Date</label>
                                                            <input name="startingDate[]" class="form-control" value=""
                                                                v-model="projectUpdate.start_date"
                                                                placeholder="Please Select Starting Date" type="date" />
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-md-6">
                                                        <div class="form-group">
                                                            <label for="endingDate">Ending Date</label>
                                                            <input name="endingDate[]" class="form-control" value=""
                                                                v-model="projectUpdate.end_date"
                                                                placeholder="Please Select Ending Date" type="date" />
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="form-group">
                                                            <label for="description">Description</label>
                                                            <textarea cols="30" rows="10" name="description[]"
                                                                v-model="projectUpdate.description" class="form-control"
                                                                placeholder="Description"></textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div v-if="this.addMoreDBProject == true" class="row no-gutters"
                                    id="ProjectFieldsContainer">
                                    <div class="col-12 ProjectSection">
                                        <div id='subForm' class="subForm">
                                            <div class="text-right">
                                                <a @click="removeAddMoreArrayProject(index)">
                                                    <i class="fas fa-times"></i>
                                                </a>
                                            </div>
                                            <div class="subFormFields">
                                                <div class="row">
                                                    <div class="col-12 col-md-6">
                                                        <div class="form-group">
                                                            <label for="projectName">Project Name</label>
                                                            <input name="projectName[]" class="form-control" value=""
                                                                v-model="project_push_array.name"
                                                                placeholder="Enter Project Name" type="text" />
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-md-6">
                                                        <div class="form-group">
                                                            <label for="projectLink">Link</label>
                                                            <input name="projectLink[]" class="form-control" value=""
                                                                v-model="project_push_array.link"
                                                                placeholder="Enter Link" type="url" />
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-md-6">
                                                        <div class="form-group">
                                                            <label for="startingDate">Starting Date</label>
                                                            <input name="startingDate[]" class="form-control" value=""
                                                                v-model="project_push_array.start_date"
                                                                placeholder="Please Select Starting Date" type="date" />
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-md-6">
                                                        <div class="form-group">
                                                            <label for="endingDate">Ending Date</label>
                                                            <input name="endingDate[]" class="form-control" value=""
                                                                v-model="project_push_array.end_date"
                                                                placeholder="Please Select Ending Date" type="date" />
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="form-group">
                                                            <label for="description">Description</label>
                                                            <textarea cols="30" rows="10" name="description[]"
                                                                v-model="project_push_array.description"
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
                                        <a v-if="this.addMoreDBProject" @click="addToProjectRecord()">
                                            <i class="fas fa-plus mr-1"></i> Add another Project
                                        </a>
                                        <a v-else @click="addMoreProject()">
                                            <i class="fas fa-plus mr-1"></i> Add another Project
                                        </a>
                                    </div>
                                </div>
                                <div class="row mt-4">
                                    <div class="col-lg-12 modelBtnContainer">
                                        <button @click.prevent="updateProject()"
                                            class="positiveBtn modelBtn mr-1">Update</button>
                                        <button class="negativeBtn modelBtn ml-1" data-dismiss="modal"
                                            @click.prevent="clearProjectArray()">Cancel</button>
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
        <div class="modal fade QualificationModal" id="QualificationModal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg">
                <div class="modal-content p-0">
                    <div class="container edit-modal pb-5">
                        <h3 class="my-4">Update</h3>
                        <section class="modal-form">

                            <div class="row no-gutters" id="QualificationFieldsContainer">
                                <div class="col-12 QualificationSection">
                                    <div class="subForm">
                                        <div class="modal-title  my-3">
                                            <div class="mr-2 title-effect"></div>
                                            <h4 class="m-0 modal-title-text">Qualification</h4>
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
        <!-- SocialMediaModal modal -->
        <!-- <div class="modal fade DesireJobModa" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg">
                <div class="modal-content p-0">
                    <div class="container edit-modal pb-5">
                        <h3 class="my-4">Update</h3>
                        <section class="modal-form">
                            <div class="row no-gutters">
                                <div class="col-12">
                                    <div class="subForm">
                                        <div class="modal-title  my-3">
                                            <div class="mr-2 title-effect"></div>
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
        </div> -->
        <!-- Modal SocialMediaModal  -->
        <!-- DesireJobModal modal -->
        <!-- <div class="modal fade DesireJobModal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg">
                <div class="modal-content p-0">
                    <div class="container edit-modal pb-5">
                        <h3 class="my-4">Update</h3>
                        <section class="modal-form">
                            <div class="row no-gutters" id="subFormFieldsContainer">
                                <div class="col-12">
                                    <div id='subForm' class="subForm">
                                        <div class="modal-title  my-3">
                                            <div class="mr-2 title-effect"></div>
                                            <h4 class="m-0 modal-title-text">Desired Job</h4>
                                        </div>
                                        <div class="subFormFields">
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <label class="modelLabel" for="currentStatus">Looking for
                                                        Job</label>
                                                    <div class="form-group m-0">
                                                        <label for="currentStatus">Yes</label>
                                                        <input class="mx-1" name="currentStatus" type="radio" value="1"
                                                            v-model="profile.is_looking_for_job">
                                                        <label for="currentStatus">No</label>
                                                        <input class="mx-1" name="currentStatus" type="radio" value="0"
                                                            v-model="profile.is_looking_for_job">
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="row mt-3" v-if="profile.is_looking_for_job == 1">
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label for="location">Location</label>
                                                        <input name="location" class="form-control"
                                                            placeholder="Enter Location"
                                                            v-model="profile.looking_for_job_location" />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row mt-3" v-if="profile.is_looking_for_job == 1">
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label for="expectedSalary">Expected Salary</label>
                                                        <input type="number" name="expectedSalary" class="form-control"
                                                            placeholder="Enter Expected Salary"
                                                            v-model="profile.looking_for_job_expected_salary" />
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label for="joiningDate">Joining From</label>
                                                        <input name="joiningDate" class="form-control"
                                                            v-model="profile.looking_for_job_when"
                                                            placeholder="Please Select" type="date" />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row mt-3" v-if="profile.is_looking_for_job == 1">
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label for="position">Position</label>
                                                        <input name="department" class="form-control"
                                                            v-model="profile.looking_for_job_position"
                                                            placeholder="Enter Department" type="text" />
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label for="shift">Department</label>
                                                        <input name="shift" class="form-control"
                                                            placeholder="Enter Shift"
                                                            v-model="profile.looking_for_job_department" type="text" />
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-4">
                                <div class="col-lg-12 modelBtnContainer">
                                    <button class="positiveBtn modelBtn mr-1"
                                        @click.prevent="updateDesireJob()">Update</button>
                                    <button class="negativeBtn modelBtn ml-1" data-dismiss="modal"
                                        @click.prevent="clearDesireJob()">Cancel</button>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
        </div> -->
        <!-- Modal DesireJobModal  -->
    </div>
</template>
<script>
    import axios from 'axios';
    import WebsiteNavbar from '../partials/navbar.vue';
    import CandidateNavbar from '../partials/CandidateNavbar.vue';
    export default {
        data() {
            return {
                profile: '',
                basic_information_record: {
                    full_name: '',
                    gender: '',
                    city: '',
                    address: '',
                    data_of_birth: '',
                    cnic: '',
                    zipcode: '',
                    phone: '',
                    email: '',
                    country: 'pakistan',
                    bio: '',
                },
                errors_basic_information: [],
                education_record: [],
                education_push_array: {
                    // school_type: '',
                    school_name: '',
                    start_date: '',
                    end_date: '',
                    department: '',
                },
                loadData: false,
                addMoreDBEducation: false,
                addMoreDBLanguage: false,
                language_push_array: {
                    name: '',
                    level: '',
                },
                addMoreDBAward: false,
                award_push_array: {
                    name: '',
                    date: '',
                },
                addMoreDBSkill: false,
                skill_push_array: {
                    name: '',
                    date: '',
                },
                addMoreDBWorkExperience: false,
                work_experience_push_array: {
                    company_name: '',
                    designation: '',
                    end_date: '',
                    is_working_currently: '',
                    start_date: '',
                },
                addMoreDBProject: false,
                project_push_array: {
                    name: '',
                    link: '',
                    start_date: '',
                    end_date: '',
                    description: '',
                },
                isWorkingCurrently: true,
                skills_exist: false,
            }
        },
        components: {
            WebsiteNavbar,
            CandidateNavbar,
        },
        mounted() {
            this.openProfileTab()
            this.closeProfileTab()
        },
        created() {
            this.getCandidateDashboardData()
        },
        methods: {
            getCandidateDashboardData() {
                axios.get('get-dashboard-profile')
                    .then((response) => {
                        this.profile = response.data.candidate
                        this.basic_information_record.full_name = response.data.candidate.full_name
                        this.basic_information_record.gender = response.data.candidate.gender
                        this.basic_information_record.city = response.data.candidate.city
                        this.basic_information_record.address = response.data.candidate.address
                        this.basic_information_record.cnic = response.data.candidate.cnic
                        this.basic_information_record.date_of_birth = response.data.candidate.date_of_birth
                        this.basic_information_record.zipcode = response.data.candidate.zipcode
                        this.basic_information_record.phone = response.data.candidate.phone
                        this.basic_information_record.email = response.data.candidate.email
                        this.basic_information_record.country = response.data.candidate.country
                        this.basic_information_record.bio = response.data.candidate.bio
                        this.basic_information_record.is_looking_for_job = response.data.candidate
                            .is_looking_for_job
                        this.basic_information_record.looking_for_job_department = response.data.candidate
                            .looking_for_job_departmentx
                        this.basic_information_record.looking_for_job_expected_salary = response.data.candidate
                            .looking_for_job_expected_salary
                        this.basic_information_record.looking_for_job_location = response.data.candidate
                            .looking_for_job_location
                        this.basic_information_record.looking_for_job_position = response.data.candidate
                            .looking_for_job_position
                        this.basic_information_record.looking_for_job_when = response.data.candidate
                            .looking_for_job_when
                        this.skills_exist = response.data.skill_exist
                    });
            },
            updateBasicInformation() {
                swal.fire({
                    text: 'Please Wait...',
                    didOpen: () => {
                        Swal.showLoading()
                    },
                })
                var $basicinformationForm = $('#basicinformationForm');
                var data = new FormData(basicinformationForm);
                axios.post('/update/basicinformation', data)
                    .then((res) => {
                        if (res.data.success == false) {
                            this.errors_basic_information = res.data.errors
                            Swal.close()
                        } else {
                            this.errors = []
                            this.getCandidateDashboardData()
                            $('#basicInfoModal').modal('hide')
                            Swal.close()
                            Swal.fire({
                                icon: 'success',
                                timer: 1500,
                                title: 'Updated',
                                text: 'Basic Information Updated Successfully',
                            });
                        }
                    })
                    .catch((err) => {

                    })
            },
            addMoreEducation() {
                if(this.profile.candidate_education.length == 3){
                    Swal.fire({
                        icon: 'error',
                        title: 'limit',
                        text: 'Education Already Exist!🥺',
                    })
                    this.addMoreDBEducation = false
                }else{
                    this.addMoreDBEducation = true
                }
            },
            clearEducationArray() {
                this.getCandidateDashboardData()
                this.education_push_array = {
                    school_name: '',
                    start_date: '',
                    end_date: '',
                    department: '',
                }
                this.addMoreDBEducation = false
            },
            updateEducation() {
                swal.fire({
                    text: 'Please Wait...',
                    didOpen: () => {
                        Swal.showLoading()
                    },
                })
                if(this.profile.candidate_education.length != 3){
                    if (this.education_push_array.school_name) {
                        this.profile.candidate_education.push({
                            // school_type: this.education_push_array.school_type,
                            school_name: this.education_push_array.school_name,
                            start_date: this.education_push_array.start_date,
                            end_date: this.education_push_array.end_date,
                            department: this.education_push_array.department,
                        })
                    }
                }
                axios.post('/update/education', this.profile.candidate_education)
                .then((res) => {
                    if (res.data.success == false) {
                        this.errors = res.data.errors
                        Swal.close()
                    } else {
                        this.errors = []
                        this.getCandidateDashboardData()
                        $('#EducationModal').modal('hide')
                        Swal.close()
                        Swal.fire({
                            icon: 'success',
                            title: 'Updated',
                            text: 'Candidate Updated Successfully',
                            timer: 1500
                        })
                        this.education_push_array = {
                            school_name: '',
                            start_date: '',
                            end_date: '',
                            department: '',
                        }
                        this.addMoreDBEducation = false
                    }
                })
            },
            addToEducationRecord() {
                if(this.profile.candidate_education.length == 3){
                    Swal.fire({
                        icon: 'error',
                        title: 'limit',
                        text: 'Limit Exceeded',
                    })
                }else{
                    if (this.education_push_array.school_name == '') {
                        Swal.fire({
                            icon: 'error',
                            title: 'Oops...',
                            text: 'Please Fill!',
                        })
                        this.addMoreDBEducation = false
                        return false;
                    } else {
                        if (this.existEducationArray() == true) {
                            this.profile.candidate_education.push({
                                school_name: this.education_push_array.school_name,
                                start_date: this.education_push_array.start_date,
                                end_date: this.education_push_array.end_date,
                                department: this.education_push_array.department,
                            })
                            if(this.profile.candidate_education.length == 3){
                                Swal.fire({
                                    icon: 'error',
                                    title: 'Limit Exceeded',
                                })
                                this.addMoreDBEducation = false
                                return false;
                            }
                        } else {
                            Swal.fire({
                                icon: 'error',
                                title: 'Oops...',
                                text: 'Education Already Exist!🥺',
                            })
                            this.addMoreDBEducation = true
                        }
                    }
                }
            },
            deleteEducationArray(index) {
                this.$delete(this.profile.candidate_education, index);
                this.education_push_array = {
                    school_name: '',
                    start_date: '',
                    end_date: '',
                    department: '',
                }
            },
            existEducationArray() {
                if (this.profile.candidate_education.find(item => item.school_name === this.education_push_array.school_name)) {
                    return false;
                } else {
                    return true;
                }
            },
            removeAddMoreArrayEducation() {
                this.addMoreDBEducation = false
                this.education_push_array = {
                    school_name: '',
                    start_date: '',
                    end_date: '',
                    department: '',
                }
            },
            addMoreLanguage() {
                if(this.profile.candidate_language.length == 5){
                    Swal.fire({
                        icon: 'error',
                        title: 'Limit Exceeded',
                    })
                    this.addMoreDBLanguage = false
                }else{
                    this.addMoreDBLanguage = true
                }
            },
            clearLanguageArray() {
                this.getCandidateDashboardData()
                this.language_push_array = {
                    name: '',
                    level: '',
                }
                this.addMoreDBLanguage = false
            },
            updateLanguage() {
                swal.fire({
                    text: 'Please Wait...',
                    didOpen: () => {
                        Swal.showLoading()
                    },
                })
                if(this.profile.candidate_language.length != 5){
                    if(this.language_push_array.name) {
                        this.profile.candidate_language.push({
                            name: this.language_push_array.name,
                            level: this.language_push_array.level,
                        })
                        this.addMoreDBLanguage = false
                        this.language_push_array = {
                            name: '',
                            level: '',
                        }
                    }
                }
                axios.post('/update/language', this.profile.candidate_language)
                    .then((res) => {
                        if (res.data.success == false) {
                            this.errors = res.data.errors
                            Swal.close()
                        } else {
                            this.errors = []
                            this.getCandidateDashboardData()
                            $('#LanguagesModal').modal('hide')
                            Swal.close()
                            Swal.fire({
                                icon: 'success',
                                title: 'Updated',
                                text: 'Candidate Updated Successfully',
                                timer: 1500
                            })
                            this.language_push_array = {
                                name: '',
                                level: '',
                            }
                            this.addMoreDBLanguage = false
                        }
                    })
            },
            addToLanguageRecord() {
                if(this.profile.candidate_language.length == 5){
                    Swal.fire({
                        icon: 'error',
                        title: 'Limit Exceeded',
                    })
                }else{
                    if (this.language_push_array.name == '') {
                        Swal.fire({
                            icon: 'error',
                            title: 'Oops...',
                            text: 'Please Fill!',
                        })
                        return false
                    } else {
                        if (this.existLanguageArray() == true) {
                            this.profile.candidate_language.push({
                                name: this.language_push_array.name,
                                level: this.language_push_array.level,
                            })
                            if(this.profile.candidate_language.length == 5){
                                Swal.fire({
                                    icon: 'error',
                                    title: 'Limit Exceeded',
                                })
                                this.addMoreDBLanguage = false
                                return false;
                            }
                        } else {
                            Swal.fire({
                                icon: 'error',
                                title: 'Oops...',
                                text: 'Language Already Exist!🥺',
                            })
                        }
                    }
                }
            },
            deleteLanguageArray(index) {
                this.$delete(this.profile.candidate_language, index);
                this.language_push_array = {
                    name: '',
                    level: '',
                }
            },
            existLanguageArray() {
                if (this.profile.candidate_language.find(item => item.name === this.language_push_array.name)) {
                    return false;
                } else {
                    return true;
                }
            },
            removeAddMoreArrayLanguage() {
                this.addMoreDBLanguage = false
                this.language_push_array = {
                    name: '',
                    level: '',
                }
            },
            clearAwardArray() {
                this.getCandidateDashboardData()
                this.award_push_array = {
                    name: '',
                    date: '',
                }
                this.addMoreDBAward = false
            },
            addMoreAward() {
                if(this.profile.candidate_awards.length == 3){
                    Swal.fire({
                        icon: 'error',
                        title: 'Limit Exceeded',
                    })
                    this.addMoreDBAward = false
                }else{
                    this.addMoreDBAward = true
                }
            },
            updateAward() {
                swal.fire({
                    text: 'Please Wait...',
                    didOpen: () => {
                        Swal.showLoading()
                    },
                })
                if(this.profile.candidate_awards.length != 3){
                    if (this.award_push_array.name) {
                        this.profile.candidate_awards.push({
                            name: this.award_push_array.name,
                            date: this.award_push_array.date,
                        })
                        this.addMoreDBAward = false
                        this.award_push_array = {
                            name: '',
                            date: '',
                        }
                    }
                }
                axios.post('/update/award', this.profile.candidate_awards)
                    .then((res) => {
                        if (res.data.success == false) {
                            this.errors = res.data.errors
                            Swal.close()
                        } else {
                            this.errors = []
                            this.getCandidateDashboardData()
                            Swal.close()
                            Swal.fire({
                                icon: 'success',
                                title: 'Updated',
                                text: 'Candidate Updated Successfully',
                                timer: 1500
                            })
                            $('#AwardModal').modal('hide')
                            this.award_push_array = {
                                name: '',
                                date: '',
                            }
                            this.addMoreDBAward = false
                        }
                    })
            },
            addToAwardRecord() {
                if(this.profile.candidate_awards.length == 3){
                    Swal.fire({
                        icon: 'error',
                        title: 'Limit Exceeded',
                    })
                }else{
                    if (this.award_push_array.name == '') {
                        Swal.fire({
                            icon: 'error',
                            title: 'Oops...',
                            text: 'Please Fill!',
                        })
                        return false
                    } else {
                        if (this.existAwardArray() == true) {
                            this.profile.candidate_awards.push({
                                name: this.award_push_array.name,
                                date: this.award_push_array.date,
                            })
                            if(this.profile.candidate_awards.length == 3){
                                Swal.fire({
                                    icon: 'error',
                                    title: 'You can only add 3 awards',
                                })    
                                this.addMoreDBAward = false
                                return false;
                            }else{
                                this.award_push_array = {
                                    name: '',
                                    date: '',
                                }
                            }
                        } else {
                            Swal.fire({
                                icon: 'error',
                                title: 'Oops...',
                                text: 'Award Already Exist!🥺',
                            })
                        }
                    }
                }
                
            },
            deleteAwardArray(index) {
                this.$delete(this.profile.candidate_awards, index);
                this.award_push_array = {
                    name: '',
                    date: '',
                }
            },
            existAwardArray() {
                if (this.profile.candidate_awards.find(item => item.name === this.award_push_array.name)) {
                    return false;
                } else {
                    return true;
                }
            },
            removeAddMoreArrayAward() {
                this.addMoreDBAward = false
                this.award_push_array = {
                    name: '',
                    date: '',
                }
            },
            addMoreSkill() {
                if(this.profile.candidate_skills.length == 10){
                    Swal.fire({
                        icon: 'error',
                        title: 'Limit Exceeded',
                    })
                    this.addMoreDBSkill = false
                }else{
                    this.addMoreDBSkill = true
                }
            },
            clearSkillArray() {
                this.getCandidateDashboardData()
                this.skill_push_array = {
                    name: '',
                    level: '',
                }
                this.addMoreDBSkill = false
            },
            updateSkill() {
                swal.fire({
                    text: 'Please Wait...',
                    didOpen: () => {
                        Swal.showLoading()
                    },
                })
                if(this.profile.candidate_skills.length != 10){
                    if (this.skill_push_array.name) {
                        this.profile.candidate_skills.push({
                            name: this.skill_push_array.name,
                            level: this.skill_push_array.level,
                        })
                        this.addMoreDBSkill = false
                        this.skill_push_array = {
                            name: '',
                            level: '',
                        }
                    }
                }
                axios.post('/update/skill', this.profile.candidate_skills)
                .then((res) => {
                    if (res.data.success == false) {
                        this.errors = res.data.errors
                        Swal.close()
                    } else {
                        this.errors = []
                        this.getCandidateDashboardData()
                        Swal.close()
                        Swal.fire({
                            icon: 'success',
                            title: 'Updated',
                            text: 'Candidate Updated Successfully',
                            timer: 1500
                        })
                        $('#SkillsModal').modal('hide')
                        this.skill_push_array = {
                            name: '',
                            level: '',
                        }
                        this.addMoreDBSkill = false
                    }
                })
            },
            addToSkillRecord() {
                if(this.profile.candidate_language.length == 10){
                    Swal.fire({
                        icon: 'error',
                        title: 'Limit Exceeded',
                    })
                }else{
                    if (this.skill_push_array.name == '') {
                        Swal.fire({
                            icon: 'error',
                            title: 'Oops...',
                            text: 'Please Fill!',
                        })
                        return false
                    } else {
                        if (this.existSkillArray() == true) {
                            this.profile.candidate_skills.push({
                                name: this.award_push_array.name,
                                level: this.award_push_array.level,
                            })
                            if(this.profile.candidate_skills.length == 10){
                                Swal.fire({
                                    icon: 'error',
                                    title: 'Limit Exceeded',
                                })
                                this.addMoreDBSkill = false
                                return false;
                            }
                            this.skill_push_array = {
                                name: '',
                                level: '',
                            }
                        } else {
                            Swal.fire({
                                icon: 'error',
                                title: 'Oops...',
                                text: 'Skill Already Exist!🥺',
                            })
                        }
                    }
                }
            },
            deleteSkillArray(index) {
                this.$delete(this.profile.candidate_skills, index);
                this.skill_push_array = {
                    name: '',
                    level: '',
                }
            },
            existSkillArray() {
                if (this.profile.candidate_skills.find(item => item.name === this.skill_push_array.name)) {
                    return false;
                } else {
                    return true;
                }
            },
            removeAddMoreArraySkill() {
                this.addMoreDBSkill = false
                this.skill_push_array = {
                    name: '',
                    level: '',
                }
            },
            workingCurrentlyYes() {
                this.isWorkingCurrently = true
                this.profile.job_end_date = ''
                this.profile.job_start_date = ''
                this.profile.current_position = ''
                this.profile.current_position = ''
                this.profile.no_of_persons_managed = ''
                this.profile.current_working_company = ''
                this.profile.current_salary = ''
            },
            workingCurrentlyNo() {
                this.isWorkingCurrently = false
            },
            updateCurrentJob() {
                swal.fire({
                    text: 'Please Wait...',
                    didOpen: () => {
                        Swal.showLoading()
                    },
                })
                axios.post('/update/current-job', {
                        isWorkingCurrently: this.profile.is_working_currently,
                        job_end_date: this.profile.job_end_date,
                        job_start_date: this.profile.job_start_date,
                        current_position: this.profile.current_position,
                        current_position: this.profile.current_position,
                        no_of_persons_managed: this.profile.no_of_persons_managed,
                        current_working_company: this.profile.current_working_company,
                        current_salary: this.profile.current_salary
                    })
                    .then((res) => {
                        if (res.data.success == false) {
                            this.errors = res.data.errors
                            Swal.close()
                        } else {
                            this.errors = []
                            this.getCandidateDashboardData()
                            Swal.close()
                            Swal.fire({
                                icon: 'success',
                                title: 'Updated',
                                text: 'Candidate Updated Successfully',
                                timer: 1500
                            })
                            $('#CurrentJobModal').modal('hide')
                            this.skill_push_array = {
                                name: '',
                                level: '',
                            }
                            this.addMoreDBSkill = false
                        }
                    })
            },
            addMoreWorkExperience() {
                if(this.profile.candidate_experience.length == 3){
                    Swal.fire({
                        icon: 'error',
                        title: 'Limit Exceeded',
                    })
                    this.addMoreDBWorkExperience = false
                }else{
                    this.addMoreDBWorkExperience = true
                }
            },
            clearWorkExperienceArray() {
                this.getCandidateDashboardData()
                this.work_experience_push_array = {
                    company_name: '',
                    designation: '',
                    end_date: '',
                    is_working_currently: '',
                    start_date: '',
                }
                this.addMoreDBWorkExperience = false
            },
            updateWorkExperience() {
                swal.fire({
                    text: 'Please Wait...',
                    didOpen: () => {
                        Swal.showLoading()
                    },
                })
                if(this.profile.candidate_experience.length != 3){
                    if (this.work_experience_push_array.company_name) {
                        this.profile.candidate_experience.push({
                            company_name: this.work_experience_push_array.company_name,
                            designation: this.work_experience_push_array.designation,
                            end_date: this.work_experience_push_array.end_date,
                            is_working_currently: this.work_experience_push_array.is_working_currently,
                            start_date: this.work_experience_push_array.start_date,
                        })
                        this.addMoreDBWorkExperience = false
                        this.work_experience_push_array = {
                            company_name: '',
                            designation: '',
                            end_date: '',
                            is_working_currently: '',
                            start_date: '',
                        }
                    }
                }
                axios.post('/update/experience', this.profile.candidate_experience)
                    .then((res) => {
                        if (res.data.success == false) {
                            this.errors = res.data.errors
                            Swal.close()
                        } else {
                            this.errors = []
                            this.getCandidateDashboardData()
                            Swal.close()
                            Swal.fire({
                                icon: 'success',
                                title: 'Updated',
                                text: 'Experience Updated Successfully',
                                timer: 1500
                            })
                            $('#WorkExperienceModal').modal('hide')
                            this.work_experience_push_array = {
                                company_name: '',
                                designation: '',
                                end_date: '',
                                is_working_currently: '',
                                start_date: '',
                            }
                            this.addMoreDBWorkExperience = false
                        }
                    })
            },
            addToWorkExperienceRecord() {
                if(this.profile.candidate_experience.length == 3){
                    Swal.fire({
                        icon: 'error',
                        title: 'Limit Exceeded',
                    })
                }else{
                    if (this.work_experience_push_array.company_name == '') {
                        Swal.fire({
                            icon: 'error',
                            title: 'Oops...',
                            text: 'Please Fill!',
                        })
                        return false
                    } else {
                        if (this.existWorkExperienceArray() == true) {
                            this.profile.candidate_experience.push({
                                company_name: this.work_experience_push_array.company_name,
                                designation: this.work_experience_push_array.designation,
                                end_date: this.work_experience_push_array.end_date,
                                is_working_currently: this.work_experience_push_array.is_working_currently,
                                start_date: this.work_experience_push_array.start_date,
                            })
                            if(this.profile.candidate_experience.length == 3){
                                Swal.fire({
                                    icon: 'error',
                                    title: 'Limit Exceeded',
                                })
                                this.addMoreDBWorkExperience = false
                                return false;
                            }
                            this.work_experience_push_array = {
                                company_name: '',
                                designation: '',
                                end_date: '',
                                is_working_currently: '',
                                start_date: '',
                            }
                        } else {
                            Swal.fire({
                                icon: 'error',
                                title: 'Oops...',
                                text: 'Work Experience Already Exist!🥺',
                                timer: 1500
                            })
                        }
                    }
                }
            },
            deleteWorkExperienceArray(index) {
                this.$delete(this.profile.candidate_experience, index);
                this.work_experience_push_array = {
                    company_name: '',
                    designation: '',
                    end_date: '',
                    is_working_currently: '',
                    start_date: '',
                }
            },
            existWorkExperienceArray() {
                if (this.profile.candidate_experience.find(item => item.company_name === this.work_experience_push_array.company_name)) {
                    return false;
                } else {
                    return true;
                }
            },
            removeAddMoreArrayWorkExperience() {
                this.addMoreDBWorkExperience = false
                this.work_experience_push_array = {
                    company_name: '',
                    designation: '',
                    end_date: '',
                    is_working_currently: '',
                    start_date: '',
                }
            },
            addMoreProject() {
                if(this.profile.candidate_projects.length == 3){
                    Swal.fire({
                        icon: 'error',
                        title: 'Limit Exceeded',
                    })
                    this.addMoreDBProject = false
                }else{
                    this.addMoreDBProject = true
                }
            },
            clearProjectArray() {
                this.getCandidateDashboardData()
                this.project_push_array = {
                    name: '',
                    link: '',
                    start_date: '',
                    end_date: '',
                    description: '',
                }
                this.addMoreDBProject = false
            },
            updateProject() {
                swal.fire({
                    text: 'Please Wait...',
                    didOpen: () => {
                        Swal.showLoading()
                    },
                })
                if(this.profile.candidate_projects.length != 3){
                    if (this.project_push_array.name) {
                        this.profile.candidate_projects.push({
                            name: this.project_push_array.name,
                            link: this.project_push_array.link,
                            start_date: this.project_push_array.start_date,
                            end_date: this.project_push_array.end_date,
                            description: this.project_push_array.description,
                        })
                        this.addMoreDBProject = false
                        this.project_push_array = {
                            name: '',
                            link: '',
                            start_date: '',
                            end_date: '',
                            description: '',
                        }
                    }
                }
                axios.post('/update/project', this.profile.candidate_projects)
                    .then((res) => {
                        if (res.data.success == false) {
                            this.errors = res.data.errors
                            Swal.close()
                        } else {
                            this.errors = []
                            this.getCandidateDashboardData()
                            Swal.close()
                            Swal.fire({
                                icon: 'success',
                                title: 'Updated',
                                text: 'Candidate Updated Successfully',
                                timer: 1500
                            })
                            $('#ProjectsModal').modal('hide')
                            this.project_push_array = {
                                name: '',
                                link: '',
                                start_date: '',
                                end_date: '',
                                description: '',
                            }
                            this.addMoreDBProject = false
                        }
                    })
            },
            addToProjectRecord() {
                if(this.profile.candidate_projects.length == 3){
                    Swal.fire({
                        icon: 'error',
                        title: 'Limit Exceeded',
                    })
                }else{
                    if (this.project_push_array.name == '' && this.project_push_array.link == '') {
                        Swal.fire({
                            icon: 'error',
                            title: 'Oops...',
                            text: 'Please Fill!',
                        })
                        return false
                    } else {
                        if (this.existProjectArray() == true) {
                            this.profile.candidate_projects.push({
                                name: this.project_push_array.name,
                                link: this.project_push_array.link,
                                start_date: this.project_push_array.start_date,
                                end_date: this.project_push_array.end_date,
                                description: this.project_push_array.description,
                            })
                            if(this.profile.candidate_projects.length == 3){
                                Swal.fire({
                                    icon: 'error',
                                    title: 'Limit Exceeded',
                                })
                                this.addMoreDBProject = false
                                return false;
                            }
                            this.project_push_array = {
                                name: '',
                                link: '',
                                start_date: '',
                                end_date: '',
                                description: '',
                            }
                        } else {
                            Swal.fire({
                                icon: 'error',
                                title: 'Oops...',
                                text: 'Project Already Exist!🥺',
                            })
                        }
                    }
                }
            },
            deleteProjectArray(index) {
                this.$delete(this.profile.candidate_projects, index);
                this.project_push_array = {
                    name: '',
                    link: '',
                    start_date: '',
                    end_date: '',
                    description: '',
                }
            },
            existProjectArray() {
                if (this.profile.candidate_projects.find(item => item.name === this.project_push_array.name)) {
                    return false;
                } else {
                    return true;
                }
            },
            removeAddMoreArrayProject() {
                this.addMoreDBProject = false
                this.project_push_array = {
                    name: '',
                    link: '',
                    start_date: '',
                    end_date: '',
                    description: '',
                }
            },
            saveResume() {
                swal.fire({
                    text: 'Please Wait...',
                    didOpen: () => {
                        Swal.showLoading()
                    },
                })
                var $uploadresume = $('#uploadresume');
                var data = new FormData(uploadresume);
                axios.post('/update/resume-file', data)
                    .then((res) => {
                        if (res.data.success == true) {
                            Swal.close()
                            Swal.fire({
                                icon: 'success',
                                title: 'Updated',
                                text: 'Candidate Updated Successfully',
                                timer: 1500
                            })
                            this.getCandidateDashboardData()

                            this.errors = []

                        }
                        if (res.data.type == 'error') {
                            Swal.close()
                            Swal.fire({
                                icon: 'error',
                                title: 'Resume Not Uploaded',
                                text: 'File must be pdf & maximum size must be less then 2mb',
                                timer: 1500
                            })
                        }
                    })
            },
            saveCNIC() {
                swal.fire({
                    text: 'Please Wait...',
                    didOpen: () => {
                        Swal.showLoading()
                    },
                })
                var $uploadcnic = $('#uploadcnic');
                var data = new FormData(uploadcnic);
                axios.post('/update/cnic-file', data)
                    .then((res) => {
                        if (res.data.success == true) {
                            Swal.close()
                            Swal.fire({
                                icon: 'success',
                                title: 'Updated',
                                text: 'Candidate Updated Successfully',
                                timer: 1500
                            })
                            this.getCandidateDashboardData()
                            this.errors = []
                        }
                        if (res.data.type == 'error') {
                            Swal.close()
                            Swal.fire({
                                icon: 'error',
                                title: 'Cnic Not Uploaded',
                                text: 'File must be pdf with both front and back clear pics & maximum size must be less then 2mb',
                                timer: 1500
                            })
                        }
                    })
            },
            saveExperienceLetter() {
                swal.fire({
                    text: 'Please Wait...',
                    didOpen: () => {
                        Swal.showLoading()
                    },
                })
                var $uploadexperienceletter = $('#uploadexperienceletter');
                var data = new FormData(uploadexperienceletter);
                axios.post('/update/experience-letter-file', data)
                    .then((res) => {
                        if (res.data.success == true) {
                            Swal.close()
                            Swal.fire({
                                icon: 'success',
                                title: 'Updated',
                                text: 'Candidate Updated Successfully',
                                timer: 1500
                            })
                            this.getCandidateDashboardData()
                            this.errors = []
                        }
                        if (res.data.type == 'error') {
                            Swal.close()
                            Swal.fire({
                                icon: 'error',
                                title: 'Cnic Not Uploaded',
                                text: 'File must be pdf and maximum size must be less then 2mb',
                                timer: 1500
                            })
                        }
                    })
            },
            openBasicModal(){
                $('#basicInfoModal').modal('show')
            },
            openEducationModal(){
                $('#EducationModal').modal('show')
            },
            openLanguagesModal(){
                $('#LanguagesModal').modal('show')
            },
            openAwardModal(){
                $('#AwardModal').modal('show')
            },
            openCurrentJobModal(){
                $('#CurrentJobModal').modal('show')
            },
            openWorkExperienceModal(){
                $('#WorkExperienceModal').modal('show')
            },
            openSkillsModal(){
                $('#SkillsModal').modal('show')
            },
            openProjectModals(){
                $('#ProjectsModal').modal('show')
            },
            // updateDesireJob() {
            //     axios.post('/update/desire-job', {
            //             is_looking_for_job: this.profile.is_looking_for_job,
            //             looking_for_job_department: this.profile.looking_for_job_department,
            //             looking_for_job_expected_salary: this.profile.looking_for_job_expected_salary,
            //             looking_for_job_location: this.profile.looking_for_job_location,
            //             looking_for_job_position: this.profile.looking_for_job_position,
            //             looking_for_job_when: this.profile.looking_for_job_when,
            //         })
            //         .then((res) => {
            //             if (res.data.success == false) {
            //                 this.errors = res.data.errors
            //             } else {
            //                 this.errors = []
            //                 this.getCandidateDashboardData()
            //                 $('#basicInfoModal').modal('hide')
            //                 Swal.fire({
            //                     icon: 'success',
            //                     title: 'Updated',
            //                     text: 'Candidate Updated Successfully',
            //                 })
            //                 this.skill_push_array = {
            //                     name: '',
            //                     level: '',
            //                 }
            //                 this.addMoreDBSkill = false
            //             }
            //         })
            //         .catch((err) => {

            //         })
            // },
            openProfileTab() {
                document.getElementById("Profile-tab-mobile-nav").style.left = "0%"
            },
            closeProfileTab() {
                document.getElementById("Profile-tab-mobile-nav").style.left = "-100%"
            }
        },
    };

</script>
<style>
    @media (min-width: 1200px) {
        .container {
            max-width: 1100px !important;
        }
        .profile-label {
            width: 140px;
        }
    }

</style>
