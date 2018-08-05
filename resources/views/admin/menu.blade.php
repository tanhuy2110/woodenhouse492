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
                            <li class="breadcrumb-item active">Menu</li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- Basic Examples -->
            <div class="row clearfix">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="header">
                            <h2><strong>Menu</strong> Table </h2>
                            <ul class="header-dropdown">
                                <li><a href="javascript:void(0);" data-toggle="modal" data-target="#addMenu"><i class="zmdi zmdi-plus-circle"></i></a></li>
                            </ul>
                        </div>
                        <div class="body">
                            <div class="table-responsive">
                                <table class="table table-filter table-hover m-b-0 js-basic-example ">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Name</th>
                                            <th>Price</th>
                                            <th>Description</th>
                                            <th>Image</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($menus as $menu)
                                        <tr>
                                            <td class="count"></td>
                                            <td>{{$menu->name}}</td>
                                            <td>{{$menu->price}}</td>
                                            <td>{{$menu->description}}</td>
                                            <td>
                                                <div class="media-object">
                                                    <img src="{{asset('/images/menus/' . $menu->images) }}" style="width: 150px; height: 150px;" alt="" >
                                                </div>
                                            </td>
                                            <td data-id = {{$menu->id}}>
                                                <button class="btn btn-icon btn-neutral btn-icon-mini margin-0 editMenu " data-toggle="modal" data-target="#editMenuModal"><i class="zmdi zmdi-edit"></i></button>
                                                <button class="btn btn-icon btn-neutral btn-icon-mini margin-0 removeMenu" title="Delete"><i class="zmdi zmdi-delete"></i></button>
                                            </td>
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
    <!-- Add Item Menu Modal -->
    <div class="modal fade" id="addMenu" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <form action="{{ route('menu.store') }}" method="POST" id="upload_form" enctype="multipart/form-data">
                @csrf
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="title" id="defaultModalLabel">Add New Food</h4>
                    </div>
                    <div class="modal-body">
                        <div class="print-error-msg alert alert-danger" style="display:none">
                            <ul>
                            </ul>
                        </div>
                        <div class="form-group">
                            <div class="form-line">
                                <select class="form-control show-tick" name="selectCategoryId">
                                    <option value="">-- Please select Category --</option>
                                    @foreach($categories as $category)
                                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="form-line">
                                <input type="text" name="nameFood" class="form-control" placeholder="Name Food">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="form-line">
                                <input type="text" name="priceFood" class="form-control" placeholder="Price Food">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="form-line">
                                <div class="row clearfix">
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <textarea rows="2" name="decriptionFood" class="form-control no-resize" placeholder="Please type what you want for decription..."></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="form-line">
                                <div class="fallback">
                                    <input class="btn bg-green waves-effect" name="imageFood" type="file" id="image_menu" />
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary btn-round create-submit waves-effect">Save</button>
                        <button type="button" class="btn btn-simple btn-round waves-effect" data-dismiss="modal">CLOSE</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <!-- Edit Item Menu Modal -->
    <div class="modal fade" id="editMenuModal" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <form  method="PUT" id="edit_form" enctype="multipart/form-data">
                @csrf
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="title" id="defaultModalLabel">Edit New Food</h4>
                    </div>
                    <div class="modal-body">
                        <div class="print-error-msg alert alert-danger" style="display:none">
                            <ul>
                            </ul>
                        </div>
                        <div class="form-group">
                            <div class="form-line">
                                <input type="text" name="nameFood" class="form-control" placeholder="Name Food">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="form-line">
                                <input type="text" name="priceFood" class="form-control" placeholder="Price Food">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="form-line">
                                <div class="row clearfix">
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <textarea rows="2" name="descriptionFood" class="form-control no-resize" placeholder="Please type what you want for decription..."></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="form-line">
                                <div class="fallback">
                                    <input class="btn bg-green waves-effect" name="imageFood" type="file" id="image_menu" />
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="edit-submit btn btn-primary btn-round create-submit waves-effect">Save</button>
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

    <script  src="{{ asset('/admin/js/makeJS/menu.js') }}"></script>
@endsection
