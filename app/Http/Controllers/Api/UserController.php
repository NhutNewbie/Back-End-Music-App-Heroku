<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
            $imgPath = $request['file']->store('image/account','public');

            $imgPath = ['avatar' => $imgPath];
        }

        $array_test = Auth::user()->update(array_merge([

            'name' => $request['full_name']

        ], $imgPath ?? [] ));

        return response()->json($array_test, 200);
    }
}
