<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class NotificationContact extends Mailable{

    use Queueable, SerializesModels;

    public $email;
    public $socialnetworks;
    public $name;
    public $sub;
    public $phone;
    public $msg;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($email , $socialnetworks , $name , $sub, $phone , $msg){
        $this->email = $email;
        $this->socialnetworks = $socialnetworks;
        $this->name = $name;
        $this->sub = $sub;
        $this->phone = $phone;
        $this->msg = $msg;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build(){

        return $this->view('emails.notificationcontact')->subject('Ha recibido un mensaje desde el sitio');
    }
}
