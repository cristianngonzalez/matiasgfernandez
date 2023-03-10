<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTimeline extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up(){
        Schema::create('timeline', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title' , 100);
            $table->string('company' , 100);
            $table->text('description');
            $table->string('icon' , 255);
            $table->string('date' , 100);
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
        Schema::table('timeline', function (Blueprint $table) {
            //
        });
    }
}
