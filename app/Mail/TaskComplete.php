<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class TaskComplete extends Mailable
{
    use Queueable, SerializesModels;


    public $subject;

    public $message;

    public $start_date;
    public $end_date;
    public $priority;
    public $updated_at;

  

    /**
     * Create a new message instance.
     */
    public function __construct($subject, $message,$start_date, $end_date, $priority,$updated_at)
    {
        $this ->subject = $subject;

        $this -> message = $message;

        $this -> start_date = $start_date;

        $this -> end_date = $end_date;

        $this ->  priority= $priority;

        $this -> updated_at = $updated_at;


    }




    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Task Complete',
        );
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

    public function build()
    {
        return $this->subject($this->subject)
        ->markdown('App.mail.usermail')
        ->with([
            'message' => $this->message,
            'start_date' => $this->start_date,
            'end_date' => $this->end_date,
            'priority' => $this->priority,
            'updated_at' => $this->updated_at,
        ]);

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
