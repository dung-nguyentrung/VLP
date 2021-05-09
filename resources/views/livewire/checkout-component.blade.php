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
                                @if (Session::has('stripe_error'))
                                    <div class="alert alert-danger" role="alert">{{ Session::get('stripe_error') }}</div>
                                @endif
                                <hr>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="section-title-left">
                                            <h4 class="title-inner-page">Phương thức thanh toán</h4>
                                        </div>
                                        <div class="radio">
                                            <label><input type="radio" name="paymentMode" value="cod">Thanh toán khi nhận hàng</label>
                                          </div>
                                          <div class="radio">
                                            <label><input type="radio" id="card" name="paymentMode" value="card">Thẻ ATM</label>
                                          </div>
                                          <div class="radio">
                                            <label><input type="radio" name="paymentMode" value="paypal">Paypal</label>
                                          </div>
                                          @error('paymentMode')
                                                <p class="alert alert-danger">{{ "Bạn phải chọn 1 trong 3 phương thức thanh toán" }}</p>
                                            @enderror
                                        <hr>
                                    </div>
                                        <div class="col-md-6" id="card-form">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label>Số tài khoản:</label>
                                                    <input type="text" name="number_no" placeholder="Số tài khoản">
                                                    @error('number_no')
                                                        <p class="alert alert-danger">{{ "Số tài khoản không được trống" }}</p>
                                                        <p class="alert alert-danger">{{ "Số tài khoản phải đúng định dạng" }}</p>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label>Tháng tạo thẻ:</label>
                                                    <input type="text" name="expiry_month" placeholder="Tháng">
                                                    @error('expiry_month')
                                                        <p class="alert alert-danger">{{ "Tháng tạo thẻ không được trống" }}</p>
                                                        <p class="alert alert-danger">{{ "Tháng tạo thẻ phải đúng định dạng" }}</p>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label>Năm tạo thẻ:</label>
                                                    <input type="text" name="expriry_year" placeholder="Năm">
                                                    @error('expriry_year')
                                                        <p class="alert alert-danger">{{ "Năm tạo thẻ không được trống" }}</p>
                                                        <p class="alert alert-danger">{{ "Năm tạo thẻ phải đúng định dạng" }}</p>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label>CVC:</label>
                                                    <input type="password" name="CVC" placeholder="Mã xác minh thẻ">
                                                    @error('CVC')
                                                        <p class="alert alert-danger">{{ "CVC không được trống" }}</p>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
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
@push('scripts')
    <script>
    $(function(){
        $("input:radio[id=card]").on('click',function(){
            if ($("#card").is(":checked")){
                $("#card-form").css('display','block', 'important');
                $("#card-form").attr('checked',true);
            }
        });
    });
    </script>
@endpush
