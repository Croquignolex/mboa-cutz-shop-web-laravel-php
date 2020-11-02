<?php

namespace App\Models;

use App\Traits\DateTrait;
use App\Traits\OfferTrait;
use App\Traits\SlugRouteTrait;
use App\Traits\LocaleNameTrait;
use App\Traits\LocaleDescriptionTrait;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

/**
 * @property mixed name
 * @property mixed slug
 * @property mixed fr_description
 * @property mixed creator
 * @property mixed en_description
 * @property mixed image
 * @property mixed image_src
 * @property mixed image_extension
 * @property mixed en_name
 * @property mixed fr_name
 * @property mixed is_new
 * @property mixed created_at
 * @property mixed discount
 * @property mixed is_a_discount
 * @property mixed stock
 * @property mixed price
 */
class Product extends Model
{
    use SoftDeletes, SlugRouteTrait, DateTrait, OfferTrait, LocaleDescriptionTrait, LocaleNameTrait;

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
        'fr_name', 'en_name', 'fr_description', 'en_description',
        'is_featured', 'is_new', 'is_most_sold',
        'price', 'discount', 'stock', 'rate',
        'image', 'extension',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'is_new' => 'boolean',
        'is_featured' => 'boolean',
        'is_most_sold' => 'boolean',
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
    public function reviews()
    {
        return $this->hasMany('App\Models\ProductReview');
    }

    /**
     * Product image src
     *
     * @return string
     */
    public function getImageSrcAttribute() {
        return product_img_asset($this->image, $this->image_extension);
    }

    /**
     * @return mixed
     */
    public function getInStockAttribute()
    {
        return $this->stock > 0;
    }

    /**
     * @return float|int
     */
    public function getAmountAttribute()
    {
        if($this->is_a_discount) {
            return $this->price * (1 - ($this->discount / 100));
        }
        return $this->price;
    }
}