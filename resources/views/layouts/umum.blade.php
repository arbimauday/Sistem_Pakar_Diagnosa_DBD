<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        {{-- Logo --}}
        <link rel="shortcut icon" type="image/x-icon" href="{{asset('img/logo.png')}}" />

        {{-- <title>{{ config('app.name', 'Laravel') }}</title> --}}
        <title>@yield('title')</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

        <!-- Styles -->
        {{-- <link rel="stylesheet" href="{{ mix('css/app.css') }}"> --}}
        <link rel="stylesheet" href="{{ asset('css/home.css') }}">

        @livewireStyles

        <!-- Scripts -->
        <script src="{{ mix('js/app.js') }}" defer></script>
    </head>
    <body class="font-sans antialiased">
        <div class="container-fluid">
            <!-- Page Heading -->
            <div class="container">
                <nav class="navbar navbar-expand-lg navbar-light bg-light rounded-pill">
                    <div class="container-fluid">
                        <div class="collapse navbar-collapse d-flex justify-content-center" id="navbarNavAltMarkup">
                            <div class="navbar-nav text-center">
                                <a class="nav-link rounded-pill navlinknya {{ Request::is('/') ? 'aktif' : '' }}" aria-current="page" href="{{route('home')}}">Home</a>
                                <a class="nav-link rounded-pill navlinknya {{ Request::is('pengecekan') ? 'aktif' : '' }}" href="{{route('pengecekan')}}">Pengecekan</a>
                                <a class="nav-link rounded-pill navlinknya {{ Request::is('info') ? 'aktif' : '' }}" href="{{route('info')}}">Info</a>
                                <a class="nav-link rounded-pill navlinknya {{ Request::is('kontak') ? 'aktif' : '' }}" href="{{route('kontak')}}">Kontak</a>
                            </div>
                        </div>
                    </div>
                </nav>
            </div>
            <!-- Page Content -->
            <main class="isi isi-content">
                {{-- {{ $slot }} --}}
                @yield('content')
                {{-- <livewire:pengecekan /> --}}
            </main>

        </div>

        <footer class="footer p-3">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-4 offset-md-4 text-center">
                        <p>Create By : Nora</p>
                    </div>
                </div>
            </div>
        </footer>

        @stack('modals')
        <!-- Option 1: Bootstrap Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
        @livewireScripts
    </body>
</html>
