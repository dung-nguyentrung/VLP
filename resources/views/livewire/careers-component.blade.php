@section('title')
    Tuyển dụng
@endsection
<section id="page" class="header-breadcrumb">
    <div class="container">
        <div class="row">
            <div class="col-lg-7">
                <span class="page-title-line">Tuyển dụng</span>
                <h1 class="page-title-heading">Tham gia với chúng tôi</h1>
            </div>
        </div>
    </div>
</section>
<div id="careers" class="careers careers-page pt-120 pb-90">
    <div class="container">
        <div class="row">
             @foreach ($careers as $career)
                <div class="col-lg-6 mb-30">
                    <div class="career-item gallery">
                        <div class="title-item">
                            <h3>{{ $career->position }} - Số lượng: {{ $career->quantity }} </h3>
                            <div class="history">
                                <span><i class="fa fa-calendar" aria-hidden="true"></i> {{ $career->expiry_date }}</span>
                                <span><i class="fa fa-user-circle" aria-hidden="true"></i> {{ $career->user->name }}</span>
                            </div>
                        </div>
                            <h3>Mô tả công việc:</h3>
                            <p>{!! $career->content !!}</p>
                            <h3>Kinh nghiệm / Kỹ năng chi tiết:</h3>
                            <p>{!! $career->required !!}</p>
                            <a href="#apply" class="btn-read-more down">
                                <div class="text-btn">Ứng tuyển ngay</div>
                                <i class="fas fa-long-arrow-alt-right"></i>
                            </a>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="col-md-12">
            @if (session('message'))
                <h6 class="text-success">{{ Session::get('message') }}</h6>
            @endif
        </div>
        <div id="apply" class="row apply-team">
            <div class="col-md-12">
                <div class="section-title-left">
                    <h4 class="title-inner-page">Ứng tuyển cho vị trí</h4>
                </div>
            </div>

            <div class="col-md-12">
                <form action="{{ route('recruitment') }}" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col-lg-4">
                            <input type="text" class="form-control" name="name" placeholder="Họ và tên">
                        </div>
                        <div class="col-lg-4">
                            <input type="email" name="email" placeholder="Email của bạn">
                        </div>
                        <div class="col-lg-4">
                            <input type="text" name="phone" placeholder="Số điện thoại của bạn">
                        </div>
                        <div class="col-lg-4">
                            <input type="text" name="address" placeholder="Địa chỉ hiện tại">
                        </div>
                        <div class="col-lg-4">
                            <input type="text" name="position" placeholder="Vị trí ứng tuyển">
                        </div>
                        <div class="col-lg-12">
                            <textarea id="Message" name="message" placeholder="Tại sao bạn ứng tuyển vị trí này"></textarea>
                        </div>
                        <div class="col-lg-6">
                            <button type="submit" class="btn main-btn-two">
                                <div class="text-btn">
                                    <span class="text-btn-one">ứng tuyển</span>
                                    <span class="text-btn-two">ứng tuyển</span>
                                </div>
                                <div class="arrow-btn">
                                    <span class="arrow-one"><i class="fa fa-envelope"></i></span>
                                    <span class="arrow-two"><i class="fa fa-envelope"></i></span>
                                </div>
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
