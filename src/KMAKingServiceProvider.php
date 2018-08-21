<?php

namespace KMAKing\AdminTemplate;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;

class KMAKingServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        /**
         * publish admin template assets
         */
        $this->publishes([
            __DIR__.'/public' => public_path()
        ], 'kma-assets');

        /**
         * publish admin template auth views and components of boostrap
         */
        $this->publishes([
            __DIR__.'/resources/views/' => resource_path('views')
        ], 'kma-blade');


        /**
         * Component register here
         * Bootstrap component register as laravel component
         */
        Blade::component('components.alert', 'alert');
        Blade::component('components.panel', 'panel');
        Blade::component('components.modal', 'modal');
        Blade::component('components.form', 'form');
        Blade::component('components.button', 'button');
        Blade::component('components.form-group', 'formGroup');
        
        Blade::component('components.plugin.style', 'pluginStyle');
        Blade::component('components.plugin.script', 'pluginScript');
        Blade::component('components.touchspin', 'touchspin');
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->loadViewsFrom(resource_path('views/components'), 'component');
    }
}
