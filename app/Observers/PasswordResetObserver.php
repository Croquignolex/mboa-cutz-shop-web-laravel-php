<?php

namespace App\Observers;

use Illuminate\Support\Str;
use App\Models\PasswordReset;

class PasswordResetObserver
{
    /**
     * Handle the category "created" event.
     *
     * @param PasswordReset $passwordReset
     * @return void
     */
    public function creating(PasswordReset $passwordReset)
    {
        $passwordReset->token = Str::random(64);
    }
}
