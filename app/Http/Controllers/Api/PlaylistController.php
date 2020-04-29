<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Playlist;
use App\Theme;
use DB;

class PlaylistController extends Controller
{
    public function index($idTheme) {
        $theme = Theme::find($idTheme);
        $playlists = $theme->playlists()->get();
        return response()->json(['data' => $playlists], 200, [], JSON_NUMERIC_CHECK);
    }

    public function show($idPlaylist) {
        $playlist = Playlist::find($idPlaylist);
        $songs = $playlist->songs()->get();
        return response()->json(['data' => $songs], 200, [], JSON_NUMERIC_CHECK);
    }

    public function show_playlist_hot() {
        $playlists = DB::table('playlists')
        ->orderBy('views', 'DESC')
        ->take(5)
        ->get();
        return response()->json(['data' => $playlists], 200, [], JSON_NUMERIC_CHECK);
    }
}
