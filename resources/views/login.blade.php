<!DOCTYPE html>
<html lang="en">

    <!-- Basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <!-- Site Metas -->
    <title>Markedia - Marketing Blog Template</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    
    <!-- Site Icons -->
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon" />
    <link rel="apple-touch-icon" href="images/apple-touch-icon.png">
    
    <!-- Design fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,700" rel="stylesheet"> 
    
    <!-- Bootstrap core CSS -->
    <link href="{{asset('css/bootstrap.css')}}" rel="stylesheet">

    <!-- FontAwesome Icons core CSS -->
    <link href="{{asset('css/font-awesome.min.css')}}" rel="stylesheet">

    <!-- Animate styles for this template -->
    <link href="{{asset('css/animate.css')}}" rel="stylesheet">

    <!-- Responsive styles for this template -->
    <link href="{{asset('css/responsive.css')}}" rel="stylesheet">

    <!-- Colors for this template -->
    <link href="{{asset('css/colors.css')}}" rel="stylesheet">

    <!-- Version Marketing CSS for this template -->
    <link href="{{asset('css/version/marketing.css')}}" rel="stylesheet">

    
    <!-- Custom styles for this template -->
    <link href="{{asset('css/style.css')}}" rel="stylesheet">

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<body>


        <header class="market-header header">
            <div class="container-fluid">
                <nav class="navbar navbar-toggleable-md navbar-inverse fixed-top bg-inverse">
                    <a class="navbar-brand m-auto" href="/"><img src="images/version/market-logo.png" alt=""></a>
                </nav>
            </div><!-- end container-fluid -->
        </header><!-- end market-header -->    

    <section class="section lb section-edit">
        <div class="container login">
            <div class="row">
                <div class="col-lg-8 m-auto">
                    <!-- error message -->
                        @if(Session::has('message'))
                            <p class="alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('message') }}</p>
                        @endif

                    <form class="form-wrapper" method="post">
                        @csrf
                        <h4>Login Now</h4>
                            <input type="email" class="form-control" placeholder="Your Email" name="email">
                            <input type="password" class="form-control" placeholder="Your Password" name="password">
                            <input type="submit" class="btn btn-primary" value="Login" name="login">
                            <a href="/register" type="submit" class="btn btn-primary" value="Login" name="register">Register Now</a>
                    </form>
                </div>
            </div>        
        </div><!-- end container -->
    </section>