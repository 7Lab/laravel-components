<?php

namespace SevenLab\LaravelComponents;


use Illuminate\Support\ServiceProvider;
use SevenLab\LaravelComponents\Commands\Publish;

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

        $this->publishes([
            __DIR__.'/../resources/scss' => resource_path('scss'),
        ], '7lab.components.styles');

        $this->commands([
            Publish::class,
        ]);
    }
}
