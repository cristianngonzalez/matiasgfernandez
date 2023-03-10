<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//Models
use App\Models\Testimonial;

class TestimonialController extends Controller{
    //
    public function set(Request $req){
        $testimonial = Testimonial::create([
            'name' => $req->input('name') , 
            'detail' => $req->input('detail') ,
            'testimonial' => $req->input('testimonial'),
            'avatar' => 'no tenemos todavia',
        ]);

        $testimonials = Testimonial::all();
        return view('admin.testimonials')->with(['testimonials' => $testimonials]);
    }

    public function update(Request $req){
        $testimonial = Testimonial::where('id' , $req->input('id'))->update([
            'name' => $req->input('name') , 
            'detail' => $req->input('detail') ,
            'testimonial' => $req->input('testimonial'),
            'avatar' => 'no tenemos todavia',
        ]);

        $testimonials = Testimonial::all();
        return view('admin.testimonials')->with(['testimonials' => $testimonials]);
    }

    public function remove(Request $req){
        $testimonial = Testimonial::where('id' , $req->input('id'))->delete();

        $testimonials = Testimonial::all();
        return view('admin.testimonials')->with(['testimonials' => $testimonials]);
    }
}
