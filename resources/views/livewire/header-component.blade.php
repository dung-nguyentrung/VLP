<div class="loading-screen">
    <div class="display-table">
        <div class="table-cell">
            <div class="lds-ring">
                <div></div>
                <div></div>
                <div></div>
                <div></div>
            </div>
        </div>
    </div>
</div>
<div class="upper-bar upper-bar-two">
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <div class="contact-us-bar">
                    <a href="http://vanlongplastic.com.vn/">
                        Welcome to VanLongPlastic
                    </a>
                </div>
            </div>
            <div class="col-md-3 d-n-mobile d-n-tab">
                <ul class="social-media-bar">
                    <li><a href="https://www.facebook.com/TUY%E1%BB%82N-D%E1%BB%A4NG-V%C3%82N-LONG-111007523649398/" class="facebook"><i class="fab fa-facebook-f"></i></a></li>
                    <li><a href="https://www.youtube.com/channel/UCrYT1V4gFMkZs0f1sJcejCg" class="youtube"><i class="fab fa-youtube"></i></a></li>
                    @if (Route::has('login'))
                        @auth
                            @if (Auth::user()->utype == "USR")
                                <li><a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="user"><i class="fas fa-sign-out-alt"></i></a></li>
                                <form action="{{ route('logout') }}" id="logout-form" method="post">
                                    @csrf
                                </form>
                            @else
                                <li><a href="{{ route('dashboard') }}" class="user"><i class="fa fa-home" aria-hidden="true"></i></a></li>
                            @endif
                        @else
                        <li><a href="{{ route('login') }}" class="user"><i class="fa fa-user"></i></a></li>
                        @endif
                    @endif
                </ul>
            </div>
        </div>
    </div>
</div>
<nav class="nav-bar nav-bar-two sticky-navbar">
    <div>
        <div class="nav-output">
            <div class="container container-nav">
                <!-- Row -->
                <div class="row">
                    <div class="col-lg-3 col-12">
                        <a href="/" class="my-logo">
                            <img class="logo-two" src="{{ asset('assets/images/logo/logo.png') }}" width="80" alt="logo">
                        </a>
                        <a href="#" class="navbar-toggle">
                            <span></span>
                            <span></span>
                            <span></span>
                        </a>
                    </div>
                    <div class="col-lg-9 col-md-12 position-inherit">
                        <div class="icon-links">
                            <a href="#" class="search-btn">
                                <i class="fas fa-search"></i>
                            </a>
                            <a href="shop-cart.html" class="cart-link">
                                <i class="fa fa-shopping-cart"></i>
                            </a>
                            <a href="#" class="side-menu-btn">
                                <!-- <i class="fas fa-ellipsis-v"></i> -->
                                <span></span>
                                <span></span>
                                <span></span>
                            </a>
                        </div>
                        <!-- Main Menu Links -->
                        <ul id="main-menu" class="nav-menu">
                            <li class="nav-item has-dropdown active">
                                <a href="/" class="nav-link">
                                    Trang chủ
                                </a>
                            </li>
                            <li class="nav-item has-dropdown">
                                <a href="/shop" class="nav-link">
                                    Sản phẩm
                                </a>
                            </li>
                            <li class="nav-item has-dropdown">
                                <a href="/careers" class="nav-link">
                                    Tuyển dụng
                                </a>
                            </li>
                            <li class="nav-item has-dropdown">
                                <a href="/news" class="nav-link">
                                    Tin tức sự kiện
                                </a>
                            </li>
                            <li class="nav-item has-dropdown">
                                <a href="/gallery" class="nav-link">
                                    Gallery
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="/contact" class="nav-link">Liên hệ</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</nav>
<div class="side-menu">

    <a href="#" class="close-side-menu">
        <span class="pe-7s-close"></span>
    </a>
    <div class="inner-side">
        <div class="about-side">
            <img src="{{ asset('assets/images/logo/logo.png') }}" alt="logo">
            <p>{{ $setting->description }}</p>
            <a href="#" class="main-btn-two mt-30">
                <div class="text-btn">
                    <span class="text-btn-one">Thông tin</span>
                    <span class="text-btn-two">Thông tin</span>
                </div>
                <div class="arrow-btn">
                    <span class="arrow-one"><i class="fas fa-caret-right"></i></span>
                    <span class="arrow-two"><i class="fas fa-caret-right"></i></span>
                </div>
            </a>
        </div>
        <div class="contact-side">
            <h6>Thông tin</h6>
            <div class="line-side"></div>
            <div class="contact-info">

                <div class="single-contact">
                    <span class="flaticon-call"></span>
                    <div class="info-cont">
                        <p>{{ $setting->phone }}</p>
                        <p>{{ $setting->fax }}</p>
                    </div>
                </div>
                <div class="single-contact">
                    <span class="flaticon-email"></span>
                    <div class="info-cont">
                        <p>{{ $setting->email }}</p>
                    </div>
                </div>
                <div class="single-contact">
                    <span class="flaticon-location"></span>
                    <div class="info-cont">
                        <p>{{ $setting->address }}</p>
                    </div>
                </div>
                <div class="single-contact">
                    <span class="flaticon-time"></span>
                    <div class="info-cont">
                        <p>Mở cửa: {{ $setting->open_description }}</p>
                        <p>Thời gian: {{ $setting->open_time }}</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="follow-us">
            <h6>Follow Us</h6>
            <div class="line-side"></div>
            <ul class="social-media">
                <li><a href="https://www.facebook.com/TUY%E1%BB%82N-D%E1%BB%A4NG-V%C3%82N-LONG-111007523649398/" class="facebook"><i class="fab fa-facebook-f"></i></a></li>
                <li><a href="https://www.youtube.com/channel/UCrYT1V4gFMkZs0f1sJcejCg" class="youtube"><i class="fab fa-youtube"></i></a></li>
            </ul>
        </div>
    </div>
</div>
<div class="close-menu-sidebar"></div>
<div class="search-screen">
    <a href="#" class="close-search"><span class="pe-7s-close"></span></a>

    <form class="input-search">
        <input type="search" placeholder="Tìm kiếm sản phẩm">
        <button type="submit" class="search-btn"> <i class="fas fa-search"></i> </button>
    </form>

</div>
