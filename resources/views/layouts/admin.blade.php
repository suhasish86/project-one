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
    <!-- meanmenu CSS
    ============================================ -->
    <link rel="stylesheet" href="{{ asset('adminassets/css/meanmenu/meanmenu.min.css') }}">
    <!-- animate CSS
    ============================================ -->
    <link rel="stylesheet" href="{{ asset('adminassets/css/animate.css') }}">
    <!-- normalize CSS
    ============================================ -->
    <link rel="stylesheet" href="{{ asset('adminassets/css/normalize.css') }}">
    <!-- wave CSS
    ============================================ -->
    <link rel="stylesheet" href="{{ asset('adminassets/css/wave/waves.min.css') }}">
    <!-- notika icon CSS
    ============================================ -->
    <link rel="stylesheet" href="{{ asset('adminassets/css/notika-custom-icon.css') }}">
    <!-- main CSS
    ============================================ -->
    <link rel="stylesheet" href="{{ asset('adminassets/css/main.css') }}">
    <!-- style CSS
    ============================================ -->
    <link rel="stylesheet" href="{{ asset('adminassets/css/style.css') }}">
    <!-- responsive CSS
    ============================================ -->
    <link rel="stylesheet" href="{{ asset('adminassets/css/responsive.css') }}">
    <!-- Page specific Css
    ============================================ -->
    @yield('specific_style')

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
                                <li><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
                                <li><a data-toggle="collapse" data-target="#pagemanager" href="#">Email</a>
                                    <ul id="pagemanager" class="collapse dropdown-header-top">
                                        <li><a href="{{ route('admin.pagelist') }}">All Pages</a></li>
                                        <li><a href="{{ route('admin.createpage') }}">Create New</a></li>
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
                        <li class="{{ (request()->is('admin/dashboard')) ? 'active' : '' }}">
                            <a href="{{ route('admin.dashboard') }}"><i class="notika-icon notika-house"></i> Dashboard</a>
                        </li>
                        <li class="{{ (request()->is('admin/pagelist') || request()->is('admin/createpage')) ? 'active' : '' }}">
                            <a data-toggle="tab" href="#pages"><i class="notika-icon notika-mail"></i> Page Manager</a>
                        </li>
                    </ul>
                    <div class="tab-content custom-menu-content">
                        <div id="pages" class="tab-pane {{ (request()->is('admin/pagelist') || request()->is('admin/createpage')) ? 'active' : '' }} notika-tab-menu-bg animated flipInX">
                            <ul class="notika-main-menu-dropdown">
                                <li><a href="{{ route('admin.pagelist') }}">All Pages</a></li>
                                <li><a href="{{ route('admin.createpage') }}">Create New</a></li>
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
        <!-- meanmenu JS
        ============================================ -->
        <script src="{{ asset('adminassets/js/meanmenu/jquery.meanmenu.js') }}"></script>
        <!--  wave JS
		============================================ -->
        <script src="{{ asset('adminassets/js/wave/waves.min.js') }}"></script>
        <!--  notification JS
		============================================ -->
        <script src="{{ asset('adminassets/js/notification/bootstrap-growl.min.js') }}"></script>
        <script src="{{ asset('adminassets/js/admin.utilities.js') }}"></script>
        <!-- icheck JS
        ============================================ -->
        <script src="{{ asset('adminassets/js/icheck/icheck.min.js') }}"></script>
        <!-- Common JS
        ============================================ -->
        <script src="{{ asset('adminassets/js/admin-common.js') }}"></script>
        <!-- AJAX Setup
        ============================================ -->
        <script type="text/javascript">
            var host = "{{ URL::to('/') }}" + "/";
            var error_class = 'form_errorFiled';
            $(function(){
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });
            });
        </script>
        <!-- Page specific Js
		============================================ -->
        @yield('specific_scrypt')

        @yield('page_scrypt')

</body>

</html>
