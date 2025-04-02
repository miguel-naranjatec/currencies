<?php

namespace Banzee\Currencies;

use Illuminate\Support\Facades\Http;

class Currencies
{

    public function __construct() {
        // TODO add dates https://2024-03-06.currency-api.pages.dev/v1/currencies/eur.json        
    }

    public function get(string $from_currency = 'eur'): array
    { 
        $response = Http::get("https://latest.currency-api.pages.dev/v1/currencies/{$from_currency}.json");
        $data = $response->json();
        return ($data) ? $data[ $from_currency ] : [];
    }
}
