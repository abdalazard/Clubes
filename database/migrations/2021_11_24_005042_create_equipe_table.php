<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEquipeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Equipe', function (Blueprint $table) {

            $table->bigIncrements('id');
            $table->string("nome_time");
            $table->string('pais_time');
            $table->bigInteger('torneio_id')->references('id')->on('torneio');
            $table->dateTime("created_at")->nullable();
            $table->dateTime("updated_at")->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Equipe');
    }
}
