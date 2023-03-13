<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGalery extends Migration{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up(){
        Schema::create('galeries', function (Blueprint $table) {
            $table->increments('id');
            $table->text('comment')->nullable();;
            $table->string('picture' , 255);
            $table->integer('taggalery_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('galeries', function (Blueprint $table) {
            //
        });
    }
}
