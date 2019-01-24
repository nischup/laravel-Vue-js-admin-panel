<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title> Admin Login </title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="apple-icon.png">
    <link rel="shortcut icon" href="favicon.ico">


    <link rel="stylesheet" href="{{ asset('BackendResource/vendors/bootstrap/dist/css/bootstrap.min.css') }} ">
    <link rel="stylesheet" href="{{ asset('BackendResource/vendors/font-awesome/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('BackendResource/vendors/themify-icons/css/themify-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('BackendResource/vendors/flag-icon-css/css/flag-icon.min.css') }}">
    <link rel="stylesheet" href="{{ asset('BackendResource/vendors/selectFX/css/cs-skin-elastic.css') }}">
    <link rel="stylesheet" href="{{ asset('BackendResource/assets/css/style.css') }}">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>



</head>

<body class="bg-dark">


    <div class="sufee-login d-flex align-content-center flex-wrap">
        <div class="container">
            <div class="login-content">
                <div class="login-logo">
                    <a href="index.html">
                        <img class="align-content" src="images/logo.png" alt="">
                    </a>
                </div>
                <div class="login-form">
                    <form id="login-form" action="{{route('cbadmin.login.verify')}}" method="post" role="form" style="display: block;">
                        {{ csrf_field()}}
                                <div class="form-group">
                                        <input type="email" name="email" id="username" tabindex="1" class="form-control" placeholder="Email" value="">
                                    </div>
                                    <div class="form-group">
                                        <input type="password" name="password" id="password" tabindex="2" class="form-control" placeholder="Password">
                                    </div>
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox"> Remember Me
                                    </label>

                                </div>
                                <button type="submit" class="btn btn-success btn-flat m-b-30 m-t-30">Sign in</button>
                    </form>
                </div>
            </div>
        </div>
    </div>


    <script src="{{ asset('BackendResource/vendors/jquery/dist/jquery.min.js') }}"></script>
    <script src="{{ asset('BackendResource/vendors/popper.js/dist/umd/popper.min.js') }}"></script>
    <script src="{{ asset('BackendResource/vendors/bootstrap/dist/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('BackendResource/assets/js/main.js') }}"></script>


</body>

</html>
