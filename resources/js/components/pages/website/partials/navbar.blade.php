<!--<nav class="navbar navbar-expand-md header-main" id="header-scroll-color">
    <div class="container-navbar content-header p-0">
      <a href="./index.html" class="logo-anker" id="logo-anker">
        <img
          src="{{asset('website')}}/assets/img/logo/logo.svg"
          alt=""
          style="width: 190px"
        />
      </a>
      <div id="humburger-menu" class="humburger">
        <span></span>
        <span></span>
        <span></span>
      </div>
      <div class="hidden-nav">
        <div class="header-ankers">
            <a href="./comming.html" class="login-anker" id="post-scroll-color"
            >Search Jobs</a
          >

          <a href="./about-us.html" class="login-anker" id="scout-scroll-color"
            >Scout Employees</a
          >
          <a href="./login.html" class="login-anker" id="login-scroll-color"
          >Login</a
        >

        </div>
      </div>
    </div>
  </nav>-->
<header id="site-header" role="banner" class="signed-out">
   <div class="header-background"></div>
   <div class="header-inner">
      <a href="#menu" class="menu-button header-block-link" data-bind="click: toggleSideMenu"><span>Toggle menu</span></a>
      <a href="{{route('index')}}" title="bizblanca" class="reed-logo globalReedLogo header-block-link">
         <img src="{{asset('website')}}/assets/img/logo/logo.svg" alt="" style="width: 170px" />
      </a>
      <ul class="main-navigation">
         <li class="jobs tld active">
            <a href="{{route('company.index')}}" title="Jobs" class="gtmHeaderNav header-block-link">For Companies</a>
         </li>
         <li class="career-advice tld">
            <a href="{{route('candidate.index')}}" title="Career advice" class="gtmHeaderNav header-block-link">For Candidates</a>
         </li>
         <!--<li class="recruiter ltd">
             <a href="/recruiter?directjob=recruiter" title="Recruiter" class="gtmHeaderNav header-block-link recruiter-link">Recruiting? <b>Post a job</b></a>
          </li>-->
      </ul>
      <div class="right-container">
         <ul class="user-navigation">
            <li class="signed-out-user">
               <a href="{{route('register')}}" class="register-cv gtmGlobalRegister btn btn-secondary">Register CV</a>
            </li>
            <li class="signin-menu">
               <a href="{{route('login')}}" class="sign-in gtmGlobalResponsiveSignIn header-block-link">Sign in</a>
            </li>
            <li class="saved-jobs">
               <a href="#" title="Shortlisted jobs" class="header-block-link">
                  <span class="fal fa-briefcase"></span>

                  <span class="saved-jobs-text" data-bind="text: savedJobsText">Posts a job</span>
               </a>
            </li>
         </ul>
      </div>

   </div>
</header>