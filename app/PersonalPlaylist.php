<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PersonalPlaylist extends Model
{
    protected $table = 'personal_playlists';
    
    protected $fillable = [
        'id', 'user_id', 'name', 'image'
    ];

    public function songs() {
        return $this->belongsToMany(Song::class, 'personal_playlists_songs');
    }

    public function user() {
        return $this->belongsTo(User::class);
    }

    public function personal_playlists_songs() {
        return $this->hasMany(PersonalPlaylistsSong::class);
    }
}
