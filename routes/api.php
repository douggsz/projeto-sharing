<?php

use Illuminate\Http\Request;

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get('/descricao', 'ControleOperacoes@descricoes');
Route::get('/tipos','ControleOperacoes@tipos');
Route::resource('/conteudo', 'ControleConteudo');
Route::resource('/usuarios', 'ControleUsuarios');
