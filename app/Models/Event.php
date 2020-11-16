<?php

namespace App\Models;

use App\Traits\DateTrait;
use App\Traits\LocaleNameTrait;
use Illuminate\Support\Facades\App;
use App\Traits\LocaleDescriptionTrait;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * @property mixed name
 * @property mixed description
 * @property mixed localisation
 * @property mixed slug
 * @property mixed fr_description
 * @property mixed creator
 * @property mixed en_description
 * @property mixed image
 * @property mixed image_src
 * @property mixed image_extension
 * @property mixed fr_localisation
 * @property mixed en_localisation
 * @property mixed started_at
 * @property mixed ended_at
 */
class Event extends Model
{
    use SoftDeletes, DateTrait, LocaleDescriptionTrait, LocaleNameTrait;

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $guarded = ['slug', 'id', 'creator_id'];

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'fr_name', 'en_name', 'fr_description', 'en_description',
        'fr_localisation', 'en_localisation', 'map',
        'started_at', 'ended_at',
        'image', 'extension',
    ];

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = ['started_at', 'ended_at'];

    /**
     * Event image src
     *
     * @return string
     */
    public function getImageSrcAttribute() {
        return event_img_asset($this->image, $this->image_extension);
    }

    /**
     * Get description form the correct locale
     *
     * @return mixed
     */
    public function getLocalisationAttribute()
    {
        if(App::getLocale() === config('app.secondary_locale')) return $this->en_localisation;
        return $this->fr_localisation;
    }

    /**
     * Start date
     *
     * @return mixed
     */
    public function getStartDateAttribute()
    {
        $date =  $this->started_at;
        $date->setTimezone(session('timezone'));

        if(App::getLocale() === config('app.secondary_locale')) return $date->format('M d, Y at H:i A');
        return $date->format('d M, Y à H:i');
    }

    /**
     * End date
     *
     * @return mixed
     */
    public function getEndDateAttribute()
    {
        $date =  $this->ended_at;
        $date->setTimezone(session('timezone'));

        if(App::getLocale() === config('app.secondary_locale')) return $date->format('M d, Y at H:i A');
        return $date->format('d M, Y à H:i');
    }
}