<?php

use Illuminate\Support\Str;
use Illuminate\Support\Facades\App;

if(!function_exists('language_title'))
{
    /**
     * @return string
     */
    function language_title()
    {
        return App::getLocale() === 'fr' ? 'Anglais' : 'French';
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
        $language = App::getLocale() === 'fr' ? 'en' : 'fr';
        $languages = config('app.locales');

        if(in_array($language, $languages))
        {
            foreach ($languages as $lang)
            {
                if(str_contains($fullUrl, $lang)) return str_replace($lang, $language, $fullUrl);
            }
        }

        $url = config('app.url');
        return Str::replaceFirst($url, $url . '/' . $language, $fullUrl);
    }
}