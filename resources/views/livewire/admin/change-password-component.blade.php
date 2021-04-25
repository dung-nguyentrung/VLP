@section('title')
    Cài đặt
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
                                <li class="breadcrumb-item active">Cài đặt</li>
                            </ol>
                        </div>
                        < </div> </div> </div> </div> <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <!--end card-body-->
                                    <div class="card-body">
                                        <div class="dastone-profile">
                                            <div class="row">
                                                <div class="mb-3 col-lg-4 align-self-center mb-lg-0">
                                                    <div class="dastone-profile-main">
                                                        <div class="dastone-profile-main-pic">
                                                            <img src="{{ asset('assets/images/users/') }}/{{ Auth::user()->profile_photo_path }}"
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
                                                    <h4 class="card-title">Thay đổi mật khẩu</h4>
                                                </div>
                                                <!--end card-header-->
                                                <form wire:submit.prevent="updatePassword">
                                                    <div class="card-body">
                                                        <div class="form-group row">
                                                            <label
                                                                class="text-right col-xl-3 col-lg-3 mb-lg-0 align-self-center">Mật
                                                                khẩu hiện tại</label>
                                                            <div class="col-lg-9 col-xl-8">
                                                                <input class="form-control" type="password" wire:model="password">
                                                                @error('password')
                                                                    <label class="text-danger">{{ 'Vui lòng nhập chính xác mật khẩu hiện tại của bạn !' }}</label>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label
                                                                class="text-right col-xl-3 col-lg-3 mb-lg-0 align-self-center">Mật
                                                                khẩu mới</label>
                                                            <div class="col-lg-9 col-xl-8">
                                                                <input class="form-control" type="password" wire:model="new_password">
                                                                @error('new_password')
                                                                    <label class="text-danger">{{ 'Mật khẩu không được trống hoặc có ít nhất 8 ký tự !' }}</label>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label
                                                                class="text-right col-xl-3 col-lg-3 mb-lg-0 align-self-center">Xác
                                                                nhận mật khẩu</label>
                                                            <div class="col-lg-9 col-xl-8">
                                                                <input class="form-control" type="password" wire:model="confirm_password">
                                                                <span class="form-text text-muted font-18s">Không chia sẻ mật khẩu của bạn. Sau khi đổi mật khẩu bạn sẽ phải đăng nhập lại !</span>
                                                                @error('confirm_password')
                                                                    <label class="text-danger">{{ 'Hai mật khẩu phải trùng khớp!' }}</label>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <div class="col-lg-9 col-xl-8 offset-lg-3">
                                                                @if (session('message'))
                                                                    <lable class="text-success">{{ Session::get('message') }}</lable>
                                                                @endif
                                                            </div>
                                                            <div class="col-lg-9 col-xl-8 offset-lg-3">
                                                                <button type="submit" class="btn btn-primary btn-sm">Đổi mật
                                                                    khẩu</button>
                                                            </div>
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
            </div>
        </div>
