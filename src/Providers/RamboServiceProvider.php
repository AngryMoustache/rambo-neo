<?php

namespace AngryMoustache\Rambo\Providers;

use Illuminate\Support\ServiceProvider;

class RamboServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->publishes([
            __DIR__ . '/../../config/rambo.php' => config_path('rambo.php'),
        ], 'rambo-config');

        $this->publishes([
            __DIR__ . '/../../resources/assets' => public_path('vendor/rambo'),
        ], 'rambo-assets');

        $this->loadMigrationsFrom(__DIR__ . '/../../database/migrations');
        $this->loadRoutesFrom(__DIR__ . '/../../routes/web.php');
    }

    public function register()
    {

    }
}
