<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateConteudosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('conteudos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('codigo')->nullable(false);
            $table->string('url')->default('Material');
            $table->string('autor');
            $table->string('descricao')->default('Conteudo não possui descrição');
            $table->integer('visualizacoes')->default(0);
            $table->float('avaliacao')->default(0);
            $table->boolean('like')->default(false);
            $table->boolean('dislike')->default(false);
            $table->foreign('autor')->references('usuario')->on('usuarios');
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
        Schema::dropIfExists('conteudos');
    }
}
