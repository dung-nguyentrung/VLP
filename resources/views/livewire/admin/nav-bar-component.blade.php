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
                        <a href="" class="text-center dropdown-item text-primary">
                            Xem tất cả <i class="fi-arrow-right"></i>
                        </a>
                    </div>
                </li>
                <li class="dropdown notification-list">
                    <a class="nav-link dropdown-toggle arrow-none waves-light waves-effect" data-toggle="dropdown" href="#" role="button"
                        aria-haspopup="false" aria-expanded="false">
                        <i data-feather="mail" class="align-self-center topbar-icon"></i>
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
                        <a href="" class="text-center dropdown-item text-primary">
                            Xem tất cả <i class="fi-arrow-right"></i>
                        </a>
                    </div>
                </li>
                <li class="dropdown notification-list">
                    <a class="nav-link dropdown-toggle arrow-none waves-light waves-effect" data-toggle="dropdown" href="#" role="button"
                        aria-haspopup="false" aria-expanded="false">
                        <i data-feather="users" class="align-self-center topbar-icon"></i>
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
                        <a href="" class="text-center dropdown-item text-primary">
                            Xem tất cả <i class="fi-arrow-right"></i>
                        </a>
                    </div>
                </li>
                @if (Route::has('login'))
                    @auth
                        <li class="dropdown">
                            <a class="nav-link dropdown-toggle waves-effect waves-light nav-user" data-toggle="dropdown" href="#" role="button"
                                aria-haspopup="false" aria-expanded="false">
                                <span class="ml-1 nav-user-name hidden-sm">{{ Auth::user()->name }}</span>
                                <img src="{{ asset('assets/images/users') }}/{{ Auth::user()->profile_photo_path }}" alt="profile-user" class="rounded-circle thumb-xs" />
                            </a>
                            <div class="dropdown-menu dropdown-menu-right">
                                <a class="dropdown-item" href="{{ route('profile') }}"><i data-feather="user" class="mr-1 align-self-center icon-xs icon-dual"></i> Hồ sơ</a>
                                <a class="dropdown-item" href="{{ route('changePassword') }}"><i data-feather="settings" class="mr-1 align-self-center icon-xs icon-dual"></i> Cài đặt</a>
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
