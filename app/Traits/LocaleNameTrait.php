<?php

namespace App\Traits;

use Illuminate\Support\Facades\App;

trait LocaleNameTrait
{
    /**
     * Get name form the correct locale
     *
     * @return mixed
     */
    public function getNameAttribute()
    {
        if(App::getLocale() === config('app.secondary_locale')) return $this->en_name;
        return ucfirst($this->fr_name);
    }
}