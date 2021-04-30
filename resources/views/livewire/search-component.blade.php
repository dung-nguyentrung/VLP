@section('title')
    Sản phẩm
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
<section class="shop pt-120 pb-70">
    <div class="container">
        <div class="row">
            <div class="col-3">
                <div class="left-side-bar">
                    <div class="widget mb-30">
                        <div class="body-widget">
                            <form action="{{ route('search') }}" method="GET">
                                <div class="title-widget">
                                    <h3>Tìm kiếm</h3>
                                </div>
                                <input type="text" name="keyword" class="mb-0" placeholder="Tìm kiếm..">
                                <button type="submit" class="btn-search" value="search">
                                    <i class="fas fa-search"></i>
                                </button>
                            </form>
                        </div>
                    </div>
                    <div class="widget mb-30">
                        <div class="body-widget tags">
                            <div class="title-widget">
                                <h3>Danh mục sản phẩm</h3>
                            </div>
                            <ul class="tags-list">
                                <li><a href="/shop">Tất cả</a></li>
                                @foreach ($categories as $category)
                                    <li><a href="{{ route('product-category',['slug' => $category->slug]) }}">{{ $category->name }}</a></li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                    <div class="widget mb-30">
                        <div class="widget-posts body-widget">
                            <div class="title-widget">
                                <h3>Sản phẩm phổ biến</h3>
                            </div>
                            @foreach ($populars as $popular)
                                <div class="lastet-posts">
                                    <a href="{{ route('product.details',['slug' => $popular->slug]) }}">
                                        <img src="{{ asset('assets/images/shop') }}/{{ $popular->image }}" alt="{{ $popular->name }}">
                                        <div class="inner-text">
                                            <h6>{{ $popular->name }}</h6>
                                        </div>
                                    </a>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-9">
                <div class="row">
                    @if($products->count() > 0)
                        @foreach ($products as $product)
                            <div class="col-lg-4 col-md-6 col-sm-6 mb-30">
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
                        @endforeach
                    @else
                        <div class="col-12">
                            <div class="text-center error-item">
                                <h2>Không tìm thấy sản phẩm</h2>
                            <p class="mb-20">Xin lỗi, hiện tại chưa có sản phẩm giống từ khóa bạn tìm kiếm.</p>
                                <a href="/shop" class="main-btn-two">
                                    <div class="text-btn">
                                        <span class="text-btn-one">Quay lại cửa hàng</span>
                                        <span class="text-btn-two">Quay lại cửa hàng</span>
                                    </div>
                                    <div class="arrow-btn">
                                        <span class="arrow-one"><i class="fas fa-caret-right"></i></span>
                                        <span class="arrow-two"><i class="fas fa-caret-right"></i></span>
                                    </div>
                                </a>

                            </div>
                        </div>
                    @endif
                    @if ($products->count() > 9)
                        <div class="col-12">
                            <div class="blog-pagination">
                                <ul class="pagination">
                                    <li><a href="{{ $products->previousPageUrl() }}"><i class="fas fa-angle-left"></i></a></li>
                                    <li><a href="{{ $products->nextPageUrl() }}"><i class="fas fa-angle-right"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</section>
