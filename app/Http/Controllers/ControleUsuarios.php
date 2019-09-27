<?php

namespace App\Http\Controllers;

use App\Usuario;
use Illuminate\Http\Request;

class ControleUsuarios extends Controller
{
    public function index()
    {
        $buscaUsuarios = new Usuario();
        $listaUsuarios = $buscaUsuarios::all();
        if (isset($listaUsuarios)) {
            return json_encode($listaUsuarios);
        } else {
            return response("Não há usuarios", 404);
        }
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {

    }

    public function show($id)
    {
        $buscaUsuarios = new Usuario();
        $usuario = $buscaUsuarios::find($id);
        if (isset($usuario)) {
            return json_encode($usuario);
        } else {
            return response("Usuario não encontrado", 404);
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
