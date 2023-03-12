<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Video;

class VideoController extends Controller{
    //
    public function new(Request $req){

        return view('admin.videosnew');
    }

    public function set(Request $req){
        //El usuario debe ingresar a travez de un insertar en youtube y eliminaremos el resto del codigo y solo dejaremos ese link
        $link = str_replace('<iframe width="560"', "", $req->input('link'));
        $link = str_replace(' height="315" ', "", $link);
        $link = str_replace('src="', "", $link);
        $link = str_replace('" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>', "", $link);

        Video::create([
            'link' => $link
        ]);

        return redirect('/admin/video?success=A video has been shared');
    }

    public function delete(Request $req){
        $delete= Video::where('id', $req->input('id') )->delete();

        return redirect('/admin/video?success=A video has been deleted');
    }
}
