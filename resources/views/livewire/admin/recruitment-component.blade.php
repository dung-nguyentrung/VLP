@section('title')
    Tuyển dụng
@endsection
<div class="page-content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="page-title-box">
                    <div class="row">
                        <div class="col">
                            <h4 class="page-title">Danh mục</h4>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Tổng quan</a></li>
                                <li class="breadcrumb-item active">Danh sách tuyển dụng</li>
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
                    <div class="card-header">
                        <a href="{{ route('recruitment.add') }}"><button class="btn btn-primary">Thêm tin</button></a>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table mb-0 table-striped">
                                <thead>
                                    <tr>
                                        <th>Tên vị trí</th>
                                        <th>Số lượng</th>
                                        <th>Mô tả công việc</th>
                                        <th>Yêu cầu</th>
                                        <th>Ngày hết hạn</th>
                                        <th>Cập nhật</th>
                                        <th>Xóa</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($careers as $career)
                                    <tr>
                                        <td>{{ $career->position }}</td>
                                        <td>{{ $career->quantity }}</td>
                                        <td>{!! $career->content !!}</td>
                                        <td>{!! $career->required !!}</td>
                                        <td>{{ $career->expiry_date }}</td>
                                            <td>
                                                <a href="{{ route('recruitment.update',['recruitment_id' => $career->id]) }}"><button class="btn btn-success">Cập nhật</button></td></a>
                                            </td>
                                            <td>
                                                <form wire:submit.prevent="deleteRecruitment({{ $career->id }})">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger" onclick="return confirm('Bạn có chắc là muốn xóa tin tuyển dụng này không ?');">Xóa</button>
                                                </form>
                                            </td>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            {{ $careers->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
