<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Taggalery;

class TaggaleryController extends Controller{
    //
    public function update(Request $req){
        $taggalery = Taggalery::find( $req->input('id') );
        $taggalery->name = $req->input('name');
        $taggalery->save();

        return redirect("admin/taggalery?success=A tag has been renamed");
    }

    public function delete(Request $req){

        $taggalery = Taggalery::find( $req->input('id') );
        //Obtenemos todas las galeries de esta taggalery para saber si la podemos borrar
        $galeries_of_this_taggalery = $taggalery->galeries;

        if( count($galeries_of_this_taggalery) == 0 ){
            $delete= Taggalery::where('id', $req->input('id') )->delete();

            return redirect('/admin/taggalery?success=A tag has been deleted');
        }else{
            return redirect("/admin/taggalery?warning=A tag hasn't been deleted, because there are photographys that use this tag");
        }

    }
}
