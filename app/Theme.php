<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Theme extends Model
{
    protected $table = 'themes';
    
    protected $fillable = [
        'id', 'name', 'image', 'description'
    ];

    public function playlists() {
        return $this->hasMany(Playlist::class);
    }
}
