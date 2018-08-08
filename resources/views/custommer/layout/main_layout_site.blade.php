<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Wooden House Restaurant</title>
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <meta name="description" content="Responsive Bootstrap 4">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="icon" href="favicon.ico" type="image/x-icon">
    <link rel="shortcut icon" type="image/ico" href="images/customer/favicon.png" />
    <!-- Custom Css -->
    <link rel="stylesheet" href="{{ asset('/css/customer/normalize.css')}}">
    <link rel="stylesheet" href="{{ asset('/css/customer/animate.css')}}">
    <link rel="stylesheet" href="{{asset('/css/customer/pogo-slider.css')}}"/>
    <link rel="stylesheet" href="{{asset('/css/customer/owl.carousel.css')}}"/>
    <link rel="stylesheet" href="{{asset('/css/customer/timepicker.min.css')}}">
    <link rel="stylesheet" href="{{asset('/css/customer/magnific-popup.css')}}"/>
    <link rel="stylesheet" href="{{asset('/css/customer/jPages.css')}}"/>
    <link rel="stylesheet" href="{{asset('/css/customer/bootstrap.min.css')}}"/>
    <link rel="stylesheet" href="{{asset('/css/customer/customDatepicker.css')}}"/>
    <link rel="stylesheet" href="{{asset('/css/font-awesome.min.css')}}"/>


    <!--====== MAIN STYLESHEETS ======-->
    <link href="{{asset('/css/customer/style.css')}}" rel="stylesheet">
    <link href="{{asset('/css/customer/responsive.css')}}" rel="stylesheet">

    <script>
        var ROOT_URL = "{{ url('/') }}";
    </script>

    <noscript></noscript>
</head>
<body class="theme-black">
    @include('custommer.layout.navbar')
    @yield('content')
    @include('custommer.layout.FOOTER')

    <!--====== SCRIPTS JS ======-->
    <script src="{{asset('/js/customer/vendor/jquery-1.12.4.min.js')}}"></script>
    <script src="{{asset('/js/customer/vendor/bootstrap.min.js')}}"></script>

    <!--====== PLUGINS JS ======-->
    <script src="{{asset('/js/customer/vendor/jquery.easing.1.3.js')}}"></script>
    <script src="{{asset('/js/customer/vendor/jquery-migrate-1.2.1.min.js')}}"></script>
    <script src="{{asset('/js/customer/vendor/modernizr-2.8.3.min.js')}}"></script>
    <script src="{{asset('/js/customer/jquery.pogo-slider.js')}}"></script>
    <script src="{{asset('/js/customer/owl.carousel.min.js')}}"></script>
    <script src="{{asset('/js/customer/jquery.mixitup.min.js')}}"></script>
    <script src="{{asset('/js/customer/spectragram.js')}}"></script>
    <script src="{{asset('/js/customer/jquery.magnific-popup.min.js')}}"></script>
    <script src="{{asset('/js/customer/datepicker.min.js')}}"></script>
    <script src="{{asset('/js/customer/timepicker.min.js')}}"></script>
    <script src="{{asset('/js/customer/waypoints.min.js')}}"></script>
    <script src="{{asset('/js/customer/jquery.counterup.min.js')}}"></script>
    <script src="{{asset('/js/customer/wow.min.js')}}"></script>
    <script src="{{asset('/js/customer/jquery.sticky.js')}}"></script>
    <script src="{{asset('js/customer/jPages.min.js')}}"></script>
    <!--===== ACTIVE JS=====-->
    <script src="{{asset('js/customer/main.js')}}"></script>
    @yield('javascript')
</body>
</html>

