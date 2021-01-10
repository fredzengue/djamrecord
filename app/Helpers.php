<?php

use App\Album;
use App\Artist;
use App\Gender;
use App\Music;

function title($title)
{
    return $title;
}

function  nbreAlbum($id)
{
    return Album::where('artist_id', '=',$id)->count();

}

function  nbrePiste($id)
{
    return Music::where('album_id', '=',$id)->count();

}
function getArtist($id)
{
    return Artist::find($id);
}
function getGenre($id)
{
    return Gender::find($id);
}
function getAlbum($id)
{
    return Album::find($id);
}

function similars($id)
{
    return Music::where('gender_id', $id)->get();
}
