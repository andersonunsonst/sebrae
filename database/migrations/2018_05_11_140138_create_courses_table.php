<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCoursesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('courses', function (Blueprint $table) {
            $table->increments('id_course');
            $table->integer('id_consultant');
            $table->integer('id_address');
            $table->string('title');
            $table->string('category');
            $table->longText('description');
            $table->float('price', 8, 2);
            $table->dateTime('start');
            $table->dateTime('finish');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('courses');
    }
}
