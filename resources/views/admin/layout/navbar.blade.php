<div id="leftsidebar" class="sidebar">
    <div class="menu">
        <ul class="list">
            <li>
                <div class="user-info m-b-20">
                    <div class="image">
                        <a href="profile.html"><img src="{{asset('admin/images/profile_av.jpg')}}" alt="User"></a>
                    </div>
                    <div class="detail">
                        @if(Auth::user())
                        <h6>{{ Auth::user()->name }}</h6>
                        @endif
                        <a href="javascript:void(0);" title="" class=" waves-effect waves-block"><i class="zmdi zmdi-facebook-box"></i></a>
                        <a href="javascript:void(0);" title="" class=" waves-effect waves-block"><i class="zmdi zmdi-linkedin-box"></i></a>
                        <a href="javascript:void(0);" title="" class=" waves-effect waves-block"><i class="zmdi zmdi-instagram"></i></a>
                        <a href="javascript:void(0);" title="" class=" waves-effect waves-block"><i class="zmdi zmdi-twitter-box"></i></a>
                    </div>
                </div>
            </li>
            <li class="header">Manger</li>
            <li class="open {{activeNav('dashboard',Request::segment(2))}}"> <a href="/admin/dashboard"><i class="zmdi zmdi-home"></i><span>Dashboard</span></a></li>
            <li class="open {{activeNav('listCategory',Request::segment(2))}}"> <a href="/admin/listCategory"><i class="zmdi zmdi-layers"></i><span>Category</span></a></li>
            <li class="open {{activeNav('user',Request::segment(2))}}"> <a href="/admin/user"><i class="zmdi zmdi-accounts"></i><span>User</span></a></li>
            <li class="open {{activeNav('menu',Request::segment(2))}}"> <a href="/admin/menu"><i class="zmdi zmdi-cutlery"></i><span>Menu</span></a></li>
            <li class="open {{activeNav('blog',Request::segment(2))}}"> <a href="/admin/blog"><i class="zmdi zmdi-blogger"></i><span>Blog</span></a></li>
            <li class="header">Reservation</li>
            <li class="open {{activeNav('reservation',Request::segment(2))}}"> <a href="/admin/reservation"><i class="zmdi zmdi-grid"></i><span>List Reservation</span></a></li>
            <li class="open {{activeNav('calendar',Request::segment(2))}}"> <a href="/admin/calendar"><i class="zmdi zmdi-calendar-note"></i><span>Calender</span></a></li>
        </ul>
    </div>
</div>