<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Taggalery extends Model{
    use HasFactory;

    protected $fillable = [
        'name',
    ];

    protected $table = 'taggaleries';

    public function galeries(){
        return $this->hasMany(Galery::class);
    }
}
