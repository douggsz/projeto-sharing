<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Conteudo extends Model
{
    use SoftDeletes;
    public function categoria(){
        return $this->belongsTo('App\Categoria','id','categoria_id');
    }
    public function autor(){
        return $this->hasOne('App\Usuario','id','autor');
    }
}
