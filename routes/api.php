<?php

use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Auth\ResetPasswordController;
use App\Http\Controllers\User\UserController;
use Illuminate\Support\Facades\Route;


Route::post('/user/register', [UserController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);

Route::post('/reset/password', [ResetPasswordController::class, 'reset']);
