<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use DB;

use App\Models\User;

class user_seed extends Seeder{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(){
        
        User::create([
            'name' => 'Cristian',
            'email' => 'contact@cristianngonzalez.com',
            'password' => Hash::make('Good777'),
            //Default admin is false
            'admin' => true
        ]);

        User::create([
            'name' => 'Matías',
            'email' => 'contacto@matiasgfernandez.com',
            'password' => Hash::make('12345678'),
            //Default admin is false
            'admin' => true
        ]);

    }
}
