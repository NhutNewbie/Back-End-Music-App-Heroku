<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;

class SongController extends Controller
{

    public function index() {
        $songs = DB::table('songs')
        ->join('artists', 'songs.artist_id', '=', 'artists.id')
        ->leftJoin('lyrics', 'songs.id', '=' ,'lyrics.song_id')
        ->select('songs.id', 'songs.name as title', 'songs.image', 'songs.audio as data', 'artists.id as idArtist', 'artists.name as artist', 
            'artists.avatar as avatarArtist', 'songs.views', 'songs.dowloads', 'songs.likes', 'lyrics.content as lyrics')
        ->orderBy('songs.views', 'desc')
        ->get();
        return response()->json(['data' => $songs], 200, [], JSON_NUMERIC_CHECK);
    }

    public function show_top_song() {
        $songs = DB::table('songs')
        ->join('artists', 'songs.artist_id', '=', 'artists.id')
        ->leftJoin('lyrics', 'songs.id', '=' ,'lyrics.song_id')
        ->select('songs.id', 'songs.name as title', 'songs.image', 'songs.audio as data', 'artists.id as idArtist', 'artists.name as artist', 
            'artists.avatar as avatarArtist', 'songs.views', 'songs.dowloads', 'songs.likes', 'lyrics.content as lyrics')
        ->orderBy('songs.views', 'desc')
        ->take(5)
        ->get();
        return response()->json(['data' => $songs], 200, [], JSON_NUMERIC_CHECK);
    }
}
