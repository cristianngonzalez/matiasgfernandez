<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use DB;

class DatabaseSeeder extends Seeder{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run(){
        // \App\Models\User::factory(10)->create();

        {
            $this->call([
                category_seed::class,
                user_seed::class,
                blog_seed::class,
                socialnetwork_seed::class,
                galery_seed::class
            ]);
        }

    }
}
