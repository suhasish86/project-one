<!doctype html>
<html class="no-js" lang="">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>@yield('pagetitle')</title>
    <meta name="description" content="Admin pages.">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <!-- favicon
		============================================ -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('adminassets/img/favicon.ico') }}">
    <!-- Google Fonts
		============================================ -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,700,900" rel="stylesheet">
    <!-- Bootstrap CSS
		============================================ -->
    <link rel="stylesheet" href="{{ asset('adminassets/css/bootstrap.min.css') }}">
    <!-- Bootstrap CSS
		============================================ -->
    <link rel="stylesheet" href="{{ asset('adminassets/css/font-awesome.min.css') }}">
    <!-- owl.carousel CSS
		============================================ -->
    <link rel="stylesheet" href="{{ asset('adminassets/css/owl.carousel.css') }}">
    <link rel="stylesheet" href="{{ asset('adminassets/css/owl.theme.css') }}">
    <link rel="stylesheet" href="{{ asset('adminassets/css/owl.transitions.css') }}">
    <!-- meanmenu CSS
		============================================ -->
    <link rel="stylesheet" href="{{ asset('adminassets/css/meanmenu/meanmenu.min.css') }}">
    <!-- animate CSS
		============================================ -->
    <link rel="stylesheet" href="{{ asset('adminassets/css/animate.css') }}">
    <!-- normalize CSS
		============================================ -->
    <link rel="stylesheet" href="{{ asset('adminassets/css/normalize.css') }}">
    <!-- mCustomScrollbar CSS
		============================================ -->
    <link rel="stylesheet" href="{{ asset('adminassets/css/scrollbar/jquery.mCustomScrollbar.min.css') }}">
    <!-- jvectormap CSS
		============================================ -->
    <link rel="stylesheet" href="{{ asset('adminassets/css/jvectormap/jquery-jvectormap-2.0.3.css') }}">
    <!-- notika icon CSS
		============================================ -->
    <link rel="stylesheet" href="{{ asset('adminassets/css/notika-custom-icon.css') }}">
    <!-- wave CSS
		============================================ -->
    <link rel="stylesheet" href="{{ asset('adminassets/css/wave/waves.min.css') }}">
    <!-- main CSS
		============================================ -->
    <link rel="stylesheet" href="{{ asset('adminassets/css/main.css') }}">
    <!-- style CSS
		============================================ -->
    <link rel="stylesheet" href="{{ asset('adminassets/css/style.css') }}">
    <!-- responsive CSS
		============================================ -->
    <link rel="stylesheet" href="{{ asset('adminassets/css/responsive.css') }}">
    <!-- modernizr JS
		============================================ -->
    <script src="{{ asset('adminassets/js/vendor/modernizr-2.8.3.min.js') }}"></script>
</head>

<body>
    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
    <!-- Start Header Top Area -->
    <div class="header-top-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <div class="logo-area">
                        <a href="#"><img src="{{ asset('adminassets/img/logo/logo.png') }}" alt="" /></a>
                    </div>
                </div>
                <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                    <div class="header-top-menu">
                        <ul class="nav navbar-nav notika-top-nav">
                            <li class="nav-item dropdown">
                                <a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><span><i class="notika-icon notika-search"></i></span></a>
                                <div role="menu" class="dropdown-menu search-dd animated flipInX">
                                    <div class="search-input">
                                        <i class="notika-icon notika-left-arrow"></i>
                                        <input type="text" />
                                    </div>
                                </div>
                            </li>
                            <li class="nav-item dropdown">
                                <a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><span><i class="notika-icon notika-settings"></i></span></a>
                                <div role="menu" class="dropdown-menu message-dd animated zoomIn">
                                    <div class="hd-mg-tt">
                                        <h2>Settings</h2>
                                    </div>
                                    <div class="hd-message-info">
                                        <a href="{{ route('logout') }}" onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">
                                            <div class="hd-message-sn">
                                                <div class="hd-mg-ctn">
                                                    <h3>Log Out</h3>
                                                </div>
                                            </div>
                                        </a>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            @csrf
                                        </form>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Header Top Area -->
    <!-- Mobile Menu start -->
    <div class="mobile-menu-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="mobile-menu">
                        <nav id="dropdown">
                            <ul class="mobile-menu-nav">
                                <li><a data-toggle="collapse" data-target="#Charts" href="#">Home</a>
                                    <ul class="collapse dropdown-header-top">
                                        <li><a href="index.html">Dashboard One</a></li>
                                        <li><a href="index-2.html">Dashboard Two</a></li>
                                        <li><a href="index-3.html">Dashboard Three</a></li>
                                        <li><a href="index-4.html">Dashboard Four</a></li>
                                        <li><a href="analytics.html">Analytics</a></li>
                                        <li><a href="widgets.html">Widgets</a></li>
                                    </ul>
                                </li>
                                <li><a data-toggle="collapse" data-target="#demoevent" href="#">Email</a>
                                    <ul id="demoevent" class="collapse dropdown-header-top">
                                        <li><a href="inbox.html">Inbox</a></li>
                                        <li><a href="view-email.html">View Email</a></li>
                                        <li><a href="compose-email.html">Compose Email</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Mobile Menu end -->
    <!-- Main Menu area start-->
    <div class="main-menu-area mg-tb-40">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <ul class="nav nav-tabs notika-menu-wrap menu-it-icon-pro">
                        <li class="active"><a data-toggle="tab" href="#Home"><i class="notika-icon notika-house"></i> Home</a>
                        </li>
                        <li><a data-toggle="tab" href="#mailbox"><i class="notika-icon notika-mail"></i> Email</a>
                        </li>
                    </ul>
                    <div class="tab-content custom-menu-content">
                        <div id="Home" class="tab-pane in active notika-tab-menu-bg animated flipInX">
                            <ul class="notika-main-menu-dropdown">
                                <li><a href="index.html">Dashboard One</a>
                                </li>
                                <li><a href="index-2.html">Dashboard Two</a>
                                </li>
                                <li><a href="index-3.html">Dashboard Three</a>
                                </li>
                                <li><a href="index-4.html">Dashboard Four</a>
                                </li>
                                <li><a href="analytics.html">Analytics</a>
                                </li>
                                <li><a href="widgets.html">Widgets</a>
                                </li>
                            </ul>
                        </div>
                        <div id="mailbox" class="tab-pane notika-tab-menu-bg animated flipInX">
                            <ul class="notika-main-menu-dropdown">
                                <li><a href="inbox.html">Inbox</a>
                                </li>
                                <li><a href="view-email.html">View Email</a>
                                </li>
                                <li><a href="compose-email.html">Compose Email</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Main Menu area End-->


    <!-- Start Main Content area -->
    @yield('content')
    <!-- End Main Content area-->


    <!-- Start Footer area-->
    <div class="footer-copyright-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="footer-copy-right">
                        <p>Copyright © 2018
