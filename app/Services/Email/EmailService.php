<?php

namespace App\Services\Email;

use App\Mail\ResetPasswordMail;
use Illuminate\Support\Facades\Mail;

class EmailService implements \EmailServiceInterface
{
    public function sendEmail(string $to, string $subject, string $body): bool
    {
        try {
            Mail::to($to)->send(new ResetPasswordMail($subject, $body));
            return true;
        } catch (\Exception $e) {
            return false;
        }
    }
}
