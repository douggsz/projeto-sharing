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
Route::get('/login', function () {
    return view('login');
});
Route::get('/cadastro', function () {
    return view('cadastro');
});
Route::get('/conta/{id?}', function ($id = null) {
    $buscaUsuarios = new \App\Usuario();
    $listaUsuarios = $buscaUsuarios::all();
    $usuario = $listaUsuarios->find($id);
    if (isset($usuario)) {
        return view('conta', compact('usuario'));
    } else {
        return view('inicio');
    }
});
