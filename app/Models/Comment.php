<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model{
    use HasFactory;


    protected $fillable = [
        'blog_id',
        'name',
        'email',
        'comment'
    ];

    protected $table = 'comments';

    
    public function blog(){
        return $this->belongsTo('App\Models\Blog' , 'blog_id');
    }

    public function repliescomment(){
        return $this->hasMany('App\Models\Replycomment');
    }

}
