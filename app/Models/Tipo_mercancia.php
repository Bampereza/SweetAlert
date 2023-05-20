<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tipo_mercancia extends Model
{
    public $table = 'tipo_mercancias';
    use HasFactory;

    //Relación de uno a uno
    public function mercancia()
    {
        return $this->hasOne('App\Models\Mercancia');
    }
}
