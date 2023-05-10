<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;

class CurrencyExchangeService
{
    public function getCurrency()
    {

        // $curl = curl_init();

        // curl_setopt_array($curl, array(
        //     CURLOPT_URL => "https://api.apilayer.com/currency_data/convert?to=to&from=from&amount=amount",
        //     CURLOPT_HTTPHEADER => array(
        //         "Content-Type: text/plain",
        //         "apikey: jrBUHsEkn1BgIgcNP2T8ALpPOgiVvqy0"
        //     ),
        //     CURLOPT_RETURNTRANSFER => true,
        //     CURLOPT_ENCODING => "",
        //     CURLOPT_MAXREDIRS => 10,
        //     CURLOPT_TIMEOUT => 0,
        //     CURLOPT_FOLLOWLOCATION => true,
        //     CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        //     CURLOPT_CUSTOMREQUEST => "GET"
        // ));
        $response = Http::acceptJson()->get('https://api.apilayer.com/currency_data/convert', [
            'apikey' => 'jrBUHsEkn1BgIgcNP2T8ALpPOgiVvqy0',
            'from' => 'USD',
            'to' => 'RUB',
            'amount' => 1,

        ]);

        return  json_decode($response->body());

    }
}
