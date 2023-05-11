<?php

namespace Lab3\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Facades\CurrencyExchange;

class Home extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {

        $result = CurrencyExchange::getCurrency('USD', 'RUB', 1);
        echo( $result->result);
        $addr1 = GeoService::getGeo('Moscow');
        $addr2 = GeoService::getGeo('Donetsk');
        $result = GeoService::calculateDistanceMath($addr1->latitude, $addr1->longitude, $addr2->latitude, $addr2->longitude);
        echo($result);
        return view('index');

    }
}
