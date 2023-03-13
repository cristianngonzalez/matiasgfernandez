<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Staticcontent extends Model{
    use HasFactory;

    protected $fillable = [
        'section',
        'maintitle',
        'subtitle',
        'paragraph',
    ];

    protected $table = 'staticcontents';
}
