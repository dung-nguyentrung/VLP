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
                        <img src="{{ asset('assets/images/galleries') }}/{{ $gallery->image }}" width="350" height="300" alt="{{ $gallery->title }}">
                        <div class="text-center"><h5>{{ $gallery->title }}</h5></div>
                    </div>
                </div>
            </div>
            @endforeach
            <div class="col-12">
                <div class="blog-pagination">
                    <ul class="pagination">
                        <li><a href="{{ $galleries->previousPageUrl() }}"><i class="fas fa-angle-left"></i></a></li>
                        <li><a href="{{ $galleries->nextPageUrl() }}"><i class="fas fa-angle-right"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
