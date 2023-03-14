<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;

use App\Models\Message;

class message_seed extends Seeder{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(){
        //
        Message::create([
            'name' => 'Cristian Gonzalez',
            'email' => 'contact@cristianngonzalez.com',
            'subject' => 'First message',
            'phone' => '+5491170139816',
            'message' => 'Hello, this is your messages manager!',
            'readed' => false
        ]);
    }
}
