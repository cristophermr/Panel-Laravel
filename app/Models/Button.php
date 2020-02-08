<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Button extends Model
{
    function Action()
    {
        return $this->belongsTo(Action::class,'id_action','id');
    }
}
