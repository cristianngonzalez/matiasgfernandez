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

        Socialnetwork::create([
            'name' => 'Youtube',
            'link' => 'https://www.youtube.com/channel/UChv_8mC1I0dFp0GdLlyYo9A',
            'icon' => 'bi bi-youtube'
        ]);
    }
}
