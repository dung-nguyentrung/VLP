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
        @if($careers->count() > 0)
            <div class="row">
                @foreach ($careers as $career)
                    <div class="col-lg-6 mb-30">
                        <div class="career-item gallery">
                            <div class="title-item">
                                <h3>{{ $career->position }} - Số lượng: {{ $career->quantity }} </h3>
                                <div class="history">
                                    <span><i class="fas fa-hourglass-start" aria-hidden="true"></i> {{ date("d-m-Y",strtotime($career->expiry_date)) }}</span>
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
                                @error('name')
                                    <p class="alert alert-danger">{{ "Bạn phải nhập họ tên" }}</p>
                                @enderror
                            </div>
                            <div class="col-lg-4">
                                <input type="email" name="email" placeholder="Email của bạn">
                                @error('email')
                                    <p class="alert alert-danger">{{ "Email đã được sử dụng hoặc không được để trống" }}</p>
                                @enderror
                            </div>
                            <div class="col-lg-4">
                                <input type="text" name="phone" placeholder="Số điện thoại của bạn">
                                @error('phone')
                                    <p class="alert alert-danger">{{ "Bạn phải nhập số điện thoại" }}</p>
                                @enderror
                            </div>
                            <div class="col-lg-4">
                                <input type="text" name="address" placeholder="Địa chỉ hiện tại">
                                @error('address')
                                    <p class="alert alert-danger">{{ "Bạn phải nhập địa chỉ" }}</p>
                                @enderror
                            </div>
                            <div class="col-lg-4">
                                <input type="text" name="position" placeholder="Vị trí ứng tuyển">
                                @error('position')
                                    <p class="alert alert-danger">{{ "Bạn phải nhập vị trí ứng tuyển" }}</p>
                                @enderror
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
        @else
        <div>
            <div class="col-12">
                <div class="text-center error-item">
                    <h2>Quay lại sau !</h2>
                <p class="mb-20">Cảm ơn bạn đã quan tâm, hiện tại chúng tôi đã đủ nhân sự.</p>
                    <a href="/" class="main-btn-two">
                        <div class="text-btn">
                            <span class="text-btn-one">Trang chủ</span>
                            <span class="text-btn-two">Trang chủ</span>
                        </div>
                        <div class="arrow-btn">
                            <span class="arrow-one"><i class="fas fa-caret-right"></i></span>
                            <span class="arrow-two"><i class="fas fa-caret-right"></i></span>
                        </div>
                    </a>

                </div>
            </div>
        </div>
        @endif
    </div>
</div>
