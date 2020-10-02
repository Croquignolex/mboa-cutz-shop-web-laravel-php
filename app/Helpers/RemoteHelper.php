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
        $path = ImagePath::USER_DEFAULT_IMAGE_PATH;
        return "assets/img/$path/$img_file.$extension";
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
        $path = ImagePath::PRODUCT_DEFAULT_IMAGE_PATH;
        return "assets/img/$path/$img_file.$extension";
    }
}

if(!function_exists('testimonial_img_path'))
{
    /**
     * Dynamic product image asset file path
     *
     * @param $img_file
     * @param $extension
     * @return string
     */
    function testimonial_img_path($img_file, $extension = Constants::DEFAULT_IMAGE_EXTENSION)
    {
        $path = ImagePath::TESTIMONIAL_DEFAULT_IMAGE_PATH;
        return "assets/img/$path/$img_file.$extension";
    }
}

if(!function_exists('testimonial_img_asset'))
{
    /**
     * Dynamic product image asset file path
     *
     * @param $img_file
     * @param $extension
     * @return string
     */
    function testimonial_img_asset($img_file, $extension = Constants::DEFAULT_IMAGE_EXTENSION)
    {
        $admin_url = config('company.admin');
        $public_folder = config('app.folder') . "/";
        $path = ImagePath::TESTIMONIAL_DEFAULT_IMAGE_PATH;
        return "$admin_url{$public_folder}assets/img/$path/$img_file.$extension";
    }
}