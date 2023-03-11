<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//Models
use App\Models\User;
use App\Models\Timeline;
use App\Models\Testimonial;
use App\Models\Blog;
use App\Models\Category;
use App\Models\Comments;
use App\Models\Socialnetwork;
use App\Models\Galery;
use App\Models\Taggalery;

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
        return view('admin.home');
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

}
