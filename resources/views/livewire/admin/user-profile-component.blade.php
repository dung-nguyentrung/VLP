@section('title')
Hồ sơ người dùng
@endsection
<div class="page-content">
    <div class="container-fluid">
        <!-- Page-Title -->
        <div class="row">
            <div class="col-sm-12">
                <div class="page-title-box">
                    <div class="row">
                        <div class="col">
                            <h4 class="page-title">Hồ sơ</h4>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Tổng quan</a></li>
                                <li class="breadcrumb-item active">Hồ sơ người dùng</li>
                            </ol>
                        </div>
                        </div> </div> </div> </div> <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <!--end card-body-->
                                    <div class="card-body">
                                        <div class="dastone-profile">
                                            <div class="row">
                                                <div class="mb-3 col-lg-4 align-self-center mb-lg-0">
                                                    <div class="dastone-profile-main">
                                                        <div class="dastone-profile-main-pic">
                                                            <img src="{{ asset('assets/images/users') }}/{{ Auth::user()->profile_photo_path }}"
                                                            alt="profile" height="110" class="rounded-circle">
                                                        </div>
                                                        <div class="dastone-profile_user-detail">
                                                            <h5 class="dastone-user-name">{{ Auth::user()->name }}</h5>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="ml-auto col-lg-6 align-self-center">
                                                    <ul class="mb-0 list-unstyled personal-detail">
                                                        <li class=""><i
                                                                class="mr-2 align-middle las la-phone text-secondary font-22"></i>
                                                            <b> Điện thoại </b> : {{ Auth::user()->phone }}</li>
                                                        <li class="mt-2"><i
                                                                class="mr-2 align-middle las la-envelope text-secondary font-22"></i>
                                                            <b> Email </b> : {{ Auth::user()->email }}</li>
                                                        <li class="mt-2"><i
                                                                class="mr-2 align-middle las la-address-book text-secondary font-22"></i>
                                                            <b> Địa chỉ </b> : {{ Auth::user()->address }}
                                                            <p></p>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="col-lg-2 align-self-center">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="tab-content" id="pills-tabContent">
                                <div class="tab-pane fade show active" id="Profile_Settings" role="tabpanel"
                                    aria-labelledby="settings_detail_tab">
                                    <div class="row">
                                        <div class="col-lg-12 col-xl-12">
                                            <div class="card">
                                                <div class="card-header">
                                                    <div class="row align-items-center">
                                                        <div class="col">
                                                            <h4 class="card-title">Thông tin cá nhân</h4>
                                                        </div>
                                                    </div>
                                                </div>
                                                <form wire:submit.prevent="updateProfile">
                                                    <div class="card-body">
                                                        <div class="form-group row">
                                                            <label
                                                                class="text-right col-xl-3 col-lg-3 mb-lg-0 align-self-center">Ảnh đại diện</label>
                                                            <div class="col-lg-9 col-xl-8">
                                                                <input type="file" class="form-control" wire:model="new_image"></input>
                                                                @error('profile_photo_path')
                                                                <p class="text-danger">{{ 'Vui lòng nhập chính xác loại hình ảnh !' }}</p>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                        @if ($new_image)
                                                        <div class="form-group row">
                                                            <label
                                                                class="text-right col-xl-3 col-lg-3 mb-lg-0 align-self-center">Ảnh đại diện mới</label>
                                                            <div class="col-lg-9 col-xl-8">
                                                                <img src="{{ $new_image->temporaryUrl() }}" width="120">
                                                            </div>
                                                        </div>
                                                        @else
                                                        <div class="form-group row">
                                                            <label
                                                                class="text-right col-xl-3 col-lg-3 mb-lg-0 align-self-center">Ảnh đại diện hiện tại</label>
                                                            <div class="col-lg-9 col-xl-8">
                                                                <img src="{{ asset('assets/images/users') }}/{{ $profile_photo_path }}" width="120">
                                                            </div>
                                                        </div>
                                                        @endif
                                                        <div class="form-group row">
                                                            <label
                                                                class="text-right col-xl-3 col-lg-3 mb-lg-0 align-self-center">Tên
                                                                người dùng</label>
                                                            <div class="col-lg-9 col-xl-8">
                                                                <input class="form-control" wire:model="name" type="text">
                                                                @error('name')
                                                                    <p class="text-danger">{{ 'Tên người dùng không được để trống !' }}</p>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label
                                                                class="text-right col-xl-3 col-lg-3 mb-lg-0 align-self-center">Địa
                                                                chỉ</label>
                                                            <div class="col-lg-9 col-xl-8">
                                                                <textarea class="form-control" wire:model="address"></textarea>
                                                                @error('address')
                                                                    <p class="text-danger">{{ 'Địa chỉ người dùng không được để trống !' }}</p>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label
                                                                class="text-right col-xl-3 col-lg-3 mb-lg-0 align-self-center">Điện
                                                                thoại</label>
                                                            <div class="col-lg-9 col-xl-8">
                                                                <div class="input-group">
                                                                    <div class="input-group-prepend"><span
                                                                            class="input-group-text"><i
                                                                                class="las la-phone"></i></span></div>
                                                                    <input type="text" wire:model="phone" class="form-control"
                                                                        aria-describedby="basic-addon1">
                                                                </div>
                                                                @error('phone')
                                                                    <p class="text-danger">{{ 'Số điện thoại người dùng không được để trống !' }}</p>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label class="text-right col-xl-3 col-lg-3 mb-lg-0 align-self-center">Email</label>
                                                            <div class="col-lg-9 col-xl-8">
                                                                <div class="input-group">
                                                                    <div class="input-group-prepend"><span
                                                                            class="input-group-text"><i
                                                                                class="las la-at"></i></span></div>
                                                                    <input type="text" wire:model="email" class="form-control"
                                                                        aria-describedby="basic-addon1">
                                                                </div>
                                                                @error('email')
                                                                    <p class="text-danger">{{ 'Email người dùng không được để trống và chứa ký tự @ !' }}</p>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <div class="col-lg-9 col-xl-8 offset-lg-3">
                                                                @if (session('message'))
                                                                <div class="form-group row">
                                                                    <label class="text-success">{{ Session::get('message') }}</label>
                                                                </div>
                                                                @endif
                                                                <button type="submit" class="btn btn-primary btn-sm">Cập
                                                                    nhật thông tin</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                            </form>
                                            </div>
                                        </div>
                                        {{-- <div class="col-lg-6 col-xl-6">
                                            <div class="card">
                                                <div class="card-header">
                                                    <h4 class="card-title">Thay đổi mật khẩu</h4>
                                                </div>
                                                <!--end card-header-->
                                                <div class="card-body">
                                                    <div class="form-group row">
                                                        <label
                                                            class="text-right col-xl-3 col-lg-3 mb-lg-0 align-self-center">Mật
                                                            khẩu hiện tại</label>
                                                        <div class="col-lg-9 col-xl-8">
                                                            <input class="form-control" type="password"
                                                                placeholder="Password">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label
                                                            class="text-right col-xl-3 col-lg-3 mb-lg-0 align-self-center">Mật
                                                            khẩu mới</label>
                                                        <div class="col-lg-9 col-xl-8">
                                                            <input class="form-control" type="password"
                                                                placeholder="New Password">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label
                                                            class="text-right col-xl-3 col-lg-3 mb-lg-0 align-self-center">Xác
                                                            nhận mật khẩu</label>
                                                        <div class="col-lg-9 col-xl-8">
                                                            <input class="form-control" type="password"
                                                                placeholder="Re-Password">
                                                            <span class="form-text text-muted font-12">Không chia sẻ mật
                                                                khẩu của bạn</span>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <div class="col-lg-9 col-xl-8 offset-lg-3">
                                                            <button type="submit" class="btn btn-primary btn-sm">Đổi mật
                                                                khẩu</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div> --}}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
