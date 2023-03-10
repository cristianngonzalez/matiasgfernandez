<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Blog;
use App\Models\Category;

class Blog extends Model{
    use HasFactory;

    protected $fillable = [
        'title',
        'blog',
        'picture',
        'published',
        'category_id',
    ];

    protected $table = 'blogs';

    public function comments(){
        return $this->hasMany('App\Models\Comments');
    }

    public function categories(){
        return $this->belongsTo(Category::class , 'category_id');
    }
}
