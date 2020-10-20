<?php

use App\Enums\Constants;

if(!function_exists('css_asset'))
{
    /**
     * Dynamic css asset file path
     *
     * @param $css_file
     * @return string
     */
    function css_asset($css_file)
    {
        return file_asset($css_file, 'css', 'css');
    }
}

if(!function_exists('customer_css_asset'))
{
    /**
     * Dynamic css asset file path
     *
     * @param $css_file
     * @return string
     */
    function customer_css_asset($css_file)
    {
        return file_asset($css_file, 'css', 'customer/css');
    }
}

if(!function_exists('js_asset'))
{
    /**
     * Dynamic js asset file path
     *
     * @param $js_file
     * @return string
     */
    function js_asset($js_file)
    {
        return file_asset($js_file, 'js', 'js');
    }
}

if(!function_exists('customer_js_asset'))
{
    /**
     * Dynamic js asset file path
     *
     * @param $js_file
     * @return string
     */
    function customer_js_asset($js_file)
    {
        return file_asset($js_file, 'js', 'customer/js');
    }
}

if(!function_exists('img_asset'))
{
    /**
     * Dynamic image asset file path
     *
     * @param $img_file
     * @param $extension
     * @return string
     */
    function img_asset($img_file, $extension = Constants::DEFAULT_IMAGE_EXTENSION)
    {
        return asset("storage/$img_file.$extension");
    }
}

if(!function_exists('favicon_img_asset'))
{
    /**
     * Dynamic favicon image asset file path
     *
     * @param $img_file
     * @param string $extension
     * @return string
     */
    function favicon_img_asset($img_file, $extension = Constants::DEFAULT_IMAGE_EXTENSION)
    {
        return storage_asset($img_file, $extension, 'favicons');
    }
}

if(!function_exists('favicon_file_asset'))
{
    /**
     * @param $file
     * @return string
     */
    function favicon_file_asset($file)
    {
        return storage_asset($file, 'json', 'favicons');
    }
}

if(!function_exists('banner_img_asset'))
{
    /**
     * @param $img_file
     * @param string $extension
     * @return string
     */
    function banner_img_asset($img_file, $extension = Constants::DEFAULT_IMAGE_EXTENSION)
    {
        return storage_asset($img_file, $extension, 'banners');
    }
}

if(!function_exists('video_asset'))
{
    /**
     * @param $video_file
     * @param $extension
     * @return string
     */
    function video_asset($video_file, $extension = Constants::DEFAULT_VIDEO_EXTENSION)
    {
        return storage_asset($video_file, $extension, 'videos');
    }
}

// ***********************************************************************************

if(!function_exists('file_asset'))
{
    /**
     * Dynamic product image asset file path
     *
     * @param $file
     * @param $extension
     * @param $path
     * @return string
     */
    function file_asset($file, $extension, $path)
    {
        return asset("$path/$file.$extension");
    }
}

if(!function_exists('storage_asset'))
{
    /**
     * Dynamic image asset file path
     *
     * @param $file
     * @param $extension
     * @param $path
     * @return string
     */
    function storage_asset($file, $extension, $path)
    {
        return asset("storage/$path/$file.$extension");
    }
}