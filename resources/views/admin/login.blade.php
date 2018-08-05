
<!doctype html>
<html class="no-js " lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <meta name="description" content="Responsive Bootstrap 4 and web Application ui kit.">

    <title>Admin Wooden House</title>
    <!-- Favicon-->
    <link rel="icon" href="favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="{{ asset('admin/plugins/bootstrap/css/bootstrap.min.css')}}">
    <!-- Custom Css -->
    <link rel="stylesheet" href="{{ asset('admin/css/main.css')}}">
</head>
<body class="theme-black rtl">
<div class="authentication" style="background:url(../images/customer/slider/slide_5.jpg) no-repeat scroll 0 0 / cover;">
    <div class="container">
        <div class="col-md-12 content-center">
            <div class="row">
                <div class="col-lg-8 col-md-12 offset-lg-1">
                    <div class="card-plain">
                        <div class="header">
                            <h5>Log in</h5>
                        </div>
                        <form class="form" action="{{url('admin/login')}}" method="POST" role="form">
                            {!! csrf_field() !!}
                            @if(count($errors) > 0)
                                <div class="alert alert-danger">
                                    @foreach( $errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </div>
                            @endif
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="User Name" name="name" id="name">
                                <span class="input-group-addon"><i class="zmdi zmdi-account-circle"></i></span>
                            </div>
                            <div class="input-group">
                                <input type="password" placeholder="Password" class="form-control" name="password" id="password" />
                                <span class="input-group-addon"><i class="zmdi zmdi-lock"></i></span>
                            </div>
                            <div class="footer">
                                <button type="submit" class="btn btn-primary btn-round btn-block">SIGN IN</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>