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
</head>
<body>
<div id="app">
    <div id="left-section">
        <div id="nav-bar"></div>
        <div id="main-menu"></div>
    </div>
    <div id="main-section">
        <div id="main">
            <div class="notification card">
                this is an example of a notification that pops up front some times in case some thing happen
                example of a notification that pops up front some times in case some thing happen.
            </div>
            <div class="container">
                @yield('content')
            </div>
        </div>
    </div>
</div>
</body>
</html>
