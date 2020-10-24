<?php

namespace App\Providers;

use App\Models\User;
use App\Observers\UserObserver;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;

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
        // Force https redirection
        if(env('APP_ENV') === 'production') {
            URL::forceScheme('https');
        }

        // Database varchar default length
        Schema::defaultStringLength(191);

        // Models boot
        User::observe(UserObserver::class);
    }
}
