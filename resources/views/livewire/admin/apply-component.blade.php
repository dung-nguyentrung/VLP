@section('title')
    Đơn ứng tuyển
@endsection
<div class="page-content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="page-title-box">
                    <div class="row">
                        <div class="col">
                            <h4 class="page-title">Đơn ứng tuyển</h4>
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
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-hover">
                                <thead>
                                <tr>
                                    <th>Tên ứng viên</th>
                                    <th>Số điện thoại</th>
                                    <th>Email</th>
                                    <th>Địa chỉ</th>
                                    <th>Vị trí</th>
                                    <th>Lời nhắn</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach ($recruitments as $apply)
                                    <tr>
                                        <td>{{ $apply->name }}</td>
                                        <td><a href="tel:{{ $apply->phone }}">{{ $apply->phone }}</a></td>
                                        <td><a href="mailto:{{ $apply->email }}">{{ $apply->email }}</a></td>
                                        <td>{{ $apply->address }}</td>
                                        <td>{{ $apply->position }}</td>
                                        <td>{{ $apply->message }}</td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            {{ $recruitments->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
