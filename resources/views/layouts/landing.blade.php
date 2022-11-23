<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta http-equiv="content-type" content="text/html;charset=UTF-8"/>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="theme-color" content="#3563E9"/>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Sistem Pakar Diagnosa DBD | @yield('title')</title>
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-touch-fullscreen" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="default">
    <meta content="Sistem Pakar Diagnosa DBD" name="description"/>
    <meta content="" name="author"/>

    <link href="{{asset('/scaffolding/plugins/pace/flash.css')}}" rel="stylesheet" type="text/css" />

    <link href="{{asset('/scaffolding/plugins/jquery-scrollbar/jquery.scrollbar.css')}}" rel="stylesheet" type="text/css" media="screen" />

    <link href="{{asset('/scaffolding/plugins/bootstrap-datepicker/datepicker3.css')}}" rel="stylesheet" type="text/css" media="screen"/>
    <link href="{{asset('/scaffolding/plugins/timepicker/bootstrap-timepicker.min.css')}}" rel="stylesheet" type="text/css" media="screen"/>

    <link href="{{asset('/scaffolding/plugins/slick/slick.css')}}" rel="stylesheet" type="text/css" media="screen"/>
    <link href="{{asset('/scaffolding/plugins/slick/slick-theme.css')}}" rel="stylesheet" type="text/css" media="screen"/>

    <link href="{{ asset('/scaffolding/core-admin/css/admin-theme.css') }}" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
</head>
<body style="background-color: #FAFDFF; overflow-y: auto; @yield('addStyleBody')" class="h-100">
@yield('content')
@include('layouts/admin-partials/_footer')
<footer class="bg-blue-300">
    <div class="container py-2 border-topP Pborder-blue-600">
        <p class="text-center text-whiteP text-blue-500 mb-0 small-text">© 2022 - TA  By  Nora</p>
    </div>
</footer>
</body>
</html>
