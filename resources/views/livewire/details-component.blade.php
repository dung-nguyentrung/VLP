@section('title')
    {{ $product->name }}
@endsection
<div class="header-breadcrumb-two">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <ul class="breadcrumb">
                    <li>
                        <a href="/">Trang chủ</a>
                    </li>
                    <li><i class="fas fa-angle-right"></i></li>
                    <li> <a href="/shop">Sản phảm</a></li>
                    <li><i class="fas fa-angle-right"></i></li>
                    <li>{{ $product->name }}</li>
                </ul>
            </div>
        </div>
    </div>
</div>
<section class="shop single-shop pb-70">
    <div class="container">
        <div class="row">
            <div class="mb-20 col-12">
                <div class="row box-single-product">
                    <div class="col-md-6">
                        <div class="img-product-item">
                            <div class="img-product">
                                <img src="{{ asset('assets/images/shop') }}/{{ $product->image }}" alt="{{ $product->name }}">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="product-info mb-50">
                            <h3>{{ $product->name }}</h3>
                            <div class="price-product">
                                <span class="new-price">$39.00</span>
                                <span class="old-price">$49.00</span>
                            </div>
                            <span class="evaluation-product">
                                Tình trạng: <span class="text-danger font-weight-bold font-italic">{{ $product->stock_status }}</span>
                            </span>
                            <p>{{ $product->short_description }}</p>
                            <div class="btns">
                                <div class="quantity">
                                    <a href="#" class="minus"><i class="fa fa-minus"></i></a>

                                    <input type="text" value="1" title="Qty" size="1">

                                    <a href="#" class="plus"><i class="fa fa-plus"></i></a>
                                </div>

                                <a href="#" class="btn-one">Thêm giỏ hàng</a>
                            </div>

                            <div class="mt-50">
                                <div class="share-product">
                                    <span>Chia sẻ </span>
                                    <div class="share">
                                        <ul class="share-social">
                                            <li><a href="#" class="facebook"><i class="fab fa-facebook-f"></i></a></li>
                                            <li><a href="#" class="twitter"><i class="fab fa-twitter"></i></a></li>
                                            <li><a href="#" class="google"><i class="fab fa-google-plus"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mb-50">
                    <div class="revision">
                        <ul class="nav-tabs">
                            <li class="active" data-class="discription-one">
                                <h5>Mô tả sản phẩm</h5>
                            </li>

                            <li data-class="reviews">
                                <h5>Đánh giá (0)</h5>
                            </li>
                        </ul>
                        <div class="content-revision">
                            <div class="discription-one">
                                <p class="mb-10">{{ $product->description }}</p>
                            </div>
                            <div class="reviews">
                                <div class="post-comment">
                                    <div class="title-add">
                                        <h4>Đánh giá</h4>
                                        <span>Chưa có đánh giá về sản phẩm này !</span>
                                    </div>
                                    <div class="comment-form">
                                        <form class="form">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <input type="text" placeholder="Name">
                                                    </div>

                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <input type="Email" placeholder="Email">
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <textarea placeholder="your review"></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                            <a href="#" class="btn-one">Submit Comment</a>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mb-20 col-12 pt-70">
                    <div class="more-projects">
                        <div class="products-footer portfolio portoflio-one portfolio-two">
                            <h4>Sản phẩm liên quan</h4>
                            @foreach ($relateds as $related)
                            <div class="owl-carousel case-classic">
                                <div class="owl-item">
                                    <div class="single-product-item">
                                        <div class="img-product">
                                            <a href="{{ route('product.details',['slug' => $related->slug]) }}">
                                                <img src="{{ asset('assets/images/shop') }}/{{ $related->image }}" alt="{{ $related->name }}">
                                            </a>
                                            <div class="btn-product">
                                                <a href="{{ route('product.details',['slug' => $related->slug]) }}">
                                                    <i class="fa fa-info-circle"></i>
                                                    Chi tiết
                                                </a>
                                            </div>
                                        </div>
                                        <div class="content-product">
                                            <h4><a href="{{ route('product.details',['slug' => $related->slug]) }}">{{  $related->name  }}</a></h4>
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
</section>
