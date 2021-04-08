@section('title')
    Tuyển dụng
@endsection
<section id="page" class="header-breadcrumb">
    <div class="container">
        <div class="row">
            <div class="col-lg-7">
                <span class="page-title-line">Tham gia với chúng tôi</span>
                <h1 class="page-title-heading">Nếu bạn đã sẵn sàng</h1>
            </div>
        </div>
    </div>
</section>
<div id="careers" class="careers careers-page pt-120 pb-90">
    <div class="container">
        <div class="row">
            @foreach ($collection as $item)
                <div class="col-lg-6 mb-30">
                    <div class="career-item">
                        <div class="title-item">
                            <h3>{{ $career->position }} - {{ $career->quantity }} </h3>
                            <div class="history">
                                <span>Full Time </span>
                                <span>{{ $career->user()->name }}</span>
                            </div>
                        </div>
                        <p>{{ $career->content }}</p>
                        <ul>
                            <li>{{ $career->required }}</li>
                        </ul>

                        <a href="#apply" class="btn-read-more down">
                            <div class="text-btn">Ứng tuyển ngay</div>
                            <i class="fas fa-long-arrow-alt-right"></i>
                        </a>
                    </div>
                </div>
            @endforeach
        </div>
        <div id="apply" class="row apply-team">
            <div class="col-md-12">
                <div class="section-title-left">
                    <h4 class="title-inner-page">Ứng tuyển cho vị trí</h4>
                </div>
            </div>
            <div class="col-md-12">
                <form>
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
                            <input type="text" name="address" placeholder="Vị trí ứng tuyển">
                        </div>
                        <div class="col-lg-4 apply-cv">
                            <input type="file">
                        </div>
                        <div class="col-lg-12">
                            <textarea id="Message" name="Message" placeholder="Tại sao bạn ứng tuyển vị trí này"></textarea>
                        </div>
                        <div class="col-lg-6">
                            <!-- Btn Two -->
                            <a href="#" class="main-btn-two">
                                <div class="text-btn">
                                    <span class="text-btn-one">ứng tuyển</span>
                                    <span class="text-btn-two">ứng tuyển</span>
                                </div>
                                <div class="arrow-btn">
                                    <span class="arrow-one"><i class="fa fa-envelope"></i></span>
                                    <span class="arrow-two"><i class="fa fa-envelope"></i></span>
                                </div>
                            </a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
