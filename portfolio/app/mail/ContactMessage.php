<?php
namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactMessage extends Mailable
{
    use Queueable, SerializesModels;

    public $payload;

    public function __construct($payload)
    {
        $this->payload = $payload;
    }

    public function build()
    {
        return $this->subject('New Contact from Portfolio')
                    ->markdown('emails.contact')
                    ->with('payload', $this->payload);
    }
}
