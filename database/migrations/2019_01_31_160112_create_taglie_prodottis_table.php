<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTaglieProdottisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('taglie_prodottis', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('product_id')->references('id')->on('products');
            $table->unsignedInteger('taglie_id')->references('id')->on('taglies');
            $table->foreign('product_id')
                ->references('id')->on('products')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            $table->foreign('taglie_id')
                ->references('id')->on('taglies')
                ->onDelete('cascade')
                ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('taglie_prodottis');
    }
}
