
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Page not found</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta content="" name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <!-- App css -->
    <link href="{{ asset('backend/assets/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('backend/assets/css/icons.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('backend/assets/css/app.min.css')}}" rel="stylesheet" type="text/css" />

</head>

<body class="account-body accountbg">

<!-- Eror-404 page -->
<div class="container">
    <div class="row vh-100 d-flex justify-content-center">
        <div class="col-12 align-self-center">
            <div class="row">
                <div class="col-lg-5 mx-auto">
                    <div class="card">
                        <div class="card-body p-0 auth-header-box">
                            <div class="text-center p-3">
                                <a href="/dashboard" class="logo logo-admin">
                                    <img src="{{ asset('assets/images/header/logoblue.png') }}" height="50" alt="logo" class="auth-logo">
                                </a>
                                <h4 class="mt-3 mb-1 font-weight-semibold text-white font-18">Oops! Xin lỗi, trang bạn tìm không có</h4>
                                <p class="text-muted  mb-0">Trở về tổng quan.</p>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="ex-page-content text-center">
                                <img src="{{asset('backend/assets/images/error.svg')}}" alt="0" class="" height="170">
                                <h1 class="mt-5 mb-4">404!</h1>
                                <h5 class="font-16 text-muted mb-5">Một vài lỗi xảy ra</h5>
                            </div>
                            <a class="btn btn-primary btn-block waves-effect waves-light" href="/dashboard">Quay lại tổng quan <i class="fas fa-redo ml-1"></i></a>
                        </div>
                    </div><!--end card-->
                </div><!--end col-->
            </div><!--end row-->
        </div><!--end col-->
    </div><!--end row-->
</div><!--end container-->
<!-- End Eror-404 page -->




<!-- jQuery  -->
<script src="{{asset('backend/assets/js/jquery.min.js')}}"></script>
<script src="{{asset('backend/assets/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('backend/assets/js/waves.js')}}"></script>
<script src="{{asset('backend/assets/js/feather.min.js')}}"></script>
<script src="{{asset('backend/assets/js/simplebar.min.js')}}"></script>


</body>

</html>
