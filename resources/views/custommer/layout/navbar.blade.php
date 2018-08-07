
<!--- PRELOADER -->
<div class="preeloader">
    <div class="preloader-spinner"><i class="fa fa-cutlery"></i></div>
</div>

<!--SCROLL TO TOP-->
<a href="#home" class="scrolltotop"><i class="fa fa-long-arrow-up"></i></a>

<!--START TOP AREA-->
<header class="top-area" id="home">

    <div class="header-top-area">
        <div class="top-bar">
            <div class="container">
                <div class="row">
                    <div class="col-md-7 col-lg-6 col-sm-8">
                        <div class="call-to-action">
                            <p><i class="fa fa-envelope-o"></i>Email: woodenhouse492@gmail.com</p>
                            <p><i class="fa fa-phone"></i>Telephone: <a href="callto:+84935103369">+84 935103369</a></p>
                        </div>
                    </div>
                    <div class="col-md-5 col-lg-6 col-sm-4">
                        <div class="book-table-popup">
                            <a href="/reservation">Book a table</a>
                        </div>
                        <div class="top-social-bookmark">
                            <ul>
                                <li><a href="https://www.facebook.com/WoodenHouseCafe/"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="https://www.tripadvisor.com.vn/Restaurant_Review-g298082-d8637759-Reviews-Wooden_House_Cafe_Restaurant-Hoi_An_Quang_Nam_Province.html"><i class="fa fa-tripadvisor"></i></a></li>
                                <li><a href="https://www.google.com/maps/place/Wooden+House+Cafe+%26+Restaurant/@15.8800449,108.3404075,19z/data=!4m19!1m13!4m12!1m3!2m2!1d108.340707!2d15.8806506!1m6!1m2!1s0x31420dd111afbd31:0x407bf02b1280bd02!2zNDkyIEPhu61hIMSQ4bqhaSwgQ-G6qW0gQ2jDonUsIEjhu5lpIEFuLCBRdeG6o25nIE5hbSwgVmnhu4d0IE5hbQ!2m2!1d108.3406855!2d15.8806197!3e0!3m4!1s0x0:0xb160d484033213b3!8m2!3d15.8804802!4d108.3406582"><i class="fa fa-google-plus"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!--MAINMENU AREA-->
        <div class="mainmenu-area" id="mainmenu-area">
            <div class="mainmenu-area-bg"></div>
            <nav class="navbar">
                <div class="container">
                    <div class="navbar-header">
                        <button class="collapsed navbar-toggle" type="button" data-toggle="collapse" data-target=".bs-example-js-navbar-scrollspy">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a href="/" class="navbar-brand"><img src="{{asset('/images/customer/main_logo_black.png')}}" alt="logo"></a>
                        <a href="/" class="navbar-brand white"><img src="{{asset('/images/customer/main_logo.png')}}" alt="logo"></a>
                    </div>
                    <div class="collapse navbar-collapse bs-example-js-navbar-scrollspy">
                        <ul id="nav" class="nav navbar-nav cl-effect-11">
                            <li class="{{activeNav('',Request::segment(1))}}"><a  href="/">Home</a></li>
                            <li class="{{activeNav('about',Request::segment(1))}}"><a href="/about">about us</a></li>
                            <li class="{{activeNav('menu',Request::segment(1))}}"><a href="/menu">Menu</a></li>
                            <li class="{{activeNav('reservation',Request::segment(1))}}"><a href="/reservation">Reservation</a></li>
                            <li class="{{activeNav('review',Request::segment(1))}}"><a href="/review">Review</a></li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
        <!--END MAINMENU AREA END-->
    </div>
        <!--END MAINMENU AREA END-->
    </div>
    <!--HHOME SLIDER AREA-->
    <div class="slider-area">
        <div class="pogoSlider">
            <div class="pogoSlider-slide" data-transition="fade" data-duration="1500" style="background:url(images/customer/slider/slide3.jpg) no-repeat scroll 0 0 / cover;">
                <h2 class="pogoSlider-slide-element" data-in="expand" data-out="expand" data-duration="700">Welcome to</h2>
                <h1 class="pogoSlider-slide-element" data-in="expand" data-out="expand" data-duration="1500"><span>WoodenHouse</span> Cafe & Restaurant</h1>
                <h3 class="pogoSlider-slide-element" data-in="expand" data-out="expand" data-duration="2300"><a href="/reservation">Reservation Now</a></h3>
            </div>
            <div class="pogoSlider-slide" data-transition="fade" style="background:url(images/customer/slider/slide.jpg) no-repeat scroll 0 0 / cover;">
                <h2 class="pogoSlider-slide-element" data-in="expand" data-out="expand" data-duration="700">Our menus</h2>
                <h1 class="pogoSlider-slide-element" data-in="expand" data-out="expand" data-duration="1500">See What's <span>new</span> today</h1>
                <h3 class="pogoSlider-slide-element" data-in="expand" data-out="expand" data-duration="2300"><a href="/menu">Todays Menu</a></h3>
            </div>
            <div class="pogoSlider-slide" data-transition="fade" style="background:url(images/customer/slider/slide2.jpg) no-repeat scroll 0 0 / cover;">
                <h2 class="pogoSlider-slide-element" data-in="expand" data-out="expand" data-duration="700">Get ready</h2>
                <h1 class="pogoSlider-slide-element" data-in="expand" data-out="expand" data-duration="1500">to <span>Join</span> with us</h1>
                <h3 class="pogoSlider-slide-element" data-in="expand" data-out="expand" data-duration="2300"><a href="/reservation">Book A Table</a></h3>
            </div>
        </div>
    </div>
    <!--HOME SLIDER AREA END-->
</header>