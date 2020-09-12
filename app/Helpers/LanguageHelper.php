<?php

use Illuminate\Support\Str;
use Illuminate\Support\Facades\App;

if(!function_exists('current_language'))
{
    /**
     * Get current language
     *
     * @return string
     */
    function current_language()
    {
        return App::getLocale();
    }
}

if(!function_exists('language_title'))
{
    /**
     * Get displayed language in title option into HTML a bracket
     *
     * @return string
     */
    function language_title()
    {
        return (App::getLocale() === config('app.secondary_locale')) ? 'French' : 'Anglais';
    }
}

if(!function_exists('language_url'))
{
    /**
     * @return string
     */
    function language_url()
    {
        $fullUrl = url()->full();
        $url = config('app.url');
        $currentLanguage = App::getLocale();
        $language = config('app.fallback_locale');

        // Translation language should be the opposite language of the current language
        $translationLanguage = ($currentLanguage === $language) ? config('app.secondary_locale') : $language;

        if(Str::contains($fullUrl, array_map(function($item) {return "/$item";}, config('app.locales'))))
        {
            // Replace the current language with translate language into full url (known locale)
            return Str::replaceFirst(
                "/$currentLanguage",
                "/$translationLanguage",
                $fullUrl
            );
        }
        else
        {
            // Replace the url path with url path + language into full url (unknown locale)
            return Str::replaceFirst(
                $url,
                "$url/$translationLanguage",
                $fullUrl
            );
        }
    }
}