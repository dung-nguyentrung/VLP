@section('title')
Vân Long Plastic
@endsection
<section id="home" class="home main-home">
    <div class="slider-hero owl-carousel">
        <!-- New Item -->
        <div class="owl-item cover-background"
            style="background-image: url(assets/images/header/header-43.jpg); height: 700px; min-height: 100%;">
            <div class="overlay"></div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="text-left banner display-table">
                            <div class="table-cell info-header">
                                <div class="top-title-header">Welcome To VanLongPlastic</div>
                                <h1>Chào mừng đến với công ty TNHH Vân Long</h1>
                                <div class="text-header">Công ty TNHH Vân Long được thành lập năm 1999, là doanh nghiệp
                                    100% vốn Việt Nam,
                                    chuyên gia công và sản xuất các sản phẩm từ nhựa</div>
                                <div class="banner-btn">
                                    <!-- Button One -->
                                    <a href="#" class="main-btn-one">
                                        <div class="text-btn">
                                            <span class="text-btn-one">Chi tiết</span>
                                            <span class="text-btn-two">Chi tiết</span>
                                        </div>
                                        <div class="arrow-btn">
                                            <span class="arrow-one"><i class="fas fa-caret-right"></i></span>
                                            <span class="arrow-two"><i class="fas fa-caret-right"></i></span>
                                        </div>
                                    </a>
                                    <a href="https://www.youtube.com/embed/5ZHDN6MIxGc" data-lity="" class="play-video">
                                        <div class="play"><i class="fas fa-play"></i></div> <span>Giới thiệu</span>
                                    </a>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </div>
