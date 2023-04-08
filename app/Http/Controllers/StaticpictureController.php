<?php

namespace App\Http\Controllers;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

use Illuminate\Http\Request;

use App\Models\Staticpicture;

class StaticpictureController extends Controller{
    //
    public function update(Request $req){

        $staticpicture = Staticpicture::find($req->input('id'));

        if($req->file('picture-file')){
            $file = $req->file('picture-file');
            $file_name = Str::uuid()->toString();

            $file->storeAs('' , $file_name . "." . $file->extension() , 'public');

            $staticpicture->path = $file_name . "." . $file->extension() ;

            $staticpicture->save();

            return redirect('/admin/staticpicture?success=A picture has been updated');
        }else{

            return redirect('/admin/staticpicture?warning=An error has occurred');
        }

    }
}
