<?php

use Illuminate\Support\Arr;

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
