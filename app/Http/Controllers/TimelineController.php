<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

//Models
use App\Models\Timeline;

class TimelineController extends Controller{
    //
    public function new(){
        return view('admin.timelinenew');
    }

    public function set(Request $req){

        $file = $req->file('picture-file');
        $file_name = Str::uuid()->toString();

        $file->storeAs('' , $file_name . "." . $file->extension() , 'public');

        Timeline::create([
            'title' => $req->input('title') , 
            'company' => $req->input('company') ,
            'description' => $req->input('description'),
            'icon' => $file_name . "." . $file->extension() ,
            'category' =>  $req->input('category') ,
            'date' => $req->input('date')
        ]);

        return redirect('/admin/timeline?success=A experience has been created');
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
            'category' => $req->input('category'),
            'date' => $req->input('date')
        ]);

        return redirect('/admin/timeline?success=A experience of your timeline has been updated');
    }

    public function delete(Request $req){
        $experience = Timeline::where('id' , $req->input('id'))->delete();

        Storage::disk('public')->delete($req->input('picture'));

        $timeline = Timeline::all();
        return view('admin.timeline')->with(['timeline' => $timeline]);
    }
}
