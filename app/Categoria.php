<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Categoria extends Model
{
    use SoftDeletes;

    public function nome()
    {
        return $this->hasOne('App\DescricaoCategoria', 'id', 'descricao');
    }

    public function usuarios()
    {
        return $this->belongsTo('App\Usuarios', 'categorias_id', 'codigo_categoria');
    }
}
