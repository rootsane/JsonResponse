<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Services\JsonService;

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
        $this->app->bind('JsonService', JsonService::class);
    }
}
