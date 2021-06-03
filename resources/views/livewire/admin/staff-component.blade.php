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
                                    <th>Chức vụ</th>
                                    @if (Auth::user()->utype == 'ADM')
                                        <th>Phân quyền</th>
                                    @endif
                                </tr>
                                </thead>
                                <tbody>
                                @foreach ($staffs as $user)
                                    <tr>
                                        <td>{{ $user->name }}</td>
                                        <td>{{ $user->phone }}</td>
                                        <td>{{ $user->email }}</td>
                                        <td>{{ $user->address }}</td>
                                        <td>
                                            @if($user->utype == 'STF')
                                                Nhân viên bán hàng
                                            @elseif($user->utype == 'MKT')
                                                Nhân viên Marketing
                                            @elseif($user->utype == 'ACT')
                                                Kế toán
                                            @endif
                                        </td>
                                        @if (Auth::user()->utype == 'ADM')
                                            <td><a href="{{ route('user.update',['user_id' => $user->id]) }}"><button class="btn btn-primary"><i class="fas fa-user-edit"></i></button></a></td>
                                        @endif
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
