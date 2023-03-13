<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Category;

class CategoryController extends Controller{
    //
    public function update(Request $req){
        $taggalery = Category::find( $req->input('id') );
        $taggalery->name = $req->input('name');
        $taggalery->save();

        return redirect("admin/category?success=A category has been renamed");
    }

    public function delete(Request $req){

        $category = Category::find( $req->input('id') );
        //Obtenemos todas las galeries de esta taggalery para saber si la podemos borrar
        $blogs_of_this_category = $category->blogs;

        if( count($blogs_of_this_category) == 0 ){
            $delete= Category::where('id', $req->input('id') )->delete();

            return redirect('/admin/category?success=A tag has been deleted');
        }else{
            return redirect("/admin/category?warning=A category hasn't been deleted, because there are blogs that use this tag");
        }

    }

    public function set(Request $req){

        Category::create([
            'name' => $req->input('name')
        ]);

        return redirect('/admin/category?success=A new category has been added');
    }
}
