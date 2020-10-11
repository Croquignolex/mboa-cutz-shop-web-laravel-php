<?php

namespace App\Traits;

use Illuminate\Support\Facades\App;

trait DateTrait
{
    /**
     * Creation date
     *
     * @return mixed
     */
    public function getCreationDateAttribute()
    {
        $date =  $this->created_at;
        $date->setTimezone(session('timezone'));

        if(App::getLocale() === config('app.secondary_locale')) return $date->format('m/d/Y H:i A');
        return $date->format('d/m/Y H:i');
    }

    /**
     * Last update date
     *
     * @return mixed
     */
    public function getLastUpdateDateAttribute()
    {
        $date =  $this->updated_at;
        $date->setTimezone(session('timezone'));

        if(App::getLocale() === config('app.secondary_locale')) return $date->format('m/d/Y H:i A');
        return $date->format('d/m/Y H:i');
    }

    /**
     * Short creation date
     *
     * @return mixed
     */
    public function getShortCreationDateAttribute()
    {
        $date =  $this->created_at;
        $date->setTimezone(session('timezone'));

        if(App::getLocale() === config('app.secondary_locale')) return $date->format('M d, Y');
        return $date->format('d M, Y');
    }

    /**
     * Short last update date
     *
     * @return mixed
     */
    public function getShortLastUpdateDateAttribute()
    {
        $date =  $this->updated_at;
        $date->setTimezone(session('timezone'));

        if(App::getLocale() === config('app.secondary_locale')) return $date->format('m/d/Y H:i A');
        return $date->format('d/m/Y H:i');
    }
}