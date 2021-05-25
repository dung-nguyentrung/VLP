@section('title')
    Công nợ
@endsection
<div class="page-content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="page-title-box">
                    <div class="row">
                        <div class="col">
                            <h4 class="page-title">Công nợ</h4>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Tổng quan</a></li>
                                <li class="breadcrumb-item active"><a href="{{ route('customers') }}">Khách hàng</a></li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Điều chỉnh công nợ</h4>
                    </div>
                    <div class="card-body">
                        <div class="general-label">
                            <form wire:submit.prevent="adjustDebt">
                                <div class="form-group row">
                                    <label for="horizontalInput1" class="col-sm-2 col-form-label">Tông tiền đơn hàng</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" wire:model="total" disabled>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="horizontalInput1" class="col-sm-2 col-form-label">Còn nợ</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" wire:model="owe">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="horizontalInput1" class="col-sm-2 col-form-label">Khách hàng đã trả</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" wire:model="paid">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="horizontalInput1" class="col-sm-2 col-form-label">Khách trả</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" wire:model="addPaid">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="ml-auto col-sm-10">
                                        @if (session('message'))
                                            <p class="alert alert-success">{{ Session::get('message') }}</p>

                                        @endif
                                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                                                Tạo hóa đơn
                                            </button>
                                        <button type="submit" class="btn btn-primary">Điều chỉnh công nợ</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<!-- Modal -->
<div class="modal fade" id="exampleModal" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Hóa đơn</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="page-content">
                    <div class="container-fluid">
                        <!-- end page title end breadcrumb -->
                        <div class="row">
                            <div class="col-lg-10 mx-auto">
                                <div class="card">
                                    <div class="card-body invoice-head">
                                        <div class="row">
                                            <div class="col-md-4 align-self-center">
                                                <img src="{{ asset('assets/images/logo/logo.png') }}" alt="logo-small" class="logo-sm mr-1" height="48">
                                            </div><!--end col-->
                                            <div class="col-md-8">

                                                <ul class="list-inline mb-0 contact-detail float-right">
                                                    <li class="list-inline-item">
                                                        <div class="pl-3">
                                                            <i class="mdi mdi-web"></i>
                                                            <p class="text-muted mb-0">http://vanlongplastic.com.vn/</p>
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
                                                            <p class="text-muted mb-0">{{ $site->address }}</p>
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
                                                    <h6 class="mb-0"><b>Ngày đặt hàng :</b> {{ $debt->created_at }}</h6>
                                                    <h6><b>Mã đơn hàng :</b> # {{ $debt->order_id }}</h6>
                                                </div>
                                            </div><!--end col-->
                                            <div class="col-md-3">
                                                <div class="float-left">
                                                    <address class="font-13">
                                                        <strong class="font-14">Hóa đơn cho :</strong><br>
                                                        {{ $debt->user->name }}<br>
                                                        {{ $debt->user->email }}<br>
                                                        {{ $debt->user->phone }}
                                                    </address>
                                                </div>
                                            </div><!--end col-->
                                            <div class="col-md-3">
                                                <div class="">
                                                    <address class="font-13">
                                                        <strong class="font-14">Giao đến:</strong><br>
                                                        {{ $debt->user->address }}<br>
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
                                                            <th>Sản phẩm</th>
                                                            <th>Tên SP</th>
                                                            <th>Số lượng</th>
                                                            <th>Giá/SP</th>
                                                        </tr><!--end tr-->
                                                        </thead>
                                                        <tbody>
                                                        <tr>
                                                            <td>
                                                                <h5 class="mt-0 mb-1 font-14">Testing & Bug Fixing</h5>
                                                                <p class="mb-0 text-muted">It is a long established fact that a reader will be distracted.</p>
                                                            </td>
                                                            <td>10</td>
                                                            <td>$20</td>
                                                            <td>$200.00</td>
                                                        </tr><!--end tr-->

                                                        <tr>
                                                            <td colspan="2" class="border-0"></td>
                                                            <td class="border-0 font-14 text-dark"><b>Sub Total</b></td>
                                                            <td class="border-0 font-14 text-dark"><b>$82,000.00</b></td>
                                                        </tr><!--end tr-->
                                                        <tr>
                                                            <th colspan="2" class="border-0"></th>
                                                            <td class="border-0 font-14 text-dark"><b>Tax Rate</b></td>
                                                            <td class="border-0 font-14 text-dark"><b>$0.00%</b></td>
                                                        </tr><!--end tr-->
                                                        <tr class="bg-black text-white">
                                                            <th colspan="2" class="border-0"></th>
                                                            <td class="border-0 font-14"><b>Total</b></td>
                                                            <td class="border-0 font-14"><b>$82,000.00</b></td>
                                                        </tr><!--end tr-->
                                                        </tbody>
                                                    </table><!--end table-->
                                                </div>  <!--end /div-->
                                            </div>  <!--end col-->
                                        </div><!--end row-->

                                        <div class="row d-flex justify-content-center">
                                            <div class="col-lg-12 col-xl-4 ml-auto align-self-center">
                                                <div class="text-center"><small class="font-12">Cảm ơn bạn đã mua hàng</small></div>
                                            </div><!--end col-->
                                            <div class="col-lg-12 col-xl-4">
                                                <div class="float-right d-print-none">
                                                    <a href="javascript:window.print()" class="btn btn-soft-info btn-sm">In</a>
                                                </div>
                                            </div><!--end col-->
                                        </div><!--end row-->
                                    </div><!--end card-body-->
                                </div><!--end card-->
                            </div><!--end col-->
                        </div><!--end row-->

                    </div><!-- container -->
                </div>
            </div>
            <div class="modal-footer">
            </div>
        </div>
    </div>
</div>
