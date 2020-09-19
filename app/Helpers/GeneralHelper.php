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

if(!function_exists('info_toast_alert'))
{
    /**
     * @param $message
     * @param string $title
     * @param int $delay
     * @param string $type
     */
    function info_toast_alert($message, $title = "Information", $delay = 8000, $type = "info")
    {
        toast_alert($title, $message, 'info', $delay);
    }
}

if(!function_exists('success_toast_alert'))
{
    /**
     * @param $message
     * @param string $title
     * @param int $delay
     * @param string $type
     */
    function success_toast_alert($message, $title = "Succès", $delay = 5000, $type = "success")
    {
        toast_alert($title, $message, $type, $delay);
    }
}

if(!function_exists('warning_toast_alert'))
{
    /**
     * @param $message
     * @param string $title
     * @param int $delay
     * @param string $type
     */
    function warning_toast_alert($message, $title = "Avertissement", $delay = 8000, $type = "warning")
    {
        toast_alert($title, $message, $type, $delay);
    }
}

if(!function_exists('danger_toast_alert'))
{
    /**
     * @param $message
     * @param string $title
     * @param int $delay
     * @param string $type
     */
    function danger_toast_alert($message, $title = "Danger", $delay = 10000, $type = "danger")
    {
        toast_alert($title, $message, $type, $delay);
    }
}

if(!function_exists('toast_alert'))
{
    /**
     * @param $title
     * @param $message
     * @param $type
     * @param $delay
     */
    function toast_alert($title, $message, $type, $delay)
    {
        session()->flash('toast.alert', true);
        session()->flash('toast.type', $type);
        session()->flash('toast.title', $title);
        session()->flash('toast.delay', $delay);
        session()->flash('toast.message', $message);
    }
}
