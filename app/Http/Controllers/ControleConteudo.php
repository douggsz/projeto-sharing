<?php

namespace App\Http\Controllers;

use App\Conteudo;
use App\Usuario;
use Illuminate\Http\Request;
use function GuzzleHttp\Promise\all;

class ControleConteudo extends Controller
{
    public function geraCodigos()
    {
        $inicio = mt_rand(1000, 4999);
        $final = mt_rand(5000, 9999);
        $codigo = $inicio . $final;
        return $codigo;
    }

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
        $buscaConteudo = new Conteudo();
        $listaConteudo = $buscaConteudo::all();
        if (isset($listaConteudo)) {
            return view('biblioteca', compact('listaConteudo'));
        } else {
            return view('biblioteca');
        }
    }

    public function store(Request $request)
    {
        $novo_conteudo = new Conteudo();
        $novo_conteudo->id = $this->geraCodigos();
        $novo_conteudo->autor = $request->input('autor');
        $novo_conteudo->categoria_id = $request->input('categoria');
        $novo_conteudo->url = $request->input('url');
        $novo_conteudo->descricao = $request->input('descricao');
        $novo_conteudo->save();
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
