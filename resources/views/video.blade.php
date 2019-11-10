@extends('layouts.app')

@section('content')
    <div style="width: 92%;display: flex;padding: 0 4%;background-color: pink">
        {{--should be solid to the page view--}}
        <div style="width: 63%;position: fixed;margin-top: 46px;background-color: blue">
            <div style="width: 100%;background-color: darkcyan">
                <div style="width: 96%;padding: 0 2%">
                    <h1>first video !</h1>
                </div>
                <div style="width: 96%;padding: 0 2%">
                    <video id="on-video" style="width: 100%;" src="/css/mi.mp4" controls></video>
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
        <div style="width: 30%;margin-left: 70%;background-color: #F98835">

            {{--loop throw this template for all the series/course videos!--}}
            <div style="display: flex;">
                <div style="width: 50%;background-color: red">
                    <img src="" alt="">
                </div>
                <div style="width: 50%">
                    <h2>second video !</h2>
                    <h4>details about the second video</h4>
                    <span>second video long</span>
                </div>
            </div>
            <div style="display: flex;">
                <div style="width: 50%;background-color: red">
                    <img src="" alt="">
                </div>
                <div style="width: 50%">
                    <h2>second video !</h2>
                    <h4>details about the second video</h4>
                    <span>second video long</span>
                </div>
            </div>
            <div style="display: flex;">
                <div style="width: 50%;background-color: red">
                    <img src="" alt="">
                </div>
                <div style="width: 50%">
                    <h2>second video !</h2>
                    <h4>details about the second video</h4>
                    <span>second video long</span>
                </div>
            </div>
            <div style="display: flex;">
                <div style="width: 50%;background-color: red">
                    <img src="" alt="">
                </div>
                <div style="width: 50%">
                    <h2>second video !</h2>
                    <h4>details about the second video</h4>
                    <span>second video long</span>
                </div>
            </div>
            <div style="display: flex;">
                <div style="width: 50%;background-color: red">
                    <img src="" alt="">
                </div>
                <div style="width: 50%">
                    <h2>second video !</h2>
                    <h4>details about the second video</h4>
                    <span>second video long</span>
                </div>
            </div>
            <div style="display: flex;">
                <div style="width: 50%;background-color: red">
                    <img src="" alt="">
                </div>
                <div style="width: 50%">
                    <h2>second video !</h2>
                    <h4>details about the second video</h4>
                    <span>second video long</span>
                </div>
            </div>
            <div style="display: flex;">
                <div style="width: 50%;background-color: red">
                    <img src="" alt="">
                </div>
                <div style="width: 50%">
                    <h2>second video !</h2>
                    <h4>details about the second video</h4>
                    <span>second video long</span>
                </div>
            </div>
            <div style="display: flex;">
                <div style="width: 50%;background-color: red">
                    <img src="" alt="">
                </div>
                <div style="width: 50%">
                    <h2>second video !</h2>
                    <h4>details about the second video</h4>
                    <span>second video long</span>
                </div>
            </div>
        </div>
    </div>
    <script>
        var video = document.getElementById('on-video');
        video.style.height = (video.offsetWidth * (9 / 16)) + 'px';
    </script>
@endsection