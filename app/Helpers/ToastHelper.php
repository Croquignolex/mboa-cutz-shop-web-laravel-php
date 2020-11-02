<?php

if(!function_exists('info_toast_alert'))
{
    /**
     * Toast with info style
     *
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
     * Toast with success style
     *
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
     * Toast with warning style
     *
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
     * Toast with danger style
     *
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
     * Toast alert
     *
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