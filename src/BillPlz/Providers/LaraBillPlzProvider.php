<?php

namespace LaraBillPlz\Providers;

use Illuminate\Support\ServiceProvider;

class LaraBillPlzProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
            __DIR__ . '/../config/billplz.php' => config_path('billplz.php')
        ], 'config');
        $this->mergeConfigFrom($source_config, 'billplz');
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
