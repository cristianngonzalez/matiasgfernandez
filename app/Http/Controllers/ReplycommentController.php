<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;

use App\Models\Replycomment;

class ReplycommentController extends Controller{
    //
    public function set(Request $req){

        
        Replycomment::create([
            'comment_id' => $req->input('comment_id'),
            'reply' => $req->input('reply')
        ]);

        return redirect("/blog?id=".$req->input('blog_id'));
    }
}
