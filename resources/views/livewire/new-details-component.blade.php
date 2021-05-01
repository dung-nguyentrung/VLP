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
                        <div class="body-widget">
                            <form action="{{ route('new.search') }}" method="GET">
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
                        <div class="widget-posts body-widget">

                            <div class="title-widget">
                                <h3>Bài viết phổ biến</h3>
                            </div>
                            @foreach ($populars as $new)
                                <div class="lastet-posts">
                                    <a href="{{ route('new.details',['new_slug' => $new->slug]) }}">
                                        <img src="{{ asset('assets/images/blog') }}/{{ $new->image }}" alt="{{ $new->title }}">
                                        <div class="inner-text">
                                            <h6>{{ $new->title }}</h6>
                                            <div class="meta">{{ $new->post_category->name }}</div>
                                        </div>
                                    </a>
                                </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="widget mb-30">
                        <div class="body-widget tags">
                            <div class="title-widget">
                                <h3>Chủ đề</h3>
                            </div>
                            <ul class="tags-list">
                                @foreach ($post_categories as $post_category)
                                    <li><a href="">{{ $post_category->name }}</a></li>
                                @endforeach
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
                                    <li> Bình luận {{ $comments->count() }} </li>
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
                                        <span>Chia sẻ </span>
                                        <div class="share">
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
                            </div>
                        </div>
                    </div>
                    @if ($comments->count() > 0)
                    <div class="col-12">
                        <div class="comments mb-30">
                            <div class="title-comments">
                                <h4>{{ $comments->count() }} bình luận</h4>
                            </div>
                            @foreach ($comments as $comment)
                            <div class="inner-comments" id="comment">
                                <div class="comment-author">
                                    <img src="{{ asset('assets/images/clients/user.png') }}" alt="author">
                                    <div class="person">
                                        <h5>{{ $comment->name }} </h5>
                                        <div class="time">{{ $comment->created_at }}</div>
                                        <p>{{ $comment->comment }}</p>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                    @endif
                    <div class="col-12">
                        <div class="post-comment mb-30">
                            <div class="title-add">
                                <h4>Bình luận</h4>
                            </div>
                            <div class="comment-form">
                                <form class="form" action="{{ route('new.comment') }}" method="POST">
                                    @csrf
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <input type="text" name="name" placeholder="Họ và tên của bạn">
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <textarea name="comment" placeholder="Bình luận của bạn"></textarea>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <input type="hidden" name="new_id" value="{{ $new->id }}">
                                                <input type="hidden" name="new_slug" value="{{ $new->slug }}">
                                            </div>
                                        </div>
                                    </div>
                                    <input type="submit" class="btn-one" value="Bình luận">
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v10.0&appId=2886881688214518&autoLogAppEvents=1" nonce="QEjeiBn7"></script>
