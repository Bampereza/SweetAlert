<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transporte extends Model
{
    public $table = 'transportes';
    use HasFactory;

//    //Relación de uno a muchos
    public function camion()
    {
        return $this->hasMany('App\Models\Camion');
    }
}
