<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

use App\Models\Academy;

class AcademyController extends Controller{
    //
    public function new(){
        return view('admin.academynew');
    }

    public function set(Request $req){
        $file = $req->file('picture-file');
        $file_name = Str::uuid()->toString();

        $file->storeAs('' , $file_name . "." . $file->extension() , 'public');

        Academy::create([
            'institution' => $req->input('institution') , 
            'degree' => $req->input('degree') ,
            'date' => $req->input('date'),
            'logo' => $file_name . "." . $file->extension()
        ]);

        return redirect('/admin/academy?success=An academy degree has been created');
    }

    public function delete(Request $req){
        $academy = Academy::where('id' , $req->input('id'))->delete();

        Storage::disk('public')->delete($req->input('picture'));

        return redirect('/admin/academy?success=An academy degree has been deleted');
    }

    public function edit(Request $req){
        $academy = Academy::where('id' , $req->input('id'))->first();

        return view('admin.academyedit')->with(['academy' => $academy]);
    }

    public function update(Request $req){
        $academy = Academy::where('id' , $req->input('id'))->update([
            'institution' => $req->input('institution') , 
            'degree' => $req->input('degree') ,
            'date' => $req->input('date')
        ]);

        if($req->file('picture-file')){
            $file = $req->file('picture-file');
            $file_name = Str::uuid()->toString();

            $file->storeAs('' , $file_name . "." . $file->extension() , 'public');

            $academyupdated = Academy::find( $req->input('id') );
            $academyupdated->logo = $file_name . "." . $file->extension() ;

            $academyupdated->save();
        }


        return redirect('/admin/academy?success=An academy degree has been updated');
    }

}
