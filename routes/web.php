<?php
Route::get('/', function () {
    return view('inicio');
});
Route::get('/conteudo/{{codigoConteudo}}', function () {
    $codigo = $codigoConteudo;
    return view('conteudo', compact('codigo'));
});
Route::get('/biblioteca', 'ControleConteudo@create');
