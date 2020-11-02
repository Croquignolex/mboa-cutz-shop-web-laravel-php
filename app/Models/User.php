<?php

namespace App\Models;

use App\Traits\DateTrait;
use App\Traits\CreatorTrait;
use App\Traits\SlugRouteTrait;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticate;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * @property mixed id
 * @property mixed role
 * @property mixed email
 * @property mixed avatar
 * @property mixed phone
 * @property mixed post_code
 * @property mixed city
 * @property mixed country
 * @property mixed profession
 * @property mixed address
 * @property mixed description
 * @property mixed full_name
 * @property mixed last_name
 * @property mixed first_name
 * @property mixed avatar_src
 * @property mixed password
 * @property mixed format_full_name
 * @property mixed format_last_name
 * @property mixed avatar_extension
 * @property mixed format_first_name
 * @property mixed slug
 * @property mixed logs
 * @property mixed creator
 * @property mixed can_show
 * @property mixed can_edit
 * @property mixed can_delete
 * @property mixed can_restore
 * @property mixed can_grant_super_admin_user
 * @property mixed can_grant_admin_user
 */
class User extends Authenticate
{
    use SoftDeletes, SlugRouteTrait, DateTrait, CreatorTrait;

    /**
     * The attributes that aren't mass assignable.
     *
     * @var array
     */
    protected $guarded = ['slug', 'id', 'is_confirmed', 'role_id', 'creator_id'];

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'first_name', 'last_name', 'phone', 'description',
        'post_code', 'city', 'country', 'profession',
        'address', 'email', 'avatar',
        'avatar_extension',
        'password'
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = ['is_confirmed' => 'boolean'];

    /**
     * User role
     *
     * @return BelongsTo
     */
    public function role()
    {
        return $this->belongsTo('App\Models\Role');
    }

    /**
     * Slug mutator
     *
     * @param $value
     */
    public function setPasswordAttribute($value)
    {
        $this->attributes['password'] = Hash::make($value);
    }

    /**
     * Get the user's full name.
     *
     * @return string
     */
    public function getFullNameAttribute()
    {
        return "{$this->format_first_name} {$this->format_last_name}";
    }

    /**
     * User formatted first name
     *
     * @return mixed
     */
    public function getFormatFirstNameAttribute()
    {
        return ucfirst(mb_strtolower($this->first_name));
    }

    /**
     * User formatted last name
     *
     * @return mixed
     */
    public function getFormatLastNameAttribute()
    {
        return mb_strtoupper($this->last_name);
    }

    /**
     * User avatar image src
     *
     * @return string
     */
    public function getAvatarSrcAttribute() {
        return user_img_asset($this->avatar, $this->avatar_extension);
    }
}