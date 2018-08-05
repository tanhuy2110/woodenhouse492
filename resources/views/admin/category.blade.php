@extends ('admin.layout.main_layout_admin')
@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <div class="row clearfix">
                    <div class="col-lg-5 col-md-5 col-sm-12">
                        <h2> DataTables</h2>
                        <ul class="breadcrumb padding-0">
                            <li class="breadcrumb-item"><i class="zmdi zmdi-home"></i></li>
                            <li class="breadcrumb-item">Tables</li>
                            <li class="breadcrumb-item active">Category DataTables</li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- Basic Examples -->
            <div class="row clearfix">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="header">
                            <h2><strong>Category</strong> Table </h2>
                            <ul class="header-dropdown">
                                <li><a href="javascript:void(0);" data-toggle="modal" data-target="#addCategory"><i class="zmdi zmdi-plus-circle"></i></a></li>
                            </ul>
                        </div>
                        <div class="body">
                            <div class="table-responsive">
                                <table class="table table-filter table-hover m-b-0" id="example">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Name</th>
                                            <th>Create Date</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                    </tbody>
                                </table>
                                <ul class="pagination" id="pagination"></ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Basic Examples -->
        </div>
    </section>
    <!-- Add Item Modal -->
    <div class="modal fade" id="addCategory" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <form  action="{{ route('category.store') }}" method="POST">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="title" id="defaultModalLabel">Add New Category</h4>
                    </div>
                    <div class="modal-body">
                        <div class="print-error-msg alert alert-danger" style="display:none">
                            <ul>
                            </ul>
                        </div>
                        <div class="form-group">
                            <div class="form-line">
                                <input type="text" name = "nameCategory" class="form-control" placeholder="Name">
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn creat-submit btn-primary btn-round waves-effect">Save</button>
                        <button type="button" class="btn btn-simple btn-round waves-effect" data-dismiss="modal">CLOSE</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <!-- Edit Item Modal -->
    <div class="modal fade" id="editCategory" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <form  method="put" action="">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="title" id="defaultModalLabel">Edit Category</h4>
                    </div>
                    <div class="modal-body">
                        <div class="print-error-msg alert alert-danger" style="display:none">
                            <ul>
                            </ul>
                        </div>
                        <div class="form-group">
                            <div class="form-line">
                                <input type="text" name = "nameCategory" class="form-control" placeholder="Name">
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn edit-submit btn-primary btn-round waves-effect">Edit</button>
                        <button type="button" class="btn btn-simple btn-round waves-effect" data-dismiss="modal">CLOSE</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
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
    <script  src="{{ asset('/admin/js/makeJS/category.js') }}"></script>
@endsection
