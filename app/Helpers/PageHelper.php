<?php

if(!function_exists('page_title'))
{
    /**
     * @param $page
     * @return string
     */
    function page_title($page)
    {
        $base_name = config('app.name');
        return $page === '' ? $base_name : $page . ' - ' .  $base_name;
    }
}

if(!function_exists('active_route_class'))
{
    /**lightSpeedOut
     * @param $route
     * @return string
     */
    function active_route_class($route)
    {
        if(Illuminate\Support\Facades\Route::is($route)) return 'active';
        return '';
    }
}

if(!function_exists('seo_keywords'))
{
    /**
     * @return string
     */
    function seo_keywords()
    {
        return 'mboa,cutz,hair,men,baber';
    }
}

if(!function_exists('seo_description'))
{
    /**
     * @return string
     */
    function seo_description()
    {
        return 'Baber shop';
    }
}