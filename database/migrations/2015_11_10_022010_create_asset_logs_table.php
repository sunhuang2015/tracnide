<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAssetLogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('asset_logs', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('asset_id')->unsigned();
            $table->integer('company_id')->unsigned();
            $table->enum('action', ['IN', 'OUT'])->default('IN');
            $table->string('refer')->nullable();
            $table->string('applicant');
            $table->string('costcenter');
            $table->integer('user_id');
            $table->integer('qty');
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('asset_id')->references('id')->on('assets')->onDelete('cascade');
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
        Schema::drop('asset_logs');
    }
}
