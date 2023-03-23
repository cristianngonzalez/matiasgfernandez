<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Mail;

use App\Mail\NotificationNewComment;

use Illuminate\Http\Request;
use App\Models\Comment;
use App\Models\Socialnetwork;

class CommentController extends Controller{ 
    
    public function post(Request $req){

        $name = $req->input('name');
        $blog_id = $req->input('blog_id');
        $blog_picture = $req->input('blog_picture'); 
        $email = $req->input('email');
        $comment = $req->input('comment');
        $blog_title = $req->input('blog_title');

        Comment::create([
            'blog_id' => $blog_id ,
            'name' => $name ,
            'email' => $email ,
            'comment' => $comment
        ]);

        $socialnetworks = Socialnetwork::all();

        if(env("APP_ENV") == 'production'){   
            Mail::to('contacto@matiasgfernandez.com')->send(new NotificationNewComment($email , $socialnetworks , $name , $blog_id , $blog_title , $blog_picture , $comment));

            return redirect('blog?id='.$req->input('blog_id'));
        }else{
            return new NotificationNewComment($email , $socialnetworks , $name , $blog_id , $blog_title , $blog_picture , $comment);
        }

       
    }

    public function delete(Request $req){

        $delete= Comment::where( 'id' , $req->input('id') )->delete();

        return redirect('/admin/comments?success=A comment has been deleted');
    }

}
