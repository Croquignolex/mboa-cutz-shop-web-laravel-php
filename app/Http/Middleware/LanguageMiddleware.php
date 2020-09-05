<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class LanguageMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  Request  $request
     * @param Closure $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        // Get the route language
        $language = $request->segment(1);

        // return the fallback language if the route language is not in the available languages
        if(!in_array($language, config('app.locales'))) $language = config('app.fallback_locale');

        // Set the correct language
        if(App::getLocale() !== $language) App::setLocale($language);

        return $next($request);
    }
}