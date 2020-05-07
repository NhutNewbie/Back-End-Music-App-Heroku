<?php

namespace App\Providers;

use League\Flysystem\Filesystem;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\ServiceProvider;
use Hypweb\Flysystem\GoogleDrive\GoogleDriveAdapter;

class GoogleDriveServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        // $client = new \Google_Client;
        // dd($client);
        \Storage::extend("google", function($app, $config) {
            $client = new \Google_Client;
            $client->setClientId($config['clientId']);
            $client->setClientSecret($config['clientSecret']);
            $client->refreshToken($config['refreshToken']);
            $client->setAccessType('offline');
            $client->setApprovalPrompt('force');
            // Refresh the token if it's expired.
            if ($client->isAccessTokenExpired()) {
                // save refresh token to some variable
                $refreshTokenSaved = $client->getRefreshToken(); 
                
                // update access token
                $client->fetchAccessTokenWithRefreshToken($refreshTokenSaved); 
                
                // pass access token to some variable
                $accessTokenUpdated = $client->getAccessToken();
                
                // append refresh token
                $accessTokenUpdated['refresh_token'] = $refreshTokenSaved;
                
                // save to file
                file_put_contents($credentialsPath, json_encode($accessTokenUpdated)); 
            }
            $service = new \Google_Service_Drive($client);
            $adapter = new GoogleDriveAdapter($service, $config['folderId']);

            return new Filesystem($adapter);
        });
    }
}
// GOOGLE_CLIENT_ID=169372762317-edh6c5f0jr20q801sg16a670n9vio6k1.apps.googleusercontent.com
// GOOGLE_CLIENT_SECRET=z0uL1VtjnYQjqMVbYsUxSXtM
// GOOGLE_REFRESH_TOKEN=1//03YAoIMO_ekm9CgYIARAAGAMSNwF-L9IrhuXQntyd9pDHtNgVDIeeO3U3exfxyOdPPBCZv3VVEYgqXWTOTY4y_1W6IedfiUgw2ro
// GOOGLE_DRIVE_FOLDER_ID=12B3Z3RQ13VOidtlnNZ_GjJRT9_AfuZw9

// GOOGLE_CLIENT_ID=217370947719-c4704v7st4df9roftv8et14o3tv27klh.apps.googleusercontent.com
// GOOGLE_CLIENT_SECRET=NY7--o2sVfRDRQFEQOm6XPFk
// GOOGLE_REFRESH_TOKEN=1//04aJmY69c8hovCgYIARAAGAQSNwF-L9Ir39lYjyrJHwEj7eFTg0lkw09igseUjwlRAWArMfDPJYHU-9keHFfVR-Pubgev6BNoMIA
// GOOGLE_DRIVE_FOLDER_ID=1zl3DzbRCPNbLXu2uN_MEWL1PHB1qWMSK