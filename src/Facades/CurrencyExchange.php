<?php
namespace Lab3\Facades;

use Illuminate\Support\Facades\Facade;

class CurrencyExchange extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'currencyExchange';
    }
}
