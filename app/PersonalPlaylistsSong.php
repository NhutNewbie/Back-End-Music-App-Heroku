<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PersonalPlaylistsSong extends Model
{
    protected $table = 'personal_playlists_songs';
    
    protected $fillable = [
        'id', 'personal_playlist_id', 'song_id'
    ];

    public function song() {
        return $this->belongsTo(Song::class);
    }

    public function personal_playlist() {
        return $this->belongsTo(PersonalPlaylist::class);
    }
}
