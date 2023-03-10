<?php

namespace App\Http\Controllers\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

//Models
use App\Models\User;

class UserController extends Controller{
    
    public function remove(Request $req){
        $user_id = $req->input('id');

        $delete=User::where('id',$user_id)->delete();

        $users = User::all();
        return view('admin.users')->with(['users' => $users , 'success' => 'User has been remove']);
    }

    public function removeAdmin(Request $req){
        $user_id = $req->input('id');

        $user = User::where('id' , $user_id)->update(['admin' => false]);

        $users = User::all();
        return view('admin.users')->with(['users' => $users , 'warning' => 'User has been removed from admins']);
    }

    public function setAdmin(Request $req){
        $user_id = $req->input('id');

        $user = User::where('id' , $user_id)->update(['admin' => true]);

        $users = User::all();
        return view('admin.users')->with(['users' => $users , 'success' => 'User has been become to admin']);
    }
}
