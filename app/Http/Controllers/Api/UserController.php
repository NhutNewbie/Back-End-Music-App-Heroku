<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{
    public function show() {
        $user = Auth::user();
        return response()->json($user, 200, [], JSON_NUMERIC_CHECK);
    }

    public function store(Request $request) {

    	$this->validate($request, [
            'full_name' => '',
            'file' => '',
		]);

        if (request('file')) {
            $img = $request->file('file'); 
            Storage::disk('google')->put($img->getClientOriginalName().'', fopen($img,'r+'));
            $url = Storage::disk('google')->url($img->getClientOriginalName().'');

            $imgPath = ['avatar' => $url];
        }

        $array_test = Auth::user()->update(array_merge([

            'name' => $request['full_name']

        ], $imgPath ?? [] ));

        return response()->json($array_test, 200);
    }

    public function test(Request $request) {
        $img = $request->file('thing'); 
        Storage::disk('google')->put($img->getClientOriginalName().'', fopen($img,'r+'));
        $url = Storage::disk('google')->url($img->getClientOriginalName().'');
        dd(\App\Theme::find(1)->update(['name' => $url]));
    }
}
