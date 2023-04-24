<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBlog extends Migration{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up(){
        Schema::create('blogs', function (Blueprint $table) {
            $table->increments('id');
            $table->text('title');
            $table->longText('blog');
            $table->string('picture' , 255);
            $table->boolean('published');
            $table->integer('category_id');
            $table->string('date' , 20);
            $table->date('custom_date');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down(){
        Schema::table('blog', function (Blueprint $table) {
            //
        });
    }
}
