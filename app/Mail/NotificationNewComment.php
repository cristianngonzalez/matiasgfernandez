<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class NotificationNewComment extends Mailable{
    use Queueable, SerializesModels;

    public $email;
    public $socialnetworks;
    public $name;
    public $blog_id;
    public $blog_title;
    public $comment;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($email , $socialnetworks , $name , $blog_id , $blog_title , $comment){
        //
        $this->email = $email;
        $this->socialnetworks = $socialnetworks;
        $this->name = $name;
        $this->blog_id = $blog_id;
        $this->blog_title = $blog_title;
        $this->comment = $comment;
    }
    /**
     * Build the message.
     *
     * @return $this
     */
    public function build(){
        return $this->view('emails.notificationnewcomment')->subject('Alguien ha comentado tu blog');
    }
}
