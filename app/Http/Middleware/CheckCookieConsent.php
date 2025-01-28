<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class CheckCookieConsent
{
    public function handle(Request $request, Closure $next)
    {
        // Verifica se o cookie de consentimento já foi definido
        if (!$request->hasCookie('cookie_consent')) {
            // Passa uma variável para as views indicando que o consentimento não foi dado
            view()->share('showCookieBanner', true);
        } else {
            view()->share('showCookieBanner', false);
        }

        return $next($request);
    }
}
