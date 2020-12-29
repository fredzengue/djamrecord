<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Playlist extends Model
{
    public function musics(){
        return $this->belongsToMany('App\Music');
    }
}
