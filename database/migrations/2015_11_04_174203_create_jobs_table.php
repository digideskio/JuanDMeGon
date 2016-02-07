<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJobsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jobs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->string('description', 1500);
            $table->string('image');
            $table->string('link');
            $table->integer('person_id')->unsigned();
            $table->foreign('person_id')->references('id')->on('people');
            $table->timestamps();
        });

        Schema::create('job_translations', function(Blueprint $table)
        {
            $table->increments('id');
            $table->integer('job_id')->unsigned();
            $table->string('title');
            $table->string('description', 1500);
            $table->string('locale')->index();

            $table->unique(['job_id','locale']);
            $table->foreign('job_id')->references('id')->on('jobs')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('jobs');
    }
}
