@section('title')
    Đăng nhập tài khoản
@endsection
<x-guest-layout>
 <div class="header-breadcrumb-two">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <ul class="breadcrumb">
                        <li>
                            <a href="/">Home</a>
                        </li>
                        <li><i class="fas fa-angle-right"></i></li>
                        <li>Đăng nhập tài khoản</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <section class="shop pb-120">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="my-account-page">
                        <ul class="nav-tabs">
                            <li class="active" data-class="login">
                                <h5>Đăng nhập</h5>
                            </li>
                        </ul>
                    </div>
                    @if (session('errors'))
                    <h6 class="text-danger" style="margin-left: 50px;">
                        {{ 'Tên tài khoản hoặc mật khẩu không chính xác !' }}
                    </h6>
                    @endif
                    <div class="my-account">
                        <div class="login">
                            <div class="title-add">
                                <h4>Đăng nhập</h4>
                            </div>
                            <form class="form" method="POST" action="{{ route('login') }}">
                                @csrf
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <input type="email" class="form-control" name="email" :value="old('email')" required autofocus
                                                placeholder="Địa chỉ email của bạn">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <input type="password" name="password" required autocomplete="current-password" placeholder="Mật khẩu">
                                        </div>
                                    </div>
                                    <div class="col-md-12 mb-30">
                                        <!-- Button Send Message  -->
                                        <button type="submit" class="btn-one" name="login" value="login">Đăng nhập</button>
                                        <label>
                                            <input type="checkbox" name="remember" value="forever">
                                            <span class="remember-me">Nhớ mật khẩu</span>
                                        </label>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="mb-0 form-group loss-password">
                                            <a href="{{ route('password.request') }}">Quên mật khẩu</a>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-guest-layout>
