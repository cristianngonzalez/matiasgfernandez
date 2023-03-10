<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\Socialnetwork;

class socialnetwork_seed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(){
        //
        Socialnetwork::create([
            'name' => 'Linkedin',
            'link' => 'https://www.linkedin.com/in/matías-fernández/',
            'icon' => 'bi bi-linkedin'
        ]);
    }
}
