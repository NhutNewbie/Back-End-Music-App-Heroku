<?php

use Illuminate\Http\Request;
use App\User;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::post('register', 'Api\Auth\RegisterController@register');
Route::post('login', 'Api\Auth\LoginController@login');
Route::post('refresh', 'Api\Auth\LoginController@refresh');

Route::get('themes', 'Api\ThemeController@index');
Route::get('playlists/{idTheme}', 'Api\PlaylistController@index');
Route::get('playlist-songs/{idPlaylist}', 'Api\PlaylistsSongController@index');
Route::get('playlists-hot', 'Api\PlaylistController@show_playlist_hot');

Route::get('artists', 'Api\ArtistController@index');
Route::get('artist/{id}', 'Api\ArtistController@show');
Route::get('artist-songs/{id}', 'Api\ArtistController@show_songs');

Route::get('charts', 'Api\CountryController@index');
Route::get('charts-songs/{idCountry}', 'Api\CountryController@showSongs');

Route::get('slideshows', 'Api\SlideshowController@index');

Route::get('top-songs', 'Api\SongController@show_top_song');

Route::get('all-songs', 'Api\SongController@index');

Route::post('test-images', 'Api\UserController@test');
// Route::post('test-images', function (Request $request) {
//     dd($request->file("thing")->store('1Hidd_dZl8HWFOyoc-Rchny00bNjxbF-1', 'google'));
// });


Route::middleware('auth:api')->group(function () {

    Route::get('user', 'Api\UserController@show');

    Route::post('change-password', 'Api\Auth\LoginController@change_password');

    Route::get('logout', 'Api\Auth\LoginController@logout');
    Route::post('edit-profile', 'Api\UserController@store');

    Route::get('personal-playlists', 'Api\PersonalPlaylistController@index');
    Route::post('create-personal-playlist', 'Api\PersonalPlaylistController@store');
    Route::post('edit-personal-playlist/{id}', 'Api\PersonalPlaylistController@update');
    Route::get('delete-personal-playlist/{id}', 'Api\PersonalPlaylistController@delete');
    
    Route::get('add-to-personal-playlists/{idPlaylist}/{idSong}', 'Api\PersonalPlaylistSongController@store');
    Route::get('personal-playlist-songs/{id}', 'Api\PersonalPlaylistSongController@index');
    Route::get('delete-personal-playlist-song/{idPlaylist}/{idSong}', 'Api\PersonalPlaylistSongController@delete');
        
    Route::get('check-like/{idSong}', 'Api\LikeController@index');
    Route::get('like/{idSong}', 'Api\LikeController@store');

    // Route::get('posts', 'Api\PostController@index');

    // Route::get('user', 'Api\UserController@index');

    Route::get('posts', function () {
        return view('welcome');
    });

});