<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Timeline extends Model{
    use HasFactory;

    protected $fillable = [
        'title',
        'company',
        'description',
        'category',
        'icon',
        'date',
    ];

    protected $table = 'timeline';


}
