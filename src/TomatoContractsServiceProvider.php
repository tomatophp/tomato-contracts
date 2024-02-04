<?php

namespace TomatoPHP\TomatoContracts;

use Illuminate\Support\ServiceProvider;


class TomatoContractsServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        //Register generate command
        $this->commands([
           \TomatoPHP\TomatoContracts\Console\TomatoContractsInstall::class,
        ]);

        //Register Config file
        $this->mergeConfigFrom(__DIR__.'/../config/tomato-contracts.php', 'tomato-contracts');

        //Publish Config
        $this->publishes([
           __DIR__.'/../config/tomato-contracts.php' => config_path('tomato-contracts.php'),
        ], 'tomato-contracts-config');

        //Register Migrations
        $this->loadMigrationsFrom(__DIR__.'/../database/migrations');

        //Publish Migrations
        $this->publishes([
           __DIR__.'/../database/migrations' => database_path('migrations'),
        ], 'tomato-contracts-migrations');
        //Register views
        $this->loadViewsFrom(__DIR__.'/../resources/views', 'tomato-contracts');

        //Publish Views
        $this->publishes([
           __DIR__.'/../resources/views' => resource_path('views/vendor/tomato-contracts'),
        ], 'tomato-contracts-views');

        //Register Langs
        $this->loadTranslationsFrom(__DIR__.'/../resources/lang', 'tomato-contracts');

        //Publish Lang
        $this->publishes([
           __DIR__.'/../resources/lang' => base_path('lang/vendor/tomato-contracts'),
        ], 'tomato-contracts-lang');

        //Register Routes
        $this->loadRoutesFrom(__DIR__.'/../routes/web.php');

    }

    public function boot(): void
    {
        //you boot methods here
    }
}
