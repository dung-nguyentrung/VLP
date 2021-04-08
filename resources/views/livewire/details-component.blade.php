<div class="header-breadcrumb-two">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <ul class="breadcrumb">
                    <li>
                        <a href="/">Home</a>
                    </li>
                    <li><i class="fas fa-angle-right"></i></li>
                    <li> <a href="/sgop">Sản phẩm</a></li>
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
                                <span class="new-price">number_format({{ $product->price }})</span>
                            </div>
                            <p>{{ $product->short_description }}</p>
                            <div class="btns">
                                <div class="quantity">
                                    <p>Tình trạng: {{ $product->status }}</p>
                                    <p>Mã sản phẩm: {{ $product->SKU }}</p>
                                </div>
                                <a href="#" class="btn-one">Mua hàng</a>
                            </div>
                            <div class="mt-50">
                                <div class="share-product">
                                    <span>Share </span>
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
                                <h5>Mô tả</h5>
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
                                        <span>Chưa có đánh giá nào về sản phẩm này !</span>
                                    </div>

                                    <div class="comment-form">
                                        <form class="form">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <input type="text" placeholder="Họ và tên">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <input type="Email" placeholder="Email của bạn">
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <textarea placeholder="Đánh giá sản phẩm"></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Button Send Message  -->
                                            <a href="#" class="btn-one">Đánh giá</a>
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
                            <div class="owl-carousel case-classic">
                                @foreach ($relateds as $related)
                                <div class="owl-item">
                                    <div class="single-product-item">
                                        <div class="img-product">
                                            <a href="#">
                                                <img src="{{ asset('assets/images/shop') }}/{{ $related->image }}" alt="{{ $related->name }}">
                                            </a>
                                            <div class="btn-product">
                                                <a href="single-product-item">
                                                    <i class="fa fa-info-circle"></i>
                                                    Chi tiết
                                                </a>
                                            </div>
                                        </div>

                                        <div class="content-product">
                                            <div class="price-product">
                                                <span class="new-price">{{ $related->price }}</span>
                                            </div>
                                            <ul class="evaluation-product">
                                                <li><i class="fas fa-star fa-2x"></i></li>
                                                <li><i class="fas fa-star fa-2x"></i></li>
                                                <li><i class="fas fa-star fa-2x"></i></li>
                                                <li><i class="fas fa-star fa-2x"></i></li>
                                                <li><i class="fas fa-star fa-2x"></i></li>
                                            </ul>
                                            <h4><a href="">{{ $related->name }}</a></h4>

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
