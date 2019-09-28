<?php

namespace App\Http\Controllers;

use App\Conteudo;
use Illuminate\Http\Request;
use function GuzzleHttp\Promise\all;

class ControleConteudo extends Controller
{
    public function index()
    {
        $buscaConteudo = new Conteudo();
        $listaConteudo = $buscaConteudo::all();
        if (isset($listaConteudo)) {
            return json_encode($listaConteudo);
        } else {
            return response("Nada publcado", 404);
        }
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show($id)
    {
        $buscaConteudo = new Conteudo();
        $conteudo = $buscaConteudo::find($id);
        if (isset($conteudo)) {
            return json_encode($conteudo);
        } else {
            return response("Não encontrado");
        }
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        $buscaConteudo = new Conteudo();
        $conteudo = $buscaConteudo::find($id);
        if (isset($conteudo)) {
            $conteudo->delete();
            return response("OK", 200);
        } else {
            return response("Não encontrado");
        }
    }
}
