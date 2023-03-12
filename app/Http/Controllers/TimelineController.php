<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//Models
use App\Models\Timeline;

class TimelineController extends Controller{
    //
    public function new(){
        return view('admin.timelinenew');
    }

    public function set(Request $req){


        $timeline = Timeline::create([
            'title' => $req->input('title') , 
            'company' => $req->input('company') ,
            'description' => $req->input('description'),
            'icon' => 'aaaaa',
            'category' => $req->input('category'),
            'date' => $req->input('date')
        ]);

        $timeline = Timeline::all();
        return view('admin.timeline')->with(['timeline' => $timeline]);
    }

    public function edit(Request $req){
        $experience = Timeline::where('id' , $req->input('id'))->first();

        return view('admin.timelineedit')->with(['experience' => $experience]);
    }

    public function update(Request $req){
        $experience = Timeline::where('id' , $req->input('id'))->update([
            'title' => $req->input('title') , 
            'company' => $req->input('company') ,
            'description' => $req->input('description'),
            'icon' => 'no tenemos todavia',
            'date' => $req->input('date')
        ]);

        return redirect('/admin/timeline?success=A experience of your timeline has been updated');
    }

    public function remove(Request $req){
        $experience = Timeline::where('id' , $req->input('id'))->delete();

        $timeline = Timeline::all();
        return view('admin.timeline')->with(['timeline' => $timeline]);
    }
}
