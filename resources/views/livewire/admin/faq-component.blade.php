@section('title')
    Câu hỏi thường gặp
@endsection
<div class="page-content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="page-title-box">
                    <div class="row">
                        <div class="col">
                            <h4 class="page-title">Câu hỏi thường gặp</h4>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Tổng quan</a></li>
                                <li class="breadcrumb-item active">Danh sách câu hỏi</li>
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
                        <a href="{{ route('faq.add') }}"><button class="btn btn-primary">Thêm câu hỏi thường gặp</button></a>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table mb-0 table-striped">
                                <thead>
                                    <tr>
                                        <th>Câu hỏi</th>
                                        <th>Nội dung</th>
                                        <th>Cập nhật</th>
                                        <th>Xóa</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($faqs as $faq)
                                    <tr>
                                        <td>{{ $faq->question }}</td>
                                        <td>{!! $faq->content !!}</td>
                                        <td>
                                            <a href="{{ route('faq.update',['faq_id' => $faq->id]) }}"><button class="btn btn-success">Cập nhật</button></td></a>
                                        </td>
                                        <td>
                                            <form wire:submit.prevent="deleteFaq({{ $faq->id }})">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger" onclick="return confirm('Bạn có muốn xóa câu hỏi này không?');">Xóa</button>
                                            </form>
                                        </td>
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
</div>

