<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class VerifyImage extends Mailable
{
    use Queueable, SerializesModels;

 
    public $subject;
    public $message;

    // public $from;
    /**
     * Create a new message instance.
     */
    public function __construct($subject, $message)
    {
        $this ->subject = $subject;

        $this -> message = $message;

        // $this -> from = $from;


    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Task Assign',
        );
    }



    public function build(){
     
        return $this->subject($this->subject)->markdown('App.mail.VerifyImage')->with('message', $this->message);

        

    }

    /**
     * Get the message content definition.
     */

    public function content(): Content
    {
        return new Content(
            view: 'view.name',
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
