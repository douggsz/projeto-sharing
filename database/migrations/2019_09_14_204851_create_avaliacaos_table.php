<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAvaliacaosTable extends Migration
{
    public function up()
    {
        Schema::create('avaliacaos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->float('nota');
            $table->boolean('like')->default(false);
            $table->boolean('dislike')->default(false);
            $table->foreignId('usuario_id')->constrained()->onDelete('cascade');
            $table->foreignId('categoria_id')->constrained()->onDelete('cascade');
            $table->softDeletes();
            $table->timestamps();
        });
    }
    public function down()
    {
        Schema::dropIfExists('avaliacaos');
    }
}
