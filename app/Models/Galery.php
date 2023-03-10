<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Galery extends Model{
    use HasFactory;

    protected $fillable = [
        'taggalery_id',
        'comment',
        'picture',
        'comment'
    ];

    protected $table = 'galeries';
}
