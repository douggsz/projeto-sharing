<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVisualizacaoTable extends Migration
{
    public function up()
    {
        Schema::create('visualizacaos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->foreignId('usuario_id')->constrained()->onDelete('cascade');
            $table->foreignId('conteudo_id')->constrained()->onDelete('cascade');
            $table->softDeletes();
            $table->timestamps();
        });
    }
    public function down()
    {
        Schema::dropIfExists('avaliacaos');
    }
}
