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
                                <span class="flaticon-conveyor-1"></span>
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
                                <span class="flaticon-oil-1"></span>
                                <h4>CAN - CHAI NHỰA <br> PE </h4>
                                <p>Sản xuất các sản phẩm phôi PET, Can - Chai PET phục vụ ngành nước giải khát,...</p>
                                <a href="services-single.html" class="btn-read-more">
                                    <div class="text-btn">Chi tiể</div>
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
                                <span class="flaticon-oil-1"></span>
                                <h4>CAN - CHAI NHỰA PET</h4>
                                <p>Sản xuất các sản phẩm phôi PET, Can - Chai PET phục vụ ngành nước giải khát,...</p>
                                <a href="services-single.html" class="btn-read-more">
                                    <div class="text-btn">Chi tiể</div>
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
                                <span class="flaticon-robot-arm-1"></span>
                                <h4>LẮP RÁP CHI TIẾT NHỰA</h4>
                                <p>Gia công - Lắp ráp các sản phẩm máy giặt - máy điều hòa - máy hút bụi, và nhiều linh kiện khác...</p>
                                <a href="services-single.html" class="btn-read-more">
                                    <div class="text-btn">Read More</div>
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
                        <div class="card active">
                            <div class="card-header" id="headingOne">
                                <h5 class="mb-0">
                                    <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne"
                                        aria-expanded="true" aria-controls="collapseOne">
                                        Why We Are Best Company ?
                                    </button>
                                </h5>
                            </div>
                            <div id="collapseOne" class="collapse show" aria-labelledby="headingOne"
                                data-parent="#accordion">
                                <div class="card-body">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed eiusm tmpor incididunt
                                    ut labore et dolore magna aliqua. enim ad minim veniam, quis nostrud exercitation
                                    ullamco laboris nisi ut aliquip.
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingTwo">
                                <h5 class="mb-0">
                                    <button class="btn btn-link collapsed" data-toggle="collapse"
                                        data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        How we work with internation case?
                                    </button>
                                </h5>
                            </div>
                            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo"
                                data-parent="#accordion">
                                <div class="card-body">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed eiusm tmpor incididunt
                                    ut labore et dolore magna aliqua. enim ad minim veniam, quis nostrud exercitation
                                    ullamco laboris nisi ut aliquip.
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingThree">
                                <h5 class="mb-0">
                                    <button class="btn btn-link collapsed" data-toggle="collapse"
                                        data-target="#collapseThree" aria-expanded="false"
                                        aria-controls="collapseThree">
                                        Process of our business law?
                                    </button>
                                </h5>
                            </div>
                            <div id="collapseThree" class="collapse" aria-labelledby="headingThree"
                                data-parent="#accordion">
                                <div class="card-body">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed eiusm tmpor incididunt
                                    ut labore et dolore magna aliqua. enim ad minim veniam, quis nostrud exercitation
                                    ullamco laboris nisi ut aliquip.
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingFour">
                                <h5 class="mb-0">
                                    <button class="btn btn-link collapsed" data-toggle="collapse"
                                        data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                        Do you know what to do in order to succeed?
                                    </button>
                                </h5>
                            </div>
                            <div id="collapseFour" class="collapse" aria-labelledby="headingFour"
                                data-parent="#accordion">
                                <div class="card-body">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed eiusm tmpor incididunt
                                    ut labore et dolore magna aliqua. enim ad minim veniam, quis nostrud exercitation
                                    ullamco laboris nisi ut aliquip.
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingFive">
                                <h5 class="mb-0">
                                    <button class="btn btn-link collapsed" data-toggle="collapse"
                                        data-target="#collapse-5" aria-expanded="false" aria-controls="collapse-5">
                                        Why all this hustle in the middle of the city?

                                    </button>
                                </h5>
                            </div>
                            <div id="collapse-5" class="collapse" aria-labelledby="headingFive"
                                data-parent="#accordion">
                                <div class="card-body">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed eiusm tmpor incididunt
                                    ut labore et dolore magna aliqua. enim ad minim veniam, quis nostrud exercitation
                                    ullamco laboris nisi ut aliquip.
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="heading-6">
                                <h5 class="mb-0">
                                    <button class="btn btn-link collapsed" data-toggle="collapse"
                                        data-target="#collapse-6" aria-expanded="false" aria-controls="collapse-6">
                                        Are you together to watch the investment banking?
                                    </button>
                                </h5>
                            </div>
                            <div id="collapse-6" class="collapse" aria-labelledby="heading-6" data-parent="#accordion">
                                <div class="card-body">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed eiusm tmpor incididunt
                                    ut labore et dolore magna aliqua. enim ad minim veniam, quis nostrud exercitation
                                    ullamco laboris nisi ut aliquip.
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="heading-7">
                                <h5 class="mb-0">
                                    <button class="btn btn-link collapsed" data-toggle="collapse"
                                        data-target="#collapse-7" aria-expanded="false" aria-controls="collapse-7">
                                        Why is the income of the Suez Canal the first income of the Egyptians?
                                    </button>
                                </h5>
                            </div>
                            <div id="collapse-7" class="collapse" aria-labelledby="heading-7" data-parent="#accordion">
                                <div class="card-body">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed eiusm tmpor incididunt
                                    ut labore et dolore magna aliqua. enim ad minim veniam, quis nostrud exercitation
                                    ullamco laboris nisi ut aliquip.
                                </div>
                            </div>
                        </div>
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
                        <img src="assets/images/sponsor-2/1.png" alt="sponsor">
                    </div>
                </div>
                <div class="owl-item">
                    <div class="sponsor-item">
                        <img src="assets/images/sponsor-2/2.png" alt="sponsor">
                    </div>
                </div>
                <div class="owl-item">
                    <div class="sponsor-item">
                        <img src="assets/images/sponsor-2/3.png" alt="sponsor">
                    </div>
                </div>
                <div class="owl-item">
                    <div class="sponsor-item">
                        <img src="assets/images/sponsor-2/4.png" alt="sponsor">
                    </div>
                </div>
                <div class="owl-item">
                    <div class="sponsor-item">
                        <img src="assets/images/sponsor-2/5.png" alt="sponsor">
                    </div>
                </div>
                <div class="owl-item">
                    <div class="sponsor-item">
                        <img src="assets/images/sponsor-2/6.png" alt="sponsor">
                    </div>
                </div>
                <div class="owl-item">
                    <div class="sponsor-item">
                        <img src="assets/images/sponsor-2/7.png" alt="sponsor">
                    </div>
                </div>
                <div class="owl-item">
                    <div class="sponsor-item">
                        <img src="assets/images/sponsor-2/8.png" alt="sponsor">
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
                <h3>Bài viết mới nhát</h3>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-sm-6">
                <div class="blog-item">
                    <!-- Blog Image -->
                    <div class="blog-img">
                        <a href="blog.html"><img src="assets/images/blog/blog-1.jpg" alt="blog"></a>
                    </div>
                    <!-- Blog info -->
                    <div class="blog-info">
                        <ul class="date">
                            <li>25 NOV 19 </li>
                            <li><a href="#">Factory</a></li>
                        </ul>
                        <div class="title-post">
                            <a href="blog.html">
                                <h5>The future of factories in the coming years</h5>
                            </a>
                        </div>
                        <div class="post-text">
                            <p>Lorem ipsum dolor consectetur adipisicing elit do eiusm incididunt a labore et dolore
                                magna consectetur adipisicing elit...</p>
                        </div>
                        <a href="blog.html" class="btn-read-more">
                            <div class="text-btn">Read More</div>
                            <i class="fas fa-long-arrow-alt-right"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
