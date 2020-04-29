<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Playlist extends Model
{
    protected $table = 'playlists';
    
    protected $fillable = [
        'id', 'theme_id', 'name', 'image', 'views'
    ];

    public function songs() {
        return $this->belongsToMany(Song::class, 'playlists_songs');
    }

    public function playlistSongs() {
        return $this->hasMany(PlaylistsSong::class);
    }

    public function theme() {
        return $this->belongsTo(Theme::class);
    }
}
