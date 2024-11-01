<?php
//en este controller uso el servicio que cree en app/Services
namespace App\Http\Controllers;

use App\Services\ExchangeRateService;

class CurrencyController extends Controller
{
    protected $exchangeRateService;

    public function __construct(ExchangeRateService $exchangeRateService)
    {
        $this->exchangeRateService = $exchangeRateService;
    }

    public function getRates()
    {
        $rates = $this->exchangeRateService->getRates('USD');

        if ($rates) {
            return response()->json([
                'success' => true,
                'rates' => $rates['conversion_rates']
            ]);
        }

        return response()->json(['success' => false, 'message' => 'Error fetching rates'], 500);
    }
}