</section>
<section id="service" class="services services-one ptb-120">
    <div class="container">
        <div class="row section-title">
            <div class="col-md-5">
                <h2>Công nghệ</h2>
                <h3>Công nghệ chính</h3>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="owl-carousel services-carousel">
                    <div class="services-item-one">
                        <div class="owl-item">
                            <div class="img-services">
                                <img src="{{ asset('assets/images/services/01.jpg') }}" alt="services">
                            </div>
                            <div class="content-box">
                                <span class="fas fa-industry"></span>
                                <h4>NHỰA CÔNG NGHIỆP-DÂN DỤNG</h4>
                                <p>Công nghệ ép phun nhựa, gia công - sản xuất các sản phẩm chi tiết nhựa cho ngành điện tử...</p>
                                <a href="services-single.html" class="btn-read-more">
                                    <div class="text-btn">Chi tiết</div>
                                    <i class="fas fa-long-arrow-alt-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="services-item-one">
                        <div class="owl-item">
                            <div class="img-services">
                                <img src="{{ asset('assets/images/services/02.jpg') }}" class="two" alt="services">
                            </div>
                            <div class="content-box">
                                <span class="fas fa-industry"></span>
                                <h4>CAN - CHAI NHỰA <br> PE </h4>
                                <p>Sản xuất các sản phẩm phôi PET, Can - Chai PET phục vụ ngành nước giải khát,...</p>
                                <a href="services-single.html" class="btn-read-more">
                                    <div class="text-btn">Chi tiểt</div>
                                    <i class="fas fa-long-arrow-alt-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="services-item-one">
                        <div class="owl-item">
                            <div class="img-services">
                                <img src="{{ asset('assets/images/services/03.jpg') }}" alt="services">
                            </div>
                            <div class="content-box">
                                <span class="fas fa-industry"></span>
                                <h4>CAN - CHAI NHỰA PET</h4>
                                <p>Sản xuất các sản phẩm phôi PET, Can - Chai PET phục vụ ngành nước giải khát,...</p>
                                <a href="services-single.html" class="btn-read-more">
                                    <div class="text-btn">Chi tiểt</div>
                                    <i class="fas fa-long-arrow-alt-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="services-item-one">
                        <div class="owl-item">
                            <div class="img-services">
                                <!-- Image OF Case -->
                                <img src="{{ asset('assets/images/services/04.jpg') }}" alt="services">
                            </div>
                            <div class="content-box">
                                <span class="fas fa-industry"></span>
                                <h4>LẮP RÁP CHI TIẾT NHỰA</h4>
                                <p>Gia công - Lắp ráp các sản phẩm máy giặt - máy điều hòa - máy hút bụi, và nhiều linh kiện khác...</p>
                                <a href="services-single.html" class="btn-read-more">
                                    <div class="text-btn">Chi tiết</div>
                                    <i class="fas fa-long-arrow-alt-right"></i>
                                </a>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="faq">
    <div class="faq faq-page pb-120">
        <div class="container">
            <div class="row section-title">
                <div class="col-md-5">
                    <h2>FAQ </h2>
                    <h3>Câu hỏi thường gặp</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div id="accordion" class="acco">
                        @foreach ($faqs as $faq)
                            <div class="card">
                                <div class="card-header" id="heading-7">
                                    <h5 class="mb-0">
                                        <button class="btn btn-link collapsed" data-toggle="collapse"
                                            data-target="#collapse-7" aria-expanded="false" aria-controls="collapse-7">
                                            {{ $faq->question }}
                                        </button>
                                    </h5>
                                </div>
                                <div id="collapse-7" class="collapse" aria-labelledby="heading-7" data-parent="#accordion">
                                    <div class="card-body">
                                        {{ $faq->content }}
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
<div id="clients" class="clients ptb-120">
    <div class="overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-12 owl-carousel sponsor owl-loaded">
                <div class="owl-item">
                    <div class="sponsor-item">
                        <img src="{{ asset('assets/images/sponsor-2/1.png') }}" alt="sponsor">
                    </div>
                </div>
                <div class="owl-item">
                    <div class="sponsor-item">
                        <img src="{{ asset('assets/images/sponsor-2/2.png') }}" alt="sponsor">
                    </div>
                </div>
                <div class="owl-item">
                    <div class="sponsor-item">
                        <img src="{{ asset('assets/images/sponsor-2/3.png') }}" alt="sponsor">
                    </div>
                </div>
                <div class="owl-item">
                    <div class="sponsor-item">
                        <img src="{{ asset('assets/images/sponsor-2/4.png') }}" alt="sponsor">
                    </div>
                </div>
                <div class="owl-item">
                    <div class="sponsor-item">
                        <img src="{{ asset('assets/images/sponsor-2/5.png') }}" alt="sponsor">
                    </div>
                </div>
                <div class="owl-item">
                    <div class="sponsor-item">
                        <img src="{{ asset('assets/images/sponsor-2/6.png') }}" alt="sponsor">
                    </div>
                </div>
                <div class="owl-item">
                    <div class="sponsor-item">
                        <img src="{{ asset('assets/images/sponsor-2/7.png') }}" alt="sponsor">
                    </div>
                </div>
                <div class="owl-item">
                    <div class="sponsor-item">
                        <img src="{{ asset('assets/images/sponsor-2/8.png') }}" alt="sponsor">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<section id="blog" class="blog pt-120 pb-90">
    <div class="container">
        <div class="row section-title">
            <div class="col-md-5">
                <h2>Tin tức</h2>
                <h3>Bài viết mới nhất</h3>
            </div>
        </div>
        <div class="row">
            @foreach ($news as $new)
            <div class="col-lg-4 col-sm-6">
                <div class="blog-item">
                    <!-- Blog Image -->
                    <div class="blog-img">
                    <a href="blog.html"><img src="{{ asset('assets/images/blog') }}/{{ $new->image }}" alt="blog"></a>
                    </div>
                    <!-- Blog info -->
                    <div class="blog-info">
                        <ul class="date">
                            <li>{{ $new->created_at }}</li>
                            <li><a href="">{{ $new->post_category->name }}</a></li>
                        </ul>
                        <div class="title-post">
                            <a href="blog.html">
                                <h5>{{ $new->title }}</h5>
                            </a>
                        </div>
                        <div class="post-text">
                            <p>{{ $new->limit() }}</p>
                        </div>
                        <a href="blog.html" class="btn-read-more">
                            <div class="text-btn">Read More</div>
                            <i class="fas fa-long-arrow-alt-right"></i>
                        </a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
