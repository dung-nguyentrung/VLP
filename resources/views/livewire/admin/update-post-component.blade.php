@section('title')
    Cập nhật tin tức
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
                                <li class="breadcrumb-item active"><a href="{{ route('posts') }}">Danh sách</a></li>
                                <li class="breadcrumb-item active">Cập nhật tin tức</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Cập nhật tin tức</h4>
                    </div>
                    <div class="card-body">
                        <div class="general-label">
                            <form wire:submit.prevent="updateNew">
                                <div class="form-group row">
                                    <label for="horizontalInput1" class="col-sm-2 col-form-label">Tiêu đề</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" wire:model="title" wire:keyup="generateslug">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="horizontalInput1" class="col-sm-2 col-form-label">Đường dẫn</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" wire:model="slug">
                                    </div>
                                </div>
                                <div class="form-group row" wire:ignore>
                                    <label for="horizontalInput2" class="col-sm-2 col-form-label">Nội dung</label>
                                    <div class="col-sm-8">
                                        <textarea class="form-control" rows="20" id="content" wire:model="content"></textarea>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="horizontalInput1" class="col-sm-2 col-form-label">Hình ảnh</label>
                                    <div class="col-sm-8">
                                        <input type="file" class="form-control" wire:model="image">
                                        @if ($new_image)
                                            <p>Hình ảnh mới:</p>
                                            <img src="{{ $new_image->temporaryUrl() }}" width="240">
                                        @else
                                            <p>Hình ảnh sản phẩm:</p>
                                            <img src="{{ asset('assets/images/blog') }}/{{ $image }}" width="240">
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="horizontalInput1" class="col-sm-2 col-form-label">Danh mục bài viết</label>
                                    <div class="col-sm-8">
                                        <select class="form-control" wire:model="post_category_id">
                                            @foreach ($post_categories as $category)
                                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="ml-auto col-sm-10">
                                        @if (Session::has('message'))
                                            <p class="text-success">{{ Session::get('message') }}</p>
                                        @endif
                                        <button type="submit" class="btn btn-primary">Cập nhật tin tức</button>
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
@push('scripts')
    <script>
        $(function(){
            tinymce.init({
                selector:'textarea#content',
                setup:function(editor){
                    editor.on('Change',function(e){
                        tinyMCE.triggerSave();
                        var data = $('#content').val();
                        @this.set('content',data);
                    })
                }
            });
        });
    </script>
@endpush
