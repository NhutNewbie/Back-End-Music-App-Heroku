<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Slideshow;
use DB;

class SlideshowController extends Controller
{
    public function index() {
        $slideshows = DB::table('slideshows')
        ->orderBy('sort')
        ->where('enable', '0')
        ->get();
        return response()->json(['data' => $slideshows], 200, [], JSON_NUMERIC_CHECK);
    }
}
