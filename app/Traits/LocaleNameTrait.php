<?php

namespace App\Traits;

use Illuminate\Support\Facades\App;

trait LocaleNameTrait
{
    /**
     * @return mixed
     */
    public function getFormatNameAttribute()
    {
        if(App::getLocale() === config('app.locale')) if (isset($this->fr_name)) {
            return ucfirst($this->fr_name);
        }
        else if (App::getLocale() === config('app.secondary_locale')) if (isset($this->en_name)) {
            return ucfirst($this->en_name);
        }

        return "";
    }
}