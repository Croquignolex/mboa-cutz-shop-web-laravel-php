<?php

namespace App\Traits;

trait SlugRouteTrait
{
    /**
     * Replace id to slug
     *
     * @return mixed
     */
    public function getRouteKeyName()
    {
        return 'slug';
    }
}