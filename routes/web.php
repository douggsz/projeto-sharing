<?php
Route::get('/', function () {
    return view('inicio');
});
Route::get('/conteudo/{codigoConteudo}', function ($codigoConteudo) {
    $listaConteudo = new \App\Conteudo();
    $conteudos = $listaConteudo::all();
    $resultado = $conteudos->find($codigoConteudo);
    return view('conteudo', compact('resultado'));
});
Route::get('/biblioteca', 'ControleConteudo@create');
