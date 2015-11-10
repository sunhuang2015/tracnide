<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTaskProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('task_profiles', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('category_id')->unsigned();
            $table->integer('step_id')->unsigned();
            $table->integer('order');
            $table->timestamps();
            $table->foreign('category_id')->references('id')->on('task_categories')->onDelete('cascade');
            $table->foreign('step_id')->references('id')->on('task_steps')->onDelete('cascade');
            $table->unique(['category_id','step_id','order']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('task_profiles');
    }
}
