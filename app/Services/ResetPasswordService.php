<?php

namespace App\Services;

use App\Models\User;

class ResetPasswordService
{
    protected $emailService;

    public function __construct(\EmailServiceInterface $emailService)
    {
        $this->emailService = $emailService;
    }

    public function sendResetLink(User $user, string $resetLink): bool
    {
        $subject = 'Reset Your Password';
        $body = "Click the link below to reset your password";

        return $this->emailService->sendEmail($user->email, $subject, $body);
    }
}
