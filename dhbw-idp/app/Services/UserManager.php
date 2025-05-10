<?php

namespace App\Services;

use App\Models\User;
use Exception;

class UserManager
{
    private UserStorageInterface $storage;

    public function get(string $username, string $password): User
    {
        // Placehoder code
        $user = new User(username: 'temp', password: 'temp', role: 'temp', salt: 'temp', id: 1);
        return $user;
    }

    public function create(string $username, string $password, string $role): User
    {   
        // Placehoder code
        $user = new User(username: 'temp', password: 'temp', role: 'temp', salt: 'temp');
        return $user;
    }

    public function getAll(): array
    {
        return [];
    }

    public function update(int $id, ?string $username = null, ?string $password = null, ?string $role = null): void
    {

    }
    public function delete(int $id): void
    {

    }
}
