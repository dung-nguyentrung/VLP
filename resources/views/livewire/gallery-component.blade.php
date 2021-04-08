@section('title')
    Gallery
@endsection
<section id="page" class="header-breadcrumb">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <h1 class="page-title-heading">Gallery</h1>
            </div>
        </div>
    </div>
</section>
<div id="portfolio" class="portfolio portfolio-two pt-120 pb-90">
    <div class="container">
        <div class="row">
            @foreach ($galleries as $gallery)
            <div class="col-md-6 col-lg-4">
                <div class="case-item">
                    <div class="img-case">
                        <img src="{{ asset('assets/images/galleries') }}/{{ $gallery->image }}" alt="{{ $gallery->title }}">
                        <div class="overlay-case">
                            <div class="inner-overlay">
                                <!-- Text OF Case -->
                                <div class="case-study-text">
                                    <div class="links-case">
                                        <div class="zoom-case">
                                            <a href="{{ asset('assets/images/galleries') }}/{{ $gallery->image }}" alt="{{ $gallery->title }}"><i
                                                    class="fas fa-search-plus"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="text-center"><h5>{{ $gallery->title }}</h5></div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
