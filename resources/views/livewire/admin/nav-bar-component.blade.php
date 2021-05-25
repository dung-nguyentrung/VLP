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
                        @if ($orders->count() > 0)
                        <span class="badge badge-danger badge-pill noti-icon-badge">{{ $orders->count() }}</span>
                        @endif
                    </a>
                    <div class="pt-0 dropdown-menu dropdown-menu-right dropdown-lg">

                        <h6 class="py-3 m-0 dropdown-item-text font-15 border-bottom d-flex justify-content-between align-items-center">
                            Đặt hàng
                        </h6>
                        @if ($orders->count() > 0)
                            @foreach ($orders as $order)
                            <div class="notification-menu" data-simplebar>
                                <a href="#" class="py-3 dropdown-item">
                                    <small class="float-right pl-2 text-muted">{{ $order->created_at->diffForHumans() }}</small>
                                    <div class="media">
                                        <div class="avatar-md bg-soft-primary">
                                            <i data-feather="shopping-cart" class="align-self-center icon-xs"></i>
                                        </div>
                                        <div class="ml-2 media-body align-self-center text-truncate">
                                            <h6 class="my-0 font-weight-normal text-dark">Đơn hàng {{ $order->id }}</h6>
                                            <span class="mb-0 text-muted">Đã được đặt bởi {{ $order->user->name }}</span>
                                        </div><!--end media-body-->
                                    </div><!--end media-->
                                </a>
                            </div>
                            @endforeach
                        @else
                            <div class="notification-menu" data-simplebar>
                                <a href="#" class="py-3 dropdown-item">
                                    <div class="media">
                                        <div class="avatar-md bg-soft-primary">
                                            <i data-feather="shopping-cart" class="align-self-center icon-xs"></i>
                                        </div>
                                        <div class="ml-2 media-body align-self-center text-truncate">
                                            <span class="mb-0 text-muted">Chưa có đơn hàng mới được đặt</span>
                                        </div><!--end media-body-->
                                    </div><!--end media-->
                                </a>
                            </div>
                        @endif
                        <!-- All-->
                        <a href="{{ route('orders') }}" class="text-center dropdown-item text-primary">
                            Xem tất cả <i class="fi-arrow-right"></i>
                        </a>
                    </div>
                </li>
                <li class="dropdown notification-list">
                    <a class="nav-link dropdown-toggle arrow-none waves-light waves-effect" data-toggle="dropdown" href="#" role="button"
                        aria-haspopup="false" aria-expanded="false">
                        <i data-feather="users" class="align-self-center topbar-icon"></i>
                        @if ($recruitments->count() > 0)
                        <span class="badge badge-danger badge-pill noti-icon-badge">{{ $recruitments->count() }}</span>
                        @endif
                    </a>
                    <div class="pt-0 dropdown-menu dropdown-menu-right dropdown-lg">

                        <h6 class="py-3 m-0 dropdown-item-text font-15 border-bottom d-flex justify-content-between align-items-center">
                            Đơn ứng tuyển</span>
                        </h6>
                        @if ($recruitments->count() > 0)
                        @foreach($recruitments as $item)
                        <div class="notification-menu" data-simplebar>
                            <a href="#" class="py-3 dropdown-item">
                                <small class="float-right pl-2 text-muted">{{ $item->created_at->diffForHumans() }}</small>
                                <div class="media">
                                    <div class="avatar-md bg-soft-primary">
                                        <i data-feather="user" class="align-self-center icon-xs"></i>
                                    </div>
                                    <div class="ml-2 media-body align-self-center text-truncate">
                                        <h6 class="my-0 font-weight-normal text-dark">Đơn ứng tuyển mới</h6>
                                        <small class="mb-0 text-muted">{{ $item->name }} đã ứng tuyển vị trí {{ $item->position }}</small>
                                    </div><!--end media-body-->
                                </div><!--end media-->
                            </a>
                        </div>
                        @endforeach
                        @else
                            <div class="notification-menu" data-simplebar>
                                <a href="#" class="py-3 dropdown-item">
                                    <div class="media">
                                        <div class="avatar-md bg-soft-primary">
                                            <i data-feather="user" class="align-self-center icon-xs"></i>
                                        </div>
                                        <div class="ml-2 media-body align-self-center text-truncate">
                                            <span class="mb-0 text-muted">Chưa có người ứng tuyển mới</span>
                                        </div><!--end media-body-->
                                    </div><!--end media-->
                                </a>
                            </div>
                        @endif
                        <!-- All-->
                        <a href="{{ route('apply') }}" class="text-center dropdown-item text-primary">
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
