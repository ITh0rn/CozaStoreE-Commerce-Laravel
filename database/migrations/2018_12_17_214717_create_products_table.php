<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id');
            $table->string('img_dir');
            $table->string('nome');
            $table->string('gender');
            $table->integer('price');
            $table->unsignedInteger('id_subcategoria')->references('id')->on('sub_categories');
            $table->string('mini_descrizione');
            $table->string('grande_descrizione');
            $table->string('colore');
            $table->string('dimensione');
            $table->string('peso');
            $table->string('materiale');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}
