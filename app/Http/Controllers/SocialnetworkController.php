<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//Models
use App\Models\Socialnetwork;

class SocialnetworkController extends Controller{
    //
    public function update(Request $req){
        $socialnetwork = Socialnetwork::where('id' , $req->input('id'))->update(['link' => $req->input('link')]);


        $socialnetworks = Socialnetwork::all();

        return view('admin.socialnetworks')->with([
            'socialnetworks' => $socialnetworks , 
            'success' => "Social network " . $req->input('name') . " has been updated."
        ]);
    }
}
