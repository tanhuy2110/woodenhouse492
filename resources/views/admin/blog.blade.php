@extends ('admin.layout.main_layout_admin')
@section('css')
    <link rel="stylesheet" href="{{ asset('/admin/css/blog.css')}}">
    <link rel="stylesheet" href="{{ asset('/admin/css/color_skins.css')}}">
@endsection
@section('content')
    <section class="content blog-page">
        <div class="container-fluid">
            <div class="block-header">
                <div class="row">
                    <div class="col-lg-5 col-md-5 col-sm-12">
                        <h2>Grid Blog</h2>
                        <ul class="breadcrumb p-l-0 p-b-0">
                            <li class="breadcrumb-item"><i class="zmdi zmdi-home"></i></li>
                            <li class="breadcrumb-item">Admin</li>
                            <li class="breadcrumb-item active">Blog</li>
                        </ul>
                    </div>
                    <div class="col-lg-7 col-md-7 col-sm-12">
                        <div class="input-group m-b-0">
                            <input type="text" class="form-control" placeholder="Search...">
                            <span class="input-group-addon">
                            <i class="zmdi zmdi-search"></i>
                        </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row clearfix">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="header">
                            <h2><strong>Menu</strong> Table </h2>
                            <ul class="header-dropdown">
                                <li><a href="javascript:void(0);" data-toggle="modal" data-target="#addBlog"><i class="zmdi zmdi-plus-circle"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 col-md-12">
                    <div class="card single_post">
                        <div class="body">
                            <h3 class="m-t-0 m-b-5"><a href="blog-details.html">Apple Introduces Search Ads Basic</a></h3>
                            <ul class="meta">
                                <li><a href="javascript:void(0);"><i class="zmdi zmdi-account col-blue"></i>Posted By: John Smith</a></li>
                                <li><a href="javascript:void(0);"><i class="zmdi zmdi-label col-amber"></i>Technology</a></li>
                                <li><a href="javascript:void(0);"><i class="zmdi zmdi-comment-text col-blue"></i>Comments: 3</a></li>
                            </ul>
                            <div class="img-post m-b-15">
                                <img src="{{asset('admin/images/blog/blog-page-2.jpg ') }}" alt="Awesome Image">
                                <div class="social_share">
                                    <button class="btn btn-primary btn-icon btn-icon-mini btn-round"><i class="zmdi zmdi-facebook"></i></button>
                                    <button class="btn btn-primary btn-icon btn-icon-mini btn-round"><i class="zmdi zmdi-twitter"></i></button>
                                    <button class="btn btn-primary btn-icon btn-icon-mini btn-round"><i class="zmdi zmdi-instagram"></i></button>
                                </div>
                            </div>
                            <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal</p>
                            <a href="#" title="read more" class="btn btn-round btn-info">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Add Item Blog Modal -->
    <div class="modal fade" id="addBlog" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <form action="{{ route('blog.store') }}" method="POST" id="upload_form" enctype="multipart/form-data">
                @csrf
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="title" id="defaultModalLabel">Add New Blog</h4>
                    </div>
                    <div class="modal-body">
                        <div class="print-error-msg alert alert-danger" style="display:none">
                            <ul>
                            </ul>
                        </div>
                        <div class="form-group">
                            <div class="form-line">
                                <input type="text" name="nameBlog" class="form-control" placeholder="Name Food">
                            </div>
                        </div>
                    </div>
                        <div class="form-group">
                            <div class="form-line">
                                <div class="row clearfix">
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <textarea rows="2" name="decriptionBlog" class="form-control no-resize" placeholder="Decription Blog"></textarea>
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
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary btn-round create-submit waves-effect">Save</button>
                        <button type="button" class="btn btn-simple btn-round waves-effect" data-dismiss="modal">CLOSE</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

@endsection
@section('javascript')

    <script src="{{ asset('/admin/bundles/fullcalendarscripts.bundle.js') }}"></script><!--/ calender javascripts -->

    <script src="{{ asset('/admin/bundles/mainscripts.bundle.js') }}"></script><!-- Custom Js -->
    <script src="{{ asset('/admin/js/pages/calendar/calendar.js') }}"></script>
@endsection