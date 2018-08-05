<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Admin WoodenHouse</title>
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="icon" href="favicon.ico" type="image/x-icon">
    <link rel="shortcut icon" type="image/ico" href="images/favicon.png" />
    <!-- Favicon -->
    <link rel="stylesheet" href="{{ asset('/admin/plugins/bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{ asset('/admin/plugins/morrisjs/morris.css')}}">
    <link rel="stylesheet" href="{{ asset('/admin/plugins/jvectormap/jquery-jvectormap-2.0.3.min.css')}}">
    <!-- JQuery DataTable Css -->
    <link rel="stylesheet" href="{{ asset('/admin/plugins/jquery-datatable/dataTables.bootstrap4.min.css')}}">
    <!-- Custom Css -->
    <link rel="stylesheet" href="{{ asset('/admin/css/main.css')}}">
    <link rel="stylesheet" href="{{ asset('/admin/css/color_skins.css')}}">
    @yield('css')
    <link rel="stylesheet" href="{{ asset('/admin/css/huy_style.css')}}">

    <noscript></noscript>
<body class="theme-black">
    <div class="page-loader-wrapper">
        <div class="loader">
            <div class="m-t-30"><img src="{{asset('admin/images/logo.svg')}}" width="48" height="48" alt="Alpino"></div>
            <p>Please wait...</p>
        </div>
    </div>
    <div class="overlay"></div>
    <aside id="minileftbar" class="minileftbar">
        <ul class="menu_list">
            <li>
                <a href="javascript:void(0);" class="bars"></a>
                <a class="navbar-brand" href="index.html"><img src="{{asset('admin/images/logo.svg')}}" alt="Alpino"></a>
            </li>
            <li class="menuapp-btn"><a href="javascript:void(0);"><i class="zmdi zmdi-apps"></i></a></li>
            <li class="notifications badgebit">
                <a href="javascript:void(0);">
                    <i class="zmdi zmdi-notifications"></i>
                    <div class="notify">
                        <span class="heartbit"></span>
                        <span class="point"></span>
                    </div>
                </a>
            </li>
            <li class="task badgebit">
                <a href="javascript:void(0);">
                    <i class="zmdi zmdi-flag"></i>
                    <div class="notify">
                        <span class="heartbit"></span>
                        <span class="point"></span>
                    </div>
                </a>
            </li>
            <li><a href="javascript:void(0);" class="fullscreen" data-provide="fullscreen"><i class="zmdi zmdi-fullscreen"></i></a></li>
            <li class="power">
                <a href="{{url('admin/logout')}}" class="mega-menu"><i class="zmdi zmdi-power"></i></a>
            </li>
        </ul>
    </aside>
    <aside class="right_menu">
        <div class="menu-app">
            <div class="slim_scroll">
                <div class="card">
                    <div class="header">
                        <h2><strong>App</strong> Menu</h2>
                    </div>
                    <div class="body">
                        <ul class="list-unstyled menu">
                            <li><a href="events.html"><i class="zmdi zmdi-calendar-note"></i><span>Calendar</span></a></li>
                            <li><a href="file-dashboard.html"><i class="zmdi zmdi-file-text"></i><span>File Manager</span></a></li>
                            <li><a href="blog-dashboard.html"><i class="zmdi zmdi-blogger"></i><span>Blog</span></a></li>
                            <li><a href="javascript:void(0)"><i class="zmdi zmdi-arrows"></i><span>Notes</span></a></li>
                            <li><a href="javascript:void(0)"><i class="zmdi zmdi-view-column"></i><span>Taskboard</span></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        @include('admin.layout.navbar')
    </aside>

    @yield('content')

    <script src="{{ asset('/admin/bundles/libscripts.bundle.js') }}"></script>
    <script src="{{ asset('/admin/bundles/vendorscripts.bundle.js') }}"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
        (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','../www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-42863888-9', 'auto');
    ga('send', 'pageview');
</script>

@yield('javascript')
</body>
</html>

