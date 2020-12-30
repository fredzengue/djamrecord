<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Music extends Model
{
    public function Gender(){
        return $this->belongsTo('App\Gender');
    }
    public function artist(){
        return $this->belongsTo('App\Artist');
    }
    public function playlists(){
        return $this->belongsToMany('App\Playlist');
    }
    public function album(){
        return $this->belongsTo('App\Album');
    }
}
}
