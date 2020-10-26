<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property mixed token
 */
class PasswordReset extends Model
{
    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $guarded = ['id'];

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['email', 'token'];

    /**
     * @return mixed
     */
    public function getResetLinkAttribute()
    {
        return locale_route('password.reset', [
            'token' => $this->token
        ]);
    }
}