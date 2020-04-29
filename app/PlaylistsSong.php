<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PlaylistsSong extends Model
{
    protected $table = 'playlists_songs';
    
    protected $fillable = [
        'id', 'playlist_id', 'song_id'
    ];

    public function song() {
        return $this->belongsTo(Song::class);
    }

    public function playlist() {
        return $this->belongsTo(Playlist::class);
    }
}
