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
    {{--<link href="{{ asset('css/app.css') }}" rel="stylesheet">--}}
</head>
<body style="margin: 0">

<div style="width: 100%;align-items: center">
    <div style="max-width: 2000px">
        {{--site navigation bar--}}
        <div style="width: 96%;padding: 0 2%;height: 46px;position: fixed;background-color: #636b6f">this is navigation</div>

        {{--site body--}}
        @yield('content')

        {{--site footer--}}
        <div style="width: 96%;padding: 0 2%;margin-top: 126px;background-color: gray;">
            <br><br><br><br>
        </div>
    </div>
</div>

</body>
</html>
