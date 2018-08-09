@extends ('custommer.layout.main_layout_site')
@section('content')

<!--MENUS AREA-->
<section class="style-two menus-area section-padding">
    <div class="container wow fadeIn">
        <div class="row">
            <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                <div class="area-title text-center">
                    <h2>Delicius</h2>
                    <h3>Today’s menu</h3>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                <div class="food-menu-list-menu">
                    <ul>
                        <li class="filter active" data-filter="all">All</li>
                        <li class="filter" data-filter=".1">Drink</li>
                        <li class="filter" data-filter=".2">Pizza</li>
                        <li class="filter" data-filter=".3">Vegetalbe</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row food-menu-list" id="Container">
            @foreach($menus as $menu)
            <div class="mix col-md-6 col-lg-6 col-sm-12 col-xs-12 single-menu {{$menu->category_id}}">
                <div class="single-menu-details">
                    <div class="food-menu-img"><img src="{{asset('/images/menus/'. $menu->images)}}" style="height: 60px" ></div>
                    <div class="food-menu-details">
                        <h3>{{$menu->name}}<span class="menu-price"><?=number_format($menu->price)?> VND</span></h3>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        <div class="row">
            <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12 pagination" id="pagination">

            </div>
        </div>
    </div>
</section>
<!--MENUS AREA END-->
@endsection
@section('javascript')
    <script src="{{asset('/js/customer/jquery.mixitup.min.js')}}"></script>
    <script src="{{asset('js/customer/jPages.min.js')}}"></script>
    <script>
        /*---------------------------
        MENU LIST MIXITUP FILTERING
        ----------------------------*/
        var pagination = $('.pagination');
        function setPagination(){
            pagination.jPages({
                containerID: 'Container',
                perPage: 6,
                startPage: 1,
                startRange: 1,
                midRange: 3,
                endRange: 1,
                first: false,
                last: false
            });
        }

        function destroyPagination() {
            pagination.jPages('destroy');
        };

        setPagination();

        $('#Container').mixItUp({
            callbacks: {
                onMixLoad: function(state,futureState ){
                    //setPagination();
                },
                onMixStart: function(state,futureState ){
                    destroyPagination();
                },
                onMixEnd: function(state, futureState){
                    setPagination();
                }
            }
        });
    </script>
@endsection
