<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Like;
use App\User;

class LikeController extends Controller
{

    public function index($idSong) {
        $likes = Auth::user()->likes()->get();
        foreach ($likes as $like) {
            if ($like->song_id == $idSong) {

                return response()->json([
                    'user_id' => Auth::user()->id,
                    'song_id' => $idSong,
                    'check' => true
                ], 200, [], JSON_NUMERIC_CHECK);

            }
        }

        return response()->json([
            'user_id' => Auth::user()->id,
            'song_id' => $idSong,
            'check' => false
        ], 200, [], JSON_NUMERIC_CHECK);

    }

    public function store($idSong) {
        $likes = Auth::user()->likes()->get();
        foreach ($likes as $like) {
            if ($like->song_id == $idSong) {
                Auth::user()->songs()->detach($idSong);
                return response()->json(false, 200, [], JSON_NUMERIC_CHECK);
            }
        }
        Auth::user()->songs()->attach($idSong);
        return response()->json(true, 200, [], JSON_NUMERIC_CHECK);
    }
}
