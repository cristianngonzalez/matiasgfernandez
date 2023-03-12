<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

use App\Models\Blog;
use App\Models\Category;
use App\Models\Comments;

class BlogController extends Controller{
    //
    public function new(){
        $categories = Category::all();
        return view('admin.blognew')->with([
            'categories' => $categories
        ]);
    }

    public function set(Request $req){
        $file = $req->file('picture-file');
        $file_name = Str::uuid()->toString();

        $file->storeAs('' , $file_name . "." . $file->extension() , 'public');


        Blog::create([
            'title' => $req->input('title') ,
            'blog' => $req->input('blog') ,
            'picture' =>  $file_name . "." . $file->extension() ,
            'published' => true,
            'category_id' => $req->input('category')
        ]);

        return redirect('/admin/blogs');
    }

    public function edit(Request $req){
        $blog = Blog::where('id' , $req->input('id'))->first();
        $categories = Category::all();

        //Get comments
        $comments = Comments::where('blog_id' , $req->input('id'))->get();

        return view('admin.blogedit')->with(['blog' => $blog , 'categories' => $categories , 'comments' => $comments]);
    }

    public function update(Request $req){

        $blog = Blog::find( $req->input('id') );
        $blog->title = $req->input('title');
        $blog->category_id = $req->input('category');
        $blog->blog = $req->input('blog');

        $blog->save();

        return redirect('/admin/blogs');
    }

    public function delete(Request $req){

        $delete= Blog::where('id', $req->input('id') )->delete();

        return redirect('/admin/blogs?success=A blog has been deleted');
    }
}
