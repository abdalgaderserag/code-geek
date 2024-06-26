@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="video" style="display: flex;justify-content: center">
            <img src="images/PLAY.svg" style="width: 14%;cursor: pointer;">
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
@endsection

@section('slide')
    <div class="video-card">
        <img src="ink.png" onclick="navigateVideo('#')">
        <div class="creator-info">
            <h2><a href="#" class="link-clear">How to back ended.</a></h2>
            <span>Robin Hood</span><span> . <span>34</span>min</span>
            <br>
            <span>XP <span>300</span></span>
            <div>C++</div>
        </div>
    </div>
    <hr>
@endsection

@section('script')
    <script>
        //vars declartions THE MAIN GLOBAL VARS
        var leftSection = document.getElementById('left-section');
        var mainSection = document.getElementById('main-section');
        var video = document.getElementsByClassName('video')[0];
        var fill = true;
        var filtersVals = [false, false, false, false];

        //functions FOR THE RESIZE
        function gridsPositions() {
            leftSection.style.height = window.innerHeight + 'px';
            var paddingLength = 12;
            mainSection.style.height = (window.innerHeight - paddingLength) + 'px';
        }

        function resizeTheHeight() {
            try {
                video.style.height = (video.offsetWidth * (9 / 16)) + 'px';
            } catch (e) {
            }
        }

        // event listener for the sizing changes
        // TODO: Add the right event

        try {
            video.addEventListener('resize', function () {
                resizeTheHeight();
            });
        } catch (e) {
        }

        document.getElementById('filter-buttons').addEventListener('click', function (event) {
            var parent = event.target.parentElement;
            for (var i = 0; i < filtersVals.length; i++) {
                if (filtersVals[i]) {
                    parent.children[i].className = 'active';
                } else {
                    parent.children[i].className = '';
                }
            }
            rewriteHash();
        });

        function rewriteHash() {
            hash = '#';
            for (var i = 0; i < filtersVals.length; i++) {
                if (filtersVals[i]) {
                    switch (i) {
                        case 0:
                            hash = hash + 'people' + '&';
                            break;
                    }
                }
            }
        }

        function displayFilters() {
            if (fill) {
                document.getElementById('filters').style.marginLeft = '2px';
                document.getElementById('filter-arrow').style.transform = 'rotate(180deg)';
                document.getElementById('filters').style.borderRadius = '12pt';
                document.getElementById('filters').style.marginLeft = '46%';
                document.getElementById('search').style.borderRadius = '12pt';
                setTimeout(function () {
                    document.getElementById('filter-buttons').style.display = 'flex';
                    document.getElementById('filters').style.marginLeft = '';
                }, 400);
            } else {
                document.getElementById('filter-buttons').style.display = 'none';
                document.getElementById('filters').style.marginLeft = '';
                document.getElementById('filters').style.borderRadius = '';
                document.getElementById('search').style.borderRadius = '';
                document.getElementById('filter-arrow').style.transform = '';
            }
            fill = !fill;
        }

        gridsPositions();
        resizeTheHeight();

        //events functions

        //navigate to other video link
        function navigateVideo(link) {
            window.location.href = link;
        }

    </script>
@endsection