<?php

namespace Lab3\Services;

use Illuminate\Support\Facades\Http;

class CurrencyExchangeService
{
    public function getCurrency($from, $to, int $amount)
    {

        $response = Http::acceptJson()->get('https://api.apilayer.com/currency_data/convert', [
            'apikey' => 'jrBUHsEkn1BgIgcNP2T8ALpPOgiVvqy0',
            'from' => $from,
            'to' => $to,
            'amount' => $amount,

        ]);

        return  json_decode($response->body());

    }
}
