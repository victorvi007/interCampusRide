<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Address;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Queue\SerializesModels;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Contracts\Queue\ShouldQueue;

class otpMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     */
    public $name,$code,$app_name;

    public function __construct($name, $code,$app_name)
    {
        $this->name = $name;
        $this->code = $code;
        $this->app_name = $app_name;
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {

            $subject = 'Email Verification';
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
            markdown: 'emails.otp',
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
