<?php

namespace App\Mail;

use App\Models\User;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use App\Models\EmailConfirmation;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class UserRegisterMail extends Mailable implements ShouldQueue
{
    use Queueable, SerializesModels;

    public $user;
    public $receiver;
    public $emailConfirmation;

    /**
     * ContactFormMail constructor.
     *
     * @param User $user
     * @param EmailConfirmation $emailConfirmation
     */
    public function __construct(User $user, EmailConfirmation $emailConfirmation)
    {
        $this->user = $user;
        $this->receiver = $user->email;
        $this->emailConfirmation = $emailConfirmation;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject(__('auth.signup'))
            ->view('mails.user-register.normal')
            ->text('mails.user-register.plain');
    }
}