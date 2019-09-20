<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsuariosTable extends Migration
{

    public function up()
    {
        Schema::create('usuarios', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('usuario');
            $table->string('nome')->nullable(false);
            $table->string('senha')->nullable(false);
            $table->Integer('categorias_usuario')->default(0);
            $table->unsignedBigInteger('tipo');
            $table->foreign('tipo')->references('id')->on('tipo_usuarios');
            $table->softDeletes();
            $table->timestamps();
        });
    }
    public function down()
    {
        Schema::dropIfExists('usuarios');
    }
}
