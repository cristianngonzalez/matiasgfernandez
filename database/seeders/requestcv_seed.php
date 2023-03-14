<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\RequestCV;

class requestcv_seed extends Seeder{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(){
        //
        RequestCV::create([
            'email' => 'contact@cristianngonzalez.com',
            'sent' => false,
        ]);

        RequestCV::create([
            'email' => 'cristiannazarenogonzalez@gmail.com',
            'sent' => true,
        ]);
    }
}
