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
        $novo_usuario = new Usuario();
        $novo_usuario->usuario = $request->input('usuario');
        $novo_usuario->nome = $request->input('nome');
        $novo_usuario->senha = bcrypt($request->input('senha'));
        $novo_usuario->tipo = $request->input('tipo');
        $novo_usuario->save();
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
        $buscaUsuarios = new Usuario();
        $usuario = $buscaUsuarios::find($id);
        if (isset($usuario)) {
            $usuario->delete();
            return response("OK", 200);
        } else {
            return response("Usuario não encontrado", 404);
        }
    }
}
