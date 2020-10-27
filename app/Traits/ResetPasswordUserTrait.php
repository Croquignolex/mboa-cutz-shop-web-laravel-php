<?php

namespace App\Traits;

use App\Models\User;
use App\Enums\UserRole;

trait ResetPasswordUserTrait
{
    /**
     * retrieve user instance
     *
     * @param array $credentials
     * @return null
     */
    protected function getUser(array $credentials)
    {
        $user = User::where(['email' => $credentials['email']])->first();
        return ($user->role->name === UserRole::USER) ? $user : null;
    }
}