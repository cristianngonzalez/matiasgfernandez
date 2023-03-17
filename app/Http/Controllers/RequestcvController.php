<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

use App\Models\RequestCV;

class RequestcvController extends Controller{
    //
    public function delete(Request $req){
        $delete= RequestCV::where('id', $req->input('id') )->delete();

        return redirect('/admin/requestcv?success=A request has been delete');
    }
}
