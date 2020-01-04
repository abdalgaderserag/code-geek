<?php

namespace App\Http\Controllers\Api;

use App\Series;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class SeriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $series = Auth::user()->series;
        return response()->json($series);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $serie = new Series();
        $serie->teacher_id = Auth::id();
        $serie->title = $request->title;
        $serie->description = $request->description;
        $serie->save();
        return response()->json($serie);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Series $series
     * @return \Illuminate\Http\Response
     */
    public function show(Series $series)
    {
        $series->videos;
        $data = $series;
        return response()->json($data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \App\Series $series
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Series $series)
    {
        $serie = new Series();
        $serie->title = $request->title;
        $serie->description = $request->description;
        $serie->save();
        return response()->json($serie);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Series $series
     * @return \Illuminate\Http\Response
     */
    public function destroy(Series $series)
    {
        $series->delete();
        return response()->json($serie);
    }
}
