<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Reply;

class Message extends Model{
    use HasFactory;

    protected $fillable = [
        'name' ,
        'email' ,
        'message' ,
        'subject' ,
        'phone',
        'readed'
    ];

    public function replies(){
        return $this->hasMany('App\Models\Reply');
    }

    protected $table = 'messages';
}
