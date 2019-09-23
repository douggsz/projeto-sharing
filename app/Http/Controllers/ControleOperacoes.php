<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControleOperacoes extends Controller
{
    public function geraCodigos()
    {
        $inicio = mt_rand(1000, 4999);
        $final = mt_rand(5000, 9999);
        $codigo = $inicio . $final;
        return $codigo;
    }
}
