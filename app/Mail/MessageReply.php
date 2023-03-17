<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class MessageReply extends Mailable{
    use Queueable, SerializesModels;

    public $msg;
    public $sub;
    public $socialnetworks;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($msg , $sub , $socialnetworks){
        //
        $this->msg = $msg;
        $this->sub = $sub;
        $this->socialnetworks = $socialnetworks;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build(){
        return $this->view('emails.message')->subject($this->sub);
    }
}
