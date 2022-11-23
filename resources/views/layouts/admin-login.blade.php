<!doctype html>
<html class="h-100" lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="theme-color" content="#FF7D00"/>
    <link rel="icon" href="{!! asset('/scaffolding/logo/vbm-favicon.png') !!}"/>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Diagnosa DBD | @yield('subtitle')</title>
    <link href="{{asset('/scaffolding/plugins/pace/flash.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('/scaffolding/core-admin/css/admin-theme.css') }}" rel="stylesheet">
    <link href="{{ asset('/scaffolding/core-admin/css/_page-auth.css') }}" rel="stylesheet">
</head>
<body class="h-100 overflow-hiddenP">

<div class="login-wrapper container-fluid">
    <div class="row h-100">
        <div class="col-md-6 wp-image d-md-flex align-items-end d-none">
            <div class="w-100 text-white">
{{--                <h3 class="f-w-400 mb-5">"Without hard work, noting grows but weeds."</h3>--}}
{{--                <p class="m-0 f-w-400 paragraph-16">- Gordon B. Hinckley</p>--}}
            </div>
        </div>
        <div class="col-md-6 wp-auth align-content-around flex-wrap">
            @yield('content')
        </div>
    </div>
</div>

<script src="{{asset('/scaffolding/plugins/feather-icons/feather.min.js')}}" type="text/javascript"></script>
<script src="{{asset('/scaffolding/plugins/feather-icons/feather-func.js')}}" type="text/javascript"></script>
<script src="{{asset('/scaffolding/plugins/pace/pace.min.js')}}" type="text/javascript"></script>

<script src="{{ asset('/js/app.js') }}" defer></script>
</body>
</html>
