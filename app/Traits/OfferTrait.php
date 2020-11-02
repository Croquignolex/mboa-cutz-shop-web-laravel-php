<?php

namespace App\Traits;

trait OfferTrait
{
    /**
     * Model duration tag
     *
     * @return bool
     */
    public function getIsANewAttribute()
    {
        return ($this->is_new) || ($this->created_at >= now()->subDays(7));
    }

    /**
     * Model discount tag
     *
     * @return bool
     */
    public function getIsADiscountAttribute()
    {
        return $this->discount !== 0;
    }
}