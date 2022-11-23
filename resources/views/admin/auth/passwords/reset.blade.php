@extends('layouts.admin-login')
@section('subtitle') Reset Password @endsection

@section('content')
    <div class="w-100 h-100 d-flex align-items-center flex-column">

        <div class="w-100 mt-auto mb-auto">
            <h2 class="">Reset Password</h2>
            <p class="f-w-400 text-neutral-200 pb-2 paragraph-16">Input your new password</p>

            @include('layouts.admin-partials.snippets._error_alert_1')
            @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
            @endif

            <form method="POST" action="{{ route('administrator.auth.password.request') }}" class="w-100">
                @csrf

                <input type="hidden" name="token" value="{{ $token }}">
                <input type="hidden" name="email" value="{{ $email }}">

                <div class="form-group">
                    <label for="password" class="">Password</label>
                    <input id="password" type="password" class="form-control"
                           placeholder="&#9679;&#9679;&#9679;&#9679;&#9679;&#9679;&#9679;&#9679;&#9679;&#9679;"
                           name="password" value="{{ old('password') }}"
                           required autocomplete="password" autofocus>
                </div>

                <div class="form-group mb-4">
                    <label for="password-confirm" class="">Confirm Password</label>
                    <input id="password-confirm" type="password" class="form-control"
                           placeholder="&#9679;&#9679;&#9679;&#9679;&#9679;&#9679;&#9679;&#9679;&#9679;&#9679;"
                           name="password_confirmation" value="{{ old('password_confirmation') }}"
                           required autocomplete="new-password" autofocus>
                </div>

                <button class="btn btn-primary-brand">
                    Change Password
                </button>
            </form>
        </div>
    </div>
@endsection
