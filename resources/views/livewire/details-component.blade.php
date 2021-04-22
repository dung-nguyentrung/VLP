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
                    <li> <a href="/shop">Sản phẩm</a></li>
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
                                <span class="new-price">{{ number_format($product->price) }} đồng</span>
                            </div>
                            <span class="evaluation-product">
                                Tình trạng: <span class="text-danger font-weight-bold font-italic">{{ $product->stock_status }}</span>
                            </span>
                            <span>{!! $product->short_description !!}</span>
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
                                    <div class="share">
                                        <div class="fb-share-button" data-href="http://127.0.0.1:8000/product/{{ Request::url() }}" data-layout="button_count"
                                        data-size="large"><a target="_blank" href="https://www.facebook.com/sharer/sharer.php?{{ Request::url() }}" class="fb-xfbml-parse-ignore">Share</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mb-50">
                    <div class="revision">
                        <ul class="nav-tabs">
                            <li data-class="reviews">
                                <h5>Đánh giá ({{ $comments->count() }})</h5>
                            </li>
                        </ul>
                        <div class="content-revision">
                            <div class="reviews">
                                <div class="post-comment">
                                    <div class="title-add">
                                        <h4>Đánh giá về sản phẩm</h4>
                                        @if ($comments->count() > 0)
                                            <div class="col-12">
                                                <div class="comments mb-30">
                                                    <div class="inner-comments" id="comment">
                                                        @foreach($comments as $comment)
                                                        <div class="comment-author">
                                                            <img src="{{ asset('assets/images/clients/user.png') }}" alt="author">
                                                            <div class="person">
                                                                <h5>{{ $comment->name }}</h5>
                                                                <div class="time">{{ $comment->created_at }}</div>
                                                                <p>{{ $comment->comment }}</p>
                                                            </div>
                                                        </div>
                                                        @endforeach
                                                    </div>
                                                </div>
                                            </div>
                                        @else
                                            <span>Chưa có đánh giá về sản phẩm này !</span>
                                        @endif
                                    </div>
                                    <div class="comment-form">
                                        <form class="form" action="{{ route('comment') }}" method="POST">
                                            @csrf
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <input type="text" name="name" id="name" placeholder="Họ tên của bạn">
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <input type="hidden" name="product_id" id="product_id" value="{{ $product->id }}">
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <input type="hidden" name="slug" value="{{ $product->slug }}">
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <textarea name="comment" id="comment" placeholder="Đánh giá về sản phẩm"></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                            <button type="submit" class="btn-one">Đánh giá</button>
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
<div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v10.0&appId=2886881688214518&autoLogAppEvents=1" nonce="QEjeiBn7"></script>
