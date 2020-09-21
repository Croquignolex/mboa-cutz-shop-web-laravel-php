<?php

namespace App\Traits;

use Illuminate\Support\Str;

trait LocaleSlugSaveTrait
{
    /**
     * Boot functions
     */
    protected static function bootLocaleSlugSaveTrait()
    {
        static::creating(function ($model) {
            $model->slug = Str::slug($model->en_name);
        });

        static::updating(function ($model) {
            $model->slug = Str::slug($model->en_name);
        });
    }
}