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