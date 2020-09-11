<?php

if(!function_exists('css_asset'))
{
    /**
     * @param $css_file
     * @return string
     */
    function css_asset($css_file)
    {
        return config('app.folder') . '/assets/css/' . $css_file . '.css';
    }
}

if(!function_exists('js_asset'))
{
    /**
     * @param $js_file
     * @return string
     */
    function js_asset($js_file)
    {
        return  config('app.folder') . '/assets/js/' . $js_file . '.js';
    }
}

if(!function_exists('img_asset'))
{
    /**
     * @param $img_file
     * @param $extension
     * @return string
     */
    function img_asset($img_file, $extension = 'png')
    {
        return config('app.folder') . '/assets/img/' . $img_file . '.' . $extension;
    }
}

if(!function_exists('about_img_asset'))
{
    /**
     * @param $img_file
     * @param $extension
     * @return string
     */
    function about_img_asset($img_file, $extension = 'jpg')
    {
        return config('app.folder') . '/assets/img/about/' . $img_file . '.' . $extension;
    }
}

if(!function_exists('favicon_img_asset'))
{
    /**
     * @param $favicon
     * @return string
     */
    function favicon_img_asset($favicon)
    {
        return config('app.folder') . '/assets/img/favicons/' . $favicon . '.png';
    }
}

if(!function_exists('favicon_file_asset'))
{
    /**
     * @param $file
     * @param string $extension
     * @return string
     */
    function favicon_file_asset($file, $extension = 'json')
    {
        return config('app.folder') . '/assets/img/favicons/' . $file . '.' . $extension;
    }
}

if(!function_exists('flag_img_asset'))
{
    /**
     * @param $flag
     * @return string
     */
    function flag_img_asset($flag)
    {
        return config('app.folder') . '/assets/img/flags/' . $flag . '.png';
    }
}

if(!function_exists('banner_img_asset'))
{
    /**
     * @param $banner
     * @return string
     */
    function banner_img_asset($banner)
    {
        return config('app.folder') . '/assets/img/banners/' . $banner . '.jpg';
    }
}

if(!function_exists('video_asset'))
{
    /**
     * @param $video_file
     * @param $extension
     * @return string
     */
    function video_asset($video_file, $extension = 'mp4')
    {
        return config('app.folder') . '/assets/videos/' . $video_file . '.' . $extension;
    }
}
