<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>BizBlanca | Admin Login</title>

    <link href="{{asset('adminpanel')}}/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{asset('adminpanel')}}/font-awesome/css/font-awesome.css" rel="stylesheet">

    <link href="{{asset('adminpanel')}}/css/animate.css" rel="stylesheet">
    <link href="{{asset('adminpanel')}}/css/style.css" rel="stylesheet">


</head>

<body class="gray-bg">
    <div style="text-align: center">
        <h1 class="logo-name" >BizBlanca</h1>
    </div>
    <div class="middle-box text-center loginscreen animated fadeInDown">
        <div>
            @if ($errors->any())
                @foreach ($errors->all() as $error)
                    <div>{{$error}}</div>
                @endforeach
            @endif

            <h3>Welcome to Bizblanca</h3>
            <p>Perfectly designed and precisely prepared admin theme with over 50 pages with extra new web app views.
                <!--Continually expanded and constantly improved Inspinia Admin Them (IN+)-->
            </p>
            <p>Login in. To see it in action.</p>
            <form class="m-t" method="POST" role="form" action="{{route('admin.login')}}">
                @csrf
                <div class="form-group">
                    <input type="email" class="form-control" placeholder="Email" name="email" required="" value="admin@gmail.com">
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" placeholder="Password" name="password" required="" value="admin123">
                </div>
                <button type="submit" class="btn btn-primary block full-width m-b">Login</button>

                <a href="{{route('admin.logout')}}" onclick="event.preventDefault();
                document.getElementById('logout-form').submit();"><small>Forgot password?</small></a>
            </form>
            <p class="m-t"> <small>Inspinia we app framework base on Bootstrap 3 &copy; 2014</small> </p>
            <form id="logout-form" action="{{ route('admin.logout') }}" method="POST" class="d-none">
                @csrf
            </form>
        </div>
    </div>

    <!-- Mainly scripts -->
    <script src="{{asset('adminpanel')}}/js/jquery-2.1.1.js"></script>
    <script src="{{asset('adminpanel')}}/js/bootstrap.min.js"></script>

</body>

</html>
