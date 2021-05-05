@section('title')
    Hình ảnh công ty
@endsection
<div class="page-content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="page-title-box">
                    <div class="row">
                        <div class="col">
                            <h4 class="page-title">Hình ảnh</h4>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Tổng quan</a></li>
                                <li class="breadcrumb-item active">Danh sách hình ảnh</li>
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
                    <div class="card-header">
                        <a href="{{ route('gallery.add') }}"><button class="btn btn-primary">Thêm hình ảnh</button></a>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table mb-0 table-striped">
                                <thead>
                                    <tr>
                                        <th>Tiêu đề</th>
                                        <th>Hình ánh</th>
                                        <th>Cập nhật</th>
                                        <th>Xóa</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($galleries as $gallery)
                                    <tr>
                                        <td>{{ $gallery->title }}</td>
                                        <td>
                                            <img src="{{ asset('assets/images/galleries') }}/{{ $gallery->image }}" width="120">
                                        </td>
                                        <td>
                                            <a href="{{ route('gallery.update',['gallery_id' => $gallery->id]) }}"><button class="btn btn-success">Cập nhật</button></td></a>
                                        </td>
                                        <td>
                                            <form wire:submit.prevent="deleteGallery({{ $gallery->id }})">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger" onclick="return confirm('Bạn có chắc là muốn xóa hình ảnh này không?');">Xóa</button>
                                            </form>
                                        </td>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            {{ $galleries->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
