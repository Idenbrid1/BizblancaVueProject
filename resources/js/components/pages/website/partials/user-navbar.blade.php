

@extends('website.layouts.master')
@section('content')
<style>
    .after-log-secondary-header {
    position: sticky;
    top: 60px;
    z-index: 20;
    width: 100%;
    box-sizing: border-box;
    display: flex;
    align-items: center;
    transition: all .5s;
    padding: 0px 0px 0px 10px;
    background-color: #fff;
    margin-bottom: 50px;
    /* background-color: var(--BgBtnColor); */
    border-bottom: 1px solid #e1e1e1;
}
.after-log-secondary-header ul {
    display: flex;
    position: relative;
    z-index: 1;
    flex-wrap: nowrap;
    justify-content: flex-start;
    align-items: center;
    margin: 0;
    width: 100%;
    height: 100%;
    padding: 0px;
}
.after-log-secondary-header  ul>li>a {
    /* color: var(--whiteColor); */
    padding: 0.5rem 1.45vw;
    color: #333;
    text-transform: capitalize;
    font-size: 14px;
    font-weight: 500;
    color: #0f151a;
    font-family: "Red Hat Text";
}
#after-login-site-header .header-inner {
    position: relative;
    width: 100%;
    max-width: 1280px;
    margin: 0 auto;
}
    </style>
<header id="site-header">

   <div class="header-inner">
      <a href="#menu" class="menu-button header-block-link" data-bind="click: toggleSideMenu"><span>Toggle menu</span></a>
      <a href="/" title="bizblanca" class="reed-logo globalReedLogo header-block-link">
      <img
         src="{{asset('website')}}/assets/img/logo/logo.svg"style="width: 170px"
         />
      </a>
      <div class="right-container">
         <ul class="user-navigation">
            <li class="saved-jobs" style="display: block">
               <a href="#"   class="header-block-link">
               <span class="fal fa-user"></span>
               <span>Username</span>
               </a>
            </li>
            <li class="saved-jobs" style="display: block">
               <a href="#" class="header-block-link">
               <span class="fal fa-bell"></span>
               <span>Notifications</span>
               </a>
            </li>
            <li class="saved-jobs" style="display: block">
               <a href="#"  class="header-block-link">
               <span class="fal fa-question-circle"></span>
               <span>Help</span>
               </a>
            </li>
         </ul>
      </div>
   </div>
</header>
<header class="after-log-secondary-header p-0" id="after-log-secondary-header">
   <div class="p-0 m-auto" style="height:42px; " >
      <ul>
         <li>
            <a href="#"
               >Dashboard</a> |
         </li>
         <li>
            <a href="#"
               >Profile</a> |
         </li>
         <li>
            <a href="#"
               >Message</a> |
         </li>
         <li><a href="#">Job</a> |</li>
         <li><a href="#">Company</a> </li>
      </ul>
   </div>
</header>


@endsection
