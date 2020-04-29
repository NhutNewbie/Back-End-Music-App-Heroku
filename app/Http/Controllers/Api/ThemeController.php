<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Theme;

class ThemeController extends Controller
{
    public function index() {
        $themes = Theme::all();
        return response()->json(['data' => $themes], 200, [], JSON_NUMERIC_CHECK);
    }
}
