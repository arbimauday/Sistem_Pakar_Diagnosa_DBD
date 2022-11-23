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
                    <a href="{{route('administrator.auth.password')}}"
                       class="text-neutral-200 paragraph-16">Forgot password?</a>
                </div>

                <button class="btn btn-primary-brand btn-login" type="submit">
                    Sign In
                </button>
            </form>
        </div>

        <div class="text-center paragraph-13 text-secondary-brand w-100 mt-55 mb-0">
            Copyright © 2022. VBM Property Management.
            <br>Design & Development By <a href="https://www.harmonya.id/" target="_blank" data-type="external" title="Whatsapp" class="paragraph-13 text-blue-400">Harmonya Indonesia</a>
        </p>
    </div>
@endsection

@section('contentp')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
{{--                    <form method="POST" action="{{ route('administrator.auth.login') }}">--}}
{{--                        @csrf--}}

{{--                        <div class="form-group row">--}}
{{--                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>--}}

{{--                            <div class="col-md-6">--}}
{{--                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>--}}

{{--                                @error('email')--}}
{{--                                    <span class="invalid-feedback" role="alert">--}}
{{--                                        <strong>{{ $message }}</strong>--}}
{{--                                    </span>--}}
{{--                                @enderror--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <div class="form-group row">--}}
{{--                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>--}}

{{--                            <div class="col-md-6">--}}
{{--                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">--}}

{{--                                @error('password')--}}
{{--                                    <span class="invalid-feedback" role="alert">--}}
{{--                                        <strong>{{ $message }}</strong>--}}
{{--                                    </span>--}}
{{--                                @enderror--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <div class="form-group row">--}}
{{--                            <div class="col-md-6 offset-md-4">--}}
{{--                                <div class="form-check">--}}
{{--                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>--}}

{{--                                    <label class="form-check-label" for="remember">--}}
{{--                                        {{ __('Remember Me') }}--}}
{{--                                    </label>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <div class="form-group row mb-0">--}}
{{--                            <div class="col-md-8 offset-md-4">--}}
{{--                                <button type="submit" class="btn btn-primary">--}}
{{--                                    {{ __('Login') }}--}}
{{--                                </button>--}}

{{--                                @if (Route::has('administrator.auth.password.request'))--}}
{{--                                    <a class="btn btn-link" href="{{ route('administrator.auth.password.request') }}">--}}
{{--                                        {{ __('Forgot Your Password?') }}--}}
{{--                                    </a>--}}
{{--                                @endif--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </form>--}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
