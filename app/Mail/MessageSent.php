<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class MessageSent extends Mailable
{
    use Queueable, SerializesModels;

    // public $attachment;
    // public $sender;
    // public $content;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
        // $this->attachment = $attachment;
        // $this->sender = $sender;
        // $this->content = $content;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {


        $email = $this->view('emails.notify');
                // ->from($this->sender);
        return $email;
    }
}
