<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class GuestnotificationCvRequest extends Mailable{
    use Queueable, SerializesModels;

    public $email;
    public $socialnetworks;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($email ,  $socialnetworks ){
        //
        $this->email = $email;
        $this->socialnetworks = $socialnetworks;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build(){
        return $this->view('emails.guestnotificationrequestcv')->subject('Matías Fernandez - Solicitud de cv enviada');
    }
}
