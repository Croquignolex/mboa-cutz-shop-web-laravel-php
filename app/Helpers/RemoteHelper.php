<?php

use App\Enums\Constants;
use App\Enums\ImagePath;

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
        return file_asset($img_file, $extension, ImagePath::USER_DEFAULT_IMAGE_PATH);
    }
}

if(!function_exists('product_img_asset'))
{
    /**
     * Dynamic remote product product image asset file path
     *
     * @param $img_file
     * @param $extension
     * @return string
     */
    function product_img_asset($img_file, $extension = Constants::DEFAULT_IMAGE_EXTENSION)
    {
        return file_asset($img_file, $extension, ImagePath::PRODUCT_DEFAULT_IMAGE_PATH);
    }
}

if(!function_exists('testimonial_img_asset'))
{
    /**
     * Dynamic remote testimonial product image asset file path
     *
     * @param $img_file
     * @param $extension
     * @return string
     */
    function testimonial_img_asset($img_file, $extension = Constants::DEFAULT_IMAGE_EXTENSION)
    {
        return file_asset($img_file, $extension, ImagePath::TESTIMONIAL_DEFAULT_IMAGE_PATH);
    }
}

if(!function_exists('file_asset'))
{
    /**
     * Dynamic remote image asset file path
     *
     * @param $img_file
     * @param $extension
     * @param $path
     * @return string
     */
    function file_asset($img_file, $extension, $path)
    {
        $admin_url = config('company.admin');
        $public_folder = config('app.folder') . "/";
        return "$admin_url{$public_folder}assets/img/$path/$img_file.$extension";
    }
}