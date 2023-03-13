<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStaticcontent extends Migration{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up(){
        Schema::create('staticcontents', function (Blueprint $table) {
            $table->increments('id');
            $table->string('section' , 255);
            $table->longText('maintitle');
            $table->longText('subtitle');
            $table->longText('paragraph');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down(){
        Schema::table('staticcontents', function (Blueprint $table) {
            //
        });
    }
}
