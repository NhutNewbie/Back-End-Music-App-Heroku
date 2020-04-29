<?php

namespace App\Http\Controllers\Api\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Laravel\Passport\Client;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Hash;
use App\Rules\MatchOldPassword;

class LoginController extends Controller
{
    use IssueTokenTrait;

    private $client;

	public function __construct(){

        $this->client = Client::find(1);
        
	}

    public function login(Request $request) {

        $this->validate($request, [
    		'username' => 'required',
    		'password' => 'required'
        ]);

        return $this->issueToken($request, 'password');
        
    }

    public function refresh(Request $request) {

        $this->validate($request, [
    		'refresh_token' => 'required',
        ]);

        return $this->issueToken($request, 'refresh_token');

    }

    public function logout(Request $request) {

        $accessToken = Auth::user()->token();

        $refreshToken = DB::table('oauth_refresh_tokens')->where('access_token_id', $accessToken->id)->update(['revoked' => true]);

        $accessToken->revoke();

        return response()->json(true, 200, [], JSON_NUMERIC_CHECK);
    }

    public function change_password(Request $request) {

        $request->validate([
            'password' => ['required', new MatchOldPassword],
            'new_password' => ['required'],
        ]);
   
        Auth::user()->update(['password'=> Hash::make($request->new_password)]);
        return response()->json(true, 200, [], JSON_NUMERIC_CHECK);
    }
}
