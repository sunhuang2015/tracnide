<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAssetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('assets', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->unique();
            $table->string('code')->unique();
            $table->integer('category_id')->unsigned();
            $table->string('brand');
            $table->string('model');
            $table->string('spec');
            $table->string('unit');
            $table->integer('qty')->default(0);
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('category_id')->references('id')->on('asset_categories')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('assets');
    }
}
