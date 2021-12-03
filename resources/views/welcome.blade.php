<!DOCTYPE html>

<head>
    <title>Bizblanca - Job</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('website')}}/assets/css/bootstrap/bootstarp.min.css" />
    <link rel="stylesheet" href="{{asset('website')}}/assets/css/swiper/swiper-bundle.min.css" />
    <link rel="stylesheet" href="{{asset('website')}}/assets/css/style.css" />
    <link rel="stylesheet" href="{{asset('website')}}/assets/css/media.css" />
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <link rel="stylesheet" href="{{asset('website')}}/assets/css/fontawesome/css/all.css">
    <script src="{{asset('website')}}/assets/css/fontawesome/js/all.js"></script>
    <script src="{{asset('website')}}/assets/js/jquery-3.5.1.min.js"></script>
    <!-- <script src="{{asset('website')}}/assets/js/bootstrap/popper.min.js"></script>
    <script src="{{asset('website')}}/assets/js/bootstrap/bootstrap.min.js"></script> -->
    <script src="{{asset('website')}}/assets/js/swiper/swiper-bundle.min.js"></script>
    <script src="{{asset('website')}}/assets/js/main.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <meta name="csrf-token" content="{{ csrf_token() }}" />


</head> 

<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<body class="antialiased">
    <div id="app" class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center pt-3 sm:pt-0">
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