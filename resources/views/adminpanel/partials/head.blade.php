<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    @yield('title-meta')
    
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link href="{{asset('adminpanel')}}/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{asset('adminpanel')}}/css/style.css" rel="stylesheet">
    <link href="{{asset('adminpanel')}}/css/animate.css" rel="stylesheet">
    <link href="{{asset('adminpanel')}}/font-awesome/css/font-awesome.css" rel="stylesheet">


    {{-- toaster --}}
    <link href="{{ asset('adminpanel') }}/css/plugins/toastr/toastr.min.css" rel="stylesheet">
    <link href="{{ asset('adminpanel') }}/css/plugins/awesome-bootstrap-checkbox/awesome-bootstrap-checkbox.css" rel="stylesheet">

    @yield('other-css')

</head>
