@section('title')
    Slider
@endsection
<div class="page-content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="page-title-box">
                    <div class="row">
                        <div class="col">
                            <h4 class="page-title">Slider</h4>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Tổng quan</a></li>
                                <li class="breadcrumb-item active">Danh sách</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @if (Session::has('message'))
            <div class="row">
                <div class="col-lg-12">
                    <p class="alert alert-success">{{ session::get('message') }}</p>
                </div>
            </div>
        @endif
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <span class="card-title">Danh sách tin tức</span>
                        <a href="{{ route('slider.add') }}"><button class="float-right btn btn-primary">Thêm tin tức</button></a>
                    </div>
                    <!--end card-header-->
                    <div class="card-body">
                        <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap"
                            style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                            <thead>
                                <tr>
                                    <th>Tiêu đề</th>
                                    <th>Hình ảnh</th>
                                    <th>Nội dung</th>
                                    <th>Cập nhật</th>
                                    <th>Xóa</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($sliders as $slider)
                                <tr>
                                    <td>{{ $slider->title }}</td>
                                    <td>
                                        <img src="{{ asset('assets/images/sliders') }}/{{ $slider->image }}" width="120">
                                    </td>
                                    <td>{!! $slider->description !!}</td>
                                    <td>
                                        <a href="{{ route('slider.update',['slider_id' => $slider->id]) }}"><button class="btn btn-success"><i class="fas fa-edit"></i></button></td></a>
                                    </td>
                                    <td>
                                        <form wire:submit.prevent="deleteSlider({{ $slider->id }})">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger" onclick="return confirm('Bạn có chắc là muốn xóa slider này không ?');"><i class="fas fa-trash-alt"></i></button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    {{ $sliders->links() }}
                </div>
            </div>
        </div>
    </div>
</div>
</div>
