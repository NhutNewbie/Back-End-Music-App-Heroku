<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lyric extends Model
{
    protected $table = 'lyrics';
    
    protected $fillable = [
        'id', 'song_id', 'content'
    ];

    public function song() {
        return $this->belongsTo(Song::class);
    }
}
