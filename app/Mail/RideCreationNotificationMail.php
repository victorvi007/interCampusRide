<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Address;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Queue\SerializesModels;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Contracts\Queue\ShouldQueue;

class RideCreationNotificationMail extends Mailable
{
    use Queueable, SerializesModels;

    public $name,$ride_id;
    /**
     * Create a new message instance.
     */
    public function __construct($name,$ride_id)
    {
        $this->name = $name;
        $this->ride_id = $ride_id;

    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        $subject = 'Ride Created';
        $address = ['address'=>env('MAIL_FROM_ADDRESS'),'name'=>env('APP_NAME')];
        return new Envelope(
            from: new Address($address['address'], $address['name'] ),
            subject: $subject,

        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            markdown: 'emails.rideCreationNotificationMail',
        );
    }

    /**
     * Get the attachments for the message.
     *
     * @return array<int, \Illuminate\Mail\Mailables\Attachment>
     */
    public function attachments(): array
    {
        return [
            // Attachment::fromPath('/path/to/file')
            // ->as('name.pdf')
            // ->withMime('application/pdf'),
        ];
    }
}
