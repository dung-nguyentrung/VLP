@section('title')
    Nhân viên
@endsection
<div class="page-content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="page-title-box">
                    <div class="row">
                        <div class="col">
                            <h4 class="page-title">Nhân viên</h4>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Tổng quan</a></li>
                            </ol>
                        </div>
                        <!--end col-->
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
                                    <th>Tên nhân viên</th>
                                    <th>Số điện thoại</th>
                                    <th>Email</th>
                                    <th>Địa chỉ</th>
                                    <th></th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach ($staffs as $user)
                                    <tr data-toggle="modal" data-id="{{ $user->id }}" data-target="#exampleModal{{ $user->id }}">
                                        <td>{{ $user->name }}</td>
                                        <td>{{ $user->phone }}</td>
                                        <td>{{ $user->email }}</td>
                                        <td>{{ $user->address }}</td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            {{ $staffs->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
@foreach ($staffs as $user)
    <div class="modal fade" id="exampleModal{{ $user->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
         aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Chi tiết khách hàng</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-lg-12">
                            <b>Thông tin khách hàng</b>
                            <p>Tên khách hàng: {{ $user->name }}</p>
                            <p>Số điện thoại: {{ $user->phone }}</p>
                            <p>Email: {{ $user->email }}</p>
                            <p>Địa chỉ: {{ $user->address }}</p>
                        </div>
                        @if (App\Models\Debt::where('user_id',$user->id)->count() > 0)
                            <div class="col-lg-12">
                                <b>Nợ cần thu từ khách hàng</b>
                                <table class="table table-hover">
                                    <thead>
                                    <tr>
                                        <th scope="col">Đơn hàng</th>
                                        <th scope="col">Tổng tiền</th>
                                        <th scope="col">Đã trả</th>
                                        <th scope="col">Phải thu</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach(App\Models\Debt::where('user_id',$user->id)->get() as $debt)
                                        <tr>
                                            <th>{{ $debt->order_id }}</th>
                                            <td>{{ number_format($debt->total) }} đ</td>
                                            <td>{{ number_format($debt->paid) }} đ</td>
                                            <td>{{ number_format($debt->owe) }} đ</td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endforeach

