<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property mixed token
 * @property mixed email
 */
class EmailConfirmation extends Model
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
    public function getConfirmationLinkAttribute()
    {
        return locale_route('account.confirmation', [
            'email' => $this->email,
            'token' => $this->token,
        ]);
    }
}