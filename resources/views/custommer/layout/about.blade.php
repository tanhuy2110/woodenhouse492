@extends ('custommer.layout.main_layout_site')
@section('content')
    <!--ABOUT AREA-->
    <section class="about-area section-padding">
        <div class="container wow fadeIn">
            <div class="row">
                <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
                    <div class="area-title">
                        <h2>Our <span>Story</span></h2>
                    </div>
                    <div class="about-content">
                        <p>Wooden House Restaurant & Coffee established sine Junly 2015. It's a place where you can have coffee, coocktail, beer,... and great dining in Western and Viet Nam menu with your family and friends for a quiet and romantic evening</p>
                    </div>

                </div>
                <div class="col-md-4 col-lg-4 col-md-offset-1 col-lg-offset-1 col-sm-12 col-xs-12 hidden-xs">
                    <div class="about-video">
                        <img src="{{asset('/images/customer/about/about_circle.png')}}" alt="">
                        <a href="https://www.youtube.com/watch?v=H6Yjc37axBY" class="about-video-button" data-effect="mfp-zoom-in"><i class="fa fa-play"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--ABOUT AREA END-->

    <!--COUNTER AREA-->
    <div class="counter-area section-padding">
        <div class="count-area-bg" style="background-image: url('/images/customer/about/about_counter_bgr.jpg')"></div>
        <div class="container wow fadeIn">
            <div class="row">
                <div class="col-md-4 col-lg-4 col-sm-6 col-xs-12">
                    <div class="single-counter text-center">
                        <div class="counter-icon"><i class="fa fa-users"></i></div>
                        <h3 class="counter">8.900</h3>
                        <p>Customer</p>
                    </div>
                </div>
                <div class="col-md-4 col-lg-4 col-sm-6 col-xs-12">
                    <div class="single-counter text-center">
                        <div class="counter-icon"><i class="fa fa-flag-o"></i></div>
                        <h3 class="counter">25</h3>
                        <p>Country</p>
                    </div>
                </div>
                <div class="col-md-4 col-lg-4 col-sm-6 col-xs-12">
                    <div class="single-counter text-center">
                        <div class="counter-icon"><i class="fa fa-newspaper-o"></i></div>
                        <h3 class="counter">414</h3>
                        <p>Review</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--COUNTER AREA END-->
    <section class="team-area section-padding">
        <div class="container wow fadeIn" style="visibility: visible; animation-name: fadeIn;">
            <div class="row">
                <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                    <div class="area-title text-center">
                        <h2>Hour Open</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-xs-5 day-opent">
                    <p><strong>Sunday:</strong></p>
                    <p><strong>Monday:</strong></p>
                    <p><strong>Tuesday:</strong></p>
                    <p><strong>Wednesday:</strong></p>
                    <p><strong>Thursday:</strong></p>
                    <p><strong>Friday:</strong></p>
                    <p><strong>Saturday:</strong></p>
                </div>
                <div class="col-md-6 col-xs-6 hour-opent">
                    <p><a>11h00 - 20h00</a></p>
                    <p><a>11h00 - 20h00</a></p>
                    <p><a>11h00 - 20h00</a></p>
                    <p><a>Off All Day</a></p>
                    <p><a>11h00 - 20h00</a></p>
                    <p><a>11h00 - 20h00</a></p>
                    <p><a>11h00 - 20h00</a></p>
                </div>
            </div>
        </div>
    </section>
    <!--PROMOTIONS AREA-->
    <section class="contact-area home-three section-padding">
        <div class="container wow fadeIn">
            <div class="row">
                <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12">
                    <div class="single-contact-widget address-widget text-center">
                        <div class="contact-icon">
                            <i class="fa fa-map-marker"></i>
                        </div>
                        <address>492 Cua Dai Street, Hoi An, Quang Nam, VN.</address>
                    </div>
                </div>
                <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12">
                    <div class="single-contact-widget address-widget text-center">
                        <div class="contact-icon">
                            <i class="fa fa-phone"></i>
                        </div>
                        <a href="callto:+84935103369">+84.935 103 369</a>
                    </div>
                </div>
                <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12">
                    <div class="single-contact-widget address-widget text-center">
                        <div class="contact-icon">
                            <i class="fa fa-envelope"></i>
                        </div>
                        <a href="#">woodenhouse492@gmail.com</a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3837.54516012438!2d108.33846951531049!3d15.880485348685554!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31420dd111ab68d1%3A0xb160d484033213b3!2sWooden+House+Cafe+%26+Restaurant!5e0!3m2!1svi!2s!4v1532427866618" width="100%" height="400px" frameborder="0" style="border:0" allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </section>
    <!--PROMOTIONS AREA END-->
@endsection