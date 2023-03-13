<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Staticcontent;

class StaticcontentController extends Controller{
    //
    public function update(Request $req){
        $staticscontent = Staticcontent::all();

        foreach($staticscontent as $staticcontent){
            if( $req->input("staticcontent".$staticcontent->id."-maintitle") !== null ){
                $staticcontent->maintitle = $req->input("staticcontent".$staticcontent->id."-maintitle");
            }else{
                $staticcontent->maintitle = "";
            }

            if( $req->input("staticcontent".$staticcontent->id."-subtitle") !== null ){
                $staticcontent->subtitle = $req->input("staticcontent".$staticcontent->id."-subtitle");
            }else{
                $staticcontent->subtitle = "";
            }

            if( $req->input("staticcontent".$staticcontent->id."-paragraph") !== null ){
                $staticcontent->paragraph = $req->input("staticcontent".$staticcontent->id."-paragraph");
            }else{
                $staticcontent->paragraph = "";
            }
            
            $staticcontent->save();
        }

        return redirect('/admin/staticcontent?success=Your static content has been updated');
    }
}
