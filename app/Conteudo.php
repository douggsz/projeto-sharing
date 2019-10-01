<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Conteudo extends Model
{
    use SoftDeletes;

    public function categoria()
    {
        return $this->belongsTo('App\DescricaoCategoria');
    }

    public function autor()
    {
        return $this->belongsTo('App\Usuario');
    }
}
