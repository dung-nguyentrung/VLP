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
                        <a href=""><i class="fas fa-newspaper"></i><span>Tin tức</span><span class="menu-arrow"></span></a>
                    </li>
                    <li>
                        <a href=""><i class="fas fa-user-friends"></i><span>Tuyển dụng</span><span class="menu-arrow"></span></a>
                    </li>
                    <li>
                        <a href=""><i class="far fa-images"></i><span>Hình ảnh</span><span class="menu-arrow"></span></a>
                    </li>
                    <li>
                        <a href=""><i class="fas fa-hands-helping"></i><span>Đối tác</span><span class="menu-arrow"></span></a>
                    </li>
                    <li>
                        <a href=""><i class="fab fa-buffer"></i><span>Slide</span><span class="menu-arrow"></span></a>
                    </li>
                    <li>
                        <a href="{{ route('faqs') }}"><i class="far fa-question-circle"></i><span>Câu hỏi thường gặp</span><span class="menu-arrow"></span></a>
                    </li>
                    <li>
                        <a href=""><i class="fas fa-info-circle"></i><span>Thông tin công ty</span><span class="menu-arrow"></span></a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="page-wrapper">
            <!-- Top Bar Start -->
            <div class="topbar">
                <!-- Navbar -->
                <nav class="navbar-custom">
                    <ul class="float-right mb-0 list-unstyled topbar-nav">

                        <li class="dropdown notification-list">
                            <a class="nav-link dropdown-toggle arrow-none waves-light waves-effect" data-toggle="dropdown" href="#" role="button"
                                aria-haspopup="false" aria-expanded="false">
                                <i data-feather="bell" class="align-self-center topbar-icon"></i>
                                <span class="badge badge-danger badge-pill noti-icon-badge">2</span>
                            </a>
                            <div class="pt-0 dropdown-menu dropdown-menu-right dropdown-lg">

                                <h6 class="py-3 m-0 dropdown-item-text font-15 border-bottom d-flex justify-content-between align-items-center">
                                    Thông báo <span class="badge badge-primary badge-pill">2</span>
                                </h6>
                                <div class="notification-menu" data-simplebar>
                                    <a href="#" class="py-3 dropdown-item">
                                        <small class="float-right pl-2 text-muted">2 min ago</small>
                                        <div class="media">
                                            <div class="avatar-md bg-soft-primary">
                                                <i data-feather="shopping-cart" class="align-self-center icon-xs"></i>
                                            </div>
                                            <div class="ml-2 media-body align-self-center text-truncate">
                                                <h6 class="my-0 font-weight-normal text-dark">Your order is placed</h6>
                                                <small class="mb-0 text-muted">Dummy text of the printing and industry.</small>
                                            </div><!--end media-body-->
                                        </div><!--end media-->
                                    </a>
                                </div>
                                <!-- All-->
                                <a href="javascript:void(0);" class="text-center dropdown-item text-primary">
                                    Xem tát cả <i class="fi-arrow-right"></i>
                                </a>
                            </div>
                        </li>
                        @if (Route::has('login'))
                            @auth
                                <li class="dropdown">
                                    <a class="nav-link dropdown-toggle waves-effect waves-light nav-user" data-toggle="dropdown" href="#" role="button"
                                        aria-haspopup="false" aria-expanded="false">
                                        <span class="ml-1 nav-user-name hidden-sm">{{ Auth::user()->name }}</span>
                                        <img src="{{ asset('backend/assets/images/users/user-5.jpg') }}" alt="profile-user" class="rounded-circle thumb-xs" />
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a class="dropdown-item" href="#"><i data-feather="user" class="mr-1 align-self-center icon-xs icon-dual"></i> Hồ sơ</a>
                                        <a class="dropdown-item" href="#"><i data-feather="settings" class="mr-1 align-self-center icon-xs icon-dual"></i> Cài đặt</a>
                                        <div class="mb-0 dropdown-divider"></div>
                                        <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                        <i data-feather="power" class="mr-1 align-self-center icon-xs icon-dual"></i> Đăng xuất</a>
                                        <form action="{{ route('logout') }}" id="logout-form" method="post">
                                            @csrf
                                        </form>
                                    </div>
                                </li>
                            @endif
                        @endif
                    </ul>
                    <ul class="mb-0 list-unstyled topbar-nav">
                        <li>
                            <button class="nav-link button-menu-mobile">
                                <i data-feather="menu" class="align-self-center topbar-icon"></i>
                            </button>
                        </li>
                    </ul>
                </nav>
            </div>
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
