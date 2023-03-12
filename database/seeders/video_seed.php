<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\Video;

class video_seed extends Seeder{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(){
        //
        Video::create([
            'link' => 'https://www.youtube.com/embed/T_1g9Vgk-k8'
        ]);

        Video::create([
            'link' => 'https://www.youtube.com/embed/KL5itCC1Sa8'
        ]);

        Video::create([
            'link' => 'https://www.youtube.com/embed/5oOEsMhb9QA'
        ]);

        Video::create([
            'link' => 'https://www.youtube.com/embed/5oOEsMhb9QA'
        ]);

    }
}
