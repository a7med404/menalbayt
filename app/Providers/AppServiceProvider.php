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

        app()->singleton('lang', function(){

            if(session()->has('lang'))
            {
                return session()->get('lang');
            }else{
                return \App::getLocale();
            }

        });

        $new5Providers = \App\Models\provider::where('account_status', '0')->orderBy('id', 'desc')->limit(5)->get();
        \View::share('new5Providers', $new5Providers);


        $newCountProviders = \App\Models\provider::where('account_status', '0')->orderBy('id', 'desc')->get();
        \View::share('newCountProviders', $newCountProviders);
        
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
