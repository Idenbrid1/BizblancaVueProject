<template>
    <div>
        <WebsiteNavbar />
        <div class="container user-profile-container cont-flex">
            <div class="col-12 col-md-8 col-lg-8 xs-padding">
                <div class="product_accordion_container">
                    <div>
                        <input class="product_accordion" type="checkbox" name="accordion" id="first" checked>
                        <label class="search-box-h" for="first">
                            Condition Search
                            <span class="chevron">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round">
                                    <polyline points="6 9 12 15 18 9"></polyline>
                                </svg>
                            </span>
                        </label>
                        <div class="content">
                            <div class="content-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <label>Experience</label>
                                        <select name="" class="cusSelectbox" id="cusSelectbox">
                                            <option value="Select">Please Select</option>
                                            <option value="India">India</option>
                                            <option value="Nepal">Nepal</option>
                                            <option value="Bangladesh">Bangladesh</option>
                                            <option value="Sri Lanka">Sri Lanka</option>
                                        </select>
                                    </div>
                                    <div class="col-md-6">
                                        <label>Education</label>
                                        <select name="" class="cusSelectbox" id="cusSelectbox">
                                            <option value="Select">Please Select</option>
                                            <option value="India">India</option>
                                            <option value="Nepal">Nepal</option>
                                            <option value="Bangladesh">Bangladesh</option>
                                            <option value="Sri Lanka">Sri Lanka</option>
                                        </select>
                                    </div>
                                    <div class="col-md-6">
                                        <label>City</label>
                                        <select name="" class="cusSelectbox" id="cusSelectbox">
                                            <option value="Select">Please Select</option>
                                            <option value="India">India</option>
                                            <option value="Nepal">Nepal</option>
                                            <option value="Bangladesh">Bangladesh</option>
                                            <option value="Sri Lanka">Sri Lanka</option>
                                        </select>
                                    </div>
                                    <div class="col-md-6">
                                        <label>Skills</label>
                                        <select name="" class="cusSelectbox" id="cusSelectbox">
                                            <option value="Select">Please Select</option>
                                            <option value="India">India</option>
                                            <option value="Nepal">Nepal</option>
                                            <option value="Bangladesh">Bangladesh</option>
                                            <option value="Sri Lanka">Sri Lanka</option>
                                        </select>
                                    </div>
                                    <div class="col-md-6">
                                        <label>Area</label>
                                        <select name="" class="cusSelectbox" id="cusSelectbox">
                                            <option value="Select">Area</option>
                                            <option value="India">India</option>
                                            <option value="Nepal">Nepal</option>
                                            <option value="Bangladesh">Bangladesh</option>
                                            <option value="Sri Lanka">Sri Lanka</option>
                                        </select>
                                    </div>
                                    <div class="col-md-6">
                                        <label>Gender</label>
                                        <select name="" class="cusSelectbox" id="cusSelectbox">
                                            <option value="Select">Please Select</option>
                                            <option value="India">India</option>
                                            <option value="Nepal">Nepal</option>
                                            <option value="Bangladesh">Bangladesh</option>
                                            <option value="Sri Lanka">Sri Lanka</option>
                                        </select>
                                    </div>
                                    <div class="col-12 conditioncheck">
                                        <input name='gender' type="checkbox" class="keeplogin-checkbox" id="male">
                                        <label for="male">Male</label>
                                        <input name='gender' type="checkbox" class="keeplogin-checkbox" id="female">
                                        <label for="female">Female</label>
                                        <input name='gender' type="checkbox" class="keeplogin-checkbox"
                                            id="all-genders">
                                        <label for="all-genders">All Genders</label>
                                    </div>
                                    <div class="col-12 job-condition">
                                        <button type="submit" class="job-condition-clear-btn">Clear</button>
                                        <button type="submit" class="job-condition-search-btn">Search</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!---- ------------------------------>
                <div class="product-search-box">
                    <label class="search-box-h">
                        Keyword Search
                    </label>
                    <div class="col-md-12 search-container">
                        <form action="/">
                            <div> <label class="keyword-input-title">Keyword Search</label></div>
                            <input type="text" placeholder="* Includes All Keywords" name="search">
                            <button type="submit" class="keyword-search-btn">Search</button>
                        </form>
                    </div>
                </div>
                <div class="candidate my-2">
                    <label class="candidate-tagline">
                        Candidates
                    </label>
                    <!-- Job List Toolbar Start -->
                    <div class="px-3">
                        <div class="job-list-toolbar">
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
                            <div class="job-filter">
                                <select class="job-select">
                                    <option>Search order by</option>
                                    <option>Top Rated</option>
                                    <option>Most Popular</option>
                                </select>
                            </div>
                        </div>
                        <!-- Job List Toolbar End -->
                        <!-- Job List Wrap Start -->
                        <div class="job-list-wrap">
                            <div class="job-search-count my-3 mx-1">1 to 20 Results (out of 10,000 results in total)
                            </div>
                            <!-- Job List Start -->
                            <!-- <div class="d-flex"> -->

                            <div class="row m-0">
                                <div class="col-sm-6 col-md-12 col-lg-4 px-1">
                                    <div class="candidate-single">
                                        <!-- <div class="company-logo col-auto py-2">
                                            <img src="https://www.bootdey.com/img/Content/avatar/avatar7.png" alt="Company Logo">
                                            <span class="company-h">Ahmad </span>
                                            </div> -->
                                        <div class="candidate-list-content w-100 py-1 px-2">
                                            <div class="d-flex align-items-center">
                                                <div class="candidate-photo"></div>
                                                <div class="candidate-header mt-2 ml-2">
                                                    <h6 class="candidate-name mb-0">Sameena Khan</h6>
                                                    <div class="my-1">
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- <span class="job-post-date">20 hours ago</span> -->
                                            <p class="candidate-description my-1">My name is Sameena Khan and I am
                                                graduated from
                                                Punjab University Lahore</p>
                                            <ul class="candidate-list-meta m-0 w-100">
                                                <li><i class="fas fa-venus-mars"></i>
                                                    <div class="ml-1 hide-line-1">Female</div>
                                                </li>
                                                <li class="mt-1"><i class="fas fa-graduation-cap"></i>
                                                    <div class="ml-1 hide-line-1">BSSE</div>
                                                </li>
                                                <li class="mt-1"><i class="fas fa-envelope-open-text"></i>
                                                    <div class="ml-1 hide-line-1">2 Years</div>
                                                </li>
                                                <li class="mt-1"><i class="fas fa-user-cog"></i>
                                                    <div class="ml-1 hide-line-1">HTML,Bootstrap,CSS,Node JS</div>
                                                </li>
                                                <li class="mt-1"><i class="fas fa-map-marker-alt"></i>
                                                    <div class="ml-1 hide-line-1">Lahore,Pakistan</div>
                                                </li>

                                            </ul>

                                            <ul class="candidate-list-fav col-lg-12 m-0 my-2 px-0 ">
                                                <li class="w-100"><a href="#" class="candidate-view-btn w-100">View
                                                        Profile</a></li>
                                                <li><a href="#" class="candidate-wishlist-btn ml-2 "><i
                                                            class="far fa-heart"></i></a>
                                                </li>
                                            </ul>
                                        </div>



                                    </div>
                                </div>

                                <div class="col-lg-4 col-md-12 col-sm-6 px-1">
                                    <div class="candidate-single">
                                        <!-- <div class="company-logo col-auto py-2">
               <img src="https://www.bootdey.com/img/Content/avatar/avatar7.png" alt="Company Logo">
               <span class="company-h">kashif </span>
            </div> -->
                                        <div class="candidate-list-content w-100 py-1 px-2">
                                            <div class="d-flex align-items-center">
                                                <div class="candidate-photo"></div>
                                                <div class="candidate-header mt-2 ml-2">
                                                    <h6 class="candidate-name mb-0">Sameena Khan</h6>
                                                    <div class="my-1">
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- <span class="job-post-date">20 hours ago</span> -->
                                            <p class="candidate-description my-1">My name is Sameena Khan and I am
                                                graduated from
                                                Punjab University Lahore</p>
                                            <ul class="candidate-list-meta m-0 w-100">
                                                <li><i class="fas fa-venus-mars"></i>
                                                    <div class="ml-1 hide-line-1">Female</div>
                                                </li>
                                                <li class="mt-1"><i class="fas fa-graduation-cap"></i>
                                                    <div class="ml-1 hide-line-1">BSSE</div>
                                                </li>
                                                <li class="mt-1"><i class="fas fa-envelope-open-text"></i>
                                                    <div class="ml-1 hide-line-1">2 Years</div>
                                                </li>
                                                <li class="mt-1"><i class="fas fa-user-cog"></i>
                                                    <div class="ml-1 hide-line-1">HTML,Bootstrap,CSS,Node JS</div>
                                                </li>
                                                <li class="mt-1"><i class="fas fa-map-marker-alt"></i>
                                                    <div class="ml-1 hide-line-1">Lahore,Pakistan</div>
                                                </li>

                                            </ul>

                                            <ul class="candidate-list-fav col-lg-12 m-0 my-2 px-0 ">
                                                <li class="w-100"><a href="#" class="candidate-view-btn w-100">View
                                                        Profile</a></li>
                                                <li><a href="#" class="candidate-wishlist-btn ml-2 "><i
                                                            class="far fa-heart"></i></a>
                                                </li>
                                            </ul>
                                        </div>



                                    </div>
                                </div>

                                <div class="col-lg-4 col-md-12 col-sm-6 px-1">
                                    <div class="candidate-single">
                                        <!-- <div class="company-logo col-auto py-2">
               <img src="https://www.bootdey.com/img/Content/avatar/avatar7.png" alt="Company Logo">
               <span class="company-h">kashif </span>
            </div> -->
                                        <div class="candidate-list-content w-100 py-1 px-2">
                                            <div class="d-flex align-items-center">
                                                <div class="candidate-photo"></div>
                                                <div class="candidate-header mt-2 ml-2">
                                                    <h6 class="candidate-name mb-0">Sameena Khan</h6>
                                                    <div class="my-1">
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- <span class="job-post-date">20 hours ago</span> -->
                                            <p class="candidate-description my-1">My name is Sameena Khan and I am
                                                graduated from
                                                Punjab University Lahore</p>
                                            <ul class="candidate-list-meta m-0 w-100">
                                                <li><i class="fas fa-venus-mars"></i>
                                                    <div class="ml-1 hide-line-1">Female</div>
                                                </li>
                                                <li class="mt-1"><i class="fas fa-graduation-cap"></i>
                                                    <div class="ml-1 hide-line-1">BSSE</div>
                                                </li>
                                                <li class="mt-1"><i class="fas fa-envelope-open-text"></i>
                                                    <div class="ml-1 hide-line-1">2 Years</div>
                                                </li>
                                                <li class="mt-1"><i class="fas fa-user-cog"></i>
                                                    <div class="ml-1 hide-line-1">HTML,Bootstrap,CSS,Node JS</div>
                                                </li>
                                                <li class="mt-1"><i class="fas fa-map-marker-alt"></i>
                                                    <div class="ml-1 hide-line-1">Lahore,Pakistan</div>
                                                </li>

                                            </ul>

                                            <ul class="candidate-list-fav col-lg-12 m-0 my-2 px-0 ">
                                                <li class="w-100"><a href="#" class="candidate-view-btn w-100">View
                                                        Profile</a></li>
                                                <li><a href="#" class="candidate-wishlist-btn ml-2 "><i
                                                            class="far fa-heart"></i></a>
                                                </li>
                                            </ul>
                                        </div>



                                    </div>
                                </div>










                            </div>



                            <!-- </div> -->

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
                    <div class="job-search-count my-3">1 to 20 Results (out of 10,000 results in total)</div>
                </div>
                <!-- Pagination End -->
            </div>
            <div class="col-sm-12 col-md-4 col-lg-4">
                <br><br>
                <div class="col p-0">
                    <div class="side-card h-300 shadow-sm">
                        <div class="side-card-title text-center text-white">For Queries</div>
                        <div class="side-card-body">
                            <p class="card-title">If you have any further queries, please contact us without any
                                hesitation.</p>
                            <ul class="social-btns center-block">
                                <li><button class="btn btn-whatsapp"><img
                                            src="assets/images/whatsapp-quaries.svg"><span>+92 306
                                            404 1221</span></button></li>
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
                                                Laravel
                                                developer has changed my life.</p>
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
                                                Laravel
                                                developer has changed my life.</p>
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
                        <div class="side-card-title text-center text-white">Payment Plans</div>
                        <div class="plan free-plan">
                            <div class="plan-text h5 ">Free</div>
                            <div class="plan-fees h4 mt-0 mb-3">No Fees</div>
                            <div class="plan-options">
                                <div class="btn mr-1">Select Plan</div>
                                <div class="btn ml-1">More Details</div>
                            </div>
                        </div>

                        <div class="plan paid-plan">
                            <div class="plan-text h5 ">Basic</div>
                            <div class="plan-fees h4 mt-0 mb-3">12,000 / Year</div>
                            <div class="plan-options">
                                <div class="btn mr-1">Select Plan</div>
                                <div class="btn ml-1">More Details</div>
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
                                                <i class="fa fa-caret-right mr-2"></i>Q. What is BizBlanca?
                                            </button>
                                        </h5>
                                    </div>
                                    <div id="collapseOne" class="collapse fade" aria-labelledby="headingOne"
                                        data-parent="#accordionExample">
                                        <div class="faq-card-body">
                                            Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                            Lorem Ipsum
                                            has been the industry's standard dummy text ever since the 1500s,
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
                                            Lorem Ipsum
                                            has been the industry's standard dummy text ever since the 1500s,
                                        </div>
                                    </div>
                                </div>
                                <div class="faq-card">
                                    <div class="faq-card-header" id="headingThree">
                                        <h5 class="mb-0">
                                            <button class="btn  collapsed btn-block text-left faq-btn" type="button"
                                                data-toggle="collapse" data-target="#collapseThree"
                                                aria-expanded="false" aria-controls="collapseThree">
                                                <i class="fa fa-caret-right mr-2"></i>Q. What is BizBlanca mission?
                                            </button>
                                        </h5>
                                    </div>
                                    <div id="collapseThree" class="collapse fade" aria-labelledby="headingThree"
                                        data-parent="#accordionExample">
                                        <div class="faq-card-body">
                                            Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                            Lorem Ipsum
                                            has been the industry's standard dummy text ever since the 1500s,
                                        </div>
                                    </div>
                                </div>
                                <div class="faq-card">
                                    <div class="faq-card-header" id="headingFour">
                                        <h5 class="mb-0">
                                            <button class="btn  collapsed btn-block text-left faq-btn" type="button"
                                                data-toggle="collapse" data-target="#collapseFour" aria-expanded="false"
                                                aria-controls="collapseFour">
                                                <i class="fa fa-caret-right mr-2"></i>Q. Why BizBlanca?
                                            </button>
                                        </h5>
                                    </div>
                                    <div id="collapseFour" class="collapse fade" aria-labelledby="headingFour"
                                        data-parent="#accordionExample">
                                        <div class="faq-card-body">
                                            Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                            Lorem Ipsum
                                            has been the industry's standard dummy text ever since the 1500s,
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
    </div>
</template>
<script>
    import axios from 'axios';
    import WebsiteNavbar from '../partials/navbar.vue';
    export default {
        data() {
            return {

            }
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
        components: {
            WebsiteNavbar,
        },
        methods: {

        },
    };

</script>
