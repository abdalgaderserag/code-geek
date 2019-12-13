<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
{{--<script src="{{ asset('js/app.js') }}" defer></script>--}}

<!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/video.css') }}" rel="stylesheet">
</head>
<body>
<div id="app">
    <div id="left-section">
        <div id="nav-bar">
            <img src="avatar.png">
            <span>Steve Johnson</span>
        </div>
        <div id="main-menu"></div>
    </div>
    @yield('content')
</div>
</body>
@yield('script')
</html>
