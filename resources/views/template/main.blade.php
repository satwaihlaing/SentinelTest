<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Apexand Cargo') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    <!-- <script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script> -->
    <!-- <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script> -->


    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet">
    <!-- <link href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet"> -->
    <link href="{{ asset('css/agency.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owl.theme.default.min.css') }}">
    @yield('css')
    <style>
        #mainNav .navbar-brand {
            color: #fed136;
        }
    </style>
</head>

<body id="page-top">
    @include('template.navbar')
    @yield('content')
    @include('template.footer')
    <script src="{{ asset('vendor/jquery-easing/jquery.easing.min.js') }}"></script>
    <script src="{{ asset('js/agency.min.js') }}"></script>
    <script src="{{ asset('js/owl.carousel.js') }}"></script>
    @yield('script')
</body>

</html>