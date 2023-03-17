<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Mail;
use App\Models\Message;

//Models
use App\Models\Blog;
use App\Models\Comments;
use App\Models\Socialnetwork;
use App\Models\Galery;
use App\Models\Taggalery;
use App\Models\Timeline;
use App\Models\Video;
use App\Models\Staticcontent;
use App\Models\Testimonial;
use App\Models\RequestCV;

//Messages
use App\Mail\NotificationCvRequest;
use App\Mail\GuestnotificationCvRequest;

use Illuminate\Http\Request;

class SiteController extends Controller{
    
    public function home(){
        //Tomamos tres blogs
        $blogs = Blog::all()->take(3);
        $socialnetworks = Socialnetwork::all();
        $galeries = Galery::all()->take(6);
        $taggaleries = Taggalery::all();
        $timeline = Timeline::all();
        $videos = Video::all()->take(4);
        $staticcontents = Staticcontent::all();
        $testimonials = Testimonial::all();
    
        return view('site.home')->with([
            'blogs' => $blogs , 
            'socialnetworks' => $socialnetworks , 
            'galeries' => $galeries,
            'taggaleries' => $taggaleries,
            'timeline' => $timeline,
            'videos' => $videos,
            'staticcontents' => $staticcontents,
            'testimonials' => $testimonials
        ]);
    }

    public function solicitarCV(Request $req){
        $email = $req->query->get('login');

        RequestCV::create([
            'email' => $email,
            'sent' => false,
        ]);

        $socialnetworks = Socialnetwork::all();

        Mail::to('contacto@matiasgfernandez.com')->send(new NotificationCvRequest($email , $socialnetworks));
        //Mail::to('matiasfernandez1806@gmail.com')->send(new NotificationCvRequest($email , $socialnetworks));

        Mail::to($email)->send(new GuestnotificationCvRequest($email , $socialnetworks));
        
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

    public function contact(Request $req){

        $name = $req->query->get('ajax_name');
        $email = $req->query->get('ajax_email');
        $message = $req->query->get('ajax_message');
        $subject = $req->query->get('ajax_subject');
        $phone = $req->query->get('ajax_phone');

        Message::create([
            'name' => $name,
            'email' => $email,
            'subject' => $subject,
            'phone' => $phone,
            'message' => $message ,
            'readed' => false
        ]);

        return response()->json(['status' => 'success'] , 200);

    }
    
}
