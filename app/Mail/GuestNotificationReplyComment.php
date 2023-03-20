<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class GuestNotificationReplyComment extends Mailable{
    use Queueable, SerializesModels;

    public $email;
    public $socialnetworks;
    public $comment_name;
    public $comment_id;
    public $comment_comment;
    public $blog_id;
    public $blog_title;
    public $blog_picture;
    public $reply;
    
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($email , $socialnetworks , $comment_name , $comment_id , $comment_comment , $blog_id , $blog_title , $blog_picture , $reply ){
        //
        $this->email = $email;
        $this->socialnetworks = $socialnetworks;
        $this->comment_name = $comment_name;
        $this->comment_id = $comment_id;
        $this->comment_comment = $comment_comment;
        $this->blog_id = $blog_id;
        $this->blog_title = $blog_title;
        $this->blog_picture = $blog_picture;
        $this->reply = $reply;

    }   

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build(){
        return $this->view('emails.guestnotificationcommentreply')->subject('Matias Fernandez ha respondido a tu comentario');
    }
}
