<?php

namespace App\Http\Controllers\User;

use App\Contracts\CreateUserServiceInterface;
use App\Http\Controllers\Controller;
use App\Http\Requests\User\UserRegisterRequest;
use http\Client\Request;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    protected $createUserService;

    public function __construct(CreateUserServiceInterface $createUserService)
    {
        $this->createUserService = $createUserService;
    }


    public function register(UserRegisterRequest $request): JsonResponse
    {
        $userData = $request->validated();
        $user = $this->createUserService->create($userData);

        return response()->json(['message' => 'Usuario registrado com sucesso', 'user' => $user]);
    }

    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            $user = Auth::user();
            $token = $user->createToken('authToken')->plainTextToken;

            return response()->json(['token' => $token], 200);
        } else {
            return response()->json(['error' => 'Unauthorized'], 401);
        }

    }
}
