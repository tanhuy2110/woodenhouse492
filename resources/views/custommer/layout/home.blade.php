@extends ('custommer.layout.main_layout_site')
@section('content')
<section class="about-area section-padding">
    <div class="container wow fadeIn">
        <div class="row">
            <div class="col-md-5 col-lg-6 col-sm-12 col-xs-12">
                <div class="area-title">
                    <h2>Our <span>Story</span></h2>
                </div>
                <div class="about-content">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident.</p>
                    <a href="/about" class="read-more">Read more</a>
                </div>
            </div>
            <div class="col-md-7 col-lg-6 col-sm-12 col-xs-12">
                <div class="row row-flex">
                    <div class="col-md-6 col-lg-6 col-sm-6 col-xs-12">
                        <div class="about-img">
                            <img src="/images/customer/about/about3.jpg" alt="">
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-sm-6 col-xs-12">
                        <div class="about-img-bottom">
                            <div class="about-img about-max">
                                <img class="about-max" src="/images/customer/about/about5.jpg" alt="">
                            </div>
                        </div>
                        <div class="about-img-top">
                            <div class="about-img about-max">
                                <img class="about-max" src="/images/customer/about/about2.jpg" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="promotions-area section-padding">
    <div class="promotion-area-bg"></div>
    <div class="container wow fadeIn">
        <div class="row">
            <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                <div class="area-title text-center">
                    <h2>Specials</h2>
                    <h3>Specials Promotion</h3>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12">
                <div class="single-promotions text-center">
                    <div class="promotions-img" >
                        <img  src="{{asset('/images/customer/review/reviewGoogle.jpg')}}" alt="" style="height: 220px">
                    </div>
                    <div class="promotions-details">
                        <h4>White Rose</h4>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12">
                <div class="single-promotions text-center">
                    <div class="promotions-img">
                        <img  src="{{asset('/images/customer/review/reviewGoogle2.jpg')}}" alt="" style="height: 220px">
                    </div>
                    <div class="promotions-details">
                        <h4>Rice Pancake</h4>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12">
                <div class="single-promotions text-center">
                    <div class="promotions-img">
                        <img src="{{asset('/images/customer/review/reviewTrip3.jpg')}}" alt="" style="height: 220px">
                    </div>
                    <div class="promotions-details">
                        <h4>Wonton</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="event-area section-padding">
    <div class="event-area-bg"></div>
    <div class="container wow fadeIn">
        <div class="row">
            <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                <div class="area-title text-center">
                    <h2>Review</h2>
                    <h3>From Tripadvisor</h3>
                </div>
            </div>
        </div>
        <div class="row event-list">
            <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                <div class="single-event">
                    <div class="event-img">
                        <img src="{{asset('/images/customer/event/event_1.jpg')}}" alt="">
                    </div>
                    <div class="event-content">
                        <div class="event-date">
                            <p><span>28</span>Junly 2018</p>
                        </div>
                        <div class="event-details">
                            <h3><a href="https://www.tripadvisor.com.vn/ShowUserReviews-g298082-d8637759-r600447866-Wooden_House_Cafe_Restaurant-Hoi_An_Quang_Nam_Province.html">Lovely restaurant</a></h3>
                            <span class="stars" data-rating="5" data-num-stars="5" ></span>
                            <p class="event-meta"><a href="https://www.tripadvisor.com.vn/members/SophieElizabeth123">SophieElizabeth123, </a> Manchester - England</p>
                            <p>My partner and I visited this restaurant a few nights ago and the food was some of the nicest, most authentic Vietnamese food we have had in Hoi An. The Cau Lao was fantastic, and the garlic prawns also delicious. The waiters were really lovely and attentive and the restaurant had a fair few fans which were greatly appreciated in the heat! Would strongly recommend visiting this place if you’re in the area.</p>
                        </div>
                    </div>
                </div>
                <div class="single-event">
                    <div class="event-img">
                        <img src="{{asset('/images/customer/event/event_2.jpg')}}" alt="">
                    </div>
                    <div class="event-content">
                        <div class="event-date">
                            <p><span>27</span>Junly 2018</p>
                        </div>
                        <div class="event-details">
                            <h3><a href="https://www.tripadvisor.com.vn/ShowUserReviews-g298082-d8637759-r600118720-Wooden_House_Cafe_Restaurant-Hoi_An_Quang_Nam_Province.html">Best Food in the Nighborhood!</a></h3>
                            <span class="stars" data-rating="5" data-num-stars="5" ></span>
                            <p class="event-meta"><a href="https://www.tripadvisor.com.vn/members/452triciah">Tricia H </a>, Korea</p>
                            <p>We went here three times during our stay. The food was consistently delicious. The restaurant was adorable and clean. The family runs it right out of their home so it feels comfortable... plus the birds and fish add up to an excellent ambience! Highly recommend!</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="team-area section-padding">
    <div class="container wow fadeIn">
        <div class="row">
            <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                <div class="area-title text-center">
                    <h2>Wellcome To Hoi An!</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="video-responsive">
                <iframe width="1280" height="720" src="https://www.youtube.com/embed/fNOfkNc9AJE" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
            </div>
        </div>
    </div>
</section>
<!--TEAM AREA END-->
@endsection
@section('javascript')
    <script>
        $.fn.stars = function() {
            return $(this).each(function() {
                var rating = $(this).data("rating");
                var numStars = $(this).data("numStars");
                var fullStar = new Array(Math.floor(rating + 1)).join('<i class="fa fa-star star-yellow"></i>');
                var noStar = new Array(Math.floor(numStars + 1 - rating)).join('<i class="fa fa-star-o"></i>');
                $(this).html(fullStar + noStar);
            });
        }
        $('.stars').stars();
    </script>
@endsection