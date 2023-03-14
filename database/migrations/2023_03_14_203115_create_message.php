<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMessage extends Migration{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up(){
        Schema::create('messages', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name' , 255);
            $table->string('email' , 255);
            $table->string('subject' , 255);
            $table->string('phone' , 255);
            $table->longText('message');
            $table->boolean('readed');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down(){
        Schema::table('messages', function (Blueprint $table) {
            //
        });
    }
}
