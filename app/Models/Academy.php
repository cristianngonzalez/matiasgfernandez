<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Academy extends Model{
    use HasFactory;

    protected $fillable = [
        'institution' ,
        'degree' ,
        'date' ,
        'logo' ,
    ];

    protected $table = 'academies';
}
