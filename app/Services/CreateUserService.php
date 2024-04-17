<?php

namespace App\Services;

use App\Contracts\CreateUserServiceInterface;
use App\Models\User;

class CreateUserService implements CreateUserServiceInterface
{
    public function create(array $data): User
    {
        return User::create($data);
    }

}
