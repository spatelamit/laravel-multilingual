<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;
use App\Models\CurrencyRate;



class SetLocale
{
    public function handle($request, Closure $next)
    {
        $locale = $request->segment(1);
        if (!in_array($locale, ['en', 'es', 'ja', 'pt', 'pl'])) {
            $locale = 'en';
        }

        App::setLocale($locale);
        Session::put('locale', $locale);

        // Set currency and symbol based on language
        switch ($locale) {
            case 'es':
            case 'pt':
                $currency = 'eur';
                break;
            case 'ja':
                $currency = 'jpy';
                break;
            case 'pl':
                $currency = 'pln';
                break;
            case 'en':
            default:
                $currency = 'usd';
                break;
        }

        Session::put('currency', $currency);

        // Get the currency symbol from the database
        $symbol = CurrencyRate::where('currency_from', 'usd')
                              ->where('currency_to', $currency)
                              ->value('currency_symbol');
        Session::put('currency_symbol', $symbol);

        return $next($request);
    }
}