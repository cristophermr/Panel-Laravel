<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Action extends Model
{
    //Relacion 1 a muchos entre Botones y Acciones; Las acciones tienen muchos botones
    function Button()
    {
        return $this->hasMany(Button::class,'id_acction','id');
    }
}
