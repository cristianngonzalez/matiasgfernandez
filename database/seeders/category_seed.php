<?php

namespace Database\Seeders;
use DB;

use Illuminate\Database\Seeder;

class category_seed extends Seeder{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(){
        
        DB::table('categories')->insert([
            'name' => 'Bussiness & Tech',
        ]);
        DB::table('categories')->insert([
            'name' => 'Marketing',
        ]);


    }
}
