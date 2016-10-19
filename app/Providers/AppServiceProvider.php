<?php

namespace App\Providers;

use Barryvdh\LaravelIdeHelper\IdeHelperServiceProvider;
use Illuminate\Support\ServiceProvider;
use Orangehill\Iseed\IseedServiceProvider;

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
        if('local' === $this->app->environment()) {
            $this->app->register(IdeHelperServiceProvider::class);
            $this->app->register(IseedServiceProvider::class);
        }
    }
}
