<?php

namespace App\Http\Controllers;

use App\Categoria;
use Illuminate\Http\Request;

class ControleCategoria extends Controller
{
    public function index()
    {
        $categorias = new Categoria;
        $listaCategorias = $categorias::with(['nome'])->get();
        if (isset($listaCategorias)) {
            return json_encode($listaCategorias);
        } else {
            return response("Nâo encontrado", 404);
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
        $categorias = new Categoria;
        $listaCategorias = $categorias::find($id)->nome;
        if (isset($listaCategorias)) {
            $categoria = $listaCategorias->nome;
            return json_encode($categoria);
        } else {
            return response("Nâo encontrado", 404);
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
        //
    }

}