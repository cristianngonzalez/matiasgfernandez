<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSocialnetwork extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up(){
        Schema::create('socialnetworks', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name' , 255);
            $table->string('link' , 255);
            $table->string('icon' , 255);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down(){
        Schema::table('socialnetworks', function (Blueprint $table) {
            //
        });
    }
}
