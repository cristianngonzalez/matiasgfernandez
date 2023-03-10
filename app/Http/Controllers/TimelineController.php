<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//Models
use App\Models\Timeline;

class TimelineController extends Controller{
    //
    public function set(Request $req){
        $timeline = Timeline::create([
            'title' => $req->input('title') , 
            'company' => $req->input('company') ,
            'description' => $req->input('description'),
            'icon' => 'no tenemos todavia',
            'date' => $req->input('date')
        ]);

        $timeline = Timeline::all();
        return view('admin.timeline')->with(['timeline' => $timeline]);
    }

    public function update(Request $req){
        $experience = Timeline::where('id' , $req->input('id'))->update([
            'title' => $req->input('title') , 
            'company' => $req->input('company') ,
            'description' => $req->input('description'),
            'icon' => 'no tenemos todavia',
            'date' => $req->input('date')
        ]);

        $timeline = Timeline::all();
        return view('admin.timeline')->with(['timeline' => $timeline]);
    }

    public function remove(Request $req){
        $experience = Timeline::where('id' , $req->input('id'))->delete();

        $timeline = Timeline::all();
        return view('admin.timeline')->with(['timeline' => $timeline]);
    }
}
