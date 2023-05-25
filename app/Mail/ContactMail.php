<?php

namespace App\Mail;

use App\Models\User;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Address;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Queue\SerializesModels;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Contracts\Queue\ShouldQueue;

class ContactMail extends Mailable
{
    use Queueable, SerializesModels;

    public $user;
    public $name; 
    public $email; 
    public $messaggio;

    public function __construct(User $user, $name, $email, $message)
    {
        $this->user = $user;
        $this->name = $name;
        $this->email = $email;
        $this->messaggio = $message;

    }

    public function build()
    {
        $user = $this->user ;
        $name = $this->name;
        $email = $this->email;
        $messaggio = $this->messaggio;

        return $this->from('presto.it@noreply.com')->view('mail.contact_mail', compact('user','name', 'email', 'messaggio'));

    }

    // /**
    //  * Get the message envelope.
    //  */
    // public function envelope(): Envelope
    // {
    //     return new Envelope(
    //         from: new Address('no-reply@email.com', 'gold-travel'),
    //         subject: 'Grazie per averci contattato',
    //     );
    // }

    // /**
    //  * Get the message content definition.
    //  */
    // public function content(): Content
    // {
    //     return new Content(
    //         view: 'mail.contact_mail',
    //     );
    // }

    // /**
    //  * Get the attachments for the message.
    //  *
    //  * @return array<int, \Illuminate\Mail\Mailables\Attachment>
    //  */
    // public function attachments(): array
    // {
    //     return [];
    // }
}
