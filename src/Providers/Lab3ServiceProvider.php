<?php

namespace Lab3\Providers;

use Illuminate\Support\ServiceProvider;
use Lab3\Console\Commands\ExampleCommand;
use Lab3\Console\Commands\MakePackage;

class Lab3ServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->register('Lab3ServiceProvider\Lab3ServiceProvider');
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {

           // Маршруты
           $this->loadRoutesFrom(__DIR__.'/../routes/web.php');

           // Фасады
           $this->app->bind('currencyExchange', 'Lab3\Services\CurrencyExchangeService');
           $this->app->bind('geoService', 'Lab3\Services\GeoService');

           // Миграции
           $this->loadMigrationsFrom(__DIR__.'/../copy/migrations');

           // ----------------------- Публикация -----------------------
           // Представления
           $this->publishes([
            __DIR__.'/../copy/views' => resource_path('views'),
        ], 'public');



    }
}
