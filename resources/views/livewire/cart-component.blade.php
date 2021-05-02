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
                            <p class="text-dark">{{ $cart->name }}</p>
                        </div>
                        <div class="col-2">
                            <b class="text-dark">{{ number_format($cart->price) }} đồng</b>
                        </div>
                        <div class="col-3">
                        <form action="{{ route('cart.update') }}" method="post">
                            @csrf
                            <div class="input-group">
                                <input type="text" name="qty" size="1" class="text-center custom-input form-control" value="{{ $cart->qty }}">
                                <input type="hidden" name="rowId" value="{{ $cart->rowId }}">
                                <button type="submit" value="Cập nhật" class="form-control btn btn-link"><i class="fas fa-arrow-alt-circle-up"></i></button>
                            </div>
                        </form>
                        </div>
                        <div class="col-2">
                            <b class="text-dark">{{ number_format($cart->subtotal) }} đồng</b>
                        </div>
                        <div class="col-1">
                            <form action="{{ route('cart.delete') }}" method="post">
                                @csrf
                                <input type="hidden" name="rowId" value="{{ $cart->rowId }}">
                                <button type="submit" class="btn btn-danger" onclick="return confirm('Bạn có chắc là muốn xóa sản phẩm này không?');"><i class="fas fa-trash-alt"></i></button>
                            </form>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
            <div class="col-12">
                <form action="{{ route('cart.destroy') }}" method="post">
                    @csrf
                    <button type="submit" onclick="return confirm('Bạn có chắc là muốn xóa toàn bộ sản phẩm không?');" class="float-right btn-one">Xoá tât cả</button>
                </form>
            </div>
            <div class="col-12">
                <div class="cart-empty-item">
                    <p class="cart-empty">Thành tiền</p>
                    <div class="row">
                        <div class="col-3">
                            <b class="text-dark">Tổng tiền sản phẩm</b>
                        </div>
                        <div class="col-6">
                        </div>
                        <div class="col-3">
                            <b class="text-dark">{{ Cart::subtotal() }} đồng</b>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-3">
                            <b class="text-dark">Thuế</b>
                        </div>
                        <div class="col-6">
                        </div>
                        <div class="col-3">
                            <b class="text-dark">{{ Cart::tax() }} đồng</b>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-3">
                            <b class="text-dark">Vận chuyển</b>
                        </div>
                        <div class="col-6">
                        </div>
                        <div class="col-3">
                            <b class="text-dark">Miễn phí vận chuyển</b>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-3">
                            <b class="text-dark">Tất cả</b>
                        </div>
                        <div class="col-6">
                        </div>
                        <div class="col-3">
                            <b class="text-dark">{{ Cart::total() }} đồng</b>
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
