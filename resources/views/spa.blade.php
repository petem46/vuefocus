<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    
    
    <title>Vue SPA Demo</title>
    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@8.14.0/dist/sweetalert2.min.css">
</head>
<body>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@8.14.0/dist/sweetalert2.all.min.js"></script>
    <script src="{{URL::asset('js/swal.js')}}"></script>
    <div id="app">
            {{-- @include('includes.nav') --}}

        <app></app>
    </div>

    <script src="{{ mix('js/app.js') }}"></script>
</body>
</html>