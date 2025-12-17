<?php

namespace App\Mail;

use App\Models\Contract;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class UserContactMail extends Mailable
{
  use Queueable, SerializesModels;

    public function __construct(
        public Contract $contact
    ) {}

    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Cảm ơn bạn đã liên hệ với chúng tôi',
        );
    }

    public function content(): Content
    {
        return new Content(
            view: 'client.email.contactt',
        );
    }

    public function attachments(): array
    {
        return [];
    }
}
