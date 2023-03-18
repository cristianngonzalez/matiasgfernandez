<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;


use App\Mail\GuestNotificationReplyComment;

use App\Models\Replycomment;
use App\Models\Comment;
use App\Models\Socialnetwork;

class ReplycommentController extends Controller{
    //
    public function set(Request $req){

        Replycomment::create([
            'comment_id' => $req->input('comment_id'),
            'reply' => $req->input('reply')
        ]);

        $comment = Comment::find($req->input('comment_id'));
        $socialnetworks = Socialnetwork::all();
        
        
        if($_ENV["APP_ENV"] == 'production'){   
            Mail::to($comment->email)->send(new GuestNotificationReplyComment(
                $comment->email , 
                $socialnetworks , 
                $comment->name , 
                $comment->id , 
                $comment->comment , 
                $req->input('blog_id') , 
                $req->input('blog_title') , 
                $req->input('blog_picture') , 
                $req->input('reply') 
            ));
            
            return redirect("/blog?id=".$req->input('blog_id'));
        }else{
            return new GuestNotificationReplyComment(
                $comment->email , 
                $socialnetworks , 
                $comment->name , 
                $comment->id , 
                $comment->comment , 
                $req->input('blog_id') , 
                $req->input('blog_title') , 
                $req->input('blog_picture') ,
                $req->input('reply') 
            );
        }

        
    }
}
