<?php

namespace App\Http\Controllers;

use App\Conteudo;
use Illuminate\Http\Request;

class ControleConteudo extends Controller
{
    public function index()
    {
        $listaConteudos = Conteudo::all();

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
