<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comments;

class CommentController extends Controller{ 
    
    public function post(Request $req){
        Comments::create([
            'blog_id' => $req->input('blog_id') ,
            'name' => $req->input('name') ,
            'email' => $req->input('email') ,
            'comment' => $req->input('comment')
        ]);

        return redirect('blog?id='.$req->input('blog_id'));
    }

    public function delete(Request $req){

        $delete= Comments::where('id', $req->input('id') )->delete();

        return back();
    }

}
