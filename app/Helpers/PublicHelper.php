<?php

use App\Enums\Constants;

if(!function_exists('favicon_file_asset'))
{
    /**
     * @param $file
     * @return string
     */
    function favicon_file_asset($file)
    {
        $extension = 'json';
        $public_folder = config('app.folder');
        return "$public_folder/assets/img/favicons/$file.$extension";
    }
}


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
        $extension = 'css';
        $public_folder = config('app.folder');
        return "$public_folder/assets/$extension/$css_file.$extension";
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
        $extension = 'js';
        $public_folder = config('app.folder');
        return "$public_folder/assets/$extension/$js_file.$extension";
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
        $public_folder = config('app.folder');
        return "$public_folder/assets/img/$img_file.$extension";
    }
}

if(!function_exists('user_img_asset'))
{
    /**
     * Dynamic user image asset file path
     *
     * @param $img_file
     * @param $extension
     * @return string
     */
    function user_img_asset($img_file, $extension = Constants::DEFAULT_IMAGE_EXTENSION)
    {
        $path = Constants::USER_DEFAULT_IMAGE_PATH;
        $public_folder = config('app.folder');
        return "$public_folder/assets/img/$path/$img_file.$extension";
    }
}

if(!function_exists('product_img_asset'))
{
    /**
     * Dynamic product image asset file path
     *
     * @param $img_file
     * @param $extension
     * @return string
     */
    function product_img_asset($img_file, $extension = Constants::DEFAULT_IMAGE_EXTENSION)
    {
        $public_folder = config('app.folder');
        $path = Constants::PRODUCT_DEFAULT_IMAGE_PATH;
        return "$public_folder/assets/img/$path/$img_file.$extension";
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
        $public_folder = config('app.folder');
        return "$public_folder/assets/img/favicons/$img_file.$extension";
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
        $public_folder = config('app.folder');
        return "$public_folder/assets/img/banners/$img_file.$extension";
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
        $public_folder = config('app.folder');
        return "$public_folder/assets/videos/$video_file.$extension";
    }
}
