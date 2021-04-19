@section('title')
    Thông tin công ty
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
                                <li class="breadcrumb-item active"><a href="{{ route('recruitments') }}">Thông tin công ty</a></li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <div class="general-label">
                            <form wire:submit.prevent="updateSetting">
                                <div class="form-group row">
                                    <label for="horizontalInput1" class="col-sm-2 col-form-label">Điện thoại</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" wire:model="phone">
                                        @error('phone')
                                            <label class="text-danger">{{ 'Số điện thoại phải có ít nhất 10 ký tự' }}</label>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="horizontalInput1" class="col-sm-2 col-form-label">Fax</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" wire:model="fax">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="horizontalInput1" class="col-sm-2 col-form-label">Email</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" wire:model="email">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="horizontalInput2" class="col-sm-2 col-form-label">Mô tả công ty</label>
                                    <div class="col-sm-8">
                                        <textarea class="form-control" rows="5" wire:model="description"></textarea>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="horizontalInput1" class="col-sm-2 col-form-label">Địa chỉ</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" wire:model="address">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="horizontalInput1" class="col-sm-2 col-form-label">Thời gian</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" wire:model="open_time">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="horizontalInput1" class="col-sm-2 col-form-label">Ngày mở cửa trong tuần</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" wire:model="open_description">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="ml-auto col-sm-10">
                                        @if (session('message'))
                                            <p class="text-success">{{ Session::get('message') }}</p>
                                        @endif
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="ml-auto col-sm-10">
                                        <button type="submit" class="btn btn-primary">Cập nhật thông tin công ty</button>
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