. All rights reserved. Template by <a href="https://colorlib.com">Colorlib</a>.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Footer area-->
    <!-- jquery
		============================================ -->
        <script src="{{ asset('adminassets/js/vendor/jquery-1.12.4.min.js') }}"></script>
        <!-- bootstrap JS
            ============================================ -->
        <script src="{{ asset('adminassets/js/bootstrap.min.js') }}"></script>
        <!-- wow JS
            ============================================ -->
        <script src="{{ asset('adminassets/js/wow.min.js') }}"></script>
        <!-- price-slider JS
            ============================================ -->
        <script src="{{ asset('adminassets/js/jquery-price-slider.js') }}"></script>
        <!-- owl.carousel JS
            ============================================ -->
        <script src="{{ asset('adminassets/js/owl.carousel.min.js') }}"></script>
        <!-- scrollUp JS
            ============================================ -->
        <script src="{{ asset('adminassets/js/jquery.scrollUp.min.js') }}"></script>
        <!-- meanmenu JS
            ============================================ -->
        <script src="{{ asset('adminassets/js/meanmenu/jquery.meanmenu.js') }}"></script>
        <!-- counterup JS
            ============================================ -->
        <script src="{{ asset('adminassets/js/counterup/jquery.counterup.min.js') }}"></script>
        <script src="{{ asset('adminassets/js/counterup/waypoints.min.js') }}"></script>
        <script src="{{ asset('adminassets/js/counterup/counterup-active.js') }}"></script>
        <!-- mCustomScrollbar JS
            ============================================ -->
        <script src="{{ asset('adminassets/js/scrollbar/jquery.mCustomScrollbar.concat.min.js') }}"></script>
        <!-- jvectormap JS
            ============================================ -->
        <script src="{{ asset('adminassets/js/jvectormap/jquery-jvectormap-2.0.2.min.js') }}"></script>
        <script src="{{ asset('adminassets/js/jvectormap/jquery-jvectormap-world-mill-en.js') }}"></script>
        <script src="{{ asset('adminassets/js/jvectormap/jvectormap-active.js') }}"></script>
        <!-- sparkline JS
            ============================================ -->
        <script src="{{ asset('adminassets/js/sparkline/jquery.sparkline.min.js') }}"></script>
        <script src="{{ asset('adminassets/js/sparkline/sparkline-active.js') }}"></script>
        <!-- sparkline JS
            ============================================ -->
        <script src="{{ asset('adminassets/js/flot/jquery.flot.js') }}"></script>
        <script src="{{ asset('adminassets/js/flot/jquery.flot.resize.js') }}"></script>
        <script src="{{ asset('adminassets/js/flot/curvedLines.js') }}"></script>
        <script src="{{ asset('adminassets/js/flot/flot-active.js') }}"></script>
        <!-- knob JS
            ============================================ -->
        <script src="{{ asset('adminassets/js/knob/jquery.knob.js') }}"></script>
        <script src="{{ asset('adminassets/js/knob/jquery.appear.js') }}"></script>
        <script src="{{ asset('adminassets/js/knob/knob-active.js') }}"></script>
        <!--  wave JS
            ============================================ -->
        <script src="{{ asset('adminassets/js/wave/waves.min.js') }}"></script>
        <script src="{{ asset('adminassets/js/wave/wave-active.js') }}"></script>
        <!--  todo JS
            ============================================ -->
        <script src="{{ asset('adminassets/js/todo/jquery.todo.js') }}"></script>
        <!-- plugins JS
            ============================================ -->
        <script src="{{ asset('adminassets/js/plugins.js') }}"></script>
        <!--  Chat JS
            ============================================ -->
        <script src="{{ asset('adminassets/js/chat/moment.min.js') }}"></script>
        <script src="{{ asset('adminassets/js/chat/jquery.chat.js') }}"></script>
        <!-- main JS
            ============================================ -->
        <script src="{{ asset('adminassets/js/main.js') }}"></script>

        <!-- tawk chat JS
            ============================================ -->
        {{-- <script src="{{ asset('adminassets/js/tawk-chat.js') }}"></script> --}}
</body>

</html>
