<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Mail;
use App\Models\Message;

//Models
use App\Models\Blog;
use App\Models\Comment;
use App\Models\Socialnetwork;
use App\Models\Galery;
use App\Models\Taggalery;
use App\Models\Timeline;
use App\Models\Video;
use App\Models\Staticcontent;
use App\Models\Testimonial;
use App\Models\RequestCV;
use App\Models\Academy;

//Messages
use App\Mail\NotificationCvRequest;
use App\Mail\GuestnotificationCvRequest;

use App\Mail\NotificationContact;
use App\Mail\GuestnotificationContact;

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
        $academies = Academy::all()->reverse();
    
        return view('site.home')->with([
            'blogs' => $blogs , 
            'socialnetworks' => $socialnetworks , 
            'galeries' => $galeries,
            'taggaleries' => $taggaleries,
            'timeline' => $timeline,
            'videos' => $videos,
            'staticcontents' => $staticcontents,
            'testimonials' => $testimonials,
            'academies' => $academies
        ]);
    }

    public function solicitarCV(Request $req){
        $email = $req->query->get('login');

        RequestCV::create([
            'email' => $email,
            'sent' => false,
        ]);

        $socialnetworks = Socialnetwork::all();

        if(env("APP_ENV") == 'production'){ 
            Mail::to('contacto@matiasgfernandez.com')->send(new NotificationCvRequest($email , $socialnetworks));

            Mail::to($email)->send(new GuestnotificationCvRequest($email , $socialnetworks));
            
            return response()->json(['status' => 'success'] , 200);
        }else{
            return response()->json(['status' => 'success'] , 200);
        }
        
    }

    public function blogs(){
        $blogs = Blog::paginate(9);

        return view('site.blogs')->with(['blogs' => $blogs]);
    }

    public function blog(Request $req){
        $blog = Blog::where('id' , $req->input('id'))->first();
        $comments = Comment::where('blog_id' , $req->input('id'))->get();

        //Tomamos tres blogs
        $blogs = Blog::where('id' , '!=' , $req->input('id') )->get()->take(3);

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

        $socialnetworks = Socialnetwork::all();

        if(env("APP_ENV") == 'production'){ 
            Mail::to('contacto@matiasgfernandez.com')->send(new NotificationContact($email , $socialnetworks , $name , $subject , $phone , $message ));

            Mail::to($email)->send(new GuestnotificationContact($email , $socialnetworks , $name , $subject , $phone , $message ));

            return response()->json(['status' => 'success'] , 200);
        }else{
            
            return new GuestnotificationContact($email , $socialnetworks , $name , $subject , $phone , $message);
            //return response()->json(['status' => 'success'] , 200);
        }
        

    }

    public function galery(){
        $galeries = Galery::all();
        $taggaleries = Taggalery::all();
        $staticcontents = Staticcontent::all();

        return view('site.galery')->with(['galeries' => $galeries , 'taggaleries' => $taggaleries , 'staticscontents' => $staticcontents]);
    }
    
}
