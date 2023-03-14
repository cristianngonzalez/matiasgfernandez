<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

use App\Models\Message;

class MessagesController extends Controller{
    //

    public function contact(Request $req){

        $name = $req->query->get('ajax_name');
        $email = $req->query->get('ajax_email');
        $message = $req->query->get('ajax_message');
        $subject = $req->query->get('ajax_subject');
        $phone = $req->query->get('ajax_phone');

        Message::create([
            'name' => $name,
            'email' => $email,
            'subject' => $subject,
            'phone' => $phone,
            'message' => $message,
            'readed' => false
        ]);

        return response()->json(['status' => 'success'] , 200);

    }

}
