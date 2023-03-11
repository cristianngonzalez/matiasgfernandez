<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

use App\Models\Galery;
use App\Models\Taggalery;

class GaleryController extends Controller{
    //
    public function new(){
        $taggaleries = Taggalery::all();

        return view('admin.galerynew')->with(['taggaleries' => $taggaleries]);
    }

    public function set(Request $req){
        $file = $req->file('picture-file');
        $file_name = Str::uuid()->toString();

        $file->storeAs('' , $file_name . "." . $file->extension() , 'public');

        Galery::create([
            'comment' => $req->input('comment') ,
            'taggalery_id' => $req->input('taggalery') ,
            'picture' => $file_name . "." . $file->extension() 
        ]);

        return redirect('/admin/galery');
    }

    public function delete(Request $req){

        $delete= Galery::where('id', $req->input('id') )->delete();

        Storage::disk('public')->delete($req->input('picture'));

        return redirect('/admin/galery?success=A photo has been delete');
    }

    public function update(Request $req){
        $galery = Galery::find( $req->input('id') );
        $galery->comment = $req->input('comment');
        $galery->taggalery_id = $req->input('taggalery');
        $galery->save();

        return redirect('admin/galery?success=A picture has been updated');
    }
}
