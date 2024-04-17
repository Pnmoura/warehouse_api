<?php

namespace App\Providers;

use App\Contracts\AuthServiceInterface;
use App\Contracts\CreateUserServiceInterface;
use App\Services\AuthService;
use App\Services\CreateUserService;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->bind(CreateUserServiceInterface::class, CreateUserService::class);
        $this->app->bind(AuthServiceInterface::class, AuthService::class);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
