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
        return ($user !== null && $user->role->type === UserRole::USER) ? $user : null;
    }
}