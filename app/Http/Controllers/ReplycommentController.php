<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;


use App\Mail\GuestNotificationReplyComment;

use App\Models\Replycomment;
use App\Models\Comment;
use App\Models\Socialnetwork;
use App\Models\Blog;

class ReplycommentController extends Controller{
    //
    public function set(Request $req){

        Replycomment::create([
            'comment_id' => $req->input('comment_id'),
            'reply' => $req->input('reply')
        ]);

        $comment = Comment::find($req->input('comment_id'));
        $socialnetworks = Socialnetwork::all();
        
        
        if(env("APP_ENV") == 'production'){   
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

    public function setAsAdmin(Request $req){
        Replycomment::create([
            'comment_id' => $req->input('comment_id'),
            'reply' => $req->input('reply')
        ]);

        $comment = Comment::find($req->input('comment_id'));
        $socialnetworks = Socialnetwork::all();
        $blog = Blog::find($comment->blog->id);
        
        if(env("APP_ENV") == 'production'){   
            Mail::to($comment->email)->send(new GuestNotificationReplyComment(
                $comment->email , 
                $socialnetworks , 
                $comment->name , 
                $comment->id , 
                $comment->comment , 
                $blog->id , 
                $blog->title , 
                $blog->picture , 
                $req->input('reply') 
            ));
            
            return redirect("/admin/comments?success=A comment has been replied");
        }else{
            /*
            return new GuestNotificationReplyComment(
                $comment->email , 
                $socialnetworks , 
                $comment->name , 
                $comment->id , 
                $comment->comment , 
                $blog->id , 
                $blog->title , 
                $blog->picture , 
                $req->input('reply') 
            );*/

            return redirect("/admin/comments?success=A comment has been replied");
        }
    }
}
