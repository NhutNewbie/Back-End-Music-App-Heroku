<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Song extends Model
{
    protected $table = 'songs';
    
    protected $fillable = [
        'id', 'artist_id', 'country_id', 'name', 'image', 'audio', 'views', 'dowloads', 'likes'
    ];

    public function playlists() {
        return $this->belongsToMany(Playlist::class, 'playlists_songs');
    }

    public function personal_playlists() {
        return $this->belongsToMany(Playlist::class, 'personal_playlists_songs');
    }

    public function comments() {
        return $this->hasMany(Comment::class);
    }

    public function playlistSongs() {
        return $this->hasMany(PlaylistsSong::class);
    }

    public function likes() {
        return $this->hasMany(Like::class);
    }

    public function lyric() {
        return $this->hasOne(Lyric::class);
    }

    public function artist() {
        return $this->belongsTo(Artist::class);
    }

    public function country() {
        return $this->belongsTo(Country::class);
    }

    public function users() {
        return $this->hasMany(PlaylistsSong::class, 'likes');
    }
}
