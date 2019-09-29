<?php

namespace App\Http\Controllers;

use App\DescricaoCategoria;
use App\TipoUsuario;
use Illuminate\Http\Request;

class ControleOperacoes extends Controller
{
    public function tipos()
    {
        $tipos = new TipoUsuario();
        $tipo = $tipos::all();
        if (isset($tipo)) {
            return json_encode($tipo);
        } else {
            return response("Não encontrado", 404);
        }

    }

    public function descricoes()
    {
        $desc = new DescricaoCategoria();
        $descricoes = $desc::all();
        if (isset($descricoes)) {
            return json_encode($descricoes);
        } else {
            return response('Não há descricoes', 404);
        }
    }

}
