<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Message;

class Reply extends Model{
    use HasFactory;

    protected $fillable = [
        'to',
        'reply' ,
        'subject' ,
        'message_id' ,
    ];

    public function categories(){
        return $this->belongsTo(Message::class , 'message_id');
    }

    protected $table = 'replies';
}
