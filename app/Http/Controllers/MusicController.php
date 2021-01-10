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
        $title = "Piste";
        $news = Music::with('gender','artist')->orderBy('release_date')->take(3)->get();
        $musics = Music::with('gender','artist')->paginate(15);
        return view('music.piste.index')->with([
            'news' => $news,
            'musics' => $musics,
            'title' => $title
        ]);
    }
    public function artist()
    {
        $title = "Artiste";
        $news = Music::with('gender','artist')->orderBy('release_date')->take(3)->get();
        $artists = Artist::with('albums')->paginate(15);
        return view('music.artist.index')->with([
            'news' => $news,
            'artists' => $artists,
            'title' => $title
        ]);
    }

    public function album()
    {
        $title = "Album";
        $news = Music::with('gender','artist')->orderBy('release_date')->take(3)->get();
        $albums = Album::with('pistes')->paginate(15);
        return view('music.album.index')->with([
            'news' => $news,
            'albums' => $albums,
            'title' => $title
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
    public function Pistesearch()
    {
        $title = "piste";
        $news = Music::with('gender','artist')->orderBy('release_date')->take(3)->get();
        request()->validate([
            'piste' => 'required|min:3'
        ]);
        $request = request()->input('piste');
        $pistes = Music::join('artists', 'artists.id','=', 'music.artist_id')
                ->where('music.title', 'like', "%$request%")
                ->orWhere('artists.name', 'like', "%$request%")
                ->paginate(30);
        return view('music.piste.search')->with([
            'musics' =>  $pistes,
            'news' => $news,
            'title' => $title
            ]);
    }
    public function Artistsearch()
    {
        $title = "artiste";
        $news = Music::with('gender','artist')->orderBy('release_date')->take(3)->get();
        request()->validate([
            'artist' => 'required|min:3'
        ]);
        $request = request()->input('artist');
        $artists = Artist::where('name', 'like', "%$request%")
                ->paginate(30);
        return view('music.artist.search')->with([
            'artists' =>  $artists,
            'news' => $news,
            'title' => $title
            ]);
    }
    public function Albumsearch()
    {
        $title = "Album";
        $news = Music::with('gender','artist')->orderBy('release_date')->take(3)->get();
        request()->validate([
            'album' => 'required|min:3'
        ]);
        $request = request()->input('album');
        $albums = Album::where('title', 'like', "%$request%")
                ->paginate(30);
        return view('music.album.search')->with([
            'albums' =>  $albums,
            'news' => $news,
            'title' => $title
            ]);
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function player($id)
    {
        $title = 'nouveaute';
        $piste = Music::find($id);
        $news = Music::with('gender','artist')->orderBy('release_date')->paginate(3);
        return view('music.player')->with([
            'title' => $title,
            'piste' => $piste,
            'news' => $news
        ]);
    }
    public function Artistplay($id)
    {
        $title = 'nouveaute';
        $musics = Music::with('gender','artist')->where('artist_id', $id)->paginate(15);
        $news = Music::with('gender','artist')->orderBy('release_date')->paginate(3);
        return view('music.piste.index')->with([
            'title' => $title,
            'musics' => $musics,
            'news' => $news
        ]);
    }
    public function Albumplay($id)
    {
        $title = 'nouveaute';
        $musics = Music::with('gender','artist')->where('album_id', $id)->paginate(15);
        $news = Music::with('gender','artist')->orderBy('release_date')->paginate(3);
        return view('music.piste.index')->with([
            'title' => $title,
            'musics' => $musics,
            'news' => $news
        ]);
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
