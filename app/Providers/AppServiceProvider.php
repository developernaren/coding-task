<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind( 'App\Repos\Interfaces\User', 'App\Repos\Eloquent\UserRepository' );
        $this->app->bind( 'App\Repos\Interfaces\Education', 'App\Repos\Eloquent\EducationRepository' );
        $this->app->bind( 'App\Repos\Interfaces\Country', 'App\Repos\Eloquent\CountryRepository' );

    }
}
