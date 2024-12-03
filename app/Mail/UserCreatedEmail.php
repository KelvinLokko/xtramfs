<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class UserCreatedEmail extends Mailable
{
    use Queueable, SerializesModels;

    public $user, $password, $token;

    public function __construct($user, $password, $token)
    {
        $this->user = $user;
        $this->password = $password;
        $this->token = $token;
    }

    public function build()
    {
        return $this->subject('Welcome to Our Application')->view('emails.user-created');
    }
}