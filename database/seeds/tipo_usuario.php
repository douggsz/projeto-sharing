<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class tipo_usuario extends Seeder
{
    public function run()
    {
        DB::table('tipo_usuarios')->insert(['descricao' =>  'ADM']);
        DB::table('tipo_usuarios')->insert(['descricao' =>  'Aluno']);
        DB::table('tipo_usuarios')->insert(['descricao' =>  'Professor']);
    }
}
