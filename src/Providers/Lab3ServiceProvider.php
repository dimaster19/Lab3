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

           // ----------------------- Публикация -----------------------
           // Миграции
           $migrations_path = __DIR__ . '/../copy/migrations';
           if (file_exists($migrations_path)) {
               $this->publishes([
                   $migrations_path => database_path('migrations'),
               ], 'public');
           }

           // Представления
           $migrations_path = __DIR__ . '/../copy/views';
           if (file_exists($migrations_path)) {
               $this->publishes([
                   $migrations_path => resource_path('views/lab3'),
               ], 'public');
           }

    }
}
