<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Artist;
use DB;

class ArtistController extends Controller
{
    public function index() {
        // $artists = DB::table('artists')
        // ->leftJoin('songs', 'songs.artist_id', '=' ,'artists.id')
        // ->leftJoin('countrys', 'artists.country_id', '=' ,'countrys.id')
        // ->select('artists.id', 'artists.name', 'artists.sex', 'artists.avatar', DB::raw('COUNT(artists.id) as count_songs'), 'countrys.name as country', 'artists.description')
        // // ->groupBy('artists.id')
        // // ->distinct('artists.id')
        // ->get();
        $artists = DB::table('artists')
        ->leftJoin('songs', 'songs.artist_id', '=' ,'artists.id')
        ->leftJoin('countrys', 'artists.country_id', '=' ,'countrys.id')
        ->select('artists.id', 'artists.name', 'artists.sex', 'artists.avatar', DB::raw('COUNT(artists.id) as count_songs'), 'countrys.name as country', 'artists.description')
        ->groupBy('id')
        ->get();
        return response()->json(['data' => $artists], 200, [], JSON_NUMERIC_CHECK);
    }

    public function show($idArtist) {
        $artist = Artist::find($idArtist);
        return response()->json(['data' => $artist], 200, [], JSON_NUMERIC_CHECK);
    }

    public function show_songs($idArtist) {
        $artist = Artist::find($idArtist);
        $songs = $artist->songs()    
        ->join('artists', 'songs.artist_id', '=', 'artists.id')    
        ->leftJoin('lyrics', 'songs.id', '=' ,'lyrics.song_id')
        ->select('songs.id', 'songs.name as title', 'songs.image', 'songs.audio as data', 'artists.id as idArtist', 'artists.name as artist', 
            'artists.avatar as avatarArtist', 'songs.views', 'songs.dowloads', 'songs.likes', 'lyrics.content as lyrics')
        ->get();
        return response()->json(['data' => $songs], 200, [], JSON_NUMERIC_CHECK);
    }
    // /storage/*.key
    // "post-install-cmd": [ "php artisan clear-compiled", "php artisan optimize", "chmod -R 777 storage", "php artisan passport:keys" ]
}
