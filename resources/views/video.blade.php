@extends('layouts.app')

@section('content')
    <div class="video">

    </div>
    <div class="video-details card">
        <img class="video-avatar" src="avatar.png">
        <div><h2>How to back ended.</h2></div>
    </div>
@endsection

@section('script')
    <script>
        var video = document.getElementsByClassName('video')[0];

        function resizeTheHeight() {
            video.style.height = (video.offsetWidth * (9 / 16)) + 'px';
        }

        //TODO AdD the right event
        video.addEventListener('resize', function () {
            resizeTheHeight();
        });
        resizeTheHeight()

    </script>
@endsection