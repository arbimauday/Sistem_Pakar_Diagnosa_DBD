@extends('layouts.admin-login')
@section('subtitle') Login @endsection

@section('content')
    <div class="w-100 h-100 d-flex align-items-end flex-column">
{{--        <div class="w-100 mt-auto">--}}
{{--            <a href="{{ route('administrator.auth.login.form') }}" class="">--}}
{{--                <img src="{{asset('/scaffolding/logo/vbm-with-border.png')}}"--}}
{{--                     class="logo-admin-login" alt="VBM logo">--}}
{{--            </a>--}}
{{--        </div>--}}
        <div class="w-100 mt-auto mb-auto">
            <h2 class="" style="font-size:35px;">
{{--                Welcome to<br><span class="text-primary-brand" style="color:#2B40A1 !important;">VBM Property</span> Admin Panel--}}
                Sistem Diagnosa DBD
            </h2>
            <p class="f-w-400 text-neutral-200 pb-2 paragraph-16">Sign in to your account below</p>

{{--            @include('layouts.admin-partials.snippets._error_alert_1')--}}
            @if (session('status'))
                <div class="mb-4 font-medium text-sm text-green-600">
                    {{ session('status') }}
                </div>
            @endif

            <form method="POST" action="{{ route('login') }}" class="w-100">
                @csrf
                <div class="form-group">
                    <label for="email" class="">Email</label>
                    <input id="email" type="email" class="form-control"
                           placeholder="example@vbmproperty.com"
                           name="email" value="{{ old('email') }}"
                           required autocomplete="email" autofocus>
                </div>

                <div class="form-group">
                    <label for="password" class="">Password</label>
                    <input id="password" type="password" class="form-control"
                           placeholder="&#9679;&#9679;&#9679;&#9679;&#9679;&#9679;&#9679;&#9679;&#9679;&#9679;"
                           name="password" value="{{ old('password') }}"
                           required autocomplete="password" autofocus>
                </div>

                <div class="100 pb-4">
                    <a href="{{ route('password.request') }}"
                       class="text-neutral-200 paragraph-16">Forgot password?</a>
                </div>

                <button class="btn btn-primary-brand btn-login" type="submit">
                    Sign In
                </button>
            </form>
        </div>
    </div>
@endsection
