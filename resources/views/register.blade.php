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

    <section class="section lb">
        <div class="container register">
            <div class="row">
                <div class="col-lg-9 m-auto">
                    <!-- error message -->
                        @if(Session::has('message'))
                            <p class="alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('message') }}</p>
                        @endif

                    <!-- validation message -->
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                    <form class="form-wrapper" method="post" enctype="multipart/form-data">
                    @csrf
                    <h4>Register Now</h4>
                        <input type="text" class="form-control" name="name" maxlength="25" placeholder="Your name*" required>
                        <input type="email" class="form-control" name="email" placeholder="Email address*" required>
                        <input type="password" class="form-control" name="password" maxlength="15" minlength="8" placeholder="Password (8 to 15 digit)*" required>
                        <input type="password" class="form-control" name="password2" maxlength="15" minlength="8" placeholder="Re-enter Password (8 to 15 digit)*" required>
                        <input type="text" class="form-control" name="mobile" maxlength="10" minlength="10" placeholder="Mobile Number*" required>
                        <textarea class="form-control" placeholder="About you (Optional)" rows="3" maxlength="250" name="about_you"></textarea>

                        <label>Your Profile Pic (Optional)</label>
                        <input type="file" class="form-control" placeholder="Your Pofile Pic" name="profile_pic">
                        <input type="submit" class="btn btn-primary" value="Register" name="register">
                    </form>
                    <div class="text-center mt-5">
                        ------------- OR ------------------
                    </div>
                    <div class="text-center mt-5"> <h5><a href="/login">Back to Login</a></h5> </div>
                </div>
            </div>        
        </div><!-- end container -->
    </section>