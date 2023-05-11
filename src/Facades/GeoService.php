<?php
namespace Lab3\Facades;

use Illuminate\Support\Facades\Facade;

class GeoService extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'geoService';
    }
}
