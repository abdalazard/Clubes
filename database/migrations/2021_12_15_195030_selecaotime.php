<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Selecaotime extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('selecao_time', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->foreignId('selecao_id')->references('id')->on('selecao');
            $table->foreignId('time_id')->references('id')->on('time');
            $table->timestamp('created_at');
            $table->timestamp('updated_at');
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('selecao_time');
    }
}
