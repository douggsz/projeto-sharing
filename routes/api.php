<?php

use Illuminate\Http\Request;

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get('/codigo', 'ControleOperacoes@geraCodigos');
Route::get('/descricao', 'ControleOperacoes@descricoes');
Route::resource('/categorias', 'ControleCategoria');
Route::resource('/conteudo', 'ControleConteudo');
Route::resource('/usuarios', 'ControleUsuarios');
