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
        </div>
        <div id="main-menu">
            <div id="name">John Legend</div>
            <div class="tabs-list">
                <div class="tab">
                    <img src="arrow-w.svg">
                    <span>Dashboard</span>
                </div>
                <div class="tab active-tab">
                    <img src="arrow-w.svg">
                    <span>Courses</span>
                </div>
                <div class="tab">
                    <img src="arrow-w.svg">
                    <span>My List</span>
                </div>
                <div class="tab">
                    <img src="arrow-w.svg">
                    <span>Teachers</span>
                </div>
                <div class="tab">
                    <img src="arrow-w.svg">
                    <span>Payment</span>
                </div>
                <div class="tab">
                    <img src="arrow-w.svg">
                    <span>Q.A</span>
                </div>
                <div class="tab">
                    <img src="arrow-w.svg">
                    <span>Contact</span>
                </div>
            </div>
            <div style="color: #a2a1a1;font-size: 10pt;padding-left: 16%;margin-top: 20%">Created with
                <img src="hart.svg" id="heart">
                by
                <a href="http://abdalgaderserag.github.io" class="link-clear">Gadora</a>
            </div>
        </div>
    </div>
    <div id="main-section">
        <div id="main">

            {{--search section--}}
            <div id="search-section">
                {{--<img src="search.svg">--}}
                <input type="search" name="search" id="search">
                <div id="filter-buttons">
                    <div onclick="filtersVals[0]=!filtersVals[0]">people</div>
                    <div onclick="filtersVals[1]=!filtersVals[1]">Courses</div>
                    <div onclick="filtersVals[2]=!filtersVals[2]">Teachers</div>
                    <div onclick="filtersVals[3]=!filtersVals[3]">Videos</div>
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
            <div style="height: 46px;margin-bottom: 20px">

            </div>
            @yield('slide')
        </div>
    </div>
</div>
</body>
@yield('script')
</html>
