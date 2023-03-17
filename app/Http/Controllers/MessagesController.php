<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

use App\Models\Message;
use App\Models\Reply;
use App\Models\Socialnetwork;

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
            $msg = $req->input('message');
        }

        Reply::create([
            'to' => $to,
            'subject' => $sub,
            'reply' => $msg,
            'message_id' => $message_id
        ]);

        $socialnetworks = Socialnetwork::all();

        Mail::to($to)->send(new MessageReply($msg , $sub , $socialnetworks));

        /*Esto es para mostrar como seria al mensaje (comentar en produccion) */
        //return new MessageReply($msg , $sub , $socialnetworks);

        return redirect('/admin/messages?success=Your message has been sent');
    }
}
