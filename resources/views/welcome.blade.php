<!DOCTYPE html>

<head>
    <title>IT Job in Lahore - IT Jobs In Pakistan - BizBlancab</title>
    @if (Auth::check()) 
        <meta name="user_id" content="{{ Auth::user()->id }}" />
    @else
        <meta name="user_id" content="false" />
    @endif
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="keywords" content="Jobs in Pakistan, Free CV Builder, Best Jobs in Pakistan, Online CV builder, Free Job Posting, Search Jobs in Pakistan, Jobs in Lahore, Jobs in Karachi, Jobs in Islamabad, Jobs in Pakistan, Jobs Pakistan, Jobs, Part Time Jobs, Full Time Jobs, Post Jobs, Free Job Posts, Professional CV, Elegant CV, Professional Resume, Elegant Resume, Free CV Templates, Free Resume Templates, Free Resume Builder, online jobs, it jobs in lahore, recuriting, career, career builder, laravel, vuejs, reactjs, java, javascript, nodejs, angularjs, knockoutjs, devocp, c++, opp, html, css, bootstrap, frontend, backend, frontend developer, backend developer, bussiness developer, social media marketing." />
    <meta name="author" content="bizblanca.com">
    <meta name="robots" content="ALL, FOLLOW,INDEX" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="https://bizblanca.com/" />
    <meta property="og:title" content="Jobs In Pakistan | Free CV builder - bizblanca.com" />
    <meta property="fb:app_id" content="656798769016185"/>
    <meta property="og:description" content="Looking for the best Jobs in Pakistan? bizblanca.com is Pakistan’s #1 free CV builder and job posting site. Post Jobs for free or make a Professional CV all for free." />
    <link rel="canonical" href="https://bizblanca.com/" />
    <!-- Bootstrap CSS -->
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('website')}}/assets/images/BizBlancaRound.svg" />
    <link rel="stylesheet" href="{{asset('website')}}/assets/css/bootstrap/bootstarp.min.css" />
    <link rel="stylesheet" href="{{asset('website')}}/assets/css/swiper/swiper-bundle.min.css" />
    <link rel="stylesheet" href="{{asset('website')}}/assets/css/style.min.css" />
    <link rel="stylesheet" href="{{asset('website')}}/assets/css/media.min.css" />
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <link 
          rel="stylesheet" 
          href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"
          integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm"
          crossorigin="anonymous"
    />
    <!-- <link rel="stylesheet" href="{{asset('website')}}/assets/css/fontawesome/css/all.css">
    <script src="{{asset('website')}}/assets/css/fontawesome/js/all.js"></script> -->
    <script src="{{asset('website')}}/assets/js/jquery-3.5.1.min.js"></script>
    <script src="{{asset('website')}}/assets/js/swiper/swiper-bundle.min.js"></script>
    <script src="{{asset('website')}}/assets/js/main.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <!-- Facebook Pixel Code -->
    <script>
    !function(f,b,e,v,n,t,s)
    {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
    n.callMethod.apply(n,arguments):n.queue.push(arguments)};
    if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
    n.queue=[];t=b.createElement(e);t.async=!0;
    t.src=v;s=b.getElementsByTagName(e)[0];
    s.parentNode.insertBefore(t,s)}(window, document,'script',
    'https://connect.facebook.net/en_US/fbevents.js');
    fbq('init', '656798769016185');
    fbq('track', 'PageView');
    </script>
    <noscript><img height="1" width="1" style="display:none"
    src="https://www.facebook.com/tr?id=656798769016185&ev=PageView&noscript=1"
    /></noscript>
    <!-- End Facebook Pixel Code -->
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-V99STZXL36"></script>
    <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());
    gtag('config', 'G-V99STZXL36');
    </script>
    <!-- end facebook code -->
</head> 

<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<body class="antialiased">
    <div id="app" class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center sm:pt-0">
        <app></app>
    </div>
    <script src="{{ asset('js/app.js') }}"></script>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="{{asset('website')}}/assets/js/jquery-3.5.1.min.js"></script>
    <script src="{{asset('website')}}/assets/js/bootstrap/popper.min.js"></script>
    <script src="{{asset('website')}}/assets/js/bootstrap/bootstrap.min.js"></script>
    <script src="{{asset('website')}}/assets/js/swiper/swiper-bundle.min.js"></script> 
    <script src="{{asset('website')}}/assets/js/main.js"></script>
    @yield('other-scripts')
</body>

</html>