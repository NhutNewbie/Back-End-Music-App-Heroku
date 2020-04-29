<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Country;
use DB;

class CountryController extends Controller
{
    public function index() {

        $countrys = Country::with(['songs' => function ($query) {
            $query->join('artists', 'songs.artist_id', '=', 'artists.id')
            ->leftJoin('lyrics', 'songs.id', '=' ,'lyrics.song_id')
            ->select('songs.id', 'songs.name as title', 'songs.image', 'songs.audio as data', 'artists.id as idArtist', 
                'artists.name as artist', 'artists.avatar as avatarArtist', 'songs.views', 'songs.dowloads', 
                'lyrics.content as lyrics', 'songs.country_id')->orderBy('songs.views', 'desc')
            ->get();
        }])->get()->map(function($Country) {
            $Country->setRelation('songs', $Country->songs->take(3));
            return $Country;
        });

        return response()->json(['data' => $countrys], 200, [], JSON_NUMERIC_CHECK);
    }

    public function showSongs($idCountry) {
        $country = Country::find($idCountry);
        $songs = $country->songs()        
        ->join('artists', 'songs.artist_id', '=', 'artists.id')
        ->leftJoin('lyrics', 'songs.id', '=' ,'lyrics.song_id')
        ->select('songs.id', 'songs.name as title', 'songs.image', 'songs.audio as data', 'artists.id as idArtist', 'artists.name as artist', 
            'artists.avatar as avatarArtist', 'songs.views', 'songs.dowloads', 'songs.likes', 'lyrics.content as lyrics')
        ->get();
        return response()->json(['data' =>  $songs], 200, [], JSON_NUMERIC_CHECK);
    }
}