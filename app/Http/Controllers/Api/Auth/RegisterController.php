<?php

namespace App\Http\Controllers\Api\Auth;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Laravel\Passport\Client;

class Registercontroller extends Controller

{
    use IssueTokenTrait;

	private $client;

	public function __construct(){

        $this->client = Client::find(1);
	}

	//register new user
    public function register(Request $request)
    {
        	
    	$this->validate($request, [
    		'name' => 'required',
    		'email' => 'required|email|unique:users,email',
    		'password' => 'required|min:6|confirmed'
		]);
		
		$user = User::create([
			'users_type_id' => 1,
            'name' => request('name'),
            'email' => request('email'),
            'password' => bcrypt(request('password'))
		]);

        return $this->issueToken($request, 'password');

    }
}