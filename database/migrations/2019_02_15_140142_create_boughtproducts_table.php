<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBoughtproductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('boughtproducts', function (Blueprint $table) {
            $table->increments('id');
            $table->string('img_dir');
            $table->string('nome');
            $table->float('price');
            $table->unsignedInteger('IDorders');
            $table->foreign('product_id')
                ->references('ID')->on('orders')
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
        Schema::dropIfExists('boughtproducts');
    }
}
