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
            $table->unsignedBigInteger('codigo');
            $table->primary('codigo');
            $table->string('url')->default('Material');
            $table->unsignedBigInteger('autor');
            $table->unsignedBigInteger('categoria_id');
            $table->string('descricao')->default('Conteudo não possui descrição');
            $table->integer('visualizacoes')->default(0);
            $table->float('avaliacao')->default(0);
            $table->foreign('autor')->references('id')->on('usuarios');
            $table->foreign('categoria_id')->references('id')->on('categorias');
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
