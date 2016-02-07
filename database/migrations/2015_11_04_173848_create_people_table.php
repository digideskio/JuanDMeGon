<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePeopleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('people', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('title');
            $table->string('description', 1500);
            $table->string('picture');
            $table->string('resume');
            $table->timestamps();
        });

        Schema::create('person_translations', function(Blueprint $table)
        {
            $table->increments('id');
            $table->integer('person_id')->unsigned();
            $table->string('name');
            $table->string('title');
            $table->string('description', 1500);
            $table->string('locale')->index();

            $table->unique(['person_id','locale']);
            $table->foreign('person_id')->references('id')->on('people')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('people');
    }
}
