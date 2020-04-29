<?php

namespace App\Observers;

use App\Like;
use App\User;
use App\Song;

class LikeObserver
{

    public function saved(Like $like)
    {
        $song = Song::find($like->song_id);
    
        $song->update([
            'likes' => ($song->likes + 1)
        ]);
    }

    public function deleted(Like $like)
    {
        $song = Song::find($like->song_id);
    
        $song->update([
            'likes' => ($song->likes - 1)
        ]);
    }

}
