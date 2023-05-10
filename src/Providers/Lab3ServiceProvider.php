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



        // $this->loadViewsFrom(__DIR__ . '/../resources/views', 'lab3');
        // Маршруты
        $this->loadRoutesFrom(__DIR__.'/../copy/routes/web.php');

        // ----------------------- Публикация -----------------------
        // Миграции
        $migrations_path = __DIR__ . '/../copy/migrations';
        if (file_exists($migrations_path)) {
            $this->publishes([
                $migrations_path => database_path('migrations'),
            ], 'public');
        }

        // Контроллеры
        $migrations_path = __DIR__ . '/../copy/Controllers';
        if (file_exists($migrations_path)) {
            $this->publishes([
                $migrations_path => app_path('Http/Controllers'),
            ], 'public');
        }

        // Службы/Сервисы
        $migrations_path = __DIR__ . '/../copy/Services';
        if (file_exists($migrations_path)) {
            $this->publishes([
                $migrations_path => app_path('Http/Services'),
            ], 'public');
        }

        // Фасады
        $migrations_path = __DIR__ . '/../copy/Facades';
        if (file_exists($migrations_path)) {
            $this->publishes([
                $migrations_path => app_path('Http/Facades'),
            ], 'public');
        }

        // Представления
        $migrations_path = __DIR__ . '/../copy/views';
        if (file_exists($migrations_path)) {
            $this->publishes([
                $migrations_path => resource_path('views'),
            ], 'public');
        }



    }
}
