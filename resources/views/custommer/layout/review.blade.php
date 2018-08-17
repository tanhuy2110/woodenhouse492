@extends ('custommer.layout.main_layout_site')
@section ('title', 'Review - Wooden House Restaurant')
@section('content')
    <section class="events-page event-area section-padding">
        <div class="container wow fadeIn">
            <div class="row">
                <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                    <div class="area-title text-center">
                        <h3>Reviews</h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                    <ul class="event-menu">
                        <li><a data-toggle="tab" href="#review_google">Google Map</a></li>
                        <li class="active"><a data-toggle="tab" href="#review_tripadvisor">Tripadvisor</a></li>
                        <li><a data-toggle="tab" href="#review_facebook">Facebook</a></li>
                    </ul>
                </div>
            </div>
            <div class="row event-list tab-content">
                <!--Review From Google Map-->
                <div id="review_google" class="col-md-12 col-lg-12 col-sm-12 col-xs-12 tab-pane fade in">
                    <div class="single-event">
                        <div class="event-img">
                            <img src="{{asset('images/customer/review/reviewGoogle.jpg')}}" alt="">
                        </div>
                        <div class="event-content">
                            <div class="event-date">
                                <p><span>7</span>Junly</p>
                            </div>
                            <div class="event-details">
                                <h3><a href="https://goo.gl/maps/Ybd8RWukCqk">최창희</a></h3>
                                <span class="stars" data-rating="5" data-num-stars="5" ></span>
                                <p class="event-meta">7 Junly 2018 </p>
                                <p>숙소랑 쫌 멀었지만 리뷰보고 갔어요~
                                    카오라우랑 화이트로즈 반쎄오 먹었는데 정말 만족스럽게 잘먹고왔어요.  꼭 가보길 추천해요!</p>
                                <p>It was far from the hotel, but I went to see the reviews. I eat Cao Lau and White Rose. I recommend you to go!</p>
                            </div>
                        </div>
                    </div>
                    <div class="single-event">
                        <div class="event-img">
                            <img src="{{asset('images/customer/review/reviewGoogle2.jpg')}}" alt="">
                        </div>
                        <div class="event-content">
                            <div class="event-date">
                                <p><span>4</span>February</p>
                            </div>
                            <div class="event-details">
                                <h3><a href="https://goo.gl/maps/ZfKZfwYT8BP2">Eunhee Lee</a></h3>
                                <span class="stars" data-rating="5" data-num-stars="5" ></span>
                                <p class="event-meta">4 February 2018</p>
                                <p>맛도 깔끔하고 나름 고급스러운 분위기의 베트남 식당입니다. 모닝글로리 볶음 너무 맛있어요. 간도 적당하고 손님 많지 않아 조용히 식사할 수 있어요.</p>
                                <p>It is a Vietnamese restaurant with a tasteful and clean atmosphere. Morning glory stir fry so delicious. I can eat quietly because there are not many people who are reasonable.</p>
                            </div>
                        </div>
                    </div>
                    <div class="single-event">
                        <div class="event-img">
                            <img src="{{asset('images/customer/review/reviewGoogle3.jpg')}}" alt="">
                        </div>
                        <div class="event-content">
                            <div class="event-date">
                                <p><span>7</span>June</p>
                            </div>
                            <div class="event-details">
                                <h3><a href="https://goo.gl/maps/uJFdLUaZNx52">최경진</a></h3>
                                <span class="stars" data-rating="5" data-num-stars="5" ></span>
                                <p class="event-meta">7 June 2018</p>
                                <p>这里 的 菜 都是 很好 吃 的. 价格 也 超 赞.
                                    お い し い!
                                    정말 기분 좋게 맛있는 집이에요 ㅠ
                                    음식이 깨끗하고 깔끔해요. 베트남 집밥 같아요ㅎ
                                    분위기 맛 가격 다 너무 좋구요.
                                    또 올거야!!! ㅠㅠ

                                    这里的菜都是很好吃的。价格也超赞。

                                    おいしい！.</p>
                            </div>
                        </div>
                    </div>
                    <div class="single-event">
                        <div class="event-img">
                            <img src="{{asset('images/customer/review/reviewGoogle4.jpg')}}" alt="">
                        </div>
                        <div class="event-content">
                            <div class="event-date">
                                <p><span>12</span>October</p>
                            </div>
                            <div class="event-details">
                                <h3><a href="https://goo.gl/maps/dK8DMVBxezn">최경진</a></h3>
                                <span class="stars" data-rating="5" data-num-stars="5" ></span>
                                <p class="event-meta">12 October 2017</p>
                                <p>베트남음식첨먹었는데
                                    극찬까진모르것고
                                    모닝글로리가맛난다
                                    거기에베트남고추올려먹으면
                                    아주맛남ㅎㅎ</p>
                                <p>I have been eating Vietnamese food, but I do not know much about it. Morning Glory is delicious. It is very delicious when I eat Vietnamese pepper.</p>
                            </div>
                        </div>
                    </div>
                    <div class="single-event">
                        <div class="event-content">
                            <div class="event-date">
                                <p><span>3</span>September</p>
                            </div>
                            <div class="event-details">
                                <h3><a href="https://goo.gl/maps/dgbH4jNqtDz">최경진</a></h3>
                                <span class="stars" data-rating="5" data-num-stars="5" ></span>
                                <p class="event-meta">6 September 2017</p>
                                <p>Excellent food. Very clean. Service somewhat casual. Family owned and run business. Any deficiencies are easily outweighed by the high quality food. Not cheap, but worth it.
                                    TIP:  If you are really hungry make sure you order an entree. The meals are an average size and may not satisfy a big western hunger</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!--Review From Tripadvisor-->
                <div id="review_tripadvisor" class="col-md-12 col-lg-12 col-sm-12 col-xs-12 tab-pane fade in active">
                    <div class="single-event">
                        <div class="event-img">
                            <img src="{{asset('images/customer/review/reviewTrip.jpg')}}" alt="">
                        </div>
                        <div class="event-content">
                            <div class="event-date">
                                <p><span>26</span>Junly</p>
                            </div>
                            <div class="event-details">
                                <h3><a href="https://www.tripadvisor.com.vn/ShowUserReviews-g298082-d8637759-r600021826-Wooden_House_Cafe_Restaurant-Hoi_An_Quang_Nam_Province.html">Vladimír P</a></h3>
                                <span class="stars" data-rating="5" data-num-stars="5" ></span>
                                <p class="event-meta">26 Junly 2018</p>
                                <p>We find this restaurant by accident. And we were suprised...
                                    The restaurant was amazing. The stuff was super nice and helpfull.
                                    The meal was delicous.
                                    We highly recommend this restaurant.</p>
                            </div>
                        </div>
                    </div>
                    <div class="single-event">
                        <div class="event-img">
                            <img src="{{asset('images/customer/review/reviewTrip2.jpg')}}" alt="">
                        </div>
                        <div class="event-content">
                            <div class="event-date">
                                <p><span>24</span>Junly</p>
                            </div>
                            <div class="event-details">
                                <h3><a href="https://www.tripadvisor.com.vn/ShowUserReviews-g298082-d8637759-r599739108-Wooden_House_Cafe_Restaurant-Hoi_An_Quang_Nam_Province.html">Très Bonne adresse !! </a></h3>
                                <span class="stars" data-rating="5" data-num-stars="5" ></span>
                                <p class="event-meta">24 Junly 2018</p>
                                <p>Dans la belle maison d un habitant d Hoi An, très bonne cuisine on s est régalés, Cao Lau et Pho délicieux, le patron est très sympa, il est passé plusieurs fois trinquer avec nous et nous a offert l alcool de riz et des petits choux fourrés à la crème pâtissière, un délice !!</p>
                            </div>
                        </div>
                    </div>
                    <div class="single-event">
                        <div class="event-img">
                            <img src="{{asset('images/customer/review/reviewTrip3.jpg')}}" alt="">
                        </div>
                        <div class="event-content">
                            <div class="event-date">
                                <p><span>26</span>June</p>
                            </div>
                            <div class="event-details">
                                <h3><a href="https://www.tripadvisor.com.vn/ShowUserReviews-g298082-d8637759-r591658005-Wooden_House_Cafe_Restaurant-Hoi_An_Quang_Nam_Province.html">Second try at eating here! </a></h3>
                                <span class="stars" data-rating="5" data-num-stars="5" ></span>
                                <p class="event-meta">26 June 2018</p>
                                <p>I need to revisit my earlier vew of this restaurant. I am sorry I gave it a bad review based on what others told me. The restaurant business now open again after being closed for six weeks. The ambiance is very nice, welcoming and very clean. The staff were excellent and the food really, really nice. We did get two glasses of their rice wine and a lovely surprise at the he end of the meal when they brought out two custard filled pastries for us. The whole experience was very well received by us and among our top choices in Hoi An.</p>
                            </div>
                        </div>
                    </div>
                    <div class="single-event">
                        <div class="event-img">
                            <img src="{{asset('images/customer/review/reviewTrip4.jpg')}}" alt="">
                        </div>
                        <div class="event-content">
                            <div class="event-date">
                                <p><span>11</span>September</p>
                            </div>
                            <div class="event-details">
                                <h3><a href="https://www.tripadvisor.com.vn/ShowUserReviews-g298082-d8637759-r523387243-Wooden_House_Cafe_Restaurant-Hoi_An_Quang_Nam_Province.html">Straordinario è dire poco!!! Super eccellente!!!</a></h3>
                                <span class="stars" data-rating="5" data-num-stars="5" ></span>
                                <p class="event-meta">11 September 2017</p>
                                <p>Locale davvero molto bello e caratteristico, tutto il legno. Il cibo è stato divino, abbiamo mangiato davvero benissimo, molto curato e raffinato. Una cucina di alto livello, con sapori decisi, equilibrati, ben distinti e sapientemente mescolati.
                                    Il personale (a conduzione famigliare, e ci tengo a precisare perché chiamarlo personale è quasi riduttivo ti viene spontaneo chiamarli amici) davvero molto, molto gentile, educato che ti fa sentire coccolato in ogni momento. Locale super consigliato!!! Ad un prezzo davvero ottimo.</p>
                            </div>
                        </div>
                    </div>
                    <div class="single-event">
                        <div class="event-img">
                            <img src="{{asset('images/customer/review/reviewTrip5.jpg')}}" alt="">
                        </div>
                        <div class="event-content">
                            <div class="event-date">
                                <p><span>11</span>March</p>
                            </div>
                            <div class="event-details">
                                <h3><a href="https://www.tripadvisor.com.vn/ShowUserReviews-g298082-d8637759-r565734414-Wooden_House_Cafe_Restaurant-Hoi_An_Quang_Nam_Province.html">Vietnamesische Küche</a></h3>
                                <span class="stars" data-rating="5" data-num-stars="5" ></span>
                                <p class="event-meta">11 March 2018</p>
                                <p>Zufällig hatten wir das Restaurant bei einer Radtour entdeckt.
                                    Wir waren zum Abendessen dort.
                                    Alles schmeckte ausgezeichnet, verschiedenste Speisen und der rote Hauswein. Der Hausherr und die ganze Familie waren sehr freundlich und zuvorkommend, inklusive ein paar Gläsern Reisschnaps. Alles wunderbar sauber.</p>
                            </div>
                        </div>
                    </div>
                    <div class="single-event">
                        <div class="event-img">
                            <img src="{{asset('images/customer/review/reviewTrip6.jpg')}}" alt="">
                        </div>
                        <div class="event-content">
                            <div class="event-date">
                                <p><span>5</span>March</p>
                            </div>
                            <div class="event-details">
                                <h3><a href="https://www.tripadvisor.com.vn/ShowUserReviews-g298082-d8637759-r564567207-Wooden_House_Cafe_Restaurant-Hoi_An_Quang_Nam_Province.html">Dinner</a></h3>
                                <span class="stars" data-rating="5" data-num-stars="5" ></span>
                                <p class="event-meta">5 March 2018</p>
                                <p>As always we look at trip advisor for recommended places to eat. Wooden House is out of the main area but is well worth a visit. Fresh spring roll, stir fry beef and morning glory with garlic were amazing. Lots of options for freshly cooked homemade Vietnamese food to choose off the menu. They also do pizzas and breakfast. The family run business is very hospitable and Father even comes with a shot of homebrew rice wine. Cheap prices and very good food. I would recommend a trip here.</p>
                            </div>
                        </div>
                    </div>
                    <div class="single-event">
                        <div class="event-img">
                            <img src="{{asset('images/customer/review/reviewTrip7.jpg')}}" alt="">
                        </div>
                        <div class="event-content">
                            <div class="event-date">
                                <p><span>10</span>April</p>
                            </div>
                            <div class="event-details">
                                <h3><a href="https://www.tripadvisor.com.vn/ShowUserReviews-g298082-d8637759-r572358226-Wooden_House_Cafe_Restaurant-Hoi_An_Quang_Nam_Province.html">Great family restaurant serving traditional Vietnamese food</a></h3>
                                <span class="stars" data-rating="5" data-num-stars="5" ></span>
                                <p class="event-meta">10 April 2018</p>
                                <p>........ and if you're lucky a super shot of rice wine made by the owner! Excellent food and service served in modest but very nice restaurant area at front of family home (which is the norm for this part of the world). Owner spent time with us despite his limited English and our non existent Vietnamese. Would highly recommend.</p>
                            </div>
                        </div>
                    </div>
                    <div class="single-event">
                        <div class="event-img">
                            <img src="{{asset('images/customer/review/reviewTrip11.jpg')}}" alt="">
                        </div>
                        <div class="event-content">
                            <div class="event-date">
                                <p><span>11</span>November</p>
                            </div>
                            <div class="event-details">
                                <h3><a href="https://www.tripadvisor.com.vn/ShowUserReviews-g298082-d8637759-r540208078-Wooden_House_Cafe_Restaurant-Hoi_An_Quang_Nam_Province.html">Comme à la maison;-)</a></h3>
                                <span class="stars" data-rating="5" data-num-stars="5" ></span>
                                <p class="event-meta">11 November 2017</p>
                                <p>Cette famille nous ouvre la terrasse de sa maison pour nous faire découvrir les spécialités de la ville. Quel régal! Accueil aux petits soins, cuisine de qualité et le tout pour un prix plus que raisonnable. L'alcool de riz confectionné par le grand père est tout simplement unique. En bref, une adresse comme on les aime à decouvir absolument!</p>
                            </div>
                        </div>
                    </div>
                    <div class="single-event">
                        <div class="event-content">
                            <div class="event-date">
                                <p><span>24</span>February</p>
                            </div>
                            <div class="event-details">
                                <h3><a href="https://www.tripadvisor.com.vn/ShowUserReviews-g298082-d8637759-r462406538-Wooden_House_Cafe_Restaurant-Hoi_An_Quang_Nam_Province.html">Ontzettend vriendelijk personeel en goed eten!</a></h3>
                                <span class="stars" data-rating="5" data-num-stars="5" ></span>
                                <p class="event-meta">24 February 2017</p>
                                <p>Gingen er lunchen en werden behandeld alsof we er honderden euros uit kwamen geven. Hebben de lokale specialiteit Cao Lau op, smaakte goed en hebben niet lang hoeven wachten. Nog thee en bananen gekregen nadien.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!--Review Facebook-->
                <div id="review_facebook" class="col-md-12 col-lg-12 col-sm-12 col-xs-12 tab-pane fade in">
                    <div class="single-event">
                        <div class="event-content">
                            <div class="event-date">
                                <p><span>12</span>December</p>
                            </div>
                            <div class="event-details">
                                <h3><a href="https://www.facebook.com/pg/WoodenHouseCafe/reviews/">Sophie Williams</a></h3>
                                <span class="stars" data-rating="5" data-num-stars="5" ></span>
                                <p class="event-meta">12 December 2017</p>
                                <p>Incredible vietnamese food that has a really unique to the resteraunt taste. Lovely friendly staff who go out of there way for you. Offering you a taste of his homemade liquor and explaining how the food Is made and prepared. Really good prices and upon request of bill, we received a complimentary fruit plate. We stayed 10 nights in hoi an and couldn’t stop coming back to this place. Can’t recommend highly enough!</p>
                            </div>
                        </div>
                    </div>
                    <div class="single-event">
                        <div class="event-content">
                            <div class="event-date">
                                <p><span>16</span>March</p>
                            </div>
                            <div class="event-details">
                                <h3><a href="https://www.facebook.com/pg/WoodenHouseCafe/reviews/">Michael Sisson</a></h3>
                                <span class="stars" data-rating="5" data-num-stars="5" ></span>
                                <p class="event-meta">16 March 2018</p>
                                <p>Consistently excellent food, service and value . Been visiting for three years and always first call in Hoi An</p>
                            </div>
                        </div>
                    </div>
                    <div class="single-event">
                        <div class="event-content">
                            <div class="event-date">
                                <p><span>1</span>October</p>
                            </div>
                            <div class="event-details">
                                <h3><a href="https://www.facebook.com/pg/WoodenHouseCafe/reviews/">Peter Bamford</a></h3>
                                <span class="stars" data-rating="5" data-num-stars="5" ></span>
                                <p class="event-meta">1 October 2015</p>
                                <p>best cafe in hoi an , fantastic service in hoi an by far. while we were eating they put fans all round us, once i notice he had put out 7 fans just for us. Best breakfast ive eaten outside australia. quite chilled place. If your lucky he puts on the james blunt cd..
                                    best breakfast / lunch.
                                    very reasonable price.
                                    only negative thing is its not close to main area in Hoi An but worth the walk.</p>
                            </div>
                        </div>
                    </div>
                    <div class="single-event">
                        <div class="event-content">
                            <div class="event-date">
                                <p><span>26</span>August</p>
                            </div>
                            <div class="event-details">
                                <h3><a href="https://www.facebook.com/pg/WoodenHouseCafe/reviews/">Christian Riolo</a></h3>
                                <span class="stars" data-rating="5" data-num-stars="5" ></span>
                                <p class="event-meta">26 August 2017</p>
                                <p>Locale a conduzione familiare che si trova vicino al centro di Hoi An. Accogliente e personale gentile e disponibile. Abbiamo cenato differenti sere in questo posticino tranquillo fuori dal caos dell'antica città e ci siamo trovati benissimo. Per noi italiani la qualità del cibo è fondamentale e devo ammettere che in questo posto si può trovare tutto ciò che si cerca, buona qualità e freschezza delle materie prime virgola piatti saporiti e ben equilibrati, rapporto qualità prezzo eccellente. Lo consiglio a tutti coloro che decideranno di sostare in oian e cercano un locale fuori dal centro che offre ottimi piatti a buon prezzo. Suggerisco white rose dumplings, Cao Lau, pho bo e squid con cipolle e Ginger !</p>
                            </div>
                        </div>
                    </div>
                    <div class="single-event">
                        <div class="event-content">
                            <div class="event-date">
                                <p><span>11</span>November</p>
                            </div>
                            <div class="event-details">
                                <h3><a href="https://www.facebook.com/pg/WoodenHouseCafe/reviews/">Christian Riolo</a></h3>
                                <span class="stars" data-rating="5" data-num-stars="5" ></span>
                                <p class="event-meta">11 November 2017</p>
                                <p>Definitely a winner - fantastic crispy pancakes and wontons.
                                    Home made rice wine was amazing too </p>
                            </div>
                        </div>
                    </div>
                    <div class="single-event">
                        <div class="event-content">
                            <div class="event-date">
                                <p><span>13</span>January</p>
                            </div>
                            <div class="event-details">
                                <h3><a href="https://www.facebook.com/pg/WoodenHouseCafe/reviews/">As Trid</a></h3>
                                <span class="stars" data-rating="5" data-num-stars="5" ></span>
                                <p class="event-meta">13 January 2016</p>
                                <p>Very friendly staff and delicious Vietnamese food for a reasonable price. The family made us feel like we were home. We also recommend to take a cooking class here! We had a great experience because we were with a small group and they really took the time to teach us everything.</p>
                            </div>
                        </div>
                    </div>
                    <div class="single-event">
                        <div class="event-content">
                            <div class="event-date">
                                <p><span>25</span>August</p>
                            </div>
                            <div class="event-details">
                                <h3><a href="https://www.facebook.com/pg/WoodenHouseCafe/reviews/">Eleonora Cosco</a></h3>
                                <span class="stars" data-rating="5" data-num-stars="5" ></span>
                                <p class="event-meta">25 August 2017</p>
                                <p>Il personale è fantastico! Gentile e disponibile. Siamo andati a cenare tutte le sere del ns soggiorno. I piatti sono abbondanti e squisiti. La delicatezza della loro cucina è unica.. difficile da trovare nel vietnam. Lo consiglio vivamente.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--EVENT AREA END-->

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