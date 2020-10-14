<?php

namespace App\Mail;

use App\Models\Contact;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class ContactFormMail extends Mailable implements ShouldQueue
{
    use Queueable, SerializesModels;
    public $contact;
    public $sender;

    /**
     * ContactFormMail constructor.
     *
     * @param Contact $contact
     * @param String $sender
     */
    public function __construct(Contact $contact, String $sender)
    {
        $this->sender = $sender;
        $this->contact = $contact;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('Formulaire de contact')
            ->view('mails.contact.normal')
            ->text('mails.contact.plain');
    }
}