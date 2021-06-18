<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ordenes', function (Blueprint $table) {
            $table->id();
            $table->integer('cantidad')->unsigned();
            $table->unsignedBigInteger('ticket_id');
            $table->unsignedBigInteger('platillo_id');

            $table->foreign('ticket_id')->references('id')->on('tickets');
            $table->foreign('platillo_id')->references('id_platillos')->on('platillos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ordenes');
    }
}
