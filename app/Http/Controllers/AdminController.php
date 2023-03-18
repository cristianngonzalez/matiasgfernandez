<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//Models
use App\Models\User;
use App\Models\Timeline;
use App\Models\Testimonial;
use App\Models\Blog;
use App\Models\Category;
use App\Models\Comment;
use App\Models\Socialnetwork;
use App\Models\Galery;
use App\Models\Taggalery;
use App\Models\Video;
use App\Models\Staticcontent;
use App\Models\Requestcv;
use App\Models\Message;

class AdminController extends Controller{

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(){
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    
    
    public function admin(){
        $unread_messages = Message::where('readed', 0)->count();
        $unanswered_request = Requestcv::where('sent', 0)->count();

        return view('admin.home')->with(['unread_messages' => $unread_messages , 'unanswered_request' => $unanswered_request]);
    }
    
    public function socialnetworks(){
        $socialnetworks = Socialnetwork::all();

        return view('admin.socialnetworks')->with(['socialnetworks' => $socialnetworks]);
    }

    public function users(){
        $users = User::all();
        return view('admin.users')->with(['users' => $users]);
    }

    public function timeline(){
        $timeline = Timeline::all();
        return view('admin.timeline')->with(['timeline' => $timeline]);
    }

    public function testimonial(){
        $testimonials = Testimonial::all();
        return view('admin.testimonials')->with(['testimonials' => $testimonials]);
    }

    public function blogs(){
        $categories = Category::all();
        $blogs = Blog::paginate(10);
        
        return view('admin.blogs')->with([
            'blogs' => $blogs , 
            'categories' => $categories
        ]);
    }

    public function galery(){
        $galeries = Galery::paginate(6);
        $taggaleries = Taggalery::all();

        return view('admin.galery')->with(['galeries' => $galeries , 'taggaleries' => $taggaleries]);
    }

    public function taggalery(){
        $taggaleries = Taggalery::all();

        return view('admin.taggalery')->with(['taggaleries' => $taggaleries]);
    }

    public function video(){
        $videos = Video::paginate(9);

        return view('admin.videos')->with(['videos' => $videos]);
    }

    public function staticcontent(){
        $staticcontents = Staticcontent::all();

        return view('admin.staticcontent')->with(['staticcontents' => $staticcontents]);
    }

    public function category(){
        $categories = Category::all();

        return view('admin.category')->with(['categories' => $categories]);
    }

    public function requestcv(){
        $requests = Requestcv::orderBy('updated_at', 'desc')->paginate(10);

        return view('admin.requestcv')->with(['requests' => $requests]);
    }

    public function messages(){
        $messages = Message::orderBy('updated_at', 'desc')->paginate(10);

        return view('admin.messages')->with(['messages' => $messages]);
    }
}
