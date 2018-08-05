@extends ('admin.layout.main_layout_admin')
@section('css')
<link rel="stylesheet" href="{{ asset('/admin/plugins/fullcalendar/fullcalendar.min.css')}}">
@endsection
@section('content')
    <section class="content page-calendar">
        <div class="container-fluid">
            <div class="block-header">
                <div class="row clearfix">
                    <div class="col-lg-5 col-md-5 col-sm-12">
                        <h2>Calendar Reservation</h2>
                        <ul class="breadcrumb padding-0">
                            <li class="breadcrumb-item"><i class="zmdi zmdi-home"></i></li>
                            <li class="breadcrumb-item">Admin</li>
                            <li class="breadcrumb-item active">Calendar</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 col-lg-8">
                    <div class="card">
                        <div class="body">
                            <div id="calendar"></div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 col-lg-4">
                    <div class="card">
                        <div class="body m-b-20 l-blue">
                            <div class="event-name b-lightred row">
                                <div class="col-3 text-center">
                                    <h4>12<span>Junly</span><span>2015</span></h4>
                                </div>
                                <div class="col-9">
                                    <h6>Opening Day</h6>
                                    <p>Today we open Wooden House Restaurant</p>
                                    <address><i class="zmdi zmdi-pin"></i> 492 Cua Dai St, Hoi An</address>
                                </div>
                            </div>
                        </div>

                        <div class="body m-b-5 l-green">
                            <div class="event-name row">
                                <div class="col-3 text-center">
                                    <h4>2<span>Mar</span><span>2017</span></h4>
                                </div>
                                <div class="col-9">
                                    <h6>Birthday</h6>
                                    <p>It is a special. Lucky born</p>
                                    <p>Lucky say : "Hello Word!"</p>
                                    <address><i class="zmdi zmdi-pin"></i> 402 Le Van Hien St, Da Nang</address>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="modal fade" id="addevent" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="title" id="defaultModalLabel">Add Event</h4>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <div class="form-line">
                            <input type="number" class="form-control" placeholder="Event Date">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="form-line">
                            <input type="text" class="form-control" placeholder="Event Title">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="form-line">
                            <textarea class="form-control no-resize" placeholder="Event Description..."></textarea>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary btn-round waves-effect">Add</button>
                    <button type="button" class="btn btn-simple btn-round waves-effect" data-dismiss="modal">CLOSE</button>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('javascript')

    <script src="{{ asset('/admin/bundles/fullcalendarscripts.bundle.js') }}"></script><!--/ calender javascripts -->

    <script src="{{ asset('/admin/bundles/mainscripts.bundle.js') }}"></script><!-- Custom Js -->
    <script src="{{ asset('/admin/js/pages/calendar/calendar.js') }}"></script>
@endsection