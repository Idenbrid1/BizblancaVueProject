<template>
  <div>
    <!--back-top-top-->
    <button
      onclick="topFunction()"
      class="back-to-top"
      id="back-to-top"
      title="Go to top"
    >
      <i class="fa fa-angle-up"></i>
    </button>
    <!---mobile view menu-->
    <div class="mobile-view px-0">
      <div class="logo">
        <a href="/index.html"
          ><img src="/website/assets/images/Logo.svg" alt="logo"
        /></a>
      </div>
      <div class="mobile-button">
        <a href="/company-detail.html" class="company-mbl-btn"
          ><i class="fas fa-building"></i> For Companies</a
        >
        <a href="/candidate-detail.html" class="candidate-mbl-btn"
          ><i class="fas fa-users"></i> For Candidates</a
        >
      </div>
      <div class="navbar">
        <div class="icon-bar" onclick="ShowNavbar()">
          <i></i>
          <i></i>
          <i></i>
        </div>
        <ul id="nav-lists">
          <!-- <li class="close"><span onclick="Hide()">×</span></li> -->
          <div class="d-flex mobile-view-btns px-3">
            <a href="#" class="register-mbl-btn mr-2">Register CV</a>
            <a href="#" class="signin-mbl-btn ml-2">Sign in</a>
          </div>
          <a href="#news">
            <li><i class="fas fa-globe"></i> News</li>
          </a>
          <a href="#expertise">
            <li>
              <i class="fas fas fa-search" aria-hidden="true"></i> Looking for a
              job
            </li>
          </a>
          <a href="#expertise">
            <li>
              <i class="fas fas fa-search" aria-hidden="true"></i> Looking for
              employees
            </li>
          </a>
          <a href="#happening">
            <li><i class="fas fa-building" aria-hidden="true"></i> FAQS</li>
          </a>
          <a href="#video">
            <li><i class="fas fa-video" aria-hidden="true"></i> Videos</li>
          </a>
          <a href="#contact">
            <li><i class="fas fa-envelope" aria-hidden="true"></i> Contact</li>
          </a>
        </ul>
      </div>
    </div>
    <!--end-mobile-view-->
    <!--desktop-view-->
    <header id="main-header" class="top-header">
      <div class="header-inner">
        <a
          href="/index.html"
          title="bizblanca"
          class="bizblanca-logo header-block-link"
        >
          <img src="/website/assets/images/Logo.svg" alt="logo" class="log-site" />
        </a>
        <ul class="main-navigation float-left py-2">
          <li class="header-block-link">
            <a href="/company-detail.html" title="company" class="menu-item"
              >For Companies</a
            >
          </li>
          <li class="header-block-link pr-3 border-line">
            <a
              href="/candidate-detail.html"
              title="candidate"
              class="menu-item"
              >For Candidates</a
            >
          </li>
        </ul>
        <ul class="main-navigation float-right">
          <li class="dropdown">
            <button
              class="btn dropdown-toggle account-menu px-0"
              type="button"
              id="dropdownMenuButton"
              data-toggle="dropdown"
              aria-haspopup="true"
              aria-expanded="false"
            >
              <i class="fa fa-user-circle" aria-hidden="true"></i> My Account
            </button>
            <div
              class="dropdown-menu p-0"
              aria-labelledby="dropdownMenuButton"
              x-placement="bottom-start"
              style="
                position: absolute;
                will-change: transform;
                top: 0px;
                left: 0px;
                transform: translate3d(0px, 26px, 0px);
              "
            >
              <a class="dropdown-item" href="#">Dashboard</a>
              <a class="dropdown-item" href="#">Profile</a>
              <a class="dropdown-item" href="#">Setting</a>
              <hr class="dropdown-divider" />
              <a class="dropdown-item" href="#">Logout</a>
            </div>
          </li>
          <li class="header-block-link">
            <a href="#" class="register-desktop-btn ml-2"
              ><i class="fas fa-address-book" aria-hidden="true"></i> Register
              CV</a
            >
          </li>
          <li class="header-block-link">
            <a href="#" class="postjob-desktop-btn mr-2"
              ><i class="fal fa-briefcase" aria-hidden="true"></i> Posts a
              job</a
            >
          </li>
        </ul>
      </div>
    </header>
    <!-- seconday-Navigation -->
    <header class="_secondary-header-nav p-0" id="secondary-header-nav">
      <div class="p-0 m-auto" style="height: 42px">
        <ul>
          <li>
            <a href="#news" class="secondaymenu" id="secondary-anker">News</a>
            <span class="seprate-line"></span>
          </li>
          <li>
            <a href="#expertise" class="secondaymenu" id="secondary-anker"
              >Looking for A job</a
            ><span class="seprate-line"></span>
          </li>
          <li>
            <a href="#expertise" class="secondaymenu" id="secondary-anker-2"
              >Looking for Employees</a
            ><span class="seprate-line"></span>
          </li>
          <li>
            <a href="#happening" class="secondaymenu" id="secondary-anker-3"
              >FAQ</a
            ><span class="seprate-line"></span>
          </li>
          <li>
            <a href="#video" class="secondaymenu" id="secondary-anker-4"
              >Videos</a
            ><span class="seprate-line"></span>
          </li>
          <li>
            <a href="#contact" class="secondaymenu" id="secondary-anker-5"
              >Contact</a
            >
          </li>
        </ul>
      </div>
    </header>
  </div>
</template>