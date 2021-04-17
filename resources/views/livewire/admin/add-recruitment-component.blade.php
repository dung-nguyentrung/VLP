@section('title')
    Thêm tin tuyển dụng
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
                                <li class="breadcrumb-item active"><a href="{{ route('recruitments') }}">Danh sách tin tuyển dụng</a></li>
                                <li class="breadcrumb-item active">Thêm tin tuyển dụng</li>
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
                        <h4 class="card-title">Thêm tin tuyển dụng</h4>
                    </div>
                    <div class="card-body">
                        <div class="general-label">
                            <form wire:submit.prevent="storeRecruitment">
                                <div class="form-group row">
                                    <label for="horizontalInput1" class="col-sm-2 col-form-label">Vị trí công việc</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" wire:model="position">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="horizontalInput1" class="col-sm-2 col-form-label">Số lượng</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" wire:model="quantity">
                                    </div>
                                </div>
                                <div class="form-group row" wire:ignore>
                                    <label for="horizontalInput2" class="col-sm-2 col-form-label">Mô tả công việc</label>
                                    <div class="col-sm-8">
                                        <textarea class="form-control" id="content" wire:model="content"></textarea>
                                    </div>
                                </div>
                                <div class="form-group row" wire:ignore>
                                    <label for="horizontalInput2" class="col-sm-2 col-form-label">Yêu cầu</label>
                                    <div class="col-sm-8">
                                        <textarea class="form-control" id="required" wire:model="required"></textarea>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="horizontalInput1" class="col-sm-2 col-form-label">Ngày hết hạn</label>
                                    <div class="col-sm-8">
                                        <input type="date" class="form-control" wire:model="expiry_date">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="ml-auto col-sm-10">
                                        <button type="submit" class="btn btn-primary">Thêm tin tuyển dụng</button>
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
            tinymce.init({
                selector:'textarea#required',
                setup:function(editor){
                    editor.on('Change',function(e){
                        tinyMCE.triggerSave();
                        var r_data = $('#required').val();
                        @this.set('required',r_data);
                    })
                }
            });
        });
    </script>
@endpush
