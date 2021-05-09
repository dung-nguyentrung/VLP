@section('title')
Đơn hàng
@endsection
<section id="page" class="header-breadcrumb">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <h1 class="page-title-heading">Sản phẩm</h1>
                <ul class="breadcrumb">
                    <li>
                        <a href="/">Trang chủ</a>
                    </li>
                    <li><i class="fas fa-angle-right"></i></li>
                    <li>Sản phẩm</li>
                </ul>
            </div>
        </div>
    </div>
</section>
<section class="shop single-shop pb-70">
    <div class="container">
        <div class="row">
            <div class="section-title-left col-12 title-order">
                <h4 class="title-inner-page">Đơn hàng của bạn</h4>
                @if (Session::has('message'))
                    <div class="alert alert-danger">{{ Session::get('message') }}</div>
                @endif
            </div>
            <div class="mb-20 col-12">
                <table class="table">
                    <thead class="thead-dark">
                      <tr>
                        <th>Mã đơn hàng</th>
                        <th>Tổng tiền</th>
                        <th>Họ và tên</th>
                        <th>Số điện thoại</th>
                        <th>Email</th>
                        <th>Zipcode</th>
                        <th>Tình trạng</th>
                        <th>Ngày đặt hàng</th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach($orders as $order)
                            <tr>
                                <th scope="row">{{ $order->id }}</th>
                                <td scope="row">{{ $order->total }}</td>
                                <td scope="row">{{ $order->name }}</td>
                                <th scope="row">{{ $order->phone }}</th>
                                <td scope="row">{{ $order->email }}</td>
                                <td scope="row">{{ $order->zipcode }}</td>
                                <th scope="row">{{ $order->status }}</th>
                                <td scope="row">{{ $order->created_at }}</td>
                            </tr>
                            <tr>
                                <th>Chi tiết đơn hàng</th>
                                <th></th>
                                <th>Tên sản phẩm</th>
                                <th>Hình ảnh</th>
                                <th>Số lượng</th>
                                <th>Giá/Sản phẩm</th>
                                <th></th>
                                <th>
                                    <form action="" method="post">
                                        <button type="submit" data-toggle="tooltip" data-placement="top" title="Hủy đơn hàng" class="btn btn-danger"><i class="fas fa-trash"></i></button>
                                    </form>
                                </th>
                            </tr>
                            @foreach (App\Models\OrderItem::where('order_id',$order->id)->get() as $item)
                            <tr>
                                <th></th>
                                <th></th>
                                <td>{{ $item->product->name }}</td>
                                <td>
                                    <img src="{{ asset('assets/images/shop') }}/{{ $item->product->image }}" width="120" height="100">
                                </td>
                                <td>{{ $item->quantity }}</td>
                                <td>{{ number_format($item->price) }} đồng</td>
                                <th></th>
                                <th></th>
                            </tr>
                            @endforeach
                        @endforeach
                    </tbody>
                  </table>
                  <div class="space"></div>
                <div class="mb-20 col-12 pt-70">
                    <div class="more-projects">
                        <div class="products-footer portfolio portoflio-one portfolio-two">
                            <h4>Sản phẩm phổ biến</h4>
                            <div class="owl-carousel case-classic">
                                @foreach ($populars as $product)
                                <div class="owl-item">
                                    <div class="single-product-item">
                                        <div class="single-product-item">
                                            <div class="img-product">
                                                <a href="{{ route('product.details',['slug' => $product->slug]) }}">
                                                    <img src="{{ asset('assets/images/shop') }}/{{ $product->image }}" class="product-image" alt="{{ $product->name }}">
                                                </a>
                                                <div class="btn-product">
                                                    <a href="{{ route('product.details',['slug' => $product->slug]) }}">
                                                        <i class="fa fa-info-circle"></i>
                                                        Chi tiết
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="content-product">
                                                <h4><a href="{{ route('product.details',['slug' => $product->slug]) }}">{{ $product->name }}</a></h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
