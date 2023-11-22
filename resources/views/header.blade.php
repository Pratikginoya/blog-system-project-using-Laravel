<!DOCTYPE html>
<html lang="en">
<head>

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

    <div id="wrapper">
        <header class="market-header header">
            <div class="container-fluid">
                <nav class="navbar navbar-toggleable-md navbar-inverse fixed-top bg-inverse">
                    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <a class="navbar-brand" href="marketing-index.html"><img src="{{asset('images/version/market-logo.png')}}" alt=""></a>
                    <div class="collapse navbar-collapse" id="navbarCollapse">
                        <ul class="navbar-nav mr-auto">
                            <li class="nav-item">
                                <a class="nav-link" href="/">Home</a>
                            </li>

                            @if(Session::has('user_login'))
                            <li class="nav-item">
                                <a class="nav-link" href="/your_blog">Your Blog</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/add_blog">Add New Blog</a>
                            </li>
                            @endif

                            <li class="nav-item">
                                <a class="nav-link" href="/contact">Contact Us</a>
                            </li>

                            @if(Session::has('user_login'))
                                <li class="nav-item">
                                    <div class="nav-link"> <i class="fa fa-user profile_icon"></i> Hello... {{Session::get('user_name')}} !</div>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="/logout"> Logout</a>
                                </li>
                            @else
                                <li class="nav-item">
                                    <a class="nav-link" href="/login"> Login</a>
                                </li>
                            @endif
                        </ul>
                        <!-- <form class="form-inline">
                            <input class="form-control mr-sm-2" type="text" size="13" placeholder="How may I help?">
                            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                        </form> -->
                    </div>
                </nav>
            </div><!-- end container-fluid -->
        </header><!-- end market-header -->