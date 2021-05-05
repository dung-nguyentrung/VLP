@section('title')
    Đăng ký tài khoản
@endsection
<x-guest-layout>
    <section class="shop pb-120">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="my-account-page">
                        <ul class="nav-tabs">
                            <li data-class="register">
                                <h5>Đăng ký tài khoản</h5>
                            </li>
                        </ul>
                    </div>
                    <div class="my-account">
                        <div class="register">
                            <div class="title-add">
                                <h4>Đăng ký tài khoản mới</h4>
                            </div>
                            <form class="form" method="POST" action="{{ route('register') }}">
                                @csrf
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="name" :value="old('name')" required autofocus
                                            autocomplete="name" placeholder="Tên tài khoản">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <input type="email" name="email" :value="old('email')" required placeholder="Địa chỉ email của bạn">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <input type="password" name="password" required
                                            autocomplete="new-password" placeholder="Mật khẩu">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <input type="password" name="password_confirmation"
                                            required autocomplete="new-password" placeholder="Xác nhận mật khẩu">
                                        </div>
                                    </div>
                                    <div class="mb-0 col-md-12">
                                        <input type="submit" class="btn-one" name="login" value="Đăng ký tài khoản">
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
