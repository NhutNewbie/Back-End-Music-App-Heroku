<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Like;
use App\Observers\LikeObserver;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Like::observe(LikeObserver::class);
        if (env('KEY_PATH', false) !== false) {
            Passport::loadKeysFrom(env('KEY_PATH'));
        }
    }
}
