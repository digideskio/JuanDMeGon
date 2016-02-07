<?php

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
            $table->increments('id');
            $table->string('title');
            $table->string('description', 1500);
            $table->string('image');
            $table->string('link');
            $table->integer('person_id')->unsigned();
            $table->foreign('person_id')->references('id')->on('people');
            $table->timestamps();
        });

        Schema::create('course_translations', function(Blueprint $table)
        {
            $table->increments('id');
            $table->integer('course_id')->unsigned();
            $table->string('title');
            $table->string('description', 1500);
            $table->string('locale')->index();

            $table->unique(['course_id','locale']);
            $table->foreign('course_id')->references('id')->on('courses')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('courses');
    }
}
