<?php

namespace App\Http\Controllers;

use App\avaliacao;
use Illuminate\Http\Request;
use function MongoDB\BSON\toJSON;

class ControleAvaliacao extends Controller
{
    public function index()
    {
        $avaLiacaoTodas = new avaliacao();
        $avaliacoes = $avaLiacaoTodas::all();
        if (isset($avaliacoes)) {
            return json_encode($avaliacoes);
        } else {
            return response('Erro', 404);
        }
    }

    public function create()
    {

    }

    public function store(Request $request)
    {

    }

    public function show($id)
    {
        $avaLiacaoTodas = new avaliacao();
        $avaliacoes = $avaLiacaoTodas::find($id);
        if (isset($avaliacoes)) {
            return json_encode($avaliacoes);
        } else {
            return response('Nao Encontrado', 404);
        }
    }

    public function edit($id)
    {

    }
    public function update(Request $request, $id)
    {

    }

    public function destroy($id)
    {

    }
}
