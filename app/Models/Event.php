<?php

namespace App\Models;

use App\Traits\DateTrait;
use App\Traits\LocaleDescriptionTrait;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * @property mixed name
 * @property mixed slug
 * @property mixed fr_description
 * @property mixed creator
 * @property mixed en_description
 * @property mixed image
 * @property mixed image_src
 * @property mixed image_extension
 */
class Event extends Model
{
    use SoftDeletes, DateTrait, LocaleDescriptionTrait;

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $guarded = ['slug', 'id', 'creator_id'];

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'fr_description', 'en_description',
        'image_extension', 'image',
    ];

    /**
     * Testimonial image src
     *
     * @return string
     */
    public function getImageSrcAttribute() {
        return picture_img_asset($this->image, $this->image_extension);
    }
}