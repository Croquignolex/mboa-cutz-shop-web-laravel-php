<?php

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\App;

if(!function_exists('locale_route'))
{
    /**
     * @param $name
     * @param array|null $parameters
     * @return string
     */
    function locale_route($name, array $parameters = null)
    {
        // Get current language
        $language = Illuminate\Support\Facades\App::getLocale();

        // Return the correct rout with local
        return $parameters == null
            ? route($name, compact('language'))
            : route($name, Arr::collapse([compact('language'), $parameters]));
    }
}

if(!function_exists('text_format'))
{
    /**
     * @param $text
     * @param $maxCharacters
     * @return string
     */
    function text_format($text, $maxCharacters)
    {
        if(strlen($text) > $maxCharacters) return mb_substr($text, 0, $maxCharacters, 'utf-8') . '...';
        return $text;
    }
}

if(!function_exists('amount_format'))
{
    /**
     * @param $amount
     * @return string
     */
    function amount_format($amount)
    {
        $amount = number_format($amount, 0, ',', '.');
        if(App::getLocale() === config('app.secondary_locale')) return "XAF $amount";
        return "$amount XAF";
    }
}

