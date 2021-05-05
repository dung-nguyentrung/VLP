@section('title')
    Cập nhật slider
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
                                <li class="breadcrumb-item active"><a href="{{ route('sliders') }}">Danh sách Slider</a></li>
                                <li class="breadcrumb-item active">Cập nhật Slider</li>
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
                        <h4 class="card-title">Cập nhật Slider</h4>
                    </div>
                    <div class="card-body">
                        <div class="general-label">
                            <form wire:submit.prevent="updateSlider">
                                <div class="form-group row">
                                    <label for="horizontalInput1" class="col-sm-2 col-form-label">Tiêu đề</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" wire:model="title">
                                    </div>
                                </div>
                                <div class="form-group row" wire:ignore>
                                    <label for="horizontalInput2" class="col-sm-2 col-form-label">Mô tả slider</label>
                                    <div class="col-sm-8">
                                        <textarea class="form-control" rows="20" id="description" wire:model="description"></textarea>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="horizontalInput1" class="col-sm-2 col-form-label">Hình ảnh</label>
                                    <div class="col-sm-8">
                                        <input type="file" class="form-control" wire:model="new_image">
                                        @if ($new_image)
                                            <p>Hình ảnh slider:</p>
                                            <img src="{{ $new_image->temporaryUrl() }}" width="240">
                                        @else
                                            <p>Hình ảnh mới:</p>
                                            <img src="{{ asset('assets/images/sliders') }}/{{ $image }}" width="240">
                                        @endif
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="ml-auto col-sm-10">
                                        @if (Session::has('message'))
                                            <p class="alert alert-success">{{ Session::get('message') }}</p>
                                        @endif
                                        <button type="submit" class="btn btn-primary">Cập nhật slider</button>
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
                selector:'textarea#description',
                setup:function(editor){
                    editor.on('Change',function(e){
                        tinyMCE.triggerSave();
                        var data = $('#description').val();
                        @this.set('description',data);
                    })
                }
            });
        });
    </script>
@endpush
