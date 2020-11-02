<?php

namespace App\Models;

use App\Enums\UserRole;
use App\Traits\SlugRouteTrait;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * @property mixed type
 * @property mixed name
 * @property mixed slug
 */
class Role extends Model
{
    use SoftDeletes, SlugRouteTrait;

    /**
     * The attributes that aren't mass assignable.
     *
     * @var array
     */
    protected $guarded = ['slug', 'id'];

    /**
     * @return HasMany
     */
    public function users()
    {
        return $this->hasMany('App\Models\User');
    }

    /**
     * @return mixed
     */
    public function getNameAttribute()
    {
        if($this->type === UserRole::ADMIN) return "Administrateur";
        if($this->type === UserRole::SUPER_ADMIN) return "Super admin";
        else return "Utilisateur";
    }

    /**
     * @return mixed
     */
    public function getBadgeColorAttribute()
    {
        if($this->type === UserRole::ADMIN) return "success";
        if($this->type === UserRole::SUPER_ADMIN) return "danger";
        else return "primary";
    }
}