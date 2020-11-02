<?php

namespace App\Traits;

use Illuminate\Database\Eloquent\Relations\BelongsTo;

trait CreatorTrait
{
    /**
     * User role
     *
     * @return BelongsTo
     */
    public function creator()
    {
        return $this->belongsTo('App\Models\User', 'creator_id');
    }

    /**
     * User save creator name
     *
     * @return mixed
     */
    public function getCreatorNameAttribute()
    {
        return $this->creator->full_name ?? '';
    }
}