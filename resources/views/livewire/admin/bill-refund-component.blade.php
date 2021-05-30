@section('title')
    In phiếu chi
@endsection
<div class="page-content">
    <div class="container-fluid">
        <!-- Page-Title -->
        <div class="row">
            <div class="col-sm-12">
                <div class="page-title-box">
                    <div class="row">
                        <div class="col">
                            <h4 class="page-title">Phiếu thu</h4>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Tổng quan</a></li>
                                <li class="breadcrumb-item active">Phiếu thu</li>
                            </ol>
                        </div><!--end col-->
                    </div><!--end row-->
                </div><!--end page-title-box-->
            </div><!--end col-->
        </div><!--end row-->
        <!-- end page title end breadcrumb -->
        <div class="row">
            <div class="col-lg-10 mx-auto">
                <div class="card">
                    <div class="card-body invoice-head">
                        <div class="row">
                            <div class="col-md-4 align-self-center">
                                <img src="{{ asset('assets/images/logo/logo.png') }}" width="80" alt="logo">
                            </div><!--end col-->
                            <div class="col-md-8">

                                <ul class="list-inline mb-0 contact-detail float-right">
                                    <li class="list-inline-item">
                                        <div class="pl-3">
                                            <i class="mdi mdi-web"></i>
                                            <p class="text-muted mb-0">www.vanlongplastic.com</p>
                                            <p class="text-muted mb-0"></p>
                                        </div>
                                    </li>
                                    <li class="list-inline-item">
                                        <div class="pl-3">
                                            <i class="mdi mdi-phone"></i>
                                            <p class="text-muted mb-0">{{ $site->phone }}</p>
                                            <p class="text-muted mb-0">{{ $site->fax }}</p>
                                        </div>
                                    </li>
                                    <li class="list-inline-item">
                                        <div class="pl-3">
                                            <i class="mdi mdi-map-marker"></i>
                                            <span class="text-muted mb-0"> Số 15A Dầu Lửa</span>
                                            <p class="text-muted mb-0">Hùng Vương, Hồng Bàng, Hải Phòng</p>
                                        </div>
                                    </li>
                                </ul>
                            </div><!--end col-->
                        </div><!--end row-->
                    </div><!--end card-body-->
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-3">
                                <div class="">
                                    <h6 class="mb-0"><b>Ngày đặt hàng :</b> {{ $order->created_at->format('Y-m-d') }}</h6>
                                    <h6><b>Mã đơn hàng :</b> # {{ $order->id }}</h6>
                                </div>
                            </div><!--end col-->
                            <div class="col-md-3">
                                <div class="float-left">
                                    <address class="font-13">
                                        <strong class="font-14">Khách hàng :</strong><br>
                                        {{ $order->name }}<br>
                                        {{ $order->email }}<br>
                                    </address>
                                </div>
                            </div><!--end col-->
                            <div class="col-md-3">
                                <div class="">
                                    <address class="font-13">
                                        <strong class="font-14">Giao hàng tới:</strong><br>
                                        {{ $order->address }} {{ $order->city }} {{ $order->province }}<br>
                                        <abbr title="Phone">Điện thoại:</abbr> {{ $order->phone }}
                                    </address>
                                </div>
                            </div> <!--end col-->
                        </div><!--end row-->

                        <div class="row">
                            <div class="col-lg-12">
                                <div class="table-responsive project-invoice">
                                    <table class="table table-bordered mb-0">
                                        <thead class="thead-light">
                                        <tr>
                                            <th>Tên sản phẩm</th>
                                            <th>Số lượng</th>
                                            <th>Đơn giá</th>
                                            <th>Tổng</th>
                                        </tr><!--end tr-->
                                        </thead>
                                        <tbody>
                                        @foreach($items as $item)
                                            <tr>
                                                <td>
                                                    <h5 class="mt-0 mb-1 font-14">{{ $item->product->name }}</h5>
                                                </td>
                                                <td>{{ $item->quantity }}</td>
                                                <td>{{ number_format($item->price) }} đ</td>
                                                <td>{{ number_format($item->price * $item->quantity) }} đ</td>
                                            </tr><!--end tr-->
                                        @endforeach
                                        <tr>
                                            <td colspan="2" class="border-0"></td>
                                            <td class="border-0 font-14 text-dark"><b>Tổng tiền đơn hàng</b></td>
                                            <td class="border-0 font-14 text-dark"><b>{{ number_format($payment->total) }} đ</b></td>
                                        </tr><!--end tr-->
                                        <tr class="bg-black text-white">
                                            <th colspan="2" class="border-0"></th>
                                            <td class="border-0 font-14"><b>Chi tiền trả khách</b></td>
                                            <td class="border-0 font-14"><b>{{number_format($payment->paid) }} đ</b></td>
                                        </tr><!--end tr-->
                                        </tbody>
                                    </table><!--end table-->
                                </div>  <!--end /div-->
                            </div>  <!--end col-->
                        </div><!--end row-->

                        <div class="row justify-content-center">
                            <div class="col-lg-3 align-self-end">
                                <div class="float-right">
                                    <span>Kế toán trưởng</span>
                                    <div class="mt-lg-5"></div>
                                    <p class="border-top">(Ký và ghi rõ họ tên)</p>
                                </div>
                            </div><!--end col-->
                            <div class="col-lg-3 align-self-end">
                                <div class="float-right">
                                    <span>Khách hàng</span>
                                    <div class="mt-lg-5"></div>
                                    <p class="border-top">(Ký và ghi rõ họ tên)</p>
                                </div>
                            </div><!--end col-->
                            <div class="col-lg-3 align-self-end">
                                <div class="float-right">
                                    <span>Người lập</span>
                                    <div class="mt-lg-5"></div>
                                    <p class="border-top">(Ký và ghi rõ họ tên)</p>
                                </div>
                            </div><!--end col-->
                            <div class="col-lg-3 align-self-end">
                                <div class="float-right">
                                    <span>Thủ quỹ</span>
                                    <div class="mt-lg-5"></div>
                                    <p class="border-top">(Ký và ghi rõ họ tên)</p>
                                </div>
                            </div><!--end col-->
                        </div><!--end row-->
                        <hr>
                        <div class="row d-flex justify-content-center">
                            <div class="col-lg-12 col-xl-4 ml-auto align-self-center">
                                <div class="text-center"><small class="font-12"><b>Nhựa Vân Long</b> cảm ơn bạn rất nhiều.</small></div>
                            </div><!--end col-->
                            <div class="col-lg-12 col-xl-4">
                                <div class="float-right d-print-none">
                                    <a href="javascript:window.print()" class="btn btn-soft-info btn-sm">In</a>
                                    <a href="{{ route('orders') }}" class="btn btn-soft-danger btn-sm">Hủy</a>
                                </div>
                            </div><!--end col-->
                        </div><!--end row-->
                    </div><!--end card-body-->
                </div><!--end card-->
            </div><!--end col-->
        </div><!--end row-->

    </div><!-- container -->
</div>
<!-- end page content -->
</div>

