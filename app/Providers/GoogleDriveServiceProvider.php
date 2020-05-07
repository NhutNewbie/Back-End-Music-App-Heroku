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
        \Storage::extend("google", function($app, $config) {
            $client = new \Google_Client;
            $client->setClientId(config('values.GOOGLE_CLIENT_ID'));
            $client->setClientSecret(config('values.GOOGLE_CLIENT_SECRET'));
            $client->refreshToken(config('values.GOOGLE_REFRESH_TOKEN'));
            $client->setAccessType('offline');
            $client->setApprovalPrompt('force');
            $service = new \Google_Service_Drive($client);
            $adapter = new GoogleDriveAdapter($service, config('values.GOOGLE_DRIVE_FOLDER_ID'));
            return new Filesystem($adapter);

        //     // $client = new \Google_Client;
        //     // $client->setClientId('217370947719-c4704v7st4df9roftv8et14o3tv27klh.apps.googleusercontent.com');
        //     // $client->setClientSecret('NY7--o2sVfRDRQFEQOm6XPFk');
        //     // $client->refreshToken('1//04lh7Wrq7AIfICgYIARAAGAQSNwF-L9IrFZMq7f_9x6TSTIxs5wslbjy65HYOKDAlq6XuJkgzBXGgE5pu-lhi8jyrNCjLOpuVArc');
        //     // $client->setAccessType('offline');
        //     // $client->setApprovalPrompt('force');
        //     // $service = new \Google_Service_Drive($client);
        //     // $adapter = new GoogleDriveAdapter($service, '1zl3DzbRCPNbLXu2uN_MEWL1PHB1qWMSK');

        //     // return new Filesystem($adapter);
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