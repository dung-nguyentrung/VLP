@section('title')
    Điều chỉnh thanh toán
@endsection
<div class="page-content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="page-title-box">
                    <div class="row">
                        <div class="col">
                            <h4 class="page-title">Thanh toán</h4>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Tổng quan</a></li>
                                <li class="breadcrumb-item active">Thanh toán</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <div class="general-label">
                            <form wire:submit.prevent="adjust">
                                <div class="form-group row">
                                    <label for="horizontalInput1" class="col-sm-2 col-form-label">Tên khách hàng</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" disabled wire:model="username"/>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="horizontalInput1" class="col-sm-2 col-form-label">Mã đơn hàng</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" disabled wire:model="order"/>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="horizontalInput2" class="col-sm-2 col-form-label">Chi tiết đơn hàng</label>
                                    <div class="col-sm-8">

                                        <table class="table form-group">
                                            <thead>
                                            <tr>
                                                <th scope="col">Tên sản phẩm</th>
                                                <th scope="col">Hình ảnh</th>
                                                <th scope="col">Số lượng</th>
                                                <th scope="col">Đơn giá</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($orderItems as $item)
                                                <tr>
                                                    <th>{{ $item->product->name }}</th>
                                                    <td><img src="{{ asset('assets/images/shop') }}/{{ $item->product->image }}" width="150" alt="{{ $item->product->name }}"></td>
                                                    <td>{{ $item->quantity }}</td>
                                                    <td>{{ number_format($item->price) }} đ</td>
                                                </tr>
                                            @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="horizontalInput2" class="col-sm-2 col-form-label">Tổng tiền</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" disabled wire:model="total"/>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="horizontalInput2" class="col-sm-2 col-form-label">Đã trả</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" disabled wire:model="paid"/>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="horizontalInput2" class="col-sm-2 col-form-label">Còn nợ</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" disabled wire:model="owe"/>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="horizontalInput2" class="col-sm-2 col-form-label">Khách trả</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" wire:model="pay"/>
                                        @error('pay')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="ml-auto col-sm-10">
                                        @if (session('message'))
                                            <p class="alert alert-success">{{ Session::get('message') }}</p>
                                        @endif
                                        <button type="submit" class="btn btn-primary">Điều chỉnh</button>
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
