<?php

namespace Wawans\SismiopDatabase;

use Illuminate\Support\ServiceProvider;

class SismiopDatabaseServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     */
    public function boot()
    {
        /*
         * Optional methods to load your package assets
         */
        // $this->loadTranslationsFrom(__DIR__.'/../resources/lang', 'sismiop-database');
        // $this->loadViewsFrom(__DIR__.'/../resources/views', 'sismiop-database');
        // $this->loadMigrationsFrom(__DIR__.'/../database/migrations');
        // $this->loadRoutesFrom(__DIR__.'/routes.php');

        if ($this->app->runningInConsole()) {
            $this->registerMigrations();

            $this->publishes([
                __DIR__.'/../database/migrations' => database_path('migrations'),
            ], 'sismiop-migrations');

            $this->publishes([
                __DIR__.'/../config/config.php' => config_path('sismiop-database.php'),
            ], 'sismiop-config');

            // Publishing the views.
            /*$this->publishes([
                __DIR__.'/../resources/views' => resource_path('views/vendor/sismiop-database'),
            ], 'views');*/

            // Publishing assets.
            /*$this->publishes([
                __DIR__.'/../resources/assets' => public_path('vendor/sismiop-database'),
            ], 'assets');*/

            // Publishing the translation files.
            /*$this->publishes([
                __DIR__.'/../resources/lang' => resource_path('lang/vendor/sismiop-database'),
            ], 'lang');*/

            // Registering package commands.
            // $this->commands([]);
        }
    }

    /**
     * Register the application services.
     */
    public function register()
    {
        // Automatically apply the package configuration
        $this->mergeConfigFrom(__DIR__.'/../config/config.php', 'sismiop-database');

        // Register the main class to use with the facade
        $this->app->singleton('sismiop-database', function () {
            return new SismiopDatabase;
        });
    }

    /**
     * Register SISMIOP Database's migration files.
     *
     * @return void
     */
    protected function registerMigrations()
    {
        if (SismiopDatabase::shouldRunMigrations()) {
            return $this->loadMigrationsFrom(__DIR__.'/../database/migrations');
        }
    }
}
