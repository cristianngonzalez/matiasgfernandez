<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\Taggalery;

class taggalery_seed extends Seeder{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(){
        //
        Taggalery::create([
            'name' => 'Viajes'
        ]);

        Taggalery::create([
            'name' => 'Familia'
        ]);

        Taggalery::create([
            'name' => 'Trabajos'
        ]);
    }
}
