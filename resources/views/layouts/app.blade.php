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
            <div>
                <span>Steve Johnson</span><br>
                <span>@steve.johnson</span>
            </div>
        </div>
        <div id="main-menu">
            <div class="menu-tabs">
                <div>Dashboard</div>
                <div>Courses</div>
                <div>My List</div>
                <div>Teachers</div>
                <div>Progress</div>
                <div>Payment</div>
                <div>Profile</div>
                <div>Notifications</div>
                <div>QA</div>
                <div>Support</div>
                <div>FAQ</div>
                <div>Contact</div>
            </div>
            <hr style="border-width: 0">
            <div style="color: #a2a1a1;font-size: 10pt;padding-left: 8%">Created with
                <img src="hart.svg" id="heart">
                by <a href="http://abdalgaderserag.github.io"
                      class="link-clear">Gadora</a></div>
        </div>
    </div>
    <div id="main-section">
        <div id="main">

            {{--search section--}}
            <div id="search-section">
                {{--<img src="search.svg">--}}
                <input type="search" name="search" id="search">
                <div id="filter-buttons"
                     style="display: none;width: 46%;height: 40px;margin-top: 6px;justify-content: space-between">
                    <div>people</div>
                    <div>people</div>
                    <div>people</div>
                    <div>people</div>
                </div>
                <div onclick="displayFilters()" id="filters">
                    <div>
                        <img id="filter-arrow" src="arrow.svg">
                    </div>
                    <div>
                        Filters
                    </div>
                </div>
            </div>

            {{--notifications pop-ups--}}
            <div class="notification card">
                this is an example of a notification that pops up front some times in case some thing happen
                example of a notification that pops up front some times in case some thing happen.
            </div>
            @yield('content')
        </div>

        <div id="slide">
            <div style="height: 46px;margin-bottom: 16px">

            </div>
            @yield('slide')
        </div>
    </div>
</div>
</body>
@yield('script')
</html>
