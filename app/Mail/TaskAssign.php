<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class TaskAssign extends Mailable
{
    use Queueable, SerializesModels;


    public $subject;
    public $message;

    public $name;

    public $project_name;

    public $task_name;

    public $start_date;
    public $end_date;
    public $priority;
    public $des;





    // public $from;
    /**
     * Create a new message instance.
     */
    public function __construct($subject, $message,$name, $project_name, $task_name, $start_date, $end_date, $priority, $des)
    {
        $this ->subject = $subject;

        $this -> message = $message;

        $this -> name = $name;

        $this -> project_name = $project_name;

        $this -> task_name = $task_name;

        $this ->start_date = $start_date;

        $this -> end_date = $end_date;

        $this -> priority = $priority;

        $this->des= $des;


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
        
        // return $this->subject($this->subject)->markdown('App.mail.TaskAssign')->with('message', $this->message);

        return $this->subject($this->subject)
            ->markdown('App.mail.TaskAssign')
            ->with([
                'message' => $this->message,
                'name' => $this->name,
                'project_name' => $this->project_name,
                'task_name' => $this->task_name,
                'start_date' => $this->start_date,
                'end_date' => $this->end_date,
                'priority' => $this->priority,
                'des' =>  $this->des,
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
