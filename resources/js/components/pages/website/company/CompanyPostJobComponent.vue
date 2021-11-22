<template>
    <div>
        <WebsiteNavbar />
        <CompanyNavbar />
        <div class="container cont-flex user-profile-container PostJobContainer">
            <div class="condition-search-feilds">
                <div class="px-2">
                    <h1 class="post_new_job_title">Post New Job</h1>
                    <p class="post_new_job_descrp">
                        To add more jobs in your company profile, Please click the Add more jobs button and after that
                        form
                        will appear in front of you and you have to fill this form with all the necessary requirements
                        and
                        then click on update, your job will be posted in your company dashboard.
                    </p>
                </div>
                <div class="post_new_job_anker">
                    <a href=".PostNewJobModal" data-toggle="modal" data-target=".PostNewJobModal">+ Add More
                        Jobs</a>
                    <p>Showing 5 results of 123,456 jobs</p>
                </div>

                <!-- Job List Wrap Start -->
                <div class="job-list-wrap">
                    <!-- Job List Start -->
                    <div class="job-list" v-for="(item, index) in jobs.data" :key="index">
                        <div class="company-logo col-auto py-2">
                            <img :src="'/storage/images/companies/'+item.bannar" alt="Company Logo" />
                            <span class="company-h line-clamp-1">Ahmad</span>
                        </div>
                        <div class="job-list-content col">
                            <div class="job-header">
                                <h6 class="job-title mb-0">{{item.title}}</h6>
                                <!-- <i class="fa fa-star" aria-hidden="true"></i>
                                             <i class="fa fa-star" aria-hidden="true"></i>
                                             <i class="fa fa-star" aria-hidden="true"></i>
                                             <i class="fa fa-star" aria-hidden="true"></i>
                                             <i class="fa fa-star" aria-hidden="true"></i> -->

                                <div class="d-flex align-items-center">
                                    <span class="job-post-date"><timeago :datetime="item.created_at"></timeago></span>
                                    <i class="far fa-heart"></i>
                                </div>
                            </div>

                            <p class="job-description">{{item.job_description}}</p>
                            <div class="job-content-wrap">
                                <div class="job-dynamic-values">
                                    <ul>
                                        <li>
                                            <img src="/website/assets/images/calendar-job.svg" alt="img">
                                            <span>{{ item.created_at | moment("YYYY-MM-DD")}}</span>
                                        </li>
                                        <li>
                                            <img src="/website/assets/images/experience-job.svg" alt="">
                                            <span>{{item.experience}}</span>
                                        </li>
                                    </ul>
                                    <ul>
                                        <li>
                                            <img src="/website/assets/images/money-job.svg" alt="">
                                            <span>{{item.salary_range}}</span>
                                        </li>
                                        <li>
                                            <img height="16px" width="10px" style="margin:0px 3px;"
                                                src="/website/assets/images/pin.svg" alt="img">
                                            <span>{{item.location}}</span>
                                        </li>
                                    </ul>
                                    <ul>
                                        <li>
                                            <img src="/website/assets/images/suitcase-job.svg" alt="">
                                            <span>{{item.shift}}</span>
                                        </li>
                                        <li>
                                            <img src="/website/assets/images/switch-job.svg" alt="">
                                            <span>{{item.job_type}}</span>
                                        </li>
                                    </ul>
                                </div>
                                <ul class="job-list-fav m-0">
                                    <li><a href="" class="job-post-ions"><i class="fas fa-trash-alt"></i></a></li>
                                    <li><a href="" class="job-post-ions"><i class="fas fa-edit"></i></a></li>
                                    <li>
                                        <router-link :to="{ name: 'JobDetail' }" data-toggle="collapse" class="job-post-ions">
                                        <i class="fas fa-eye"></i>
                                        </router-link>
                                    </li>
                                </ul>
                            </div>

                        </div>
                    </div>

                </div>
                <!-- Job List Wrap Start -->
                <!-- Pagination Start -->
                <div class="bottom-pagination">
                    <pagination :data="jobs" @pagination-change-page="getCompanyJobs"></pagination>
                </div>
                <!-- Pagination End -->
            </div>
            <div class="common-sidebar">
                <br><br>
                <div class="col p-0 p-md-2">
                    <div class="side-card h-300 shadow-sm">
                        <div class="side-card-title text-center text-white">For Queries</div>
                        <div class="side-card-body">
                            <p class="card-title">If you have any further queries, please contact us without any
                                hesitation.</p>
                            <ul class="social-btns center-block">
                                <li><button class="btn btn-whatsapp"><img
                                            src="/website/assets/images/whatsapp-quaries.svg"><span>+92 306 404
                                            1221</span></button></li>
                                <li><button class="btn btn-facebook"><img
                                            src="/website/assets/images/facebook-quaries.svg"><span>@BizBlanca</span></button>
                                </li>
                                <li><button class="btn btn-linkedin"><img
                                            src="/website/assets/images/linkdine-quaries.svg"><span>@BizBlanca</span></button>
                                </li>
                                <li><button class="btn btn-google"><img
                                            src="/website/assets/images/gmail-quaries.svg"><span>bizer@bizblanca.com</span></button>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="divider">
                        <hr />
                    </div>
                    <div class="side-card h-300 shadow-sm">
                        <div class="side-card-title text-center text-white">New Govt Jobs</div>
                        <div class="side-govtjobcard-body ">
                            <div class="gov-job-box">
                                <div class="govt-job-img col-auto p-0">
                                    <img
                                        src="https://upload.wikimedia.org/wikipedia/commons/e/ef/State_emblem_of_Pakistan.svg">
                                </div>
                                <div class="govt-job-list-content col px-2">
                                    <h6>BOP Galaxy Management Trainee Program</h6>
                                    <p class="mb-2">If you have any further queries, please contact us without any
                                        hesitation.</p>
                                </div>
                            </div>
                            <div class="gov-job-box">
                                <div class="govt-job-img col-auto p-0">
                                    <img
                                        src="https://upload.wikimedia.org/wikipedia/commons/e/ef/State_emblem_of_Pakistan.svg">
                                </div>
                                <div class="govt-job-list-content col px-2">
                                    <h6>Incharge Information Center</h6>
                                    <p class="mb-2">If you have any further queries, please contact us without any
                                        hesitation.</p>
                                </div>
                            </div>
                            <div class="gov-job-box">
                                <div class="govt-job-img col-auto p-0">
                                    <img
                                        src="https://upload.wikimedia.org/wikipedia/commons/e/ef/State_emblem_of_Pakistan.svg">
                                </div>
                                <div class="govt-job-list-content col px-2">
                                    <h6>Education Department KPK</h6>
                                    <p class="mb-2">If you have any further queries, please contact us without any
                                        hesitation.</p>
                                </div>
                            </div>
                            <div class="gov-job-box">
                                <div class="govt-job-img col-auto p-0">
                                    <img
                                        src="https://upload.wikimedia.org/wikipedia/commons/e/ef/State_emblem_of_Pakistan.svg">
                                </div>
                                <div class="govt-job-list-content col px-2">
                                    <h6>BOP Galaxy Management Trainee Program</h6>
                                    <p class="mb-2">If you have any further queries, please contact us without any
                                        hesitation.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="divider">
                        <hr />
                    </div>
                    <div class="side-card h-300 shadow-sm">
                        <div class="side-card-title text-center text-white">Top Rizer's Ranking</div>
                        <div class="side-card-body">
                            <div class="swiper bizer-ranking-slider">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <div class="wrapper">
                                            <div class="profile">
                                                <img src="https://images.unsplash.com/photo-1484186139897-d5fc6b908812?ixlib=rb-0.3.5&s=9358d797b2e1370884aa51b0ab94f706&auto=format&fit=crop&w=200&q=80%20500w"
                                                    class="thumbnail">
                                            </div>
                                            <h3 class="name">Natasha Anjum</h3>
                                            <p class="title">Laravel Developer</p>
                                            <div class="position-box">
                                                <img src="/website/assets/images/position-crown.svg">
                                                <h3 class="position-number">1st</h3>
                                            </div>
                                            <p class="description">I have learned a lot of things in my life but to be a
                                                Laravel developer has changed my life.</p>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="wrapper">
                                            <div class="profile">
                                                <img src="https://images.unsplash.com/photo-1484186139897-d5fc6b908812?ixlib=rb-0.3.5&s=9358d797b2e1370884aa51b0ab94f706&auto=format&fit=crop&w=200&q=80%20500w"
                                                    class="thumbnail">
                                            </div>
                                            <h3 class="name">Natasha Anjum</h3>
                                            <p class="title">Laravel Developer</p>
                                            <div class="position-box">
                                                <img src="/website/assets/images/position-crown.svg">
                                                <h3 class="position-number">2nd</h3>
                                            </div>
                                            <p class="description">I have learned a lot of things in my life but to be a
                                                Laravel developer has changed my life.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-pagination"></div>
                            </div>
                        </div>
                    </div>
                    <div class="divider">
                        <hr />
                    </div>
                    <div class="side-card h-300 shadow-sm">
                        <div class="side-card-title text-center text-white">FAQS</div>
                        <div class="side-card-body">
                            <div class="accordion-faq" id="accordionExample">
                                <div class="faq-card">
                                    <div class="faq-card-header" id="headingOne">
                                        <h5 class="mb-0">
                                            <button class="btn btn-block text-left faq-btn" type="button"
                                                data-toggle="collapse" data-target="#collapseOne" aria-expanded="true"
                                                aria-controls="collapseOne">
                                                <i class="fa fa-caret-right mr-2"></i>Q. What is BizBlanca?</button>
                                        </h5>
                                    </div>
                                    <div id="collapseOne" class="collapse fade" aria-labelledby="headingOne"
                                        data-parent="#accordionExample">
                                        <div class="faq-card-body">
                                            Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                            Lorem Ipsum has been the industry's standard dummy text ever since the
                                            1500s,
                                        </div>
                                    </div>
                                </div>
                                <div class="faq-card">
                                    <div class="faq-card-header" id="headingTwo">
                                        <h5 class="mb-0">
                                            <button class="btn  collapsed btn-block text-left faq-btn" type="button"
                                                data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false"
                                                aria-controls="collapseTwo">
                                                <i class="fa fa-caret-right mr-2"></i>Q. How BizBlanca works?
                                            </button>
                                        </h5>
                                    </div>
                                    <div id="collapseTwo" class="collapse fade" aria-labelledby="headingTwo"
                                        data-parent="#accordionExample">
                                        <div class="faq-card-body">
                                            Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                            Lorem Ipsum has been the industry's standard dummy text ever since the
                                            1500s,
                                        </div>
                                    </div>
                                </div>
                                <div class="faq-card">
                                    <div class="faq-card-header" id="headingTwo">
                                        <h5 class="mb-0">
                                            <button class="btn  collapsed btn-block text-left faq-btn" type="button"
                                                data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false"
                                                aria-controls="collapseTwo">
                                                <i class="fa fa-caret-right mr-2"></i>Q. What is BizBlanca mission?
                                            </button>
                                        </h5>
                                    </div>
                                    <div id="collapseTwo" class="collapse fade" aria-labelledby="headingTwo"
                                        data-parent="#accordionExample">
                                        <div class="faq-card-body">
                                            Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                            Lorem Ipsum has been the industry's standard dummy text ever since the
                                            1500s,
                                        </div>
                                    </div>
                                </div>
                                <div class="faq-card">
                                    <div class="faq-card-header" id="headingTwo">
                                        <h5 class="mb-0">
                                            <button class="btn  collapsed btn-block text-left faq-btn" type="button"
                                                data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false"
                                                aria-controls="collapseTwo">
                                                <i class="fa fa-caret-right mr-2"></i>Q. Why BizBlanca?
                                            </button>
                                        </h5>
                                    </div>
                                    <div id="collapseTwo" class="collapse fade" aria-labelledby="headingTwo"
                                        data-parent="#accordionExample">
                                        <div class="faq-card-body">
                                            Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                            Lorem Ipsum has been the industry's standard dummy text ever since the
                                            1500s,
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="divider">
                        <hr />
                    </div>
                    <div class="side-card h-300 shadow-sm">
                        <div class="side-card-title text-center text-white">Ads</div>
                        <div class="ads-side-card-body">
                            <div class="swiper ads-slider">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <img src="https://images.unsplash.com/photo-1484186139897-d5fc6b908812?ixlib=rb-0.3.5&s=9358d797b2e1370884aa51b0ab94f706&auto=format&fit=crop&w=200&q=80%20500w"
                                            class="ads-img">
                                    </div>
                                    <div class="swiper-slide">
                                        <img src="https://images.unsplash.com/photo-1484186139897-d5fc6b908812?ixlib=rb-0.3.5&s=9358d797b2e1370884aa51b0ab94f706&auto=format&fit=crop&w=200&q=80%20500w"
                                            class="ads-img">
                                    </div>
                                    <div class="swiper-slide">
                                        <img src="https://images.unsplash.com/photo-1484186139897-d5fc6b908812?ixlib=rb-0.3.5&s=9358d797b2e1370884aa51b0ab94f706&auto=format&fit=crop&w=200&q=80%20500w"
                                            class="ads-img">
                                    </div>
                                </div>
                                <div class="swiper-button-next"></div>
                                <div class="swiper-button-prev"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade PostNewJobModal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg">
                <form id="formData">
                    <div class="modal-content p-0">
                        <div class="container editModel pb-5">
                            <h3 class="my-4">Update</h3>
                            <section class="modelForm container p-0 p-md-2">
                                <div class="row no-gutters" id="subFormFieldsContainer">
                                    <div class="col-12">
                                        <div id='subForm' class="subForm">
                                            <div class="modelTitle my-3">
                                                <div class="mr-2 titleEffect"></div>
                                                <h4 class="m-0 modelTitleText">Add more Jobs</h4>
                                            </div>
                                            <div class="form-group">
                                                <label for="bannar"><span class="required_feild">*</span> Banner</label>
                                                <input class="form-control" style="padding:4px !important;height:40px;"
                                                    name="bannar" id="bannar" ref="bannar" type="file" />
                                                <small>
                                                    <span v-if="errors.bannar != null" class="text-danger">
                                                        {{errors.bannar[0]}}
                                                    </span>
                                                </small>
                                            </div>
                                            <div class="subFormFields">
                                                <div class="row">
                                                    <div class="col-12 col-md-6">
                                                        <div class="form-group">
                                                            <label for="job-title"><span class="required_feild">*</span>
                                                                Job Title</label>
                                                            <input type="text" id="job-title" name="job_title"
                                                                v-model="record.job_title" placeholder="Enter Job Title"
                                                                class="form-control" />
                                                            <small>
                                                                <span v-if="errors.job_title != null"
                                                                    class="text-danger">
                                                                    {{errors.job_title[0]}}
                                                                </span>
                                                            </small>
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-md-6">
                                                        <div class="form-group">
                                                            <label for="job_designation"><span
                                                                    class="required_feild">*</span> Job
                                                                Designation</label>
                                                            <input type="text" id="job_designation"
                                                                name="job_designation" v-model="record.job_designation"
                                                                placeholder="Enter Job Designation"
                                                                class="form-control" />
                                                            <small>
                                                                <span v-if="errors.job_designation != null"
                                                                    class="text-danger">
                                                                    {{errors.job_designation[0]}}
                                                                </span>
                                                            </small>
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-md-6">
                                                        <div class="form-group">
                                                            <label for="salary_type"><span
                                                                    class="required_feild">*</span> Salary Type</label>
                                                            <select name="salary_type" id="salary_type"
                                                                v-model="record.salary_type" class="form-control">
                                                                <option value="Please Select" default="true"
                                                                    selected="true" disabled="disabled">Please Select
                                                                </option>
                                                                <option value="Yearly">Yearly</option>
                                                                <option value="Monthly">Monthly</option>
                                                                <option value="Weekly">Weekly</option>
                                                                <option value="Hourly">Hourly</option>
                                                            </select>
                                                            <small>
                                                                <span v-if="errors.salary_type != null"
                                                                    class="text-danger">
                                                                    {{errors.salary_type[0]}}
                                                                </span>
                                                            </small>
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-md-6">
                                                        <div class="form-group">
                                                            <label for="salary_range"><span
                                                                    class="required_feild">*</span> Salary Range</label>
                                                            <select name="salary_range" id="salary_range"
                                                                v-model="record.salary_range" class="form-control">
                                                                <option value="Please Select" selected disabled>Please
                                                                    Select</option>
                                                                <option value="10000-20000">10000 - 20000 </option>
                                                                <option value="20000-30000">20000 - 30000</option>
                                                                <option value="30000-40000">30000 - 40000</option>
                                                                <option value="40000-50000">40000 - 50000</option>
                                                                <option value="50000-60000">50000 - 60000</option>
                                                                <option value="60000-70000">60000 - 70000</option>
                                                                <option value="70000-80000">70000 - 80000</option>
                                                                <option value="80000-90000">80000 - 90000</option>
                                                                <option value="90000-100000">90000 - 100000</option>
                                                                <option value="100000-150000">100000 - 150000</option>
                                                            </select>
                                                            <small>
                                                                <span v-if="errors.salary_range != null"
                                                                    class="text-danger">
                                                                    {{errors.salary_range[0]}}
                                                                </span>
                                                            </small>
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-md-6">
                                                        <div class="form-group">
                                                            <label for="shift"><span class="required_feild">*</span>
                                                                Shift</label>
                                                            <select name="shift" id="shift" v-model="record.shift"
                                                                class="form-control">
                                                                <option value="Please Select" selected disabled>Please
                                                                    Select</option>
                                                                <option value="Night">Night</option>
                                                                <option value="Morning">Morning</option>
                                                                <option value="Afternoon">Afternoon</option>
                                                                <option value="Please Select">Please Select</option>
                                                            </select>
                                                            <small>
                                                                <span v-if="errors.shift != null" class="text-danger">
                                                                    {{errors.shift[0]}}
                                                                </span>
                                                            </small>
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-md-6">
                                                        <div class="form-group">
                                                            <label for="">Experience<small> in years</small></label>
                                                            <input type="number" v-model="record.experience"
                                                                placeholder="Enter Experience" name="experience"
                                                                class="form-control" />
                                                            <small>
                                                                <span v-if="errors.experience != null"
                                                                    class="text-danger">
                                                                    {{errors.experience[0]}}
                                                                </span>
                                                            </small>
                                                        </div>

                                                    </div>
                                                    <div class="col-12 col-md-6">
                                                        <div class="form-group">
                                                            <label for="location"><span class="required_feild">*</span>
                                                                Location</label>
                                                            <input type="text" id="location"
                                                                placeholder="Enter Location" v-model="record.location"
                                                                name="location" class="form-control" />
                                                            <small>
                                                                <span v-if="errors.location != null"
                                                                    class="text-danger">
                                                                    {{errors.location[0]}}
                                                                </span>
                                                            </small>
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-md-6">
                                                        <div class="form-group">
                                                            <label for="job_type"><span class="required_feild">*</span>
                                                                Job Type</label>
                                                            <select name="job_type" id="job_type"
                                                                v-model="record.job_type" class="form-control">
                                                                <option value="Please Select" selected disabled>Please
                                                                    Select</option>
                                                                <option value="Full Time">Full Time</option>
                                                                <option value="Part Time">Part Time</option>
                                                                <option value="Internship">Internship</option>
                                                                <option value="Permenent">Permenent</option>
                                                                <option value="Contract">Contract</option>
                                                                <option value="Freelance">Freelance</option>
                                                            </select>
                                                            <small>
                                                                <span v-if="errors.job_type != null"
                                                                    class="text-danger">
                                                                    {{errors.job_type[0]}}
                                                                </span>
                                                            </small>
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-md-6">
                                                        <div class="form-group">
                                                            <label for="">Gender</label>
                                                            <select name="gender" v-model="record.gender"
                                                                class="form-control">
                                                                <option value="" disabled>select please</option>
                                                                <option selected value="Male">Male</option>
                                                                <option value="Female">Female</option>
                                                                <option value="Other">Other</option>
                                                            </select>
                                                            <small>
                                                                <span v-if="errors.gender != null" class="text-danger">
                                                                    {{errors.gender[0]}}
                                                                </span>
                                                            </small>
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-md-6">
                                                        <div class="form-group">
                                                            <label for="total_positions"><span
                                                                    class="required_feild">*</span> Total
                                                                Positions</label>
                                                            <input type="number" id="total_positions"
                                                                placeholder="Total Positions"
                                                                v-model="record.total_positions" name="total_positions"
                                                                class="form-control" />
                                                            <small>
                                                                <span v-if="errors.total_positions != null"
                                                                    class="text-danger">
                                                                    {{errors.total_positions[0]}}
                                                                </span>
                                                            </small>
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="form-group">
                                                            <label for="job_description"><span
                                                                    class="required_feild">*</span> Job
                                                                Description</label>
                                                            <textarea style="height: 100px;"
                                                                v-model="record.job_description"
                                                                placeholder="Enter Job Description"
                                                                name="job_description" id="job_description"
                                                                :maxlength="max" class="form-control"></textarea>
                                                            <div v-text="(max - record.job_description.length)"></div>
                                                            <small>
                                                                <span v-if="errors.job_description != null"
                                                                    class="text-danger">
                                                                    {{errors.job_description[0]}}
                                                                </span>
                                                            </small>
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="form-group">
                                                            <label for="job_responsibilities"><span
                                                                    class="required_feild">*</span> Job
                                                                Responsibilities</label>
                                                            <textarea style="height: 100px;" maxlength="255"
                                                                v-model="record.job_responsibilities"
                                                                placeholder="Enter Job Description"
                                                                name="job_responsibilities" id="job_responsibilities"
                                                                class="form-control"></textarea>
                                                            <small>
                                                                <span v-if="errors.job_responsibilities != null"
                                                                    class="text-danger">
                                                                    {{errors.job_responsibilities[0]}}
                                                                </span>
                                                            </small>
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="form-group">
                                                            <label for="qualification_level"><span
                                                                    class="required_feild">*</span> Qualifications &
                                                                Technicalities</label>
                                                            <select id="qualification_level" name="qualification_level"
                                                                v-model="record.qualification_level"
                                                                class="form-control">
                                                                <option value="Metric">Metric</option>
                                                                <option value="Intermediate">Intermediate</option>
                                                                <option value="Graduation">Graduation</option>
                                                                <option value="Masters">Masters</option>
                                                            </select>
                                                            <small>
                                                                <span v-if="errors.qualification_level != null"
                                                                    class="text-danger">
                                                                    {{errors.qualification_level[0]}}
                                                                </span>
                                                            </small>
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="form-group">
                                                            <label for="benefits"><span class="required_feild">*</span>
                                                                Benefits</label>
                                                            <textarea style="height: 100px;" maxlength="255"
                                                                v-model="record.benefits" placeholder="Enter Benefits"
                                                                id="benefits" name="benefits"
                                                                class="form-control"></textarea>
                                                            <small>
                                                                <span v-if="errors.benefits != null"
                                                                    class="text-danger">
                                                                    {{errors.benefits[0]}}
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
                                            @click.prevent="postJob()">Post</button>
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
    import axios from 'axios';
    import WebsiteNavbar from '../partials/navbar.vue';
    import CompanyNavbar from '../partials/CompanyNavbar.vue';
    import pagination from 'laravel-vue-pagination'
    export default {
        data() {
            return {
                record: {
                    bannar: '',
                    title: '',
                    job_designation: '',
                    job_description: '',
                    job_type: '',
                    shift: '',
                    industry: '',
                    department: '',
                    experience: '',
                    salary_type: '',
                    salary_range: '',
                    gender: '',
                    location: '',
                    total_position: '',
                    qualification_level: '',
                    benefits: '',
                    job_responsibilities: '',
                },
                max: 36,
                errors: [],
                jobs: {},
            };
        },
        components: {
            WebsiteNavbar,
            CompanyNavbar,
            pagination,
        },
        mounted() {
            var swiper = new Swiper(".bizer-ranking-slider", {
                pagination: {
                    el: ".swiper-pagination",
                },
            });
            var swiper = new Swiper(".ads-slider", {
                navigation: {
                    nextEl: ".swiper-button-next",
                    prevEl: ".swiper-button-prev",
                },
            });
        },
        created() {
            this.getCompanyJobs()
        },
        methods: {
            getCompanyJobs(page = 1) {
                axios.get('get-company-jobs?page=' + page)
                    .then((response) => {
                        this.jobs = response.data
                    });
            },
            postJob() {
                Swal.fire({
                    title: 'Are you sure to post this job?',
                    text: "After Yes you your job will be live",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    cancelButtonText: 'No, keep Edit!',
                    confirmButtonText: 'Yes, post it!'
                }).then((result) => {
                    if (result.isConfirmed) {
                        var $formData = $('#formData');
                        var data = new FormData(formData);
                        axios.post('/company/post-job', data)
                            .then((res) => {
                                if (res.data.success == false) {
                                    this.errors = res.data.errors
                                } else {
                                    this.getCompanyJobs()
                                    Swal.fire({
                                        icon: 'success',
                                        title: 'Posted!😎',
                                        text: 'Your Job is Now Live',
                                    })
                                    this.errors = []
                                    this.record = {
                                        bannar: '',
                                        title: '',
                                        job_designation: '',
                                        job_description: '',
                                        job_type: '',
                                        shift: '',
                                        industry: '',
                                        department: '',
                                        experience: '',
                                        salary_type: '',
                                        salary_range: '',
                                        gender: '',
                                        location: '',
                                        total_position: '',
                                        qualification_level: '',
                                        benefits: '',
                                        job_responsibilities: '',
                                    };
                                    this.$refs.bannar.value = null;
                                }
                            })
                    }
                })
            },
        },
    };

</script>
