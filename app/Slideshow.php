<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Slideshow extends Model
{
    protected $table = 'slideshows';
    
    protected $fillable = [
        'id', 'song_id', 'name', 'image', 'sort', 'enable'
    ];

    public function song() {
        return $this->belongsTo(Song::class);
    }
}
