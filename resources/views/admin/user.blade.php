@extends ('admin.layout.main_layout_admin')
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
                            <li class="breadcrumb-item active">User</li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- Basic Examples -->
            <div class="row clearfix">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="body">
                            <div class="table-responsive">
                                <table class="table table-filter table-hover m-b-0 js-basic-example">
                                    <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Name</th>
                                        <th>Role</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($users as $user)
                                    <tr>
                                        <td>{{$user->id}}</td>
                                        <td>{{$user->name}}</td>
                                        <td>{{$user->role}}</td>
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
@endsection
