<?php

use App\Album;
use App\Gender;
use App\Music;

function  nbreAlbum($id)
{
    return Album::where('artist_id', '=',$id)->count();

}

function  nbrePiste($id)
{
    return Music::where('album_id', '=',$id)->count();

}
