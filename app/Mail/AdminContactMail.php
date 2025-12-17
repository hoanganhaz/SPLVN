<?php

namespace App\Mail;

use App\Models\Contract;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class AdminContactMail extends Mailable
{
    use Queueable, SerializesModels;

    public function __construct(
        public Contract $contact
    ) {}

    public function envelope(): Envelope
    {
        return new Envelope(
            subject: '[Liên hệ mới] ' . $this->contact->name,
        );
    }

    public function content(): Content
    {
        return new Content(
            view: 'client.email.contracttAdmin',
        );
    }

    public function attachments(): array
    {
        return [];
    }
}
