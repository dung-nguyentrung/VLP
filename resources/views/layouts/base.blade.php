<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>@yield('title')</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
        <meta content="" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <link rel="shortcut icon" href="{{ asset('assets/images/icons/favicon.ico') }}">
        <link href="{{ asset('backend/assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('backend/assets/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('backend/assets/css/metisMenu.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('backend/plugins/daterangepicker/daterangepicker.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('backend/assets/css/app.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('backend/assets/css/main.css') }}" rel="stylesheet" type="text/css" />
        @livewireStyles
    </head>
    <body>
        <div class="left-sidenav">
            <!-- LOGO -->
            <div class="brand">
                <a href="/" class="logo">
                    <span>
                        <img src="{{ asset('assets/images/header/logoblue.png') }}" alt="logo-large" class="text-logo logo-lg logo-dark">
                    </span>
                </a>
            </div>
            <!--end logo-->
            <div class="menu-content h-100" data-simplebar>
                <ul class="metismenu left-sidenav-menu">
                    <li class="mt-0 menu-label">thanh công cụ</li>
                    <li>
                        <a href="{{ route('dashboard') }}"> <i data-feather="home" class="align-self-center menu-icon"></i><span>Tổng quan</span><span class="menu-arrow"></span></a>
                    </li>
                    <li>
                        <a href="#"><i data-feather="grid" class="align-self-center menu-icon "></i><span>Quản lý bán hàng</span><span class="menu-arrow"><i class="mdi mdi-chevron-right"></i></span></a>
                        <ul class="nav-second-level" aria-expanded="false">
                            <li>
                                <a href="#"><i class="dripicons-align-justify"></i>Danh mục sản phẩm <span class="menu-arrow left-has-menu"><i class="mdi mdi-chevron-right"></i></span></a>
                                <ul class="nav-second-level" aria-expanded="false">
                                    <li><a href="{{ route('categories') }}">Danh sách</a></li>
                                    <li><a href="{{ route('category.add') }}">Thêm danh mục</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#"><i class="fab fa-product-hunt"></i>Sản phẩm<span class="menu-arrow left-has-menu"><i class="mdi mdi-chevron-right"></i></span></a>
                                <ul class="nav-second-level" aria-expanded="false">
                                    <li><a href="{{ route('products') }}">Danh sách</a></li>
                                    <li><a href="{{ route('product.add') }}">Thêm sản phẩm</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#"><i data-feather="grid" class="align-self-center menu-icon "></i><span>Quản lý tin tức</span><span class="menu-arrow"><i class="mdi mdi-chevron-right"></i></span></a>
                        <ul class="nav-second-level" aria-expanded="false">
                            <li>
                                <a href="#"><i class="dripicons-align-justify"></i>Danh mục tin tức <span class="menu-arrow left-has-menu"><i class="mdi mdi-chevron-right"></i></span></a>
                                <ul class="nav-second-level" aria-expanded="false">
                                    <li><a href="{{ route('post.categories') }}">Danh sách</a></li>
                                    <li><a href="{{ route('post.category.add') }}">Thêm danh mục</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#"><i class="fas fa-newspaper"></i>Tin tức<span class="menu-arrow left-has-menu"><i class="mdi mdi-chevron-right"></i></span></a>
                                <ul class="nav-second-level" aria-expanded="false">
                                    <li><a href="{{ route('posts') }}">Danh sách</a></li>
                                    <li><a href="{{ route('post.add') }}">Thêm tin tức</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="{{ route('recruitments') }}"><i class="fas fa-user-friends"></i><span>Tin tuyển dụng</span><span class="menu-arrow"></span></a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="{{ route('admin.galleries') }}"><i class="far fa-images"></i><span>Hình ảnh</span><span class="menu-arrow"></span></a>
                    </li>
                    <li>
                        <a href="{{ route('partners') }}"><i class="fas fa-hands-helping"></i><span>Đối tác</span><span class="menu-arrow"></span></a>
                    </li>
                    <li>
                        <a href="{{ route('sliders') }}"><i class="fab fa-buffer"></i><span>Slider</span><span class="menu-arrow"></span></a>
                    </li>
                    <li>
                        <a href="{{ route('faqs') }}"><i class="far fa-question-circle"></i><span>Câu hỏi thường gặp</span><span class="menu-arrow"></span></a>
                    </li>
                    <li>
                        <a href="{{ route('setting.site') }}"><i class="fas fa-info-circle"></i><span>Thông tin công ty</span><span class="menu-arrow"></span></a>
                    </li>
                </ul>
            </div>
        </div>
        @livewire('admin.nav-bar-component')
        {{ $slot }}

        <script src="{{ asset('backend/assets/js/jquery.min.js') }}"></script>
        <script src="{{ asset('backend/assets/js/bootstrap.bundle.min.js') }}"></script>
        <script src="{{ asset('backend/assets/js/metismenu.min.js') }}"></script>
        <script src="{{ asset('backend/assets/js/waves.js') }}"></script>
        <script src="{{ asset('backend/assets/js/feather.min.js') }}"></script>
        <script src="{{ asset('backend/assets/js/simplebar.min.js') }}"></script>
        <script src="{{ asset('backend/assets/js/moment.js') }}"></script>
        <script src="{{ asset('backend/plugins/daterangepicker/daterangepicker.js') }}"></script>
        <script src="{{ asset('backend/plugins/apex-charts/apexcharts.min.js') }}"></script>
        <script src="{{ asset('backend/assets/pages/jquery.analytics_dashboard.init.js') }}"></script>
        <script src="{{ asset('backend/assets/js/app.js') }}"></script>
        <script src="https://cdn.tiny.cloud/1/wl0hy3kumawhadevkqc4e81r6m900s5jbcbx30qu575s6ptk/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
        @livewireScripts

        @stack('scripts')
    </body>

</html>
