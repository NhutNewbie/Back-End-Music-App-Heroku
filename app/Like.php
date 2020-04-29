<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\Pivot;

class Like extends Pivot
{

    protected $table = 'likes';
    
    protected $fillable = [
        'id', 'user_id', 'song_id'
    ];

    public function song() {
        return $this->belongsTo(Song::class);
    }

    public function user() {
        return $this->belongsTo(User::class);
    }

}
