@section('title')
Thanh toán
@endsection
<section id="page" class="header-breadcrumb">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <h1 class="page-title-heading">Thanh toán
                </h1>
            </div>
        </div>
    </div>
</section>
<section class="contact-us-page pt-120 pb-60">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="contact-us-meta">
                    <div class="row">
                        <div class="col-lg-12 mb-50">
                            <div class="section-title-left">
                                <h4 class="title-inner-page">Thanh toán</h4>
                            </div>
                            <form class="form" action="{{ route('order.checkout') }}" method="POST">
                                @csrf
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Họ và tên:</label>
                                            <input type="text" name="name" placeholder="Họ và tên của bạn">
                                            @error('name')
                                                <p class="alert alert-danger">{{ "Họ tên không được trống" }}</p>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Tên công ty/Doanh nghiệp:</label>
                                            <input type="text" name="company" placeholder="Tên công ty/Doanh nghiệp">
                                            @error('company')
                                                <p class="alert alert-danger">{{ "Tên công ty/Doang nghiệp không được trống" }}</p>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Số điện thoại:</label>
                                            <input type="text" name="phone" placeholder="Số điện thoại">
                                            @error('phone')
                                                <p class="alert alert-danger">{{ "Số điện thoại không được trống" }}</p>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Địa chỉ email:</label>
                                            <input type="email" name="email" placeholder="Địa chỉ Email">
                                            @error('email')
                                                <p class="alert alert-danger">{{ "Email đã được sử dụng không được trống" }}</p>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Địa chỉ:</label>
                                            <input type="text" name="address" placeholder="Địa chỉ hiện tại của bạn">
                                            @error('address')
                                                <p class="alert alert-danger">{{ "Địa chỉ hiện tại của bạn không được trống" }}</p>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Huyện/Quận:</label>
                                            <input type="text" name="city" placeholder="Huyện/Quận">
                                            @error('city')
                                                <p class="alert alert-danger">{{ "Tên huyện/thành phố không được trống" }}</p>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Tỉnh/Thành phố:</label>
                                            <input type="text" name="province" placeholder="Tỉnh/Thành phố">
                                            @error('province')
                                                <p class="alert alert-danger">{{ "Tên tỉnh/thành phố không được trống" }}</p>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Postcode/ZIP:</label>
                                            <input type="text" name="zipcode" placeholder="Postcode/ZIP">
                                            @error('zipcode')
                                                <p class="alert alert-danger">{{ "Zipcode không được trống" }}</p>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Line 1:</label>
                                            <input type="text" name="line1" placeholder="Line 1">
                                            @error('line1')
                                                <p class="alert alert-danger">{{ "Dòng này không được trống" }}</p>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Line 2:</label>
                                            <input type="text" name="line2" placeholder="Line 2">
                                        </div>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="section-title-left">
                                            <h4 class="title-inner-page">Phương thức thanh toán</h4>
                                        </div>
                                        <div class="radio">
                                            <label><input type="radio" name="paymentmode" value-"cod" checked>Thanh toán khi nhận hàng</label>
                                          </div>
                                          <div class="radio">
                                            <label><input type="radio" name="paymentmode" value="card">Thẻ ATM</label>
                                          </div>
                                          <div class="radio disabled">
                                            <label><input type="radio" name="paymentmode" value="paypal">Paypal</label>
                                          </div>
                                          @error('paymentmode')
                                                <p class="alert alert-danger">{{ "Bạn phải chọn 1 trong 3 phương thức thanh toán" }}</p>
                                            @enderror
                                        <hr>
                                        @if(Session::has('checkout'))
                                        <div class="row">
                                            <div class="section-title-left">
                                                <h4 class="title-inner-page">Thành tiền: {{ Session::get('checkout')['total'] }} đồng</h4>
                                            </div>
                                        </div>
                                        @endif
                                        <input type="submit" class="btn-one btn-center" value="Đặt hàng">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
