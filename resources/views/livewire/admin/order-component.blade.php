@section('title')
    Đơn đặt hàng
@endsection
<div class="page-content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="page-title-box">
                    <div class="row">
                        <div class="col">
                            <h4 class="page-title">Đơn đặt hàng</h4>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Tổng quan</a></li>
                                <li class="breadcrumb-item active">Danh sách đơn hàng</li>
                            </ol>
                        </div>
                        <!--end col-->
                        <div class="col-auto align-self-center">
                            <a href="#" wire:click.prevent="" class="btn btn-sm btn-outline-primary">
                                <i data-feather="download" class="align-self-center icon-xs"></i>
                            </a>
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
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-hover">
                                <thead>
                                <tr>
                                    <th>Mã đơn hàng</th>
                                    <th>Tên khách hàng</th>
                                    <th>Tổng số tiền</th>
                                    <th>Số điện thoại</th>
                                    <th>Địa chỉ</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach ($orders as $order)
                                    <tr data-toggle="modal" data-id="{{ $order->id }}" data-target="#exampleModal{{ $order->id }}">
                                        <td>{{ $order->id }}</td>
                                        <td>{{ $order->user->name }}</td>
                                        <td>{{ $order->total }}</td>
                                        <td>{{ $order->phone }}</td>
                                        <td>{{ $order->address }} {{ $order->city }} {{ $order->province }}</td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            {{ $orders->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
@foreach ($orders as $order)
    <div class="modal fade" id="exampleModal{{ $order->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
         aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Chi tiết đơn hàng</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                            <div class="col-lg-12">
                                <b>Thông tin đơn hàng</b>
                                <p>Tên khách hàng: {{ $order->id }}</p>
                                <p>Số điện thoại: {{ $order->name }}</p>
                                <p>Email: {{ $order->total }}</p>
                                <p>Địa chỉ: {{ $order->address }}</p>
                            </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary">Điều chỉnh</button>
                    <button type="button" class="btn btn-primary">Thanh toán</button>
                </div>
            </div>
        </div>
    </div>
@endforeach
