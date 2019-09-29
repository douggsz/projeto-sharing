<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class DescricaoCategoria extends Model
{
    use SoftDeletes;

    public function conteudo()
    {
        $this->hasMany('App\Conteudo');
    }
}
