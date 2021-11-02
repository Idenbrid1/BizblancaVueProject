<template>
    <header id="site-header" role="banner" class="signed-out">
        <div class="header-background"></div>
        <div class="header-inner">
            <a href="#menu" class="menu-button header-block-link" data-bind="click: toggleSideMenu"><span>Toggle menu</span></a>
            <a href="/index" title="bizblanca" class="reed-logo globalReedLogo header-block-link">
                <img src="/assets/img/logo/logo.svg" alt="" style="width: 170px" />
            </a>
            <ul class="main-navigation">
                <li class="jobs tld active">
                    <a href="#" title="Jobs" class="gtmHeaderNav header-block-link">For Companies</a>
                </li>
                <li class="career-advice tld">
                    <a href="#" title="Career advice" class="gtmHeaderNav header-block-link">For Candidates</a>
                </li>
                <!--<li class="recruiter ltd">
                    <a href="/recruiter?directjob=recruiter" title="Recruiter" class="gtmHeaderNav header-block-link recruiter-link">Recruiting? <b>Post a job</b></a>
                </li>-->
            </ul>
            <div class="right-container">
                <ul class="user-navigation">
                    <li class="signed-out-user">
                    <a href="#" class="register-cv gtmGlobalRegister btn btn-secondary">Register CV</a>
                    </li>
                    <li class="signin-menu">
                    <a href="#" class="sign-in gtmGlobalResponsiveSignIn header-block-link">Sign in</a>
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
</template>