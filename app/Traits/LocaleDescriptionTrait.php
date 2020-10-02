<?php

namespace App\Traits;

use Illuminate\Support\Facades\App;

trait LocaleDescriptionTrait
{
    /**
     * @return mixed
     */
    public function getDescriptionAttribute()
    {
        if(App::getLocale() === config('app.secondary_locale')) return $this->en_description;
        return $this->fr_description;
    }
}