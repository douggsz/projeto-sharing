<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateConteudosTable extends Migration
{
    public function up()
    {
        Schema::create('conteudos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('titulo');
            $table->string('url');
            $table->string('descricao')->default('Conteudo não possui descrição');
             $table->foreignId('usuario_id')->constrained()->onDelete('cascade');
             $table->foreignId('avaliacao_id')->constrained();
             $table->foreignId('categoria_id')->constrained()->onDelete('cascade');
            $table->softDeletes();
            $table->timestamps();
        });
    }
    public function down()
    {
        Schema::dropIfExists('conteudos');
    }
}
