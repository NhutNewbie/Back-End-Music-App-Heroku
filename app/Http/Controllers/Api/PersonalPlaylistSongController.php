<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\PersonalPlaylist;

class PersonalPlaylistSongController extends Controller
{

    public function index($idPlaylist) {
        $personalPlaylistSongs = PersonalPlaylist::find($idPlaylist)->songs()->join('artists', 'songs.artist_id', '=', 'artists.id')
        ->leftJoin('lyrics', 'songs.id', '=' ,'lyrics.song_id')
        ->select('songs.id', 'songs.name as title', 'songs.image', 'songs.audio as data', 'artists.id as idArtist', 'artists.name as artist',
             'artists.avatar as avatarArtist', 'songs.views', 'songs.dowloads',  'songs.likes', 'lyrics.content as lyrics')
        ->groupBy('songs.id', 'artists.id')
        ->get();
        return response()->json(['data' => $personalPlaylistSongs], 200, [], JSON_NUMERIC_CHECK);
    }

    public function store($idPlaylist, $idSong) {
        $personalPlaylistSongs = PersonalPlaylist::find($idPlaylist)->songs()->get();
        foreach($personalPlaylistSongs as $personalPlaylistSong) {
            if ($personalPlaylistSong->id == $idSong) {
                return response()->json(false, 200, [], JSON_NUMERIC_CHECK);
            }
        }
        $personalPlaylist = PersonalPlaylist::find($idPlaylist)->songs()->attach($idSong);
        return response()->json(true, 200, [], JSON_NUMERIC_CHECK);
    }

    public function delete($idPlaylist, $idSong) {
        $personalPlaylist = PersonalPlaylist::find($idPlaylist)->songs()->detach($idSong);
        return response()->json(true, 200, [], JSON_NUMERIC_CHECK);
    }
}
