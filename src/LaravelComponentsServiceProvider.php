<?php

namespace SevenLab\LaravelComponents;

use Illuminate\Support\ServiceProvider;

class LaravelComponentsServiceProvider extends ServiceProvider
{
    /**
     * Perform post-registration booting of services.
     *
     * @return void
     */
    public function boot(): void
    {
         $this->loadViewsFrom(__DIR__.'/../resources/views', '7lab');
    }
}
