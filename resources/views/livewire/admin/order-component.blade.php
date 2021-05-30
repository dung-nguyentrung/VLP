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
                                    <th>Thanh toán</th>
                                    <th>Phương thức thanh toán</th>
                                    <th>Tình trạng</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach ($orders as $order)
                                    <tr>
                                        <td>{{ $order->id }}</td>
                                        <td>{{ $order->user->name }}</td>
                                        <td>{{ number_format($order->total) }} đ</td>
                                        @isset($order->debt->paid)
                                            @if($order->debt->paid == $order->debt->total)
                                                <td>{{ $order->status }}</td>
                                            @else
                                                <td>{{ $order->status }} {{ number_format($order->debt->owe) }} đ</td>
                                            @endif
                                        @else
                                            <td>Chưa thanh toán</td>
                                        @endisset
                                        <td>{{ $order->transaction->mode }}</td>
                                        <td class="font-weight-bold">{{ $order->transaction->status }}</td>
                                    </tr>
                                    <tr>
                                        <th>Chi tiết đơn hàng</th>
                                        <th>Tên sản phẩm</th>
                                        <th>Hình ảnh</th>
                                        <th>Số lượng</th>
                                        <th>Đơn giá</th>
                                        <th>
                                            <button class="btn btn-primary" wire:click.prevent="confirmOrder({{ $order->id }})" data-toggle="tooltip" data-placement="top" title="Xác nhận đơn hàng"><i class="fas fa-clipboard-check"></i></button>
                                            @if (\App\Models\Debt::where('order_id',$order->id)->first() !== null)
                                                <a href="{{ route('invoice',['order_id' => $order->id]) }}"><button class="btn btn-primary" data-toggle="tooltip" data-placement="top" title="In phiếu thu"><i class="fas fa-print"></i></button></a>
                                                <a href="{{ route('debt.update',['order_id' => $order->id]) }}"><button class="btn btn-primary" data-toggle="tooltip" data-placement="top" title="Điều chỉnh"><i class="fas fa-sliders-h"></i></button></a>
                                            @endif
{{--                                            @if ($order->status == 'Đã thanh toán' && $order->transaction->status == 'Đã hủy')--}}
                                                <a href="{{ route('refund',['order_id' => $order->id]) }}"><button class="btn btn-primary" data-toggle="tooltip" data-placement="top" title="Hoàn lại"><i class="fas fa-sync"></i></button></a>
{{--                                            @endif--}}
                                        </th>
                                    </tr>
                                    @foreach(App\Models\OrderItem::where('order_id',$order->id)->get() as $item)
                                        <tr>
                                            <td></td>
                                            <td>{{ $item->product->name }}</td>
                                            <td>
                                                <img src="{{ asset('assets/images/shop') }}/{{ $item->product->image }}" width="150" alt="{{ $item->product->name }}">
                                            </td>
                                            <td>{{ $item->quantity }}</td>
                                            <td>{{ number_format($item->price) }} đ</td>
                                        </tr>
                                    @endforeach
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

