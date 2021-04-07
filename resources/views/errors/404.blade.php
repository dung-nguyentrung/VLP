<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Facnex - Industry & Factory HTML Template">
    <meta name="keywords" content="new, html, Facnex, design, Consulting, Business, Portfolio, Agency, advanced,">
    <link rel="shortcut icon" href="assets/images/icons/favicon.ico" title="Favicon" sizes="16x16">
    <title>Page not found</title>
    <link href="{{ ('assets/css.css?family=Roboto:400,400i,500,500i,700&display=swap') }}" rel="stylesheet">
    <link href="{{ ('assets/css-1.css?family=Poppins:400,500,600,700,800') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/css/plugins.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/fonts/flaticon.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}">
</head>
<body>
    @livewire('header-component')

    <section class="error-page ptb-120">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="text-center error-item">
                        <h1>404</h1>
                        <h2>Không tìm thấy trang yêu cầu</h2>
                       <p class="mb-20">Xin lỗi, trang web bạn yêu cầu không tìm thấy</p>
                        <a href="/" class="main-btn-two">
                            <div class="text-btn">
                                <span class="text-btn-one">Trang chủ</span>
                                <span class="text-btn-two">Trang chủ</span>
                            </div>
                            <div class="arrow-btn">
                                <span class="arrow-one"><i class="fas fa-caret-right"></i></span>
                                <span class="arrow-two"><i class="fas fa-caret-right"></i></span>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @livewire('footer-component')
    @livewireScripts
    <script src="{{ asset('assets/js/jquery-3.3.1.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins.js') }}"></script>
    <script src="{{ asset('assets/js/custom.js') }}"></script>
</body>
</html>
