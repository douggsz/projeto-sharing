<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class administrador extends Seeder
{
    public function run()
    {
        DB::table('usuarios')->insert([
            'usuario' => 'admin',
            'nome'    => 'Administrador',
            'senha'   => 'admin',
            'tipo'    => 3
        ]);
    }
}
