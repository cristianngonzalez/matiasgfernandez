<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

use App\Models\Message;
use App\Models\Reply;

use App\Mail\MessageReply;

class MessagesController extends Controller{
    //
    public function open(Request $req){
        $message = Message::find( $req->input('id') );
        $replies = Reply::where('message_id' , $req->input('id'))->get();

        return view('admin.messagesopen')->with(['message' => $message , 'replies' => $replies]);
    }

    public function reply(Request $req){
        $message = Message::find($req->input('id'));

        return view('admin.messagesreply')->with(['message' => $message]);
    }

    public function replySend(Request $req){
        $to = $req->input('to');
        $sub = $req->input('subject');
        $message_id = $req->input('message_id');
        $msg = '';
        if($req->input('message') !== null){
            $message = $req->input('message');
        }

        Reply::create([
            'to' => $to,
            'subject' => $sub,
            'reply' => $msg,
            'message_id' => $message_id
        ]);

        Mail::to($to)->send(new MessageReply($msg , $sub));

        return redirect('/admin/messages?success=Your message has been sent');
    }
}
