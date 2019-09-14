<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsuariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuarios', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('usuario')->unique()->nullable(false);
            $table->string('nome')->nullable(false);
            $table->string('senha')->nullable(false);
            $table->unsignedBigInteger('categoria');
            $table->unsignedBigInteger('tipo');
            $table->foreign('categoria')->references('codigo')->on('categorias');
            $table->foreign('tipo')->references('id')->on('tipos_usuarios');
            $table->softDeletes();
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
        Schema::dropIfExists('usuarios');
    }
}
