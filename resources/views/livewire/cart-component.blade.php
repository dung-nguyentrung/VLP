@section('title')
Giỏ Hàng
@endsection
<div class="header-breadcrumb-two">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <ul class="breadcrumb">
                    <li>
                        <a href="/">Trang chủ</a>
                    </li>
                    <li><i class="fas fa-angle-right"></i></li>
                    <li> <a href="/shop">Sản phẩm</a></li>
                    <li><i class="fas fa-angle-right"></i></li>
                    <li>Giỏ hàng</li>
                </ul>
            </div>
        </div>
    </div>
</div>
<div class="shop pb-120">
    <div class="container">
        @if (Session::has('message'))
        <div class="row">
            <h6 class="alert alert-success">{{ session::get('message') }}</h6>
        </div>
        @endif
        <div class="row">
            @if (Cart::count() > 0)
            <div class="col-12">
                <div class="cart-empty-item">
                    <p class="cart-empty">Sản phẩm</p>
                    @foreach (Cart::content() as $cart)
                    <div class="row">
                        <div class="col-1">
                            <img src="{{ asset('assets/images/shop')}}/{{ $cart->model->image }}" alt="{{ $cart->name }}">
                        </div>
                        <div class="col-3">
                            <p>{{ $cart->name }}</p>
                        </div>
                        <div class="col-2">
                            <b>{{ $cart->price }}</b>
                        </div>
                        <div class="col-1">
                            <input type="submit" value="-" class="minus-input">
                        </div>
                        <div class="col-1">
                            <input type="text" class="text-center custom-input" value="{{ $cart->qty }}">
                        </div>
                        <div class="col-1">
                            <input type="submit" value="+">
                        </div>
                        <div class="col-2">
                            <b>{{ $cart->subtotal }}</b>
                        </div>
                        <div class="col-1">
                            <button class="btn btn-danger"><i class="fas fa-trash-alt"></i></button>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
            <div class="col-12">
                <div class="cart-empty-item">
                    <p class="cart-empty">Thành tiền</p>
                    <div class="row">
                        <div class="col-3">
                            <b>Tổng tiền sản phẩm</b>
                        </div>
                        <div class="col-6">
                        </div>
                        <div class="col-3">
                            <b>{{ Cart::subtotal() }}</b>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-3">
                            <b>Thuế</b>
                        </div>
                        <div class="col-6">
                        </div>
                        <div class="col-3">
                            <b>{{ Cart::tax() }}</b>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-3">
                            <b>Vận chuyển</b>
                        </div>
                        <div class="col-6">
                        </div>
                        <div class="col-3">
                            <b>Miễn phí vận chuyển</b>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-3">
                            <b>Tất cả</b>
                        </div>
                        <div class="col-6">
                        </div>
                        <div class="col-3">
                            <b>{{ Cart::total() }}</b>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <input class="float-right btn-one" value="Đặt hàng"/>
                    </div>
                </div>
            </div>
            @else
            <div class="col-12">
                <div class="cart-empty-item">
                    <p class="cart-empty">Chưa có sản phẩm nào trong giỏ hàng</p>
                    <a href="/shop" class="main-btn-two">
                        <div class="text-btn">
                            <span class="text-btn-one">Quay lại sản phẩm</span>
                            <span class="text-btn-two">Quay lại sản phẩm</span>
                        </div>
                        <div class="arrow-btn">
                            <span class="arrow-one"><i class="fas fa-caret-right"></i></span>
                            <span class="arrow-two"><i class="fas fa-caret-right"></i></span>
                        </div>
                    </a>

                </div>
            </div>
            @endif

        </div>
    </div>
</div>
