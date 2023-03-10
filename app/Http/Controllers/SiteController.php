<?php

namespace App\Http\Controllers;

//Models
use App\Models\Blog;
use App\Models\Comments;
use App\Models\Socialnetwork;

use Illuminate\Http\Request;

class SiteController extends Controller{
    
    public function home(){
        //Tomamos tres blogs
        $blogs = Blog::all()->take(3);
        $socialnetworks = Socialnetwork::all();
    
        return view('site.home')->with(['blogs' => $blogs , 'socialnetworks' => $socialnetworks]);
    }

    public function solicitarCV(Request $req){
        $email = $req->query->get('login');
        
        return response()->json(['status' => 'success'] , 200);
    }

    public function blogs(){
        $blogs = Blog::paginate(9);

        return view('site.blogs')->with(['blogs' => $blogs]);
    }

    public function blog(Request $req){
        $blog = Blog::where('id' , $req->input('id'))->first();
        $comments = Comments::where('blog_id' , $req->input('id'))->get();

        //Tomamos tres blogs
        $blogs = Blog::all()->take(3);

        return view('site.blog')->with(['blog' => $blog , 'blogs' => $blogs , 'comments' => $comments]);
    }
    
}
