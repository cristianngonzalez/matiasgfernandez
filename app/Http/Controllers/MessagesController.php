<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MessagesController extends Controller{
    //

    public function contact(Request $req){

        $name = $req->query->get('ajax_name');
        $email = $req->query->get('ajax_email');
        $message = $req->query->get('ajax_message');
        $subject = $req->query->get('ajax_subject');
        $phone = $req->query->get('ajax_phone');

        return response()->json(['status' => 'success'] , 200);

    }

    public function solicitarCV(Request $req){
        $email = $req->query->get('login');

        RequestCV::create([
            'email' => $email,
            'sent' => false,
        ]);
        
        return response()->json(['status' => 'success'] , 200);
    }
}
