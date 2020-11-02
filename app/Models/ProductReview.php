<?php

namespace App\Models;

use App\Traits\DateTrait;
use App\Traits\CreatorTrait;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * @property mixed id
 * @property mixed can_delete
 */
class ProductReview extends Model
{
    use SoftDeletes, DateTrait, CreatorTrait;

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $guarded = ['id', 'creator_id', 'product_id'];

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['description', 'rate'];

    /**
     * @return BelongsTo
     */
    public function product()
    {
        return $this->belongsTo('App\Models\Product');
    }
}