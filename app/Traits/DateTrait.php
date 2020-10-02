<?php

namespace App\Traits;

trait DateTrait
{
    /**
     * Creation date
     *
     * @return mixed
     */
    public function getCreationDateAttribute()
    {
        // TODO: write back this function for local
        $date =  $this->created_at;
        $date->setTimezone(session('timezone'));
        return $date->format('d/m/Y H:i');
    }

    /**
     * Last update date
     *
     * @return mixed
     */
    public function getLastUpdateDateAttribute()
    {
        // TODO: write back this function for local
        $date =  $this->updated_at;
        $date->setTimezone(session('timezone'));
        return $date->format('d/m/Y H:i');
    }
}