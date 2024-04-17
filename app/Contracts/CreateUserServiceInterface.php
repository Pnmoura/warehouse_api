<?php

namespace App\Contracts;

use App\Models\User;

interface CreateUserServiceInterface
{
    public function create(array $userData): User;
}
