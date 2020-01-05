<?php

namespace App\Http\Controllers\Api;

use App\Series;
use App\video;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class VideosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @param  \App\Series $series
     * @return \Illuminate\Http\Response
     */
    public function index(Series $series)
    {
        $videos = $series->videos;
        return response()->json($videos);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Series $series
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Series $series,Request $request)
    {
        $video = new Video();
        $video->title = $request->title;
        $video->link = $request->link;
        $video->description = $request->description;
        $video->series_id = $series->id;
        $video->save();
//        TODO :: add to the observer
        if ($series->videos()->count() > config('series.count')){
            $series->publish = true;
            $series->save();
        }
        return response()->json($video);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\video  $video
     * @return \Illuminate\Http\Response
     */
    public function show(video $video)
    {
        return response()->json($video);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\video  $video
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, video $video)
    {
        $video->title = $request->title;
        $video->link = $request->link;
        $video->description = $request->description;
        $video->series_id = $series->id;
        $video->save();
        return response()->json($video);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\video  $video
     * @return \Illuminate\Http\Response
     */
    public function destroy(video $video)
    {
        $video->delete();
        return response()->json($video);
    }
}
