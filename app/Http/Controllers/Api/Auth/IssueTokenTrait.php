<?php

namespace App\Http\Controllers\Api\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

trait IssueTokenTrait {

    public function issueToken($request, $grantType, $scope = "*") {

        $params = [
            'grant_type' => $grantType,
            'client_id' => $this->client->id,
            'client_secret' => $this->client->secret,
            'username' => $request->username ?: $request->email,
            'password' => $request->password,
            'scope' => $scope
        ];

        // dd($params);

        $request->request->add($params);
        
        $proxy = Request::create('oauth/token', 'POST');

        return Route::dispatch($proxy);

        // return $this->client;

    }

}
