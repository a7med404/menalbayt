<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use \Schema;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        
        Schema::defaultStringLength(191);
        // Schema::enableForeignKeyConstraints();

        if(!\Session::has('locale'))
        {
        \Session::put('locale', \App::getLocale());
        }

    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
