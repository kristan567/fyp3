<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class CreateUser extends Mailable
{
    use Queueable, SerializesModels;



    public $subject;

    public  $message;

    public $name;

    public  $password;

    public $email;

    public $domain;






    /**
     * Create a new message instance.
     */
    public function __construct($subject, $message, $name, $password, $email,$domain)
    {
        $this ->subject = $subject;

        $this ->message = $message;

        $this ->name = $name;

        $this ->email = $email;

        $this->password = $password;

        $this->domain = $domain;
        
  
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'User Creation',
        );
    }

    public function build(){
        
        return $this->subject($this->subject)->markdown('landingpage.email.newuser')->with([
            'message' => $this->message,
            'name' => $this->name,
            'email' => $this->email,
            'password' => $this->password,
            'domain'=> $this->domain,
       
        ]);
    
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
