<?php

namespace App\Traits;

use Illuminate\Support\Str;

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

    /**
     * Slug mutator
     *
     * @param $value
     */
    public function setSlugAttribute($value)
    {
        $slug = Str::slug($value);
        if (static::withTrashed()->whereSlug($slug)->exists()) {
            $slug = $this->incrementSlug($slug);
        }
        // Mutator
        $this->attributes['slug'] = $slug;
    }

    /**
     * Increment slug with data present in database
     *
     * @param $slug
     * @return string
     */
    public function incrementSlug($slug)
    {
        $original = $slug;
        $count = 2;

        while (static::withTrashed()->whereSlug($slug)->exists()) {
            $slug = "{$original}-" . $count++;
        }

        return $slug;
    }
}