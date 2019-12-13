@extends('layouts.app')

@section('content')
    <div id="main-section">
        <div id="main">
            <div class="notification card">
                this is an example of a notification that pops up front some times in case some thing happen
                example of a notification that pops up front some times in case some thing happen.
            </div>
            <div class="container">
                <div class="video">

                </div>
                <div style="padding: 12px 16px 0 16px;font-weight: 400">
                    <span>XP<span class="gray-text">300</span></span>
                    <span class="gray-text" style="float: right">2000/7/23</span>
                </div>
                <div class="video-details card">
                    <img class="video-avatar" src="avatar.png">
                    <div class="details-text">
                        <div class="creator-info">
                            <h2>How to back ended.</h2>
                            <span>Robin Hood</span>
                        </div>

                        <div class="video-icons">

                        </div>
                    </div>
                </div>
                {{--<div class="details">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores aut commodi cumque debitis deleniti
                    dolorem doloremque, eos expedita hic illo laudantium maiores modi placeat praesentium quae quaerat quis
                    tempore voluptatum?
                </div>--}}
            </div>
        </div>

        <div id="slide">
            <div class="video-card">
                <img src="ink.png" onclick="navigateVideo('#')">
                <div class="creator-info">
                    <h2><a href="#" class="link-clear">How to back ended.</a></h2>
                    <span>Robin Hood</span><span> . 34min</span>
                    <br>
                    <span><span>XP</span> 300</span>
                    <div>C++</div>
                </div>
            </div>
            <hr>
        </div>
    </div>
@endsection

@section('script')
    <script>
        //vars declartions THE MAIN GLOBAL VARS
        var leftSection = document.getElementById('left-section');
        var mainSection = document.getElementById('main-section');
        var video = document.getElementsByClassName('video')[0];

        //functions FOR THE RESIZE
        function gridsPositions() {
            leftSection.style.height = window.innerHeight + 'px';
            var paddingLength = 60;
            mainSection.style.height = (window.innerHeight - paddingLength) + 'px';
        }

        function resizeTheHeight() {
            video.style.height = (video.offsetWidth * (9 / 16)) + 'px';
        }

        // event listener for the sizing changes
        // TODO: Add the right event
        video.addEventListener('resize', function () {
            resizeTheHeight();
        });

        gridsPositions();
        resizeTheHeight();

        //events functions

        //navigate to other video link
        function navigateVideo(link) {
            window.location.href = link;
        }

    </script>
@endsection