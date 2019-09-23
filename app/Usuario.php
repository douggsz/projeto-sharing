<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Usuario extends Model
{
    use SoftDeletes;
    public function funcao(){
        return $this->hasOne('App\TipoUsuario','id','tipo');
    }
}
