@section('title')
    Liên hệ
@endsection
<section id="page" class="header-breadcrumb">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <h1 class="page-title-heading">Liên hệ</h1>
            </div>
        </div>
    </div>
</section>
<section class="contact-us-page pt-120 pb-60">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="contact-us-meta">
                    <div class="row">
                        <div class="col-lg-3 col-sm-6">
                            <div class="contact-item">
                                <div class="inner-contact">
                                    <span><i class="fa fa-phone"></i></span>
                                    <h4>Điện thoại & Fax</h4>
                                </div>
                                <p>{{ $setting->phone }}</p>
                                <p>{{ $setting->fax }}</p>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6">
                            <div class="contact-item">
                                <div class="inner-contact">
                                    <span><i class="fa fa-envelope"></i></span>
                                    <h4>Email</h4>
                                </div>
                                <p>{{ $setting->email }}</p>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6">
                            <div class="contact-item">
                                <div class="inner-contact">
                                    <span><i class="fa fa-location-arrow"></i></span>
                                    <h4>Địa chỉ</h4>
                                </div>
                                <p>{{ $setting->address }}</p>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6">
                            <div class="contact-item">
                                <div class="inner-contact">
                                    <span><i class="fas fa-clock"></i></span>
                                    <h4>Thời gian làm việc</h4>
                                </div>
                                <p>Mở cửa: {{ $setting->open_description }}</p>
                                <p>Thời gian: {{ $setting->open_time }}</p>
                            </div>
                        </div>
                    </div>
                    <div class="line-contact"></div>
                    <div class="row">
                        <div class="col-lg-12 mb-50">
                            <div class="img-contact">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3728.0299265021263!2d106.64381581501661!3d20.870843986084097!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x314a7a3cbeac5cb7%3A0xa7a7c67131d12793!2sC%C3%B4ng%20Ty%20TNHH%20V%C3%A2n%20Long!5e0!3m2!1svi!2s!4v1617702032545!5m2!1svi!2s"
                                width="1200" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
