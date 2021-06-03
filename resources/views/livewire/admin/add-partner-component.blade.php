@section('title')
    Thêm mới đối tác
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
                                <li class="breadcrumb-item active"><a href="{{ route('partners') }}">Danh sách đối tác</a></li>
                                <li class="breadcrumb-item active">Thêm đối tác</li>
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
                        <h4 class="card-title">Thêm đối tác công ty</h4>
                    </div>
                    <div class="card-body">
                        <div class="general-label">
                            <form wire:submit.prevent="storePartner">
                                <div class="form-group row">
                                    <label for="horizontalInput1" class="col-sm-2 col-form-label">Tên công ty</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" wire:model="name" />
                                        @error('name')
                                        <div class="alert alert-dangerư">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="horizontalInput2" class="col-sm-2 col-form-label">Hình ảnh</label>
                                    <div class="col-sm-8">
                                        <input type="file" class="form-control" wire:model="image"/>
                                        @error('image')
                                            <div class="alert alert-dangerư">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                @if ($image)
                                <div class="form-group row">
                                    <label for="horizontalInput1" class="col-sm-2 col-form-label"></label>
                                    <div class="col-sm-8">
                                        <img src="{{ $image->temporaryUrl() }}" alt="Temporary" width="120">
                                    </div>
                                </div>
                                @endif
                                <div class="row">
                                    <div class="ml-auto col-sm-10">
                                        @if (Session::has('message'))
                                            <p class="alert alert-success">{{ Session::get('message') }}</p>
                                        @endif
                                        <button type="submit" class="btn btn-primary">Thêm đối tác</button>
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
