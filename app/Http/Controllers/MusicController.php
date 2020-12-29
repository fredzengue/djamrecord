<?php

namespace App\Http\Controllers;

use App\Album;
use App\Artist;
use App\Gender;
use App\Music;
use App\Playlist;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use function GuzzleHttp\Promise\all;

class MusicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $news = Music::with('gender','artist')->orderBy('release_date')->take(3)->get();
        $musics = Music::with('gender','artist')->paginate(15);
        return view('music.index')->with([
            'news' => $news,
            'musics' => $musics
        ]);
    }
    public function artist()
    {
        $news = Music::with('gender','artist')->orderBy('release_date')->take(3)->get();
        $artists = Artist::with('albums')->paginate(15);
        return view('music.artist')->with([
            'news' => $news,
            'artists' => $artists
        ]);
    }

    public function album()
    {
        $news = Music::with('gender','artist')->orderBy('release_date')->take(3)->get();
        $albums = Album::with('pistes')->paginate(15);
        return view('music.album')->with([
            'news' => $news,
            'albums' => $albums
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
