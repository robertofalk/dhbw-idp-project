<?php

namespace App\Services;

use App\Models\User;
use Exception;

class FileUserStorage implements UserStorageInterface
{
    private string $filePath;

    public function __construct()
    {
        $this->filePath = WRITEPATH . 'users.json';

        if (!file_exists($this->filePath)) {
            file_put_contents($this->filePath, '[]');
        }
    }

    public function getAll(): array
    {
        $users = [];
        $data = json_decode(file_get_contents($this->filePath), true) ?? [];

        foreach ($data as $item) {
            $users[] = new User(
                $item['username'],
                $item['password'],
                $item['role'],
                $item['salt'],
                $item['id']
            );
        }

        return $users;
    }

    public function get(?int $id = null, ?string $username = null, ?string $password = null): User
    {
        $data = json_decode(file_get_contents($this->filePath), true) ?? [];

        foreach ($data as $item) {
            if (($id !== null && $item['id'] == $id) ||
                ($username !== null && $item['username'] == $username) ||
                ($password !== null && $item['password'] == $password)) {

                return new User(
                    $item['username'],
                    $item['password'],
                    $item['role'],
                    $item['salt'],
                    $item['id']
                );
            }
        }

        throw new Exception('User not found');
    }

    public function save(User $user): User
    {
        $data = json_decode(file_get_contents($this->filePath), true) ?? [];

        $newId = empty($data) ? 1 : max(array_column($data, 'id')) + 1;
        $user->setId($newId);

        $data[] = [
            'id' => $user->getId(),
            'username' => $user->getUsername(),
            'password' => $user->getPassword(),
            'role' => $user->getRole(),
            'salt' => $user->getSalt()
        ];

        file_put_contents($this->filePath, json_encode($data));

        return $user;
    }

    public function update(int $id, User $user): void
    {
        $data = json_decode(file_get_contents($this->filePath), true) ?? [];

        foreach ($data as $key => $item) {
            if ($item['id'] == $id) {
                $data[$key] = [
                    'id' => $user->getId(),
                    'username' => $user->getUsername(),
                    'password' => $user->getPassword(),
                    'role' => $user->getRole(),
                    'salt' => $user->getSalt()
                ];
                file_put_contents($this->filePath, json_encode($data));
                return;
            }
        }

        throw new Exception('User not found');
    }

    public function delete(int $id): void
    {
        $data = json_decode(file_get_contents($this->filePath), true) ?? [];

        foreach ($data as $key => $item) {
            if ($item['id'] == $id) {
                unset($data[$key]);
                $data = array_values($data); // Reindexieren
                file_put_contents($this->filePath, json_encode($data));
                return;
            }
        }

        throw new Exception('User not found');
    }
}