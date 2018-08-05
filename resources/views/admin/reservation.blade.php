@extends ('admin.layout.main_layout_admin')
@section('css')
    <link rel="stylesheet" href="{{ asset('/admin/plugins/bootstrap-select/css/bootstrap-select.css')}}">
@endsection
@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <div class="row clearfix">
                    <div class="col-lg-5 col-md-5 col-sm-12">
                        <h2> DataTables </h2>
                        <ul class="breadcrumb padding-0">
                            <li class="breadcrumb-item"><i class="zmdi zmdi-home"></i></li>
                            <li class="breadcrumb-item">Admin</li>
                            <li class="breadcrumb-item active">Reservation</li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- Basic Examples -->
            <div class="row clearfix">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="header">
                            <h2><strong>Reservation</strong> Table </h2>
                        </div>
                        <div class="body">
                            <div class="table-responsive">
                                <table class="table table-filter table-hover m-b-0 js-basic-example ">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Name Customer</th>
                                            <th>Email</th>
                                            <th>Total People</th>
                                            <th>Date Come</th>
                                            <th>Phone Number</th>
                                            <th>Message</th>
                                            <th>IP</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($reservations as $reservation)
                                        <tr>
                                            <td class="count"></td>
                                            <td>{{$reservation->name_customer}}</td>
                                            <td>{{$reservation->email}}</td>
                                            <td>{{$reservation->size}}</td>
                                            <td>{{$reservation->date}}</td>
                                            <td>{{$reservation->phone_number}}</td>
                                            <td>{{$reservation->message}}</td>
                                            <td>{{$reservation->ip_address}}</td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Basic Examples -->
        </div>
    </section>
@endsection
@section('javascript')
    <!-- Jquery DataTable Plugin Js -->
    <script src="{{ asset('/admin/bundles/datatablescripts.bundle.js') }}"></script>
    <script src="{{ asset('/admin/plugins/jquery-datatable/buttons/dataTables.buttons.min.js') }}"></script>
    <script src="{{ asset('/admin/plugins/jquery-datatable/buttons/buttons.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('/admin/plugins/jquery-datatable/buttons/buttons.colVis.min.js') }}"></script>
    <script src="{{ asset('/admin/plugins/jquery-datatable/buttons/buttons.html5.min.js') }}"></script>
    <script src="{{ asset('/admin/plugins/jquery-datatable/buttons/buttons.print.min.js') }}"></script>

    <script src="{{ asset('/admin/bundles/mainscripts.bundle.js') }}"></script><!-- Custom Js -->
    <script src="{{ asset('/admin/js/pages/tables/jquery-datatable.js') }}"></script>

    <script  src="{{ asset('/admin/js/makeJS/menu.js') }}"></script>
@endsection
