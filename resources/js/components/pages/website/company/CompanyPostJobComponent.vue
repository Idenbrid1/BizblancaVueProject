<template>
    <div>
        <WebsiteNavbar />

        <div class="container cont-flex PostJobContainer">
            <div class="col-sm-12 col-md-8 col-lg-8 xs-padding pt-5">
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
                    <div class="job-list">
                        <div class="company-logo col-auto py-2">
                            <img src="https://www.bootdey.com/img/Content/avatar/avatar7.png" alt="Company Logo">
                            <span class="company-h">kashif </span>
                        </div>
                        <div class="job-list-content col">
                            <div class="job-header">
                                <h6 class="job-title mb-0">Data Analyst</h6>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                            </div>
                            <span class="job-post-date">20 hours ago</span>
                            <p class="job-description">As a Data Scientist, you will be in a central position as you
                                will be evangelizing data and our methodologies to other functional analysts and other
                                stakeholders in the company.</p>
                            <ul class="job-list-meta m-0 border-post">
                                <li><i class="fa fa-calendar"></i> Aug 23, 2021</li>
                                <li><i class="fal fa-address-card"></i> 2 Years</li>
                            </ul>
                            <ul class="job-list-meta m-0 border-post">
                                <li><i class="fal fa-money-bill-alt"></i> 80K to 100K</li>
                                <li><i class="fa fa-map-marker"></i> Lahore, Pakistan</li>
                            </ul>
                            <ul class="job-list-meta m-0">
                                <li><i class="fal fa-laptop-house"></i> Night Shift</li>
                                <li><i class="fal fa-clock"></i> Full Time</li>
                            </ul>
                            <ul class="job-list-fav m-0">
                                <li><a href="#" class="job-wishlist-btn"><i class="fa fa-heart"></i></a></li>
                                <li><a href="#" class="job-view-btn">View</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="job-list">
                        <div class="company-logo col-auto py-2">
                            <img src="https://www.bootdey.com/img/Content/avatar/avatar7.png" alt="Company Logo">
                            <span class="company-h">kashif </span>
                        </div>
                        <div class="job-list-content col">
                            <div class="job-header">
                                <h6 class="job-title mb-0">Data Analyst</h6>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                            </div>
                            <span class="job-post-date">20 hours ago</span>
                            <p class="job-description">As a Data Scientist, you will be in a central position as you
                                will be evangelizing data and our methodologies to other functional analysts and other
                                stakeholders in the company.</p>
                            <ul class="job-list-meta m-0 border-post">
                                <li><i class="fa fa-calendar"></i> Aug 23, 2021</li>
                                <li><i class="fal fa-address-card"></i> 2 Years</li>
                            </ul>
                            <ul class="job-list-meta m-0 border-post">
                                <li><i class="fal fa-money-bill-alt"></i> 80K to 100K</li>
                                <li><i class="fa fa-map-marker"></i> Lahore, Pakistan</li>
                            </ul>
                            <ul class="job-list-meta m-0">
                                <li><i class="fal fa-laptop-house"></i> Night Shift</li>
                                <li><i class="fal fa-clock"></i> Full Time</li>
                            </ul>
                            <ul class="job-list-fav m-0">
                                <li><a href="#" class="job-wishlist-btn"><i class="fa fa-heart"></i></a></li>
                                <li><a href="#" class="job-view-btn">View</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="job-list">
                        <div class="company-logo col-auto py-2">
                            <img src="https://www.bootdey.com/img/Content/avatar/avatar7.png" alt="Company Logo">
                            <span class="company-h">kashif </span>
                        </div>
                        <div class="job-list-content col">
                            <div class="job-header">
                                <h6 class="job-title mb-0">Data Analyst</h6>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                            </div>
                            <span class="job-post-date">20 hours ago</span>
                            <p class="job-description">As a Data Scientist, you will be in a central position as you
                                will be evangelizing data and our methodologies to other functional analysts and other
                                stakeholders in the company.</p>
                            <ul class="job-list-meta m-0 border-post">
                                <li><i class="fa fa-calendar" aria-hidden="true"></i> Aug 23, 2021</li>
                                <li><i class="fal fa-address-card" aria-hidden="true"></i> 2 Years</li>
                            </ul>
                            <ul class="job-list-meta m-0 border-post">
                                <li><i class="fal fa-money-bill-alt" aria-hidden="true"></i> 80K to 100K</li>
                                <li><i class="fa fa-map-marker" aria-hidden="true"></i> Lahore, Pakistan</li>
                            </ul>
                            <ul class="job-list-meta m-0">
                                <li><i class="fal fa-laptop-house" aria-hidden="true"></i> Night Shift</li>
                                <li><i class="fal fa-clock" aria-hidden="true"></i> Full Time</li>
                            </ul>
                            <ul class="job-list-fav m-0">
                                <li><a href="#" class="job-wishlist-btn"><i class="fa fa-heart"
                                            aria-hidden="true"></i></a></li>
                                <li><a href="#" class="job-view-btn">View</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="job-list">
                        <div class="company-logo col-auto py-2">
                            <img src="https://www.bootdey.com/img/Content/avatar/avatar7.png" alt="Company Logo">
                            <span class="company-h">kashif </span>
                        </div>
                        <div class="job-list-content col">
                            <div class="job-header">
                                <h6 class="job-title mb-0">Data Analyst</h6>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                            </div>
                            <span class="job-post-date">20 hours ago</span>
                            <p class="job-description">As a Data Scientist, you will be in a central position as you
                                will be evangelizing data and our methodologies to other functional analysts and other
                                stakeholders in the company.</p>
                            <ul class="job-list-meta m-0 border-post">
                                <li><i class="fa fa-calendar" aria-hidden="true"></i> Aug 23, 2021</li>
                                <li><i class="fal fa-address-card" aria-hidden="true"></i> 2 Years</li>
                            </ul>
                            <ul class="job-list-meta m-0 border-post">
                                <li><i class="fal fa-money-bill-alt" aria-hidden="true"></i> 80K to 100K</li>
                                <li><i class="fa fa-map-marker" aria-hidden="true"></i> Lahore, Pakistan</li>
                            </ul>
                            <ul class="job-list-meta m-0">
                                <li><i class="fal fa-laptop-house" aria-hidden="true"></i> Night Shift</li>
                                <li><i class="fal fa-clock" aria-hidden="true"></i> Full Time</li>
                            </ul>
                            <ul class="job-list-fav m-0">
                                <li><a href="#" class="job-wishlist-btn"><i class="fa fa-heart"
                                            aria-hidden="true"></i></a></li>
                                <li><a href="#" class="job-view-btn">View</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="job-list">
                        <div class="company-logo col-auto py-2">
                            <img src="https://www.bootdey.com/img/Content/avatar/avatar7.png" alt="Company Logo">
                            <span class="company-h">kashif </span>
                        </div>
                        <div class="job-list-content col">
                            <div class="job-header">
                                <h6 class="job-title mb-0">Data Analyst</h6>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                            </div>
                            <span class="job-post-date">20 hours ago</span>
                            <p class="job-description">As a Data Scientist, you will be in a central position as you
                                will be evangelizing data and our methodologies to other functional analysts and other
                                stakeholders in the company.</p>
                            <ul class="job-list-meta m-0 border-post">
                                <li><i class="fa fa-calendar" aria-hidden="true"></i> Aug 23, 2021</li>
                                <li><i class="fal fa-address-card" aria-hidden="true"></i> 2 Years</li>
                            </ul>
                            <ul class="job-list-meta m-0 border-post">
                                <li><i class="fal fa-money-bill-alt" aria-hidden="true"></i> 80K to 100K</li>
                                <li><i class="fa fa-map-marker" aria-hidden="true"></i> Lahore, Pakistan</li>
                            </ul>
                            <ul class="job-list-meta m-0">
                                <li><i class="fal fa-laptop-house" aria-hidden="true"></i> Night Shift</li>
                                <li><i class="fal fa-clock" aria-hidden="true"></i> Full Time</li>
                            </ul>
                            <ul class="job-list-fav m-0">
                                <li><a href="#" class="job-wishlist-btn"><i class="fa fa-heart"
                                            aria-hidden="true"></i></a></li>
                                <li><a href="#" class="job-view-btn">View</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="job-list">
                        <div class="company-logo col-auto py-2">
                            <img src="https://www.bootdey.com/img/Content/avatar/avatar7.png" alt="Company Logo">
                            <span class="company-h">kashif </span>
                        </div>
                        <div class="job-list-content col">
                            <div class="job-header">
                                <h6 class="job-title mb-0">Data Analyst</h6>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                            </div>
                            <span class="job-post-date">20 hours ago</span>
                            <p class="job-description">As a Data Scientist, you will be in a central position as you
                                will be evangelizing data and our methodologies to other functional analysts and other
                                stakeholders in the company.</p>
                            <ul class="job-list-meta m-0 border-post">
                                <li><i class="fa fa-calendar" aria-hidden="true"></i> Aug 23, 2021</li>
                                <li><i class="fal fa-address-card" aria-hidden="true"></i> 2 Years</li>
                            </ul>
                            <ul class="job-list-meta m-0 border-post">
                                <li><i class="fal fa-money-bill-alt" aria-hidden="true"></i> 80K to 100K</li>
                                <li><i class="fa fa-map-marker" aria-hidden="true"></i> Lahore, Pakistan</li>
                            </ul>
                            <ul class="job-list-meta m-0">
                                <li><i class="fal fa-laptop-house" aria-hidden="true"></i> Night Shift</li>
                                <li><i class="fal fa-clock" aria-hidden="true"></i> Full Time</li>
                            </ul>
                            <ul class="job-list-fav m-0">
                                <li><a href="#" class="job-wishlist-btn"><i class="fa fa-heart"
                                            aria-hidden="true"></i></a></li>
                                <li><a href="#" class="job-view-btn">View</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="job-list">
                        <div class="company-logo col-auto py-2">
                            <img src="https://www.bootdey.com/img/Content/avatar/avatar7.png" alt="Company Logo">
                            <span class="company-h">kashif </span>
                        </div>
                        <div class="job-list-content col">
                            <div class="job-header">
                                <h6 class="job-title mb-0">Data Analyst</h6>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                            </div>
                            <span class="job-post-date">20 hours ago</span>
                            <p class="job-description">As a Data Scientist, you will be in a central position as you
                                will be evangelizing data and our methodologies to other functional analysts and other
                                stakeholders in the company.</p>
                            <ul class="job-list-meta m-0 border-post">
                                <li><i class="fa fa-calendar"></i> Aug 23, 2021</li>
                                <li><i class="fal fa-address-card"></i> 2 Years</li>
                            </ul>
                            <ul class="job-list-meta m-0 border-post">
                                <li><i class="fal fa-money-bill-alt"></i> 80K to 100K</li>
                                <li><i class="fa fa-map-marker"></i> Lahore, Pakistan</li>
                            </ul>
                            <ul class="job-list-meta m-0">
                                <li><i class="fal fa-laptop-house"></i> Night Shift</li>
                                <li><i class="fal fa-clock"></i> Full Time</li>
                            </ul>
                            <ul class="job-list-fav m-0">
                                <li><a href="#" class="job-wishlist-btn"><i class="fa fa-heart"></i></a></li>
                                <li><a href="#" class="job-view-btn">View</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- Job List Wrap Start -->
                <!-- Pagination Start -->
                <div class="bottom-pagination">
                    <ul class="job-pagination pagination-center ">
                        <li class="job-page-item"><a class="job-page-link" href="#"><i class="fa fa-angle-left"
                                    aria-hidden="true"></i> Previous 20</a></li>
                        <li class="job-page-item active"><a class="job-page-link" href="#">1</a></li>
                        <li class="job-page-item"><a class="job-page-link" href="#">2</a></li>
                        <li class="job-page-item"><a class="job-page-link" href="#">3</a></li>
                        <li class="job-page-item"><a class="job-page-link" href="#">4</a></li>
                        <li class="job-page-item"><a class="job-page-link" href="#"><i class="fa fa-angle-right"
                                    aria-hidden="true"></i> Next 20</a></li>
                    </ul>
                    <div class="job-search-count mb-3">1 to 20 Results (out of 10,000 results in total)</div>
                </div>
                <!-- Pagination End -->
            </div>
            <div class="col-sm-12 col-md-4 col-lg-4">
                <br><br>
                <div class="col p-0 p-md-2">
                    <div class="side-card h-300 shadow-sm">
                        <div class="side-card-title text-center text-white">For Queries</div>
                        <div class="side-card-body">
                            <p class="card-title">If you have any further queries, please contact us without any
                                hesitation.</p>
                            <ul class="social-btns center-block">
                                <li><button class="btn btn-whatsapp"><img
                                            src="assets/images/whatsapp-quaries.svg"><span>+92 306 404
                                            1221</span></button></li>
                                <li><button class="btn btn-facebook"><img
                                            src="assets/images/facebook-quaries.svg"><span>@BizBlanca</span></button>
                                </li>
                                <li><button class="btn btn-linkedin"><img
                                            src="assets/images/linkdine-quaries.svg"><span>@BizBlanca</span></button>
                                </li>
                                <li><button class="btn btn-google"><img
                                            src="assets/images/gmail-quaries.svg"><span>bizer@bizblanca.com</span></button>
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
                                                <img src="assets/images/position-crown.svg">
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
                                                <img src="assets/images/position-crown.svg">
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
                                                <h4 class="m-0 modelTitleText">Add more Jobs</h4>
                                            </div>
                                            <div class="subFormFields">
                                                <div class="row">
                                                    <div class="col-12 col-md-6">
                                                        <div class="form-group">
                                                            <label for="">Job Title</label>
                                                            <input type="text" name="" placeholder="Enter Job Title"
                                                                class="form-control" />
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-md-6">
                                                        <div class="form-group">
                                                            <label for="">Job Designation</label>
                                                            <input type="text" name=""
                                                                placeholder="Enter Job Designation"
                                                                class="form-control" />
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-md-6">
                                                        <div class="form-group">
                                                            <label for="">Salary Type</label>
                                                            <select name="" class="form-control">
                                                                <option value="Please Select" selected>Please Select
                                                                </option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-md-6">
                                                        <div class="form-group">
                                                            <label for="" class="">Salary Range</label>
                                                            <input type="text" placeholder="Enter Salary Range" name=""
                                                                class="form-control" />
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-md-6">
                                                        <div class="form-group">
                                                            <label for="">Shift</label>
                                                            <select name="" class="form-control">
                                                                <option value="Please Select" selected>Please Select
                                                                </option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-md-6">
                                                        <div class="form-group">
                                                            <label for="" class="">Experience</label>
                                                            <input type="text" placeholder="Enter Experience" name=""
                                                                class="form-control" />
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-md-6">
                                                        <div class="form-group">
                                                            <label for="" class="">Location</label>
                                                            <input type="text" placeholder="Enter Location" name=""
                                                                class="form-control" />
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-md-6">
                                                        <div class="form-group">
                                                            <label for="" class="">Job Type</label>
                                                            <select name="" class="form-control">
                                                                <option value="Please Select" selected>Please Select
                                                                </option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-md-6">
                                                        <div class="form-group">
                                                            <label for="" class="">Gender</label>
                                                            <select name="" class="form-control">
                                                                <option value="Please Select" selected>Please Select
                                                                </option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-md-6">
                                                        <div class="form-group">
                                                            <label for="" class="">Total Positions</label>
                                                            <select name="" class="form-control">
                                                                <option value="Please Select" selected>Please Select
                                                                </option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="form-group">
                                                            <label for="" class="">Job Description</label>
                                                            <textarea style="height: 100px;"
                                                                placeholder="Enter Job Description" name=""
                                                                class="form-control"></textarea>
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="form-group">
                                                            <label for="" class="">Job Responsibilities</label>
                                                            <textarea style="height: 100px;"
                                                                placeholder="Enter Job Description" name=""
                                                                class="form-control"></textarea>
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="form-group">
                                                            <label for="" class="">Qualifications &
                                                                Technicalities</label>
                                                            <textarea style="height: 100px;"
                                                                placeholder="Enter Qualifications & Technicalities"
                                                                name="" class="form-control"></textarea>
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="form-group">
                                                            <label for="" class="">Benefits</label>
                                                            <textarea style="height: 100px;"
                                                                placeholder="Enter Benefits" name=""
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

        },
        methods: {

        },
    };

</script>
<style>

</style>
