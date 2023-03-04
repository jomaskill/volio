<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class NewPerson extends Mailable
{
    use Queueable, SerializesModels;

    public function __construct(public string $content, public string $name)
    {
        //
    }

    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'New Person',
        );
    }

    public function content(): Content
    {
        return new Content(
            markdown: 'emails.person.new',
            with: [
                'content' => $this->content,
                'name'    => $this->name,
            ]
        );
    }
}
