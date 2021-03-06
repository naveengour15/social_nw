<!DOCTYPE html>
<html lang="en">
<head>
   
  <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Social NW</title>

        <!-- CSS -->
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,400">
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Droid+Sans">
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Lobster">
        <link rel="stylesheet" href="/bootstrap1/css/bootstrap.min.css">
        <link rel="stylesheet" href="/font-awesome/css/font-awesome.min.css">
        <link rel="stylesheet" href="/css1/animate.css">
        <link rel="stylesheet" href="/css1/magnific-popup.css">
        <link rel="stylesheet" href="/flexslider/flexslider.css">
        <link rel="stylesheet" href="/css1/form-elements.css">
        <link rel="stylesheet" href="/css1/style.css">
        <link rel="stylesheet" href="/css1/media-queries.css">

        <!-- Favicon and touch icons -->
        <link rel="shortcut icon" href="ico/favicon.ico">
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="/ico/apple-touch-icon-144-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="/ico/apple-touch-icon-114-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="/ico/apple-touch-icon-72-precomposed.png">
        <link rel="apple-touch-icon-precomposed" href="/ico/apple-touch-icon-57-precomposed.png">



    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1"> 
<!-- login -->
        <title>SocialN/W</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="/css/bootstrap.min.css" type="text/css">
        <link rel="stylesheet" href="/css/color.css" type="text/css">
        <script src="/js/jquery.min.js"></script>
        <script src="/js/bootstrap.min.js"></script>
        <script src="/js/TweenLite.min.js"></script>
 
        <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
        <script src="/js/validation.js"></script>
<!-- end -->
    <!-- Fonts -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css" integrity="sha384-XdYbMnZ/QjLh6iI4ogqCTaIjrFk87ip+ekIjefZch0Y+PvJ8CDYtEs1ipDmPorQ+" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700">

    <!-- Styles -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
     
<!-- 
    <style>
        body {
            font-family: 'Lato';
        }

        .fa-btn {
            margin-right: 6px;
        }
    </style> -->
</head>
<body>
  
<!-- header -->
        @yield('header')
<!-- header -->

        <!-- Page Title -->

                     
  
        <div class="page-title-container">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 wow fadeIn">
                     <i class="fa fa-home"></i>
   @yield('breadcrumbs')
                    </div>
                </div>
            </div>
        </div>


<!--    old code ..........................
<body id="app-layout">
    <nav class="navbar navbar-default navbar-static-top" style="background-color:#6f5499; color: #FFFFFF;">
        <div class="container">
            <div class="navbar-header">
-->
                <!-- Collapsed Hamburger -->
<!--                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                    <span class="sr-only">Toggle Navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <!-- Branding Image -->
<!--                <a class="navbar-brand" style="color: #FFFFFF;" href="{{ url('/') }}">
                    Social Networking..
                </a>
            </div>

            <div class="collapse navbar-collapse" id="app-navbar-collapse">
-->                <!-- Left Side Of Navbar -->
<!--                <ul class="nav navbar-nav" >
                    <li><a href="{{ url('/home') }}" style="color: #FFFFFF;">Home</a></li>
                </ul>

-->                <!-- Right Side Of Navbar -->
<!--                <ul class="nav navbar-nav navbar-right">
-->                    <!-- Authentication Links -->
<!--                    @if (Auth::guest())
                        <li><a href="{{ url('/login') }}" style="color: #FFFFFF;">Login</a></li>
                        <li><a href="{{ url('/register') }}" style="color: #FFFFFF;">Register</a></li>
                    @else
                        <li class="dropdown">
-->                            <!-- <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"> -->
<!--                            <a href="" dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" style="color: #FFFFFF;">
                                {{ Auth::user()->username }} <span class="caret"></span>
                            </a>

                            <ul class="dropdown-menu" role="menu">
                                <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Logout</a></li>
                            </ul>
                        </li>
                    @endif
                </ul>
            </div>
        </div>
    </nav>
-->










    @yield('content')

    @yield('footer')
    <!-- JavaScripts -->
  <!--   <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.3/jquery.min.js" integrity="sha384-I6F5OKECLVtK/BL+8iSLDEHowSAfUo76ZL9+kGAgTRdiByINKJaqTPH/QVNS1VDb" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
    {{-- <script src="{{ elixir('js/app.js') }}"></script> --}} -->


        <script src="/js1/jquery-1.11.1.min.js"></script>
        <script src="/bootstrap1/js/bootstrap.min.js"></script>
        <script src="/js1/bootstrap-hover-dropdown.min.js"></script>
        <script src="/js1/jquery.backstretch.min.js"></script>
        <script src="/js1/wow.min.js"></script>
        <script src="/js1/retina-1.1.0.min.js"></script>
        <script src="/js1/jquery.magnific-popup.min.js"></script>
        <script src="/flexslider/jquery.flexslider-min.js"></script>
        <script src="/js1/jflickrfeed.min.js"></script>
        <script src="/js1/masonry.pkgd.min.js"></script>
        <script src="http://maps.google.com/maps/api/js?sensor=true"></script>
        <script src="/js1/jquery.ui.map.min.js"></script>
        <script src="/js1/scripts.js"></script>
</body>
</html>
