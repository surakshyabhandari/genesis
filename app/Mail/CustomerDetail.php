<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;
use Illuminate\Mail\Mailables\Headers;
use App\Models\Group;

class CustomerDetail extends Mailable
{
    use Queueable, SerializesModels;

    public $group;
    /**
     * Create a new message instance.
     */
    public function __construct(Group $group)
    {
        $this->group=$group;
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            from:'surub9042@gmail.com',
            to:'surub9042@gmail.com',
            subject: 'New Trip Booked',
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'trip.adminMail',
            with:[
                'name'=>$this->group->trip->name,
                'extension_number'=>$this->group->trip->extension_number,
                'customers'=>$this->group->customers,

            ],
        );
    }

    public function headers():Headers
    {
        return new Headers(
            text:[
                'X-Custom-Header'=>'Trip Booked',
            ],
        );
    }

    /**
     * Get the attachments for the message.
     *
     * @return array<int, \Illuminate\Mail\Mailables\Attachment>
     */
    public function attachments(): array
    {
        return [];
    }
}
