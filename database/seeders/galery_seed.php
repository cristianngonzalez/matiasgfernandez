<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\Galery;

class galery_seed extends Seeder{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(){
        //
        Galery::create([
            'comment' => '',
            'picture' => 'galery-seed-1.jpg',
            'taggalery_id' => 1
        ]);

        Galery::create([
            'comment' => '',
            'picture' => 'galery-seed-2.jpg',
            'taggalery_id' => 2
        ]);
        
        Galery::create([
            'comment' => '',
            'picture' => 'galery-seed-3.jpg',
            'taggalery_id' => 1
        ]);
        
        Galery::create([
            'comment' => '',
            'picture' => 'galery-seed-4.jpg',
            'taggalery_id' => 2
        ]);
        
        Galery::create([
            'comment' => '',
            'picture' => 'galery-seed-5.jpg',
            'taggalery_id' => 1
        ]);
        
        Galery::create([
            'comment' => '',
            'picture' => 'galery-seed-6.jpg',
            'taggalery_id' => 2
        ]);
        
        Galery::create([
            'comment' => '',
            'picture' => 'galery-seed-7.jpg',
            'taggalery_id' => 1
        ]);
        
        Galery::create([
            'comment' => '',
            'picture' => 'galery-seed-8.jpg',
            'taggalery_id' => 2
        ]);
        
        Galery::create([
            'comment' => '',
            'picture' => 'galery-seed-9.jpg',
            'taggalery_id' => 1
        ]);
        
        Galery::create([
            'comment' => '',
            'picture' => 'galery-seed-10.jpg',
            'taggalery_id' => 2
        ]);
        
        Galery::create([
            'comment' => '',
            'picture' => 'galery-seed-11.jpg',
            'taggalery_id' => 1
        ]);
        
        Galery::create([
            'comment' => '',
            'picture' => 'galery-seed-12.jpg',
            'taggalery_id' => 2
        ]);
        
        Galery::create([
            'comment' => '',
            'picture' => 'galery-seed-13.jpg',
            'taggalery_id' => 1
        ]);
        
        Galery::create([
            'comment' => '',
            'picture' => 'galery-seed-14.jpg',
            'taggalery_id' => 2
        ]);
        
        Galery::create([
            'comment' => '',
            'picture' => 'galery-seed-15.jpg',
            'taggalery_id' => 1
        ]);
        
        Galery::create([
            'comment' => '',
            'picture' => 'galery-seed-16.jpg',
            'taggalery_id' => 2
        ]);
        
        Galery::create([
            'comment' => '',
            'picture' => 'galery-seed-17.jpg',
            'taggalery_id' => 1
        ]);
    }
}
