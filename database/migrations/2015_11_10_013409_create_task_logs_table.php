<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTaskLogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('task_logs', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('task_id')->unsigned();
            $table->integer('step_id')->unsigned();
            $table->string('refer')->nullable();
            $table->string('attachment')->nullable();
            $table->text('remark')->nullable();
            $table->integer('user_id')->unsigned();
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('task_id')->references('id')->on('tasks')->onDelete('cascade');
            $table->foreign('step_id')->references('id')->on('task_steps')->onDelete('cascade');
            $table->unique(['task_id','step_id']);


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('task_logs');
    }
}
