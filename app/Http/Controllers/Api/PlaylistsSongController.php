<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Playlist;
use DB;

class PlaylistsSongController extends Controller
{
    public function index($idPlaylist) {
        // $playlistSongs = DB::table('playlists')
        // ->join('playlists_songs', 'playlists.id', '=', 'playlists_songs.playlist_id')
        // ->join('songs', 'songs.id', '=', 'playlists_songs.song_id')
        // ->join('artists', 'songs.artist_id', '=', 'artists.id')
        // ->where('playlists.id', $idPlaylist)
        // ->select('songs.id', 'songs.name as title', 'songs.image', 'songs.audio as data', 'artists.name as artist', 'songs.views', 'songs.dowloads')->get();
        $playlist = Playlist::find($idPlaylist);
        $playlistSongs = $playlist->songs()
        ->join('artists', 'songs.artist_id', '=', 'artists.id')
        ->leftJoin('lyrics', 'songs.id', '=' ,'lyrics.song_id')
        ->select('songs.id', 'songs.name as title', 'songs.image', 'songs.audio as data', 'artists.id as idArtist', 'artists.name as artist',
             'artists.avatar as avatarArtist', 'songs.views', 'songs.dowloads',  'songs.likes', 'lyrics.content as lyrics')
        ->get();

        return response()->json(['data' => $playlistSongs], 200, [], JSON_NUMERIC_CHECK);
    }
}
