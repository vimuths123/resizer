<?php

namespace ResierPackage;

use Illuminate\Support\ServiceProvider;

class ResierPackageServiceProvider extends ServiceProvider
{
    /**
     * Register any package services.
     *
     * @return void
     */
    public function register()
    {
        // You can register bindings or services here if needed
    }

    /**
     * Bootstrap any package services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__ . '/routes.php');
        $this->loadViewsFrom(__DIR__ . '/Views', 'resier');
    }
}
