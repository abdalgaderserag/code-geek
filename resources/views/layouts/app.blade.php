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
<body>

<div style="width: 100%;align-items: center">
    <div style="max-width: 2000px">
        {{--site navigation bar--}}
        <div style="width: 96%;padding: 0 2%;"></div>

        {{--site body--}}
        <div style="width: 92%">
            <div style="width: 74%">
                <div style="width: 100%">
                    <div style="width: 96%;padding: 0 2%">
                        <h1>first video !</h1>
                    </div>
                    <div style="width: 96%;padding: 0 2%">
                        <video style="width: 96%;padding: 2%" src=""></video>
                    </div>
                </div>
                <div style="width: 100%">
                    <h1>first video !</h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Impedit perferendis, perspiciatis!
                        Dignissimos nulla provident tempore totam! Dolor eaque officia pariatur quibusdam rem similique
                        sit. Atque culpa eum inventore sint voluptas.</p>
                </div>
            </div>
            <div style="width: 26%">

                {{--loop throw this template for all the series/course videos!--}}
                <div>
                    <div style="width: 24%">
                        <img src="" alt="">
                    </div>
                    <div style="width: 74%">
                        <h2>second video !</h2>
                        <h4>details about the second video</h4>
                        <span>second video long</span>
                    </div>
                </div>
            </div>
        </div>

        {{--site footer--}}
    </div>
</div>

</body>
</html>
