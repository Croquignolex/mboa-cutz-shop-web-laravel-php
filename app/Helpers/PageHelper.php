<?php

use Illuminate\Support\Collection;

if(!function_exists('page_title'))
{
    /**
     * @param $page
     * @return string
     */
    function page_title($page)
    {
        $base_name = config('app.name');
        return $page === '' ? $base_name : "$page - $base_name";
    }
}

if(!function_exists('active_page'))
{
    /**lightSpeedOut
     * @param $route
     * @return string
     */
    function active_page($route)
    {
        if(Illuminate\Support\Facades\Route::is($route)) {
            return 'active';
        }

        return '';
    }
}

if(!function_exists('active_page_group'))
{
    /**lightSpeedOut
     * @param Collection $routes
     * @return string
     */
    function active_page_group(Collection $routes)
    {
        foreach ($routes as $route) {
            if(Illuminate\Support\Facades\Route::is($route)) {
                return 'show';
            }
        }
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

if(!function_exists('seo_authors'))
{
    /**
     * @return string
     */
    function seo_authors()
    {
        return 'MBOACUTZ,Alex NGOMBOL';
    }
}
