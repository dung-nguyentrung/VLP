@section('title')
Quên mật khẩu
@endsection
<x-guest-layout>
    {{--  <x-jet-authentication-card>
        <x-slot name="logo">
            <x-jet-authentication-card-logo />
        </x-slot>

        <div class="mb-4 text-sm text-gray-600">
            {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
    </div>

    @if (session('status'))
    <div class="mb-4 text-sm font-medium text-green-600">
        {{ session('status') }}
    </div>
    @endif

    <x-jet-validation-errors class="mb-4" />

    <form method="POST" action="{{ route('password.email') }}">
        @csrf

        <div class="block">
            <x-jet-label for="email" value="{{ __('Email') }}" />
            <x-jet-input id="email" class="block w-full mt-1" type="email" name="email" :value="old('email')" required
                autofocus />
        </div>

        <div class="flex items-center justify-end mt-4">
            <x-jet-button>
                {{ __('Email Password Reset Link') }}
            </x-jet-button>
        </div>
    </form>
    </x-jet-authentication-card> --}}
    <div class="header-breadcrumb-two">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <ul class="breadcrumb">
                        <li>
                            <a href="/">Trang chủ</a>
                        </li>
                        <li><i class="fas fa-angle-right"></i></li>
                        <li>Quên mật khẩu</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="shop pb-120">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="lost-password-page">
                        <p class="mb-20">Quên mật khẩu? Hãy điền địa chỉ email của bạn. Bạn sẽ nhận được một liên kết để
                            tạo mật khẩu mới qua email.</p>
                            @if (session('status'))
                                {{ session('status') }}
                            @endif
                            @if (session('errors'))
                                <p class="text-danger">{{ 'Chúng tôi không thể tìm thấy người dùng có địa chỉ email đó.' }}</p>
                            @endif
                        <form action="{{ route('password.email') }}" method="post">
                            @csrf
                            <input type="email" name="email" :value="old('email')" required
                            autofocus placeholder="Địa chỉ email của bạn ">
                            <button type="submit" class="btn-one">Quên mật khẩu</button>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>
</x-guest-layout>
