<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class DescricaoCategoria extends Model
{
    use SoftDeletes;

    function categorias()
    {
        return $this->belongsTo('App\Categoria', 'descricao', 'id');
    }
}
