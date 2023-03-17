<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;

use App\Models\Reply;

class reply_seed extends Seeder{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(){
        //
        Reply::create([
            'to' => 'contact@cristianngonzalez.com',
            'subject' => 'Respuesta al primer mensaje',
            'reply' => 'Esta deberia ser una respuesta mas larga',
            'message_id' => 1
        ]);
    }
}
