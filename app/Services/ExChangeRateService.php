<?php
//esto es un servicio dedicado a la api
namespace App\Services;

use Illuminate\Support\Facades\Http;

class ExchangeRateService
{
    protected $apiKey;
    protected $baseUrl;

    public function __construct()
    {
        $this->apiKey = config('app.exchangerate_api_key');
        $this->baseUrl = config('app.exchangerate_api_url');
    }

    public function getRates($baseCurrency = 'USD')
    {
        $url = "{$this->baseUrl}{$this->apiKey}/latest/{$baseCurrency}";

       // $response = Http::get($url);
       $baseCurrency = 'USD';
$response = Http::get(env('EXCHANGERATE_API_URL') . $baseCurrency);

        if ($response->successful()) {
            return $response->json();
        }

        return null;
    }
}
