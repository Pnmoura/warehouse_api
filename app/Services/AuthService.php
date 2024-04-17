<?php

namespace App\Services;

use App\Contracts\AuthServiceInterface;
use App\Models\User;

class AuthService implements AuthServiceInterface
{

    public function login(array $credentials): ?string
    {
        $user = User::where('email', $credentials['email'])->first();

        if ($user && $credentials['password'] === $user->password) {
            $token = $user->createToken('MyAppToken')->plainTextToken;

            return $token;
        }

        return null;
    }

    public function authenticate(array $credentials)
    {
        // TODO: Implement authenticate() method.
    }

    public function validateToken(string $token)
    {
        // TODO: Implement validateToken() method.
    }

    public function getUserInfo(string $token)
    {
        // TODO: Implement getUserInfo() method.
    }

    public function invalidateToken(string $token)
    {
        // TODO: Implement invalidateToken() method.
    }
}
