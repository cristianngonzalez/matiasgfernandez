<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Replycomment extends Model{
    use HasFactory;

    protected $fillable = [
        'comment_id',
        'reply'
    ];

    protected $table = 'repliescomment';

    public function comment(){
        return $this->belongsTo('App\Models\Comment' , 'comment_id');
    }
}
