<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class sendMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($details)
    {
        //

        $this->details = $details;
    }
    public $details;
    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('Inquire')->view('email.contactus');
    }
}
