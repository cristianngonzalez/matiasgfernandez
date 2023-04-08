<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\Staticpicture;

class staticpictures_seed extends Seeder{

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(){
        //
        Staticpicture::create([
            'path' => 'static-picture-seed-1.png'
        ]);
        Staticpicture::create([
            'path' => 'static-picture-seed-2.png'
        ]);
    }
}
