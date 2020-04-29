<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\PersonalPlaylist;

class PersonalPlaylistController extends Controller
{ 
    public function index() {

        $personalPlaylists = Auth::user()->personal_playlists()->get();
        return response()->json(['data' => $personalPlaylists], 200, [], JSON_NUMERIC_CHECK);
        
    }

    public function store(Request $request) {

        $this->validate($request, [
    		'name' => 'required',
        ]);

        $user = Auth::user()->personal_playlists()->create(['name' => $request['name'], 'image' => '']);

        return response()->json(true, 200, [], JSON_NUMERIC_CHECK);
    }

    public function update($id, Request $request) {

        $this->validate($request, [
    		'name' => 'required',
        ]);

        $user = PersonalPlaylist::find($id)->update(['name' => $request['name']]);

        return response()->json(true, 200, [], JSON_NUMERIC_CHECK);
    }

    public function delete($id) {
        $test = PersonalPlaylist::find($id)->delete();
        return response()->json($test, 200, [], JSON_NUMERIC_CHECK);
    }
}
