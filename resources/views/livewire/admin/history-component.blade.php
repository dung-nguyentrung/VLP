@section('title')
    Lịch sử giao dịch
@endsection
<div class="page-content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="page-title-box">
                    <div class="row">
                        <div class="col">
                            <h4 class="page-title">Lịch sử giao dịch</h4>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Tổng quan</a></li>
                                <li class="breadcrumb-item active">Lịch sử giao dịch</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                @if (session('message'))
                    <p class="text-success">{{ Session::get('message') }}</p>
                @endif
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Phiếu thu</h4>
                    </div><!--end card-header-->
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table mb-0 table-centered">
                                <thead>
                                <tr>
                                    <th>Khách hàng</th>
                                    <th>Đơn hàng</th>
                                    <th>Tổng tiền</th>
                                    <th>Đã thu</th>
                                    <th>Còn nợ</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach ($reciepts as $reciept)
                                <tr>
                                    <td>{{ $reciept->user->name }}</td>
                                    <td>{{ $reciept->order_id }}</td>
                                    <td>{{ $reciept->total }}</td>
                                    <td>{{ $reciept->paid }}</td>
                                    <td>{{ $reciept->owe }}</td>
                                </tr>
                                @endforeach
                                </tbody>
                            </table><!--end /table-->
                            {{ $reciepts->links() }}
                        </div><!--end /tableresponsive-->
                    </div><!--end card-body-->
                </div><!--end card-->
            </div>
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Phiếu chi</h4>
                    </div><!--end card-header-->
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table mb-0 table-centered">
                                <thead>
                                <tr>
                                    <th>Tên khách hàng</th>
                                    <th>Đơn hàng</th>
                                    <th>Đã chi</th>
                                    <th>Lý do</th>
                                    <th>Người tạo</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($payments as $payment)
                                <tr>
                                    <td>{{ $payment->user->name }}</td>
                                    <td>{{ $payment->order_id }}</td>
                                    <td>{{ $payment->paid }}</td>
                                    <td>{{ $payment->reason }}</td>
                                    <td>{{ $payment->staff_name }}</td>
                                </tr>
                                @endforeach
                                </tbody>
                            </table><!--end /table-->
                            {{ $payments->links() }}
                        </div><!--end /tableresponsive-->
                    </div><!--end card-body-->
                </div><!--end card-->
            </div>
        </div>
</div>
</div>
