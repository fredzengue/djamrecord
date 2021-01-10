<?php

namespace App\Http\Controllers;

use App\Video;
use Illuminate\Http\Request;

class VideoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title = "Video";
        $videos = Video::all();
        return view('video.index')->with([
            'videos' => $videos,
            'title' => $title
            ]);
    }
    public function play($id)
    {
        $title = 'video';
        $video = Video::find($id);
        $videos = Video::all();
        return view('video.player')->with([
            'title' => $title,
            'video' => $video,
            'videos' => $videos
        ]);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function search()
    {
        $title = "video";
        request()->validate([
            'video' => 'required|min:3'
        ]);
        $request = request()->input('video');
        $videos = Video::where('title', 'like', "%$request%")
                ->paginate(30);
        return view('video.search')->with([
            'videos' =>  $videos,
            'title' => $title
            ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
