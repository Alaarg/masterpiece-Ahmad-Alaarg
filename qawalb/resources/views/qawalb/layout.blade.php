<!doctype html>
<html class="no-js" lang="">
<meta http-equiv="content-type" content="text/html;charset=UTF-8"/><!-- /Added by HTTrack -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>@yield('title' , 'Qawalb | قوالب') </title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.png">
    <!-- Normalize CSS -->
    <link rel="stylesheet" href="{{ url('/admin-assets/css/style.css') }}">
    <!-- Main CSS -->
    <link rel="stylesheet" href="{{ url('/admin-assets/css/main.css') }}">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ url('/admin-assets/css/bootstrap.min.css')}}">
    <!-- Animate CSS -->
    <link rel="stylesheet" href="{{ url('/admin-assets/css/animate.min.css')}}">
    <!-- Font-awesome CSS-->
    <link rel="stylesheet" href="{{ url('/admin-assets/css/font-awesome.min.css')}}">
    <!-- Owl Caousel CSS -->
    <link rel="stylesheet" href="{{ url('/admin-assets/vendor/OwlCarousel/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{ url('/admin-assets/vendor/OwlCarousel/owl.theme.default.min.css')}}">
    <!-- Main Menu CSS -->
    <link rel="stylesheet" href="{{ url('/admin-assets/css/meanmenu.min.css')}}">
    <!-- Datetime Picker Style CSS -->
    <link rel="stylesheet" href="{{ url('/admin-assets/css/jquery.datetimepicker.css')}}">
    <!-- Switch Style CSS -->
    <link rel="stylesheet" href="{{ url('/admin-assets/css/hover-min.css')}}">
    <!-- ReImageGrid CSS -->
    <link rel="stylesheet" href="{{ url('/admin-assets/css/reImageGrid.css')}}">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ url('/admin-assets/css/style.css')}}">
    <!-- Modernizr Js -->
    <script src="{{ url('/admin-assets/js/modernizr-2.8.3.min.js')}}"></script>
</head>

<body>
<!--[if lt IE 8]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade
    your browser</a> to improve your experience.</p>
<![endif]-->
<!-- Add your site or application content here -->
<!-- Preloader Start Here -->
<div id="preloader"></div>
<!-- Preloader End Here -->


<div id="wrapper">
    <!-- Header Area Start Here -->
    <header>
        <div id="header2" class="header2-area right-nav-mobile">
            <div class="header-top-bar">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-2 col-md-2 col-sm-2 hidden-xs">
                            <div class="logo-area">
                                <a href="/"><img class="img-responsive" src="img/logo.png" alt="logo" width="70"></a>
                            </div>
                        </div>
                        <div class="col-lg-10 col-md-10 col-sm-10 col-xs-12">
                            <ul class="profile-notification">
                                @guest
                                    <li>
                                        <div class="apply-btn-area">
                                            <a class="apply-now-btn" href="/login">Login</a>

                                        </div>
                                    </li>

                                    @if (Route::has('register'))


                                        <li><a class="apply-now-btn-color" href="/register">Register</a>

                                            <!-- Modal -->


                                        </li>
                                    @endif
                                @else

                                    <li>
                                        <div class="user-account-info">
                                            <div class="user-account-info-controler">
                                                <div class="user-account-img">
                                                    <img class="img-responsive" src="img/profile/4.png" alt="profile">
                                                </div>
                                                <div class="user-account-title">
                                                    <div class="user-account-name">{{ Auth::user()->name }}</div>
                                                </div>
                                                <div class="user-account-dropdown">
                                                    <i class="fa fa-angle-down" aria-hidden="true"></i>
                                                </div>
                                            </div>
                                            <ul>
                                            <li><a href="/profile">Profile Page</a></li>
                                                <li><a href="/create">Upload Templet</a></li>
                                                <li>

                                                    <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                                        {{ __('Logout') }}
                                                    </a>
                                                    <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                                          style="display: none;">
                                                        @csrf
                                                    </form>
                                                </li>

                                            </ul>
                                        </div>
                                    </li>
                                @endguest

                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="main-menu-area bg-primaryText" id="sticker">
                <div class="container">
                    <nav id="desktop-nav">
                        <ul>
                            <li class="active"><a href="/">Home</a>
                            <li class="active"><a href="/shop">Shop</a>

                            </li>

                        </ul>
                    </nav>
                </div>
            </div>
        </div>
        <!-- Mobile Menu Area Start -->
        <div class="mobile-menu-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="mobile-menu">
                            <nav id="dropdown">
                                <ul>
                                    <li class="active"><a href="/">Home</a>
                                        <ul>
                                            <li><a href="index.html">Home 1</a></li>
                                            <li><a href="index2.html">Home 2</a></li>
                                        </ul>
                                    </li>

                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Mobile Menu Area End -->
    </header>
    <!-- Header Area End Here -->

