<?php

namespace App\Enums;

use ReflectionClass;
use ReflectionException;

class UserRole
{
    const USER = 'user';
    const ADMIN = 'admin';
    const SUPER_ADMIN = 'super admin';

    /**
     * Returns the list of all enum variants
     * @return array
     * @throws ReflectionException
     */
    static public function getList() {
        $className = get_called_class();

        $reflection = new ReflectionClass($className);

        return $reflection->getConstants();
    }
}