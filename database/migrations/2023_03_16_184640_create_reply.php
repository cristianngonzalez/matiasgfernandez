<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReply extends Migration{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up(){

        Schema::create('replies', function (Blueprint $table) {
            //
            $table->increments('id');
            $table->string('to' , 255);
            $table->string('subject' , 255);
            $table->longText('reply');
            $table->integer('message_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down(){

        Schema::table('replies', function (Blueprint $table) {
            //
        });
    }
}
