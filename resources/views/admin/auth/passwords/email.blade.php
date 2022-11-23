@extends('layouts.admin-login')
@section('subtitle') Forgot Password @endsection

@section('content')
    <div class="w-100 h-100 d-flex align-items-end flex-column">
        <div class="mb-auto w-100 mt-auto mt-sm-0">
            <a href="{{route('administrator.auth.login.form')}}" class="text-blue-400 paragraph-16">
                <span class="mr-2"><i data-feather="arrow-left"></i></span> Back to Sign In</a>
        </div>
        <div class="w-100 mb-auto">
            <h2 class="">Forgot Password</h2>
            <p class="f-w-400 text-neutral-200 pb-2 paragraph-16">Input your email to reset the password</p>

            @include('layouts.admin-partials.snippets._error_alert_1')
            @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
            @endif
            <form method="POST" action="{{ route('administrator.auth.password.email') }}" class="w-100">
                @csrf
                <div class="form-group mb-4">
                    <label for="email" class="">Email</label>
                    <input id="email" type="email" class="form-control"
                           placeholder="e.g example@vbmproperty.com"
                           name="email" value="{{ old('email') }}"
                           required autocomplete="email" autofocus>
                </div>

                <button class="btn btn-primary-brand">
                    Reset Password
                </button>
            </form>
        </div>
    </div>
@endsection
