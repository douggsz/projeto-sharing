<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAvaliacaosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('avaliacaos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('usuario');
            $table->unsignedBigInteger('codigo');
            $table->float('nota');
            $table->boolean('like')->default(false);
            $table->boolean('dislike')->default(false);
            $table->foreign('usuario')->references('id')->on('usuarios');
            $table->foreign('codigo')->references('id')->on('conteudos');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('avaliacaos');
    }
}
