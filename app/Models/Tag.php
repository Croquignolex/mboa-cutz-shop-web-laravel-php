<?php

namespace App\Models;

use App\Traits\DateTrait;
use App\Traits\SlugRouteTrait;
use App\Traits\LocaleNameTrait;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

/**
 * @property mixed fr_name
 * @property mixed slug
 * @property mixed products
 * @property mixed services
 * @property mixed creator
 * @property mixed can_delete
 * @property mixed id
 * @property mixed articles
 */
class Tag extends Model
{
    use SoftDeletes, SlugRouteTrait, DateTrait, LocaleNameTrait;

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
    protected $fillable = ['fr_name', 'en_name', 'description'];

    /**
     * @return BelongsToMany|HasMany
     */
    public function products()
    {
        return $this->belongsToMany('App\Models\Product');
    }

    /**
     * @return BelongsToMany|HasMany
     */
    public function services()
    {
        return $this->belongsToMany('App\Models\Service');
    }

    /**
     * @return BelongsToMany|HasMany
     */
    public function articles()
    {
        return $this->belongsToMany('App\Models\Article');
    }
}