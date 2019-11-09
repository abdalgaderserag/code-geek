@extends('App.app')

@section('content')
    <div style="width: 92%">
        {{--should be solid to the page view--}}
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

        {{--scrollable by the page view--}}
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
@endsection