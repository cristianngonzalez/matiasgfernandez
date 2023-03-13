<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

//Models
use App\Models\Testimonial;

class TestimonialController extends Controller{

    public function new(){
        return view('admin.testimonialsnew');
    }

    public function edit(Request $req){
        $testimonial = Testimonial::where('id' , $req->input('id'))->first();

        return view('admin.testimonialsedit')->with(['testimonial' => $testimonial]);
    }

    public function set(Request $req){
        $file = $req->file('picture-file');
        $file_name = Str::uuid()->toString();

        $file->storeAs('' , $file_name . "." . $file->extension() , 'public');

        $testimonial = Testimonial::create([
            'name' => $req->input('name') , 
            'detail' => $req->input('detail') ,
            'testimonial' => $req->input('testimonial'),
            'avatar' =>  $file_name . "." . $file->extension() ,
        ]);

        return redirect('/admin/testimonials?success=A testimonial has been created');
    }

    public function update(Request $req){
        $testimonial = Testimonial::where('id' , $req->input('id'))->update([
            'name' => $req->input('name') , 
            'detail' => $req->input('detail') ,
            'testimonial' => $req->input('testimonial')
        ]);

        return redirect('/admin/testimonials?success=A testimonial has been updated');
    }

    public function delete(Request $req){
        $testimonial = Testimonial::where('id' , $req->input('id'))->delete();
        Storage::disk('public')->delete($req->input('picture'));

        return redirect('/admin/testimonials?success=A testimonial has been deleted');
    }
}
