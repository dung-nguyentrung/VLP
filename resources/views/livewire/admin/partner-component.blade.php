@section('title')
    Đối tác
@endsection
<div class="page-content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="page-title-box">
                    <div class="row">
                        <div class="col">
                            <h4 class="page-title">Đối tác</h4>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Tổng quan</a></li>
                                <li class="breadcrumb-item active">Danh sách đối tác</li>
                            </ol>
                        </div>\
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                @if (session('message'))
                    <p class="alert alert-success">{{ Session::get('message') }}</p>
                @endif
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <a href="{{ route('partner.add') }}"><button class="float-right btn btn-primary">Thêm mới đối tác</button></a>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table mb-0 table-striped">
                                <thead>
                                    <tr>
                                        <th>Tên đối tác</th>
                                        <th>Hình ánh</th>
                                        <th>Cập nhật</th>
                                        <th>Xóa</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($partners as $partner)
                                    <tr>
                                        <td>{{ $partner->name }}</td>
                                        <td>
                                            <img src="{{ asset('assets/images/sponsor-2') }}/{{ $partner->image }}" width="120">
                                        </td>
                                        <td>
                                            <a href="{{ route('partner.update',['partner_id' => $partner->id]) }}"><button class="btn btn-success">Cập nhật</button></td></a>
                                        </td>
                                        <td>
                                            <form wire:submit.prevent="deletePartner({{ $partner->id }})">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger" onclick="return confirm('Bạn có chắc là muốn xóa đối tác này không?');">Xóa</button>
                                            </form>
                                        </td>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            {{ $partners->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
