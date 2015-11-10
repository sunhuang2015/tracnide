<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTasksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tasks', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('company_id')->unsigned();
            $table->string('costcent');
            $table->integer('category_id')->unsigned();
            $table->string('name');
            $table->string('applicant');
            $table->string('phonenumber');
            $table->string('contact')->nullable();
            $table->integer('step_id')->unsigned();
            $table->string('subject');
            $table->text('reason');

            $table->softDeletes();
            $table->timestamps();
            $table->foreign('category_id')->references('id')->on('task_categories')->onDelete('cascade');
            $table->foreign('step_id')->references('id')->on('task_steps')->onDelete('cascade');
            $table->foreign('company_id')->references('id')->on('companies')->onDelete('cascade');


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('tasks');
    }
}
