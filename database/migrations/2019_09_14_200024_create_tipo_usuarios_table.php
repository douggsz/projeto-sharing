<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTipoUsuariosTable extends Migration
{

    public function up()
    {
        Schema::create('tipo_usuarios', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('descricao');
            $table->softDeletes();
            $table->timestamps();
        });
    }
    public function down()
    {
        Schema::dropIfExists('tipo_usuarios');
    }
}
