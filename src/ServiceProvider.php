<?php

namespace Waygou\Gamestage;

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider as BaseServiceProvider;

class ServiceProvider extends BaseServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);

        $this->publishAssets();

        $this->publishConfiguration();

        $this->registerCommands();

        $this->loadRoutes();

        $this->loadViews();

        $this->loadTranslations();

        $this->registerMigrations();
    }

    protected function registerMigrations()
    {
        if ($this->app->runningInConsole()) {
            $this->loadMigrationsFrom(__DIR__.'/../database/migrations');
        }
    }

    protected function loadTranslations()
    {
        // Load translations example.
        $this->loadTranslationsFrom(__DIR__.'/../resources/lang', 'gs-text');
    }

    protected function loadViews()
    {
        // Load views example.
        $this->loadViewsFrom(
            base_path('vendor/waygou/gamestage/resources/views'),
            'gs-ui'
        );
    }

    protected function publishConfiguration()
    {
        // Publish configuration.
        $this->publishes([
            __DIR__.'/../configuration/gamestage.php' => config_path('gamestage.php'),
        ], 'gamestage-configuration');

        // Merge configuration example.
        $this->mergeConfigFrom(__DIR__.'/../configuration/gamestage.php', 'gamestage');
    }

    protected function loadRoutes()
    {
        // Load Routes example.
        Route::middleware(['web'])
             ->namespace('\Waygou\Gamestage\Controllers')
             ->group(__DIR__.'/../routes/gamestage.php');
    }

    protected function publishAssets()
    {
        // Resource publish example.
        $this->publishes([
            __DIR__.'/../resources/'     => resource_path('/'),
        ], 'gamestage-resources');
    }

    protected function registerCommands()
    {
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
    }
}
