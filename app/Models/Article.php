<?php

namespace App\Models;

use App\Traits\DateTrait;
use App\Traits\SlugRouteTrait;
use App\Traits\LocaleNameTrait;
use App\Traits\LocaleDescriptionTrait;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

/**
 * @property mixed image
 * @property mixed is_new
 * @property mixed created_at
 * @property mixed image_extension
 * @property mixed creator
 * @property mixed fr_name
 * @property mixed en_name
 * @property mixed slug
 * @property mixed tags
 * @property mixed category
 * @property mixed image_src
 * @property mixed can_delete
 */
class Article extends Model
{
    use SoftDeletes, SlugRouteTrait, DateTrait, LocaleNameTrait, LocaleDescriptionTrait;

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $guarded = ['slug', 'id', 'creator_id', 'category_id'];

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'fr_name', 'en_name', 'fr_description', 'en_description',
        'is_featured', 'is_new',
        'image', 'extension'
    ];

    /**
     * @return BelongsToMany|HasMany
     */
    public function tags()
    {
        return $this->belongsToMany('App\Models\Tag');
    }

    /**
     * @return BelongsTo
     */
    public function category()
    {
        return $this->belongsTo('App\Models\Category');
    }

    /**
     * @return HasMany
     */
    public function comments()
    {
        return $this->hasMany('App\Models\ArticleComment');
    }

    /**
     * Article duration tag
     *
     * @return bool
     */
    public function getIsANewAttribute()
    {
        return ($this->is_new) || ($this->created_at >= now()->subDays(7));
    }

    /**
     * Article image src
     *
     * @return string
     */
    public function getImageSrcAttribute() {
        return article_img_asset($this->image, $this->image_extension);
    }
}