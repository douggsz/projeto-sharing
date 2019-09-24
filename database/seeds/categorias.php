<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class categorias extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('descricao_categorias')->insert(['nome' => 'Informática']);
        DB::table('descricao_categorias')->insert(['nome' => 'Música']);
        DB::table('descricao_categorias')->insert(['nome' => 'Meio Ambiente']);
        DB::table('descricao_categorias')->insert(['nome' => 'Automação']);
        DB::table('descricao_categorias')->insert(['nome' => 'História']);
        DB::table('descricao_categorias')->insert(['nome' => 'Ciências']);
        DB::table('descricao_categorias')->insert(['nome' => 'Matemática']);
        DB::table('descricao_categorias')->insert(['nome' => 'FÍsica']);
        DB::table('descricao_categorias')->insert(['nome' => 'Geografia']);
        DB::table('descricao_categorias')->insert(['nome' => 'Filosofia']);
        DB::table('descricao_categorias')->insert(['nome' => 'Sociolgia']);
        DB::table('descricao_categorias')->insert(['nome' => 'Programação']);
        DB::table('descricao_categorias')->insert(['nome' => 'Lógica']);
        DB::table('descricao_categorias')->insert(['nome' => 'Design']);
        DB::table('descricao_categorias')->insert(['nome' => 'Psicologia']);
        DB::table('descricao_categorias')->insert(['nome' => 'Marketing Digital']);
        DB::table('descricao_categorias')->insert(['nome' => 'Biologia']);
        DB::table('descricao_categorias')->insert(['nome' => 'Ingles']);
        DB::table('descricao_categorias')->insert(['nome' => 'Espanhol']);
        DB::table('descricao_categorias')->insert(['nome' => 'Portugues']);
    }
}
