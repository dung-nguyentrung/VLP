@section('title')
    {{ $new->title }}
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
                    <li>Tin tức và sự kiện</li>
                    <li><i class="fas fa-angle-right"></i></li>
                    <li>{{ $new->title }}</li>
                </ul>
            </div>
        </div>
    </div>
</div>
<section class="blog blog-area single-blog blog-page pb-90">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="left-side-bar">
                    <div class="widget mb-30">
                        <div class="img-widget">
                            <img src="assets/images/blog/peofile-blog.jpg" alt="img">
                        </div>
                        <div class="text-left widget-profile">
                            <h3>Facnex </h3>
                            <span>Heavy & light industries factory</span>
                            <p>Our Strategies At Work Are The Means By Which To Achieve The Desired Goals, And Achieve
                                Your Goals And Dreams Here</p>
                            <a href="about-us.html" class="btn-read-more">
                                <div class="text-btn">Read More</div>
                                <i class="fas fa-long-arrow-alt-right"></i>
                            </a>
                        </div>
                    </div>
                    <div class="widget mb-30">
                        <div class="body-widget">
                            <div class="title-widget">
                                <h3>Search</h3>
                            </div>
                            <input type="text" class="mb-0" placeholder="Search Here..">
                            <button type="submit" class="btn-search" value="search">
                                <i class="fas fa-search"></i>
                            </button>
                        </div>
                    </div>
                    <div class="widget mb-30">
                        <div class="widget-posts body-widget">
                            <div class="title-widget">
                                <h3>Latest Posts</h3>
                            </div>
                            <!-- New Item -->
                            <div class="lastet-posts">
                                <a href="#">
                                    <img src="assets/images/clients/person-1.jpg" alt="news">

                                    <div class="inner-text">
                                        <h6>The future of factories in the coming years.</h6>
                                        <div class="meta">25 NOV 20</div>
                                    </div>
                                </a>
                            </div>
                            <!-- New Item -->
                            <div class="lastet-posts">
                                <a href="#">
                                    <img src="assets/images/clients/person-2.jpg" alt="news">
                                    <div class="inner-text">
                                        <h6>The factors that countries create are energy</h6>
                                        <div class="meta">25 NOV 20</div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="widget mb-30">
                        <div class="body-widget tags">
                            <div class="title-widget">
                                <h3>Tags</h3>
                            </div>
                            <ul class="tags-list">
                                <li><a href="#">Factory</a></li>
                                <li><a href="#">Industries</a></li>
                                <li><a href="#">Facnex</a></li>
                                <li><a href="#">Energy</a></li>
                                <li><a href="#">Business</a></li>
                                <li><a href="#">Industry</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="order-first col-lg-8 order-lg-last">
                <div class="row">
                    <div class="col-12">
                        <div class="blog-item single-blog">
                            <!-- Blog Image -->
                            <div class="blog-img">
                                <img src="{{ asset('assets/images/blog') }}/{{ $new->image }}" alt="{{ $new->title }}">
                            </div>
                            <!-- Blog info -->
                            <div class="blog-info">
                                <ul class="date">
                                    <li>{{ $new->created_at }}</li>
                                    <li> Comments 2 </li>
                                    <li><a href="#">{{ $new->post_category->name }}</a></li>
                                </ul>
                                <div class="title-post">
                                    <h5>{{ $new->title }}</h5>
                                </div>
                                <div class="post-text">
                                    <p class="mb-10">{!! $new->content !!}.</p>
                                </div>
                                <div class="author">
                                    <div class="share-product">
                                        <span>Share </span>
                                        <div class="share">
                                            <ul class="share-social">
                                                <li><a href="#" class="facebook"><i class="fab fa-facebook-f"></i></a>
                                                </li>
                                                <li><a href="#" class="twitter"><i class="fab fa-twitter"></i></a></li>
                                                <li><a href="#" class="google"><i class="fab fa-google-plus"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="comments mb-30">
                            <div class="title-comments">
                                <h4>2 Comments</h4>
                            </div>
                            <div class="inner-comments">
                                <div class="comment-author">
                                    <img src="{{ asset('assets/images/clients/user.png') }}" alt="author">
                                    <div class="person">
                                        <h5>Nour Eldin </h5>
                                        <div class="time">25 NOV 20 5:33 AM</div>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusm tempor
                                            incididunt ut labore et dolore magna aliqua. Ut enim ad minim Magna, sed
                                            diam nonumy eirmod tempor</p>
                                        <a href="#">Reply</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="post-comment mb-30">
                            <div class="title-add">
                                <h4>Leave a Reply</h4>
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
                                                <textarea placeholder="Your Message Here "></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <a href="#" class="main-btn-two">
                                        <div class="text-btn">
                                            <span class="text-btn-one">Post Comment</span>
                                            <span class="text-btn-two">Post Comment</span>
                                        </div>
                                        <div class="arrow-btn">
                                            <span class="arrow-one"><i class="fas fa-caret-right"></i></span>
                                            <span class="arrow-two"><i class="fas fa-caret-right"></i></span>
                                        </div>
                                    </a>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
