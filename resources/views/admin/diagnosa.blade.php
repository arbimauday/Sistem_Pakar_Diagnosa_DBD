@extends('layouts.admin-app')
@section('subtitle') Diagnosa @endsection

@push('child-page-controller')
{{--    <script src="{{asset(mix('js/client/property/Property.js'))}}"></script>--}}
@endpush

@section('title-nav') Diagnosa @endsection

@section('content')
    <div class="content">
        @include('layouts/admin-partials/_navigation')

        <div class="container-fluid" id="app">
        </div>
    </div>
@endsection
