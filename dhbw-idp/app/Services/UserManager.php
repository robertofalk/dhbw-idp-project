<?php

namespace App\Services;

use App\Models\User;
use Exception;

class UserManager
{
    private UserStorageInterface $storage;

    public function get(string $username, string $password): User
    {
        throw new Exception('Not implemented');
    }
}