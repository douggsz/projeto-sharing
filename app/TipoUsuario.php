<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class TipoUsuario extends Model
{
    use SoftDeletes;
    function usuarios(){
        return $this->belongsTo('App\Usuario','tipo','id');
    }
}
