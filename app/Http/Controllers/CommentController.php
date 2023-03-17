<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Mail;

use App\Mail\NotificationNewComment;

use Illuminate\Http\Request;
use App\Models\Comments;
use App\Models\Socialnetwork;

class CommentController extends Controller{ 
    
    public function post(Request $req){

        $name = $req->input('name');
        $blog_id = $req->input('blog_id');
        $email = $req->input('email');
        $comment = $req->input('comment');
        $blog_title = $req->input('blog_title');

        Comments::create([
            'blog_id' => $blog_id ,
            'name' => $name ,
            'email' => $email ,
            'comment' => $comment
        ]);

        $socialnetworks = Socialnetwork::all();

        Mail::to('contacto@matiasgfernandez.com')->send(new NotificationNewComment($email , $socialnetworks , $name , $blog_id , $blog_title , $comment));
        Mail::to('contacto@matiasgfernandez.com')->send(new NotificationNewComment($email , $socialnetworks , $name , $blog_id , $blog_title , $comment));

        return redirect('blog?id='.$req->input('blog_id'));
    }

    public function delete(Request $req){

        $delete= Comments::where('id', $req->input('id') )->delete();

        return back();
    }

}
