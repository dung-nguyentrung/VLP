@section('title')
    Tin tức
@endsection
<div class="page-content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="page-title-box">
                    <div class="row">
                        <div class="col">
                            <h4 class="page-title">Tin tức && sự kiện</h4>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Tổng quan</a></li>
                                <li class="breadcrumb-item active">Danh sách tin tức</li>
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
        @if (Session::has('message'))
            <div class="row">
                <div class="col-lg-12">
                    <p class="text-success">{{ session::get('message') }}</p>
                </div>
            </div>
        @endif
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <span class="card-title">Danh sách tin tức</span>
                        <a href="{{ route('post.add') }}"><button class="float-right btn btn-primary">Thêm tin tức</button></a>
                    </div>
                    <!--end card-header-->
                    <div class="card-body">
                        <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap"
                            style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                            <thead>
                                <tr>
                                    <th>Tiêu đề bài viết</th>
                                    <th>Hình ảnh</th>
                                    <th>Nội dung</th>
                                    <th>Lượt xem</th>
                                    <th>Danh mục</th>
                                    <th>Cập nhật</th>
                                    <th>Xóa</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($posts as $post)
                                <tr>
                                    <td>{{ $post->title }}</td>
                                    <td>
                                        <img src="{{ asset('assets/images/blog') }}/{{ $post->image }}" width="120">
                                    </td>
                                    <td>{!! $post->content !!}</td>
                                    <td>{{ $post->view_count }}</td>
                                    <td>{{ $post->post_category->name }}</td>
                                    <td>
                                        <a href="{{ route('post.update',['post_slug' => $post->slug]) }}"><button class="btn btn-success">Cập nhật</button></td></a>
                                    </td>
                                    <td>
                                        <form wire:submit.prevent="deletePost({{ $post->id }})">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger" onclick="return confirm('Bạn có chắc là muốn xóa sản phẩm này không ?');">Xóa</button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
