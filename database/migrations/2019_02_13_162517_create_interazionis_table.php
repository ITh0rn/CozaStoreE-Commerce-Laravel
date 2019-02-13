<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInterazionisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('interazionis', function (Blueprint $table) {
            $table->unsignedInteger('id_prodotto')->nullable(false);
            $table->foreign('id_prodotto')
                ->references('id')->on('products')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            $table->unsignedInteger('id_utente')->nullable(false);
            $table->foreign('id_utente')
                ->references('id')->on('users')
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
        Schema::dropIfExists('interazionis');
    }
}
