<?php

namespace App\Observers;

use Illuminate\Support\Str;
use App\Models\EmailConfirmation;

class EmailConfirmationObserver
{
    /**
     * Handle the category "created" event.
     *
     * @param EmailConfirmation $emailConfirmation
     * @return void
     */
    public function creating(EmailConfirmation $emailConfirmation)
    {
        $emailConfirmation->token = Str::random(64);
    }
}
