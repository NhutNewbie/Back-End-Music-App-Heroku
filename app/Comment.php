<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $table = 'comments';
    
    protected $fillable = [
        'id', 'song_id', 'user_id', 'content',
    ];

    public function user() {
        return $this->belongsTo(User::class);
    }

    public function song() {
        return $this->belongsTo(Song::class);
    }
}
