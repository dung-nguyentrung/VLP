@section('title')
Sản phẩm
@endsection
<div class="page-content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="page-title-box">
                    <div class="row">
                        <div class="col">
                            <h4 class="page-title">Sản phẩm</h4>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Tổng quan</a></li>
                                <li class="breadcrumb-item active">Danh sách sản phẩm</li>
                            </ol>
                        </div>
                        <!--end col-->
                        <div class="col-auto align-self-center">
                            <div class="input-group">
                                <div class="form-inline">
                                    <select class="form-control" wire:model="category" style="width: 230px !important;">
                                        <option value="All">Tất cả</option>
                                        @foreach($categories  as $category)
                                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
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
                        <span class="card-title">Danh sách sản phẩm</span>
                        <a href="{{ route('product.add') }}"><button class="float-right btn btn-primary">Thêm sản phẩm</button></a>
                    </div>
                    <!--end card-header-->
                    <div class="card-body">
                        <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap"
                            style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                            <thead>
                                <tr>
                                    <th>Tên sản phẩm</th>
                                    <th>Hình ảnh</th>
                                    <th>Số lượng</th>
                                    <th>Mô tả</th>
                                    <th>Giá cả</th>
                                    <th>Cập nhật</th>
                                    <th>Xóa</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($products as $product)
                                <tr>
                                    <td>{{ $product->name }}</td>
                                    <td>
                                        <img src="{{ asset('assets/images/shop') }}/{{ $product->image }}" width="120">
                                    </td>
                                    <td>{{ $product->quantity }}</td>
                                    <td>{!! $product->short_description !!}</td>
                                    <td>{{ number_format($product->price) }} đồng</td>
                                    <td>
                                        <a href="{{ route('product.update',['product_slug' => $product->slug]) }}"><button class="btn btn-success"><i class="fas fa-edit"></i></button></td></a>
                                    </td>
                                    <td>
                                        <form wire:submit.prevent="deleteProduct({{ $product->id }})">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger" onclick="return confirm('Bạn có chắc là muốn xóa sản phẩm này không ?');"><i class="fas fa-trash-alt"></i></button>
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
