<?php

use Illuminate\Support\Str;
use Illuminate\Support\Facades\App;

if(!function_exists('languages'))
{
    /**
     * @return array
     */
    function languages()
    {
        return config('app.locales');
    }
}

if(!function_exists('current_language'))
{
    /**
     * @return string
     */
    function current_language()
    {
        return App::getLocale();
    }
}

if(!function_exists('browser_url'))
{
    /**
     * @param $language
     * @return string
     */
    function browser_url($language)
    {
        $fullUrl = url()->full();
        $languages = languages();

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

if(!function_exists('language_full_name'))
{
    /**
     * @param $language
     * @return string
     */
    function language_full_name($language)
    {
        if(in_array($language, languages())) return trans('language.' . $language);
        else return 'language.unknown';
    }
}

if(!function_exists('active_language'))
{
    /**
     * @param $language
     * @return string
     */
    function active_language($language)
    {
        return current_language() == $language;
    }
}

if(!function_exists('active_language'))
{
    /**
     * @param $language
     * @return string
     */
    function active_language($language)
    {
        return current_language() == $language;
    }
}