@yield('content')


<!-- Footer Area Start Here -->
    <footer>
        <div class="footer-area-top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-3 col-sm-6 col-xs-12">
                        <div class="footer-box">
                            <h3 class="title-bar-left title-bar-footer">Our Address</h3>
                            <ul class="corporate-address">
                                <li><i class="fa fa-map-marker" aria-hidden="true"></i><a
                                        href="Phone(01)800433633.html">PO Box 16122 Collins Street West Victoria
                                        8007
                                        Australia</a></li>
                                <li><i class="fa fa-phone" aria-hidden="true"></i>+61 3 8376 6284</li>
                                <li><i class="fa fa-fax" aria-hidden="true"></i>+61 3 8376 6284</li>
                                <li><i class="fa fa-envelope-o" aria-hidden="true"></i>info@foxtar.com</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-3 col-sm-6 col-xs-12">
                        <div class="footer-box">
                            <h3 class="title-bar-left title-bar-footer">Need Help?</h3>
                            <ul class="featured-links">
                                <li>
                                    <ul>
                                        <li><a href="#">Help Center</a></li>
                                        <li><a href="#">Foxtar Market Terms</a></li>
                                        <li><a href="#">Author Terms</a></li>
                                        <li><a href="#">Foxtar Licenses</a></li>
                                        <li><a href="#">Contact Us</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-3 col-sm-6 col-xs-12">
                        <div class="footer-box">
                            <h3 class="title-bar-left title-bar-footer">Follow Us On</h3>
                            <ul class="footer-social">
                                <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-youtube-play" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-area-bottom">
            <div class="container">
                <p>@ 2020 Qawalb market place. Developed & Designed by Alaarg
                </p>
            </div>
        </div>
    </footer>
    <!-- Footer Area End Here -->
</div>


<!-- jquery-->
<script src="{{ url('/admin-assets/js/jquery-2.2.4.min.js')}}" type="text/javascript"></script>
<!-- Plugins js -->
<script src="{{ url('/admin-assets/js/plugins.js')}}" type="text/javascript"></script>
<!-- Bootstrap js -->
<script src="{{ url('/admin-assets/js/bootstrap.min.js')}}" type="text/javascript"></script>
<!-- WOW JS -->
<script src="{{ url('/admin-assets/js/wow.min.js')}}"></script>
<!-- Owl Cauosel JS -->
<script src="{{ url('/admin-assets/vendor/OwlCarousel/owl.carousel.min.js')}}" type="text/javascript"></script>
<!-- Meanmenu Js -->
<script src="{{ url('/admin-assets/js/jquery.meanmenu.min.js')}}" type="text/javascript"></script>
<!-- Srollup js -->
<script src="{{ url('/admin-assets/js/jquery.scrollUp.min.js')}}" type="text/javascript"></script>
<!-- jquery.counterup js -->
<script src="{{ url('/admin-assets/js/jquery.counterup.min.js')}}"></script>
<script src="{{ url('/admin-assets/js/waypoints.min.js')}}"></script>
<!-- Isotope js -->
<script src="{{ url('/admin-assets/js/isotope.pkgd.min.js')}}" type="text/javascript"></script>
<!-- Gridrotator js -->
<script src="{{ url('/admin-assets/js/jquery.gridrotator.js')}}" type="text/javascript"></script>
<!-- Custom Js -->
<script src="{{ url('/admin-assets/js/main.js')}}" type="text/javascript"></script>
</body>

</html>
